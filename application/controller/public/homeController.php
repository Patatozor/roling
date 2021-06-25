<?php

class homeController extends PublicController
{
		const VIEWDIR = self::BASEDIR.'home/';
		
		public function home(){
        $this->_view->setTitle('Accueil');
        $this->_view->loadPage(self::VIEWDIR.'home.php');
    }
}