<?php
class Core_controller {
	public $view;
	function __construct() {
		//Загрузка Twig как шаблонизатора
		require_once DOCUMENT_ROOT.'/engine/lib/Twig/Autoloader.php';
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem(DOCUMENT_ROOT.'/application/views');
		$this->view = new Twig_Environment($loader, array('cache' => DOCUMENT_ROOT.'/application/cache'));
	}
	function index() {}
} ?>