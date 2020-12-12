<?php
include("./smarty.php"); // set up smarty and assign its defaults
require 'Demo.php';

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('foo', 'bar');

$demo = new Demo;
$demo_data = $demo->index();

$smarty->assign('demo', $demo_data);
$smarty->assign('pagination_data', $demo_data['pagination_data']);

// Render the parent - Note, all assigned vars are available to children of parent
$smarty->display('index.tpl');
