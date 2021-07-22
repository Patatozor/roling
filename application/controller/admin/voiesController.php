<?php 
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
		$data['skills'] = $this->_model->getVoieSkills($id);
		$data['all_skills'] = $this->_model->getAllSkills();
		$this->_view->setTitle('Contenu de la voie '.$data['voie']['article'].$data['voie']['label']);
    	$this->_view->loadPage(self::VIEWDIR.'voie.php',$data);
	}
	
	public function add(){
		$this->_view->setTitle('Nouvelle voie');
		$this->_view->loadPage(self::VIEWDIR.'add.php');
	}
	
	public function edit($id){
		$voie = $this->_model->show($id);
		$this->_view->setTitle('Modifier la voie '.$voie['article'].$voie['label']);
		$this->_view->loadPage(self::VIEWDIR.'edit.php',$voie);
	}
	
	public function save($id = 0)
	{
		$update = 0;
		$insert = 0;

		if ($id > 0)
		{
			$update = $this->_model->update($id, $_POST['label'], $_POST['article'], $_POST['description']);
			$location = "../list";
		}
		else
		{
			$insert = $this->_model->insert($_POST['label'], $_POST['article'], $_POST['description']);
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