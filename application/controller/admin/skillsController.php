<?php

class skillsController extends AdminController
{
	const VIEWDIR = self::BASEDIR.'skills/';

    public function list(){
        $this->_view->setTitle('Liste des compétences');
        $this->_view->loadPage('admin/skills/list.php');
    }

    public function add(){
    	$this->_view->setTitle('Ajouter une nouvelle compétence');
    	$data = [];
    	$data['voies'] = $this->_model->getAllVoies();
    	$this->_view->loadPage(self::VIEWDIR.'add.php', $data);
    }

    public function save(){
    	if (isset($_POST['id']) && $_POST['id'] > 0)
			{
			}
			else
			{
				$label = $_POST['slabel'];
				$insert = $this->_model->insert($_POST);
				if ($insert > 0)
				{
					$insert = $this->_model->link_voie_skill($insert, $_POST['voie'], $_POST['rank']);
					if ($insert > 0)
					{
						header("Location: list");	
					}
					else
					{
						$this->_view->setTitle('Erreur lien nouvelle compétence/voie');
						$this->_view->loadPage(self::VIEWDIR.'add.php',$e);
					}
				}
				else
				{
					$this->_view->setTitle('Erreur nouvelle compétence');
					$this->_view->loadPage(self::VIEWDIR.'add.php',$e);
				}
			}
    }
}