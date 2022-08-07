<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller  {

    public function indexAction() {
        $error='';

        if (isset($_POST['id'])) {
            $this->model->deleteConf($_POST['id']);
        }

        if (isset($_POST['country'])) {
            if (strlen($_POST['title']) >= 2 and strlen($_POST['title']) < 255) {
                $this->model->saveConf($_POST['title'], $_POST['date'], $_POST['country']);
            } else {
                $error = "Error during creating the conference. Please, check your title (min - 2, max - 255)";
            }
            if ($_POST['date'] == "") {
                $error = "Error during creating the conference. Please, select the date";
            }
        }

        $result = $this->model->getConfs();
        $vars = [
            'confs' => $result,
            'err' => $error
        ];
        $this->view->render("Home page. List of conferences", $vars);
    }

    public function detailsAction() {
        $result = $this->model->getConfById($_POST['id']);
        $vars = [
            'conf' => $result[0]
        ];
        $this->view->render('Details of conference', $vars);
    }

    public function editAction() {
        $result = $this->model->getConfById($_POST['id'], 'id');
        $vars = [
            'conf' => $result[0]
        ];
        $this->view->render('Edit conference', $vars);
    }

    public function createAction() {
        $this->view->render('Create conference');
    }
}