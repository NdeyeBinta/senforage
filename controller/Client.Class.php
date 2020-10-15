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
    class Client extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/ClientDB.php';
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("client/index");
        }

        public function getID($idC){
            $data['IDC'] = $idC;

            return $this->view->load("Client/get_idC", $data);
        }
        
        public function get($idC){
            //Instanciation du model
            $cdb = new ClientDB();

            $data['client'] = $cdb->getClient($idC);
			
            return $this->view->load("client/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $cdb = new ClientDB();
			
            $data['clients'] = $cdb->listeClient();
			
            return $this->view->load("client/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $cdb = new ClientDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($nomFamille) && !empty($nomChef) && !empty($nomVillage)  && !empty($adress) && !empty($numTel) ) {
                    $ok = $cdb->addClient($nomFamille,$nomChef,$nomVillage,$adress,$numTel);
                    $data['ok'] = $ok;
                }
            }
            
            return $this->view->load("client/add", $data);
        }
		public function update(){
			//Instanciation du model
            $cdb = new ClientDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($idC) && !empty($nomFamille) && !empty($nomChef) && !empty($nomVillage)  && !empty($adress) && !empty($numTel)) {
                    $ok = $cdb->updateClient($idC, $nomFamille, $nomChef,$nomVillage,$adress,$numTel);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($idC){
            //Instanciation du model
            $cdb = new ClientDB();
			//Supression
			$cdb->deleteClient($idC);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($idC){
			
            //Instanciation du model
            $cdb = new ClientDB();
			//Supression
			$data['client'] = $cdb->getClient($idC);
			//chargement de la vue edit.html
            return $this->view->load("client/edit", $data);
        }
    }
?>