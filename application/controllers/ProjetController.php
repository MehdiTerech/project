<?php
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/ProjetDAO.php');
require_once('labrary/View.php');
require_once('labrary/BaseController.php');

/**
 * @access public
 * @author pc
 * @package application.controllers
 */
class ProjetController extends BaseController{
	private $view;
	private $projetDAO;
	/**
	 * @access public
	 */
	public function __construct() {
		parent::__construct();
		$this->projetDAO = new ProjetDAO();
	}
	/**
	 * @access public
	 */
	public function index() {
		$this->view = new View('ProjetController','index');
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function add() {
		if(isset($_POST['titre'])){
			$projet = new Projet($_POST['titre'],$_POST['debut'], $_POST['fin'],$_POST['description']);
			$this->projetDAO->insert($projet);
			header("location:../projetController/liste");
			exit();
		}
		$this->view= new View('ProjetController','add');
		$this->view->title="Ajouter un projet";
		$this->view->render();
		
	}
	/**
	 * @access public
	 */
	public function liste() {
		$this->view= new View('ProjetController','liste');
		$result = $this->projetDAO->getAll();
		$this->view->projets=$result;
		$this->view->title="Liste de projets";
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function details($projetId) {
		$this->view= new View('ProjetController','details');
		$result = $this->projetDAO->getDetails($projetId);
		$this->view->details=$result;
		$this->view->title="Détails du projet";
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function delete($projetId) {
		$result = $this->projetDAO->delete($projetId);
		if($result){
			header("location:../liste");
		}else{
			$message = "impossible de supprimer de projet";
			header("location:../ErrorController/index/$message");
			exit();
		}
		
	}

}	
?>