<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller  {

    public function indexAction() {
        $error='';

        if (isset($_GET['id']) and ctype_digit($_GET['id'])) {
            $this->model->deleteConf($_GET['id']);
        }

        if (isset($_POST['save'])) {
            if (strlen($_POST['title']) >= 2 and strlen($_POST['title']) < 255 and $_POST['date'] != "") {
                if ($_POST['latitude'] != '' and $_POST['longitude'] != '') {
                    $this->model->saveConf($_POST['title'], $_POST['date'], $_POST['country'], $_POST['latitude'], $_POST['longitude']);
                } else {
                    $this->model->saveConf($_POST['title'], $_POST['date'], $_POST['country']);
                }
            } else {
                $error = "Error during saving the conference. Please, check your title (min - 2, max - 255).";
            }
            if ($_POST['date'] == "") {
                $error = "Error during saving the conference. Please, select the date.";
            }
        }

        if (isset($_POST['id'])) {
            $this->model->deleteConf($_POST['id']);
            if (!isset($_POST['save'])) { // for 'edit' page
                $error = '';
            }
        }

        $result = $this->model->getConfs('id, title, date');
        $vars = [
            'confs' => $result,
            'err' => $error
        ];
        $this->view->render("Home page. List of conferences", $vars);
    }

    public function detailsAction() {
        if (ctype_digit($_GET['id'])) {
            $result = $this->model->getConfById($_GET['id']);
            $vars = [
                'conf' => $result[0]
            ];
            $this->view->render('Details of conference', $vars);
        } else {
            $this->view->error();
        }

    }

    public function editAction() {
        if (ctype_digit($_GET['id'])) {
            $result = $this->model->getConfById($_GET['id']);
            $vars = [
                'conf' => $result[0]
            ];
            $this->view->render('Edit conference', $vars);
        } else {
            $this->view->error();
        }
    }

    public function createAction() {
        $this->view->render('Create conference');
    }
}