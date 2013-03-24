<?php
class controller_main extends Core_controller {
	public $view;
	function index() {
		$data = array('title' => 'Мой сайт','header' => 'Привет мир')
		$this->view->render('main.twig',$data);
	}
} ?>