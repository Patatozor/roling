<?php

class spellsController extends AdminController
{
	const VIEWDIR = self::BASEDIR.'spells/';

    public function list(){
        $this->_view->setTitle('Liste des sorts');
    	$data = $this->_model->getAll();
        $this->_view->loadPage('admin/spells/list.php', $data);
    }

    public function add(){
    	$this->_view->setTitle('Ajouter un nouveau sort');
    	$this->_view->loadPage(self::VIEWDIR.'add.php');
    }

    public function edit($id)
    {
    	$data = $this->_model->show($id);
    	$this->_view->setTitle('Edition du sort '.$data['label']);
    	$this->_view->loadPage('admin/spells/edit.php', $data);
    }

    public function save(){
    	if (isset($_POST['id']) && $_POST['id'] > 0)
			{
				$update = $this->_model->update($_POST['id'], $_POST['label'], $_POST['description'], $_POST['cost'], $_POST['range'], $_POST['difficulty']);
				if ($update > 0)
				{
					header("Location: edit/".$_POST['id']);	
				}
				else
				{
					$this->_view->setTitle('Erreur enregistrement'. $_POST['label']);
					$this->_view->loadPage(self::VIEWDIR.'edit.php',$e);
				}
			}
			else
			{
				$insert = $this->_model->insert($_POST['label'], $_POST['description'], $_POST['cost'], $_POST['range'], $_POST['difficulty']);
				if ($insert > 0)
				{
					header("Location: list");	
				}
				else
				{
					$this->_view->setTitle('Erreur nouveau sort');
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
			$this->_view->setTitle('Erreur suppression sort');
			$this->_view->loadPage(self::VIEWDIR.'list.php',$e);
		}
    }
}