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
    class CompteurDB extends Model{
		
		//La base de données samane_test est dans view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getCompteur($idCompt)
        {
            $sql = "SELECT *
                     FROM compteur
                     WHERE compteur.idCompt = ".$idCompt;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addCompteur($idCompt, $consL,$consC){
			$sql = "INSERT INTO compteur VALUES($idCompt, '$consL',$consC)";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteCompteur($idCompt){
			$sql = "DELETE FROM Compteur WHERE IDCOMPT = $idCompt";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateCompteur($idCompt, $consL,$consC){
			$sql = "UPDATE compteur SET consL = '$consL',
						consC=$consC
						WHERE idCompt = $idCompt";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function listeCompteur(){
			$sql = "SELECT * FROM compteur";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}