<?php

class rulesController extends PublicController
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

    public function peuple(){
        $this->_view->setTitle("Les races et peuples");
        $this->_view->loadPage(self::VIEWDIR.'peuple.php');
    }

    public function equipement(){
        $this->_view->setTitle("L'équipement");
        $this->_view->loadPage(self::VIEWDIR.'equipement.php');
    }

    public function type_degats(){
        $this->_view->setTitle("Les type de dégâts et résistances");
        $this->_view->loadPage(self::VIEWDIR.'types_degats.php');
    }

    public function combat()
    {
        $this->_view->setTitle("Les type de dégâts et résistances");
        $this->_view->loadPage(self::VIEWDIR.'combat.php');
    }

    public function phases_jeu()
    {
        $this->_view->setTitle("Les différentes phases de jeu");
        $this->_view->loadPage(self::VIEWDIR.'phase_jeu.php');
    }

    public function competences()
    {
        $this->_view->setTitle("Les compétences");
        $this->_view->loadPage(self::VIEWDIR.'competences.php');
    }
}