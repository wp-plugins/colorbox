<?php
include_once(HUGEIT_PLUGIN_DIR."/admin/model/huge_it_colorbox.php");
class Controller {
	public $model;
	public function __construct()  
    {  
        $this->model = new Model();
    } 
	public function invoke()
	{
			$colorboxlist = $this->model->getcolorboxList();
			if(isset($_GET['hugeit_task'])){
				if($_GET['hugeit_task'] == 'save'){
					$colorboxlist = $this->model->getcolorboxSave();
				}
			}
			include_once(HUGEIT_PLUGIN_DIR."/admin/view/huge_it_colorbox.php");
	}
}
?>