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
    class Produit extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/ProduitDB.php';
        }

		//A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("produit/index");
        }

        public function getID($idP){
            $data['IDP'] = $idP;

            return $this->view->load("produit/get_idP", $data);
        }
        
        public function get($idP){
            //Instanciation du model
            $pdb = new ProduitDB();

            $data['test'] = $pdb->getProduit($idP);
			
            return $this->view->load("produit/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $pdb = new ProduitDB();
			
            $data['produits'] = $pdb->listeProduit();
			
            return $this->view->load("produit/liste", $data);
        }
	
	
		public function add(){
			//Instanciation du model
            $pdb = new ProduitDB();
			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($libP) && !empty($qtStock)) {
                    $ok = $pdb->addProduit($libP, $qtStock);
                    $data['ok'] = $ok;
                }
            }
            
            return $this->view->load("produit/add", $data);
        }
		public function update(){
			//Instanciation du model
            $pdb = new ProduitDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($idP) && !empty($libP) && !empty($qtStock)) {
                    $ok = $pdb->updateProduit($idP, $libP, $qtStock);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
        }
        public function delete($idP){
            //Instanciation du model
            $pdb = new ProduitDB();
			//Supression
			$pdb->deleteProduit($idP);
			//Retour vers la liste
            return $this->liste();
        }
		
		public function edit($idP){
			
            //Instanciation du model
            $pdb = new ProduitDB();
			//Supression
			$data['produit'] = $pdb->getProduit($idP);
			//chargement de la vue edit.html
            return $this->view->load("produit/edit", $data);
        }
    }
?>