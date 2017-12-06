<?php

class Controller {

    protected function model($model) {

        if (file_exists('../app/models/' . $model . '.php')) {

            require_once '../app/models/' . $model . '.php';
            return new $model;
        }

        return exit('Model doesn\'t exist');
    }

    protected function view($view, $data = []) {

        if (file_exists('../app/views/' . $view . '.php')) {

            require_once '../app/views/' . $view . '.php';
        }
    }

}
