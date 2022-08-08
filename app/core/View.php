<?php

namespace app\core;

class View {
    public $path;
    public $layout = 'default';

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title, $vars=[]) {
        extract($vars);
        $path = 'app/views/'.$this->path.'.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'app/views/layouts/'.$this->layout.'.php';
        } else {
            $this->error();
        }
    }

    public function error($title='Page not found') {
        ob_start();
        $content = '';
        require 'app/views/layouts/'.$this->layout.'.php';
    }

//    public function message($status, $message) {
//        exit(json_encode(['status' => $status, 'message' => $message]));
//    }
}