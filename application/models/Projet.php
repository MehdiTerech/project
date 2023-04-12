<?php
/**
 * @access public
 * @author pc
 * @package application.models
 */
class Projet {
    /**
	 * @AttributeType int
	 */
	private $id;
	/**
	 * @AttributeType string
	 */
	private $titre;
	/**
	 * @AttributeType Date
	 */
	private $datDebut;
	/**
	 * @AttributeType Date
	 */
	private $dateFin;
	/**
	 * @AttributeType string
	 */
	private $description;

	/**
	 * @access public
	 */
	 
	public $tasks;
	public function Projet($titre,$dateDebut, $dateFin,$description) {
		$this->titre = $titre;
		$this->dateDebut = $dateDebut;
		$this->dateFin = $dateFin;
		$this->description = $description;
		$this->tasks= array();
	}
	public function __construct(){
	
	}
	/**
	 * @access public
	 * @param string titre
	 * @ParamType titre string
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
	}
	public function addTask(Task $task){
		$this->tasks[]=$task;
	}
	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getTitre() {
		return $this->titre;
	}

	/**
	 * @access public
	 * @param Date_4 dateFin
	 * @ParamType dateFin Date
	 */
	public function setDateFin($dateFin) {
		$this->dateFin = $dateFin;
	}
	public function setDateDebut($dateDebut) {
		$this->dateDebut = $dateDebut;
	}

	/**
	 * @access public
	 * @return Date_4
	 * @ReturnType Date
	 */
	public function getDateFin() {
		return $this->dateFin;
	}
	public function getDateDebut() {
		return $this->dateDebut;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	/**
	 * @access public
	 * @param string description
	 * @ParamType description string
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDescription() {
		return $this->description;
	}
}
?>