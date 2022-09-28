<?php

require_once '../src/controller_functions.php';

//$action = filter_input(INPUT_GET, 'action');
$request = $_SERVER['REQUEST_URI'];

switch($request) {

    case '/':
        display_homepage();
        break;

    case '/about':
        display_about();
        break;

    case '/contact':
        display_contact();
        break;

    case '/recommendations':
        display_recommendations();
        break;

    default:
        display_homepage();
        break;

}

?>
