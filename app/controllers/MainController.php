<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller  {

    public function indexAction() {
        if (isset($_POST['del'])) {
            $this->model->deleteConf($_POST['del']);
        }
        if (isset($_POST['title']) and isset($_POST['date']) and isset($_POST['country']) and
            strlen($_POST['title']) >= 2 and $_POST['date'] != "") {
            $this->model->saveConf($_POST['title'], $_POST['date'], $_POST['country']);
        }
        $result = $this->model->getConfs();
        $vars = [
            'confs' => $result
        ];
        $this->view->render('Home page. List of conferences', $vars);
    }

    public function detailsAction() {
        $result = $this->model->getConfById($_POST['id']);
        $vars = [
            'conf' => $result
        ];
        $this->view->render('Details of conference', $vars);
    }

    public function editAction() {
        $result = $this->model->getConfById($_POST['id']);
        $vars = [
            'conf' => $result
        ];
        $this->view->render('Edit conference', $vars);
    }

    public function createAction() {
        $this->view->render('Create conference');
    }
}