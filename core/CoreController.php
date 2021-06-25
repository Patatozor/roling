<?php

/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 22/04/2016
 * Time: 23:10
 */
class CoreController extends Core
{
    const DEFAULT_ACTION = DEFAULT_ACTION;
    protected $_view;
    protected $_model;

    public function __construct($model, $module, $site)
    {
        try
        {
            $this->_view = new CoreView($site);
			if ($model == 1)
			{
				$model = $module.'Model';
				$this->_model = new $model();
			}
            if(isset($_GET['action']))
            {
                $action = $_GET['action'];
            }
            else
            {
                $action = self::DEFAULT_ACTION;
            }
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            if(method_exists($this, $action))
            {
                if ($id)
                {
                    try
                    {
                        $this->$action($id);
                    }
                    catch (CustomException $e)
                    {
                        $this->_view->setTitle("Cette page n'existe pas");
                        $this->_view->loadPage("missing_page.php",null,TEMPLATES_DIR.'default/');
                    }
                }
                else
                {
                    try
                    {
                        $this->$action();
                    }
                    catch (CustomException $e)
                    {
                        $this->_view->setTitle("Cette page n'existe pas");
                        $this->_view->loadPage("missing_page.php",null,TEMPLATES_DIR.'default/');
                    }
                }
			    
            }
            else
            {
                $this->_view->setTitle("Cette page n'existe pas");
                $this->_view->loadPage("missing_page.php",null,TEMPLATES_DIR.'default/');
            }
        }
        catch (CustomException $e){
            throw new CustomException($e->getMessage());
        }
    }
}