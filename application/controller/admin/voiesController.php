<?php
include_once(MODELDIR.'skillsModel.php'); 
class voiesController extends AdminController
{
	const VIEWDIR = self::BASEDIR.'voies/';
	
	public function list(){
    	$this->_view->setTitle('Liste des voies');
		$voies = $this->_model->showAll();
    	$this->_view->loadPage(self::VIEWDIR.'list.php',$voies);
	}

	public function voie(){
		$id = $_GET['id'];
		$data = [];
		$data['voie'] = $this->_model->show($id);
		$data['skills'] = skillsModel::show($id);
		$data['all_skills'] = skillsModel::showAll();
		$this->_view->setTitle('Contenu de la voie '.$data['voie']['sarticle'].$data['voie']['slabel']);
    	$this->_view->loadPage(self::VIEWDIR.'voie.php',$data);
	}
	
	public function add(){
		$this->_view->setTitle('Nouvelle voie');
		$this->_view->loadPage(self::VIEWDIR.'add.php');
	}
	
	public function edit($id){
		$voie = $this->_model->show($id);
		$this->_view->setTitle('Modifier la voie '.$voie['sarticle'].$voie['slabel']);
		$this->_view->loadPage(self::VIEWDIR.'edit.php',$voie);
	}
	
	public function save($id = 0)
	{
		$update = 0;
		$insert = 0;

		if ($id > 0)
		{
			$update = $this->_model->update($_POST, $id);
			$location = "../list";
		}
		else
		{
			$insert = $this->_model->insert($_POST);
			$location = "list";
		}
		if ($update > 0 || $insert > 0)
		{
			header("Location: ".$location);
		}
		else
		{
			$this->_view->setTitle('Erreur mise à jour de la voie en base');
			$this->_view->loadPage(self::VIEWDIR.'add.php',$e);
		}
	}

	public function link()
	{
		if (isset($_POST['rank']) && isset($_GET['id']) && isset($_POST['skill_to_link']))
		{
			$this->_model->link_voie_skill($_POST['skill_to_link'], $_GET['id'], $_POST['rank']);
		}
		header("Location: ../voie/".$_GET['id']);
	}

	public function delete($id)
	{
		if ($this->_model->delete($id))
		{
			header("Location: ../list");
		}
		else
		{
			$this->_view->setTitle('Erreur suppression voie');
			$this->_view->loadPage(self::VIEWDIR.'list.php',$e);
		}
	}
}