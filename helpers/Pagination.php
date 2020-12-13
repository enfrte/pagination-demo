<?php 

class Pagination
{
  /**
   * Simple pagination example
   */
  public static function getPagination($limit = 10, $offset = 0, $current_offset = 0, $total_rows = 0, $url = "") {
    $result = [];
    $error = ($limit === 0 OR $url === "") ? 1 : 0; 

    // Do this if previous/next buttons are clicked
    if ($offset === "previous") {
      $offset = $current_offset - $limit;
    }
    if ($offset === "next") {
      $offset = $current_offset + $limit;
    }

    // Figure out how many pages are needed for the db rows returns
    $pages = ceil($total_rows / $limit);

    $result['total_rows'] = $total_rows; 
    $result['limit'] = $limit;
    $result['offset'] = $offset;
    $result['url'] = $url;
    $result['current_offset'] = $offset;
    $result['pages'] = $pages;
    $result['error'] = $error; // Output error message to pagination.tpl

    return $result;
  }
}
