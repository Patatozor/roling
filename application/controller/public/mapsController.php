<?php

class MapsController extends PublicController
{
		const VIEWDIR = self::BASEDIR.'maps/';
		
	public function royaume_amestris(){
        $this->_view->setTitle('Royaume d\'Amestris');
        $this->_view->loadPage(self::VIEWDIR.'royaume_amestris.php');
    }
}