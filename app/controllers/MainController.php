<?php

namespace app\controllers;

use ishop\base\View;

class MainController extends AppController {



    public function indexAction(){
        //echo __METHOD__;
        new View($this->route,'dsf','','');
    }

}