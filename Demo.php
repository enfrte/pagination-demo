<?php 
require 'Helpers.php';

class Demo 
{
  protected $pdo;

  public function __construct()
  {
    $host = 'localhost';
    $db   = 'pagination_demo';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $this->pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    } 
  }

  /**
   * This would typically be the method you are calling the pagination helper
   */
  public function index()
  {
    $results = [];
    $limit = 10;
    // Pagination navigation comes from pagination link GET query vaiables 
    $offset = ($_GET['offset']) ?? 0;
    $current_offset = ($_GET['current_offset']) ?? 0;
    $url = 'http://localhost/pagination-demo/index.php';

    $stmt = $this->pdo->query("SELECT COUNT(id) FROM posts");
    $total_rows = $stmt->fetchColumn();

    $pagination = Helpers::Pagination($limit, $offset, $current_offset, $total_rows, $url);

    // Typical database query
    $stmt = $this->pdo->query("SELECT title FROM posts LIMIT {$pagination['limit']} OFFSET {$pagination['offset']}");
    $titles = [];
    while ($r = $stmt->fetch()) {
        $titles[] = $r['title'];
    }

    $results['titles'] = $titles;
    $results['pagination_data'] = $pagination; // Expects pagination_data as naming convention used by Smarty template

    return $results;
  }
}
