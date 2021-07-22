<?php

class racesController extends AdminController
{
	const VIEWDIR = self::BASEDIR.'races/';

    public function list(){
        $this->_view->setTitle('Liste des races');
    	$data = $this->_model->showAll();
        $this->_view->loadPage('admin/races/list.php', $data);
    }

    public function add(){
    	$this->_view->setTitle('Ajouter une nouvelle race');
    	$this->_view->loadPage(self::VIEWDIR.'add.php');
    }

    public function edit($id)
    {
    	$data = $this->_model->show($id);
    	$this->_view->setTitle('Edition de la race '.$data['label']);
    	$this->_view->loadPage(self::VIEWDIR.'edit.php', $data);
    }

    public function save($id = 0)
    {
    	if ($id > 0)
		{
			$update = $this->_model->update($id, $_POST['label'], $_POST['description'], $_POST['features'], $_POST['str'], $_POST['adr'], $_POST['end'], $_POST['agi'], $_POST['intel'], $_POST['per'], $_POST['vol'], $_POST['cha']);
			if ($update > 0)
			{
				header("Location: ../list");	
			}
			else
			{
				$this->_view->setTitle('Erreur enregistrement'. $_POST['label']);
				$this->_view->loadPage(self::VIEWDIR.'edit.php',$e);
			}
		}
		else
		{
			$insert = $this->_model->insert($_POST['label'], $_POST['description'], $_POST['features'], $_POST['str'], $_POST['adr'], $_POST['end'], $_POST['agi'], $_POST['intel'], $_POST['per'], $_POST['vol'], $_POST['cha']);
			if ($insert > 0)
			{
				header("Location: list");	
			}
			else
			{
				$this->_view->setTitle('Erreur nouvelle race');
				$this->_view->loadPage(self::VIEWDIR.'add.php',$e);
			}
		}
    }

    public function delete($id)
    {
    	if ($this->_model->delete($id))
    	{
    		header("Location: ../list");
    	}
    	else
		{
			$this->_view->setTitle('Erreur suppression race');
			$this->_view->loadPage(self::VIEWDIR.'list.php',$e);
		}
    }
}