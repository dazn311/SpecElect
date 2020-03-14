<?php

namespace app\controllers;


class HomeController extends AppController {

    public function actionIndex(){
        // $this->layout = 'newstore';

        return $this -> render('index');
    }
}