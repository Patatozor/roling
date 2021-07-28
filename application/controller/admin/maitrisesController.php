<?php
class maitrisesController extends AdminController
{
	const VIEWDIR = self::BASEDIR.'maitrises/';

	public function list(){
		$this->_view->setTitle('Liste des maitrises');
		$maitrises = $this->_model->showAll();
		$this->_view->loadPage(self::VIEWDIR.'list.php',$maitrises);
	}

	public function edit(){
		$id = $_GET['id'];
		$maitrise = $this->_model->show($id);
		$this->_view->setTitle('Modifier la maitrise '.$maitrise['slabel']);
		$this->_view->loadPage(self::VIEWDIR.'edit.php',$maitrise);
	}

	public function add(){
		$this->_view->setTitle('Nouvelle maitrise');
		$this->_view->loadPage(self::VIEWDIR.'add.php');
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
			$this->_view->setTitle('Erreur mise à jour de la maitrise en base');
			//$this->_view->loadPage(self::VIEWDIR.'add.php', $e);
		}
	}

	public function delete($id)
	{
		try
		{
			$this->_model->delete($id);
			header("Location: ../list");
		}
		catch (CustomException $e)
		{
			$maitrise = $this->_model->show($id);
			$this->_view->setTitle('Erreur suppression de la maitrise '.$maitrise['label']);
		}
	}
}