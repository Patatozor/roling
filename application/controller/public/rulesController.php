<?php

class RulesController extends PublicController
{
		const VIEWDIR = self::BASEDIR.'rules/';
		
	public function create_char(){
        $this->_view->setTitle('Créer un personnage');
        $this->_view->loadPage(self::VIEWDIR.'createChar.php');
    }

    public function caracteristiques(){
        $this->_view->setTitle("Les caractéristiques d'un personnage");
        $this->_view->loadPage(self::VIEWDIR.'caracteristiques.php');
    }

    public function avantages(){
        $this->_view->setTitle("Les avantages et désavantages");
        $this->_view->loadPage(self::VIEWDIR.'avantages.php');
    }

    public function peuples(){
        $this->_view->setTitle("Les races et peuples");
        $this->_view->loadPage(self::VIEWDIR.'peuples.php');
    }
}