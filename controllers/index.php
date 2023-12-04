<?php
class Index {
    private $model;
    function __construct() {
    }

    function index() {
        $pageTitle = "Login Page";
        require_once 'views/template/view_header.php';
        require_once 'views/view_index.php';
        require_once 'views/template/view_footer.php';
    }
}
?>