<?php

namespace app\controllers;

use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'Y4T6 Project. The new way of everything.',
           'Y4T6, Project, Y4T6 Project'
       );
    }
}