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
    class ClientDB extends Model{
		
		//La base de données samane_test est dans view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getClient($idC)
        {
            $sql = "SELECT *
                     FROM client
                     WHERE client.idC = ".$idC;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addClient($nomFamille, $nomChef,$nomVillage,$adress,$numTel){
			$sql = "INSERT INTO client VALUES(null, '$nomFamille', '$nomChef','$nomVillage','$adress',$numTel)";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteClient($idC){
			$sql = "DELETE FROM client WHERE IDC = $idC";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateClient($idC,$nomFamille, $nomChef,$nomVillage,$adress,$numTel){
			$sql = "UPDATE client SET nomFamille = '$nomFamille',
						nomChef = '$nomChef',
						nomVillage='$nomVillage',
						adress='$adress',
						numTel='$numTel'
						WHERE idC = $idC";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function listeClient(){
			$sql = "SELECT * FROM client";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}