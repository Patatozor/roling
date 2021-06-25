<?php 
class charController extends AdminController
{
	const VIEWDIR = self::BASEDIR.'char/';

    public function list(){
        $this->_view->setTitle('Liste des sorts');
        $chars = $this->_model->getAll();
        $this->_view->loadPage('admin/char/list.php', $chars);
    }
}