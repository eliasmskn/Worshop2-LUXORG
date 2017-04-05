<?php
Class ModelExtend extends Modele
{

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			parent::__construct($serveur, $bdd, $user, $mdp);
		}

		
		public function selectwhereici($champ1, $champ2, $valeur1, $valeur2)
		{
			$requete = "SELECT ".$this->id." FROM ".$this->table
			." WHERE ".$champ1." = ".$valeur1." AND ".$champ2." = ".$valeur2;
			$select = $this->unPDO->prepare($requete);
			
			$select->execute();
			$resultat = $select->fetchAll();
			
			return $resultat;

		}

		public function selectwhereplanning($view, $nomcli)
		{
			$requete = "SELECT * FROM ".$view." where nomclient = '".$nomcli."';";
			$select = $this->unPDO->prepare($requete);			
			$select->execute();
			$resultat = $select->fetchAll();
			return $resultat;
		}

		public function selectAllTablePlanningMoniteur($view)
		{
			$requete = "SELECT * FROM ".$view;
			$select = $this->unPDO->prepare($requete);
			$select->execute();
			$resultat = $select->fetchAll();
			return $resultat;
		}

		public function appelprocedure($procedure)
		{
			$requete = "call ".$procedure;
			$select = $this->unPDO->prepare($requete);
			$select->execute();
			$resultat = $select->fetchAll();
			return $resultat;
		}

		public function appelProcedureArg($procedure, $arg1, $arg2, $arg3)
		{
			$requete = "call ".$procedure."('".$arg1."', '".$arg2."', '".$arg3."')";
			$select = $this->unPDO->prepare($requete);		
			$select->execute();
			$resultat = $select->fetchAll();			
			return $resultat;
		}

		public function appelProcedureArg2($procedure, $arg1)
		{
			$requete = "call ".$procedure."('".$arg1."')";
			$select = $this->unPDO->prepare($requete);			
			$select->execute();
			$resultat = $select->fetchAll();			
			return $resultat;
		}

		public function appelProcedureArg3($procedure, $arg1, $arg2, $arg3, $arg4, $arg5)
		{
			$requete = "call ".$procedure."('".$arg1."', '".$arg2."', '".$arg3."', '".$arg4."', '".$arg5."')";
			$select = $this->unPDO->prepare($requete);
			var_dump($select);			
			$select->execute();
			$resultat = $select->fetchAll();			
			return $resultat;
		}

		public function selectwhere($email)
		{
			$requete = " SELECT * FROM ".$this->table." WHERE "
						.$this->id." = :".$this->id;

			$donnees[":".$this->id] = $email;

			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetchAll();
			return $resultat;
		}

		public function selectwhereview($email)
		{
			$requete = " SELECT nomclient FROM ".$this->table." WHERE "
						.$this->id." = :".$this->id;

			$donnees[":".$this->id] = $email;

			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);

			$resultat = $select->fetchAll();

			return $resultat;
		}

		public function selectwhNomMoniteur($resProc)
		{
			$requete = " SELECT nommoniteur FROM ".$this->table." WHERE "
						.$this->id." in(".$resProc.");";

			$donnees[":".$this->id] = "numoniteur";

			$select = $this->unPDO->prepare($requete);
			
			$select->execute($donnees);
			$resultat = $select->fetchAll();
			return $resultat;
		}



		public function selectwhVehicule()
		{
			$requete = " SELECT numvehicule FROM ".$this->table." WHERE "
						.$this->id." in(1,2,3,4,5);";

			$donnees[":".$this->id] = "numvehicule";

			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetchAll();
			return $resultat;
		}


		

		public function select($tab)
		{
			$listechamps = array();
			$donnees = array();

			foreach ($tab as $key => $value) {
				$listechamps[] = $key." = :".$key;			
				$donnees[":".$key] = $value;
			}
			$champs = implode(' and ', $listechamps);
			

			$requete = " SELECT * FROM ".$this->table
						." WHERE ".$champs ;
						
			var_dump($requete);
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetch();

			return $resultat;
		}
}
?>