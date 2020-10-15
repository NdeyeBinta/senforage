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
    class AbonnementDB extends Model{
		
		//La base de données samane_test est dans view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getAbonnement($idA)
        {
            $sql = "SELECT *
                     FROM abonnement
                     WHERE abonnement.idA = ".$idA;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addAbonnement($dateA, $texteA,$idC,$idCompt){
			$sql = "INSERT INTO abonnement VALUES(null, '$dateA', '$texteA',$idC,$idCompt)";

            if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteAbonnement($idA){
			$sql = "DELETE FROM abonnement WHERE IDA = $idA";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateAbonnement($idA,$dateA,$texteA,$idC,$idCompt){
			$sql = "UPDATE abonnement SET dateA = $dateA,
						texteA='$texteA',
						idC=$idC,
						idCompt=$idCompt
						WHERE idA = $idA";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function listeAbonnement(){
			$sql = "SELECT * FROM abonnement";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}