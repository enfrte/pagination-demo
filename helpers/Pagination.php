<?php 

class Pagination
{
  /**
   * 
   */
  public static function renderPagination($limit = 10, $offset = 0, $current_offset = 0, $total_rows = 0, $url = "") {
    $result = [];
    $error = ($limit === 0 OR $total_rows === 0 OR $url === "") ? 1 : 0; 

    if ($offset === "previous") {
      $current_offset = $current_offset - $limit;
    }

    if ($offset === "next") {
      $current_offset = $current_offset + $limit;
    }

    $page_chunk = ceil($total_rows / $limit);

    $result['limit'] = $limit;
    $result['offset'] = $offset;
    $result['url'] = $url;
    $result['current_offset'] = $current_offset;
    $result['page_chunk'] = $page_chunk;
    $result['error'] = $error; // output error message to pagination.tpl
    return $result;
  }
}
