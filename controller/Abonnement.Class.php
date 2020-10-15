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
    class Abonnement extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/AbonnementDB.php';
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("abonnement/index");
        }

        public function getID($idA){
            $data['IDA'] = $idA;

            return $this->view->load("Abonnement/get_idA", $data);
        }
        
        public function get($idA){
            //Instanciation du model
            $adb = new AbonnementDB();

            $data['abonnement'] = $adb->getAbonnement($idA);
			
            return $this->view->load("abonnement/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $adb = new AbonnementDB();
			
            $data['abonnements'] = $adb->listeAbonnement();
			
            return $this->view->load("abonnement/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $adb = new AbonnementDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {

                extract($_POST);
                $data = array();
                if(!empty($dateA) && !empty($texteA)  && !empty($idC) && !empty($idCompt)   ) {

                    $ok = $adb->addAbonnement($dateA,$texteA,$idC,$idCompt);
                    $data['ok'] = $ok;
                }
            }
            
            return $this->view->load("abonnement/add", $data);
        }
		public function update(){
			//Instanciation du model
            $adb = new AbonnementDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                extract($_POST);
                if(!empty($idA) && !empty($dateA)  && !empty($texteA)  && !empty($idC) && !empty($idCompt)) {
                    $ok = $adb->updateAbonnement($idA, $dateA,$texteA,$idC,$idCompt);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($idA){
            //Instanciation du model
            $adb = new AbonnementDB();
			//Supression
			$adb->deleteAbonnement($idA);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($idA){
			
            //Instanciation du model
            $adb = new AbonnementDB();
			//Supression
			$data['abonnement'] = $adb->getAbonnement($idA);
			//chargement de la vue edit.html
            return $this->view->load("abonnement/edit", $data);
        }
    }
?>