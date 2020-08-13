<?php
	class KochbuchModel
	{
        private $registry;

		public function __construct($registry)
		{
			$this->registry = $registry;
		}

		public function selectRezepte()	
		{
			$select = sprintf("SELECT id, name, time FROM rezept");						
            
            if( $this->registry->getObject('db')->executeQuery($select) )          
                $result = $this->registry->getObject('db')->getResult();
            else
                $result = 0;
            
            return $result;
        }
        
        public function selectSingleRezept($rezept_id)
        {
            $select = sprintf("SELECT * FROM rezept WHERE id = '%s'", $rezept_id);

            if( $this->registry->getObject('db')->executeQuery($select) )          
                $result = $this->registry->getObject('db')->getResult();
            else
                $result = 0;
            
            return $result;
        }
        
        public function selectRezeptZutaten($rezept_id)
        {
            $select = sprintf("SELECT zutat.id, zutat.name, zutat.calories, rezept_zutaten.amount FROM zutat, rezept_zutaten WHERE rezept_zutaten.rezept_id = '%s' AND rezept_zutaten.zutat_id = zutat.id", $rezept_id);

            if( $this->registry->getObject('db')->executeQuery($select) )          
                $result = $this->registry->getObject('db')->getResult();               
            else
                $result = 0;
            
            return $result;
        }

        public function selectZutaten()
        {
            $select = sprintf("SELECT * FROM zutat");						
            
            if( $this->registry->getObject('db')->executeQuery($select) )          
                $result = $this->registry->getObject('db')->getResult();
            else
                $result = 0;
            
            return $result;
        }

        public function insertRezept($name, $time, $text)
        {
            $insert = sprintf("INSERT INTO rezept (name, time, text) VALUES('%s', '%s','%s')", $name, $time, $text);

            if( $this->registry->getObject('db')->executeQuery($insert) )
                return TRUE;
            else
                return FALSE;
        }

        public function insertRezeptZutat($rezept_id, $zutat_id, $amount)
        {
            $insert = sprintf("INSERT INTO rezept_zutaten (rezept_id, zutat_id, amount) VALUES('%s', '%s','%s')", $rezept_id, $zutat_id, $amount);

            if( $this->registry->getObject('db')->executeQuery($insert) )
                return TRUE;
            else
                return FALSE;
        }
    }
?>