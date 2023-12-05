<?php
require_once 'models/frontpage.php';

class Index {
    private $model;
    public function __construct()
    {
        $this->model = new FrontPage();
    }

    function index() {
        $data = $this->model->getHomeFromDB();
        extract($data);
        require_once 'views/template/view_header.php';
        require_once 'views/view_index.php';
        require_once 'views/template/view_footer.php';
    }
}
?>