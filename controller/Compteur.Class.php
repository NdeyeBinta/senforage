<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    class Compteur extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/CompteurDB.php';
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("compteur/index");
        }

        public function getID($idA){
            $data['IDA'] = $idA;

            return $this->view->load("Compteur/get_idCompt", $data);
        }
        
        public function get($idCompt){
            //Instanciation du model
            $codb = new CompteurDB();

            $data['compteur'] = $codb->getCompteur($idCompt);
			
            return $this->view->load("compteur/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $codb = new CompteurDB();
			
            $data['abonnements'] = $codb->listeCompteur();
			
            return $this->view->load("compteur/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $codb = new CompteurDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data = array();
                if(!empty($idCompt) && !empty($consL)  && !empty($consC)   ) {
                    $ok = $codb->addCompteur($idCompt,$consL,$consC);
                    $data['ok'] = $ok;
                }
            }
            
            return $this->view->load("compteur/add", $data);
        }
		public function update(){
			//Instanciation du model
            $codb = new CompteurDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($idCompt) && !empty($consL) && !empty($consC)) {
                    $ok = $codb->updateCompteur($idCompt, $consL, $consC);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($idCompt){
            //Instanciation du model
            $codb = new CompteurDB();
			//Supression
			$codb->deleteCompteur($idCompt);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($idCompt){
			
            //Instanciation du model
            $codb = new CompteurDB();
			//Supression
			$data['compteur'] = $codb->getCompteur($idCompt);
			//chargement de la vue edit.html
            return $this->view->load("compteur/edit", $data);
        }
    }
?>