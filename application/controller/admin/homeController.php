<?php

/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 23/04/2016
 * Time: 18:50
 */
class HomeController extends AdminController
{
		const VIEWDIR = self::BASEDIR.'home/';
		
		public function home(){
        $this->_view->setTitle('Accueil');
        $this->_view->loadPage(self::VIEWDIR.'home.php');
				$this->_model->test();
    }
}