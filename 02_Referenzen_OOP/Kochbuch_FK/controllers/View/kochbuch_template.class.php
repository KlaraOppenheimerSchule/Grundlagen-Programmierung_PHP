<?php

    class KochbuchTemplate
    {
        private $registry;

        public function __construct($registry)
        {
            $this->registry = $registry;
            $this->url_bits = $this->registry->getObject('url')->getURLBits();

            require_once('Schule/Uebungen/mvc/models/kochbuch.model.php');
            $this->kochbuch_model = new KochbuchModel($this->registry);
        }

        public function guide()
        {
            if( isset( $this->url_bits[2] ) )
            {
                switch( $this->url_bits[2] )
                {
                    case "main":
                        $this->showMain();
                    break;

                    case "uebersicht":
                        $this->showUebersicht();
                    break;

                    case "rezept":
                        $this->showRezept();
                    break;

                    case "newRezept":
                        $this->showNewRezept();
                    break;

                    default:
                        echo "default";
                    break;
                }
            }
        }

        public function showMain()
        {
            echo file_get_contents("Schule/Uebungen/mvc/views/kochbuch/main.tpl.php");
            exit;
        }

        public function showUebersicht()
        {
            echo file_get_contents("Schule/Uebungen/mvc/views/kochbuch/rezept_liste/main.tpl.php");
            exit;
        }

        public function showRezept()
        {
            echo file_get_contents("Schule/Uebungen/mvc/views/kochbuch/rezept/main.tpl.php");
            exit;
        }

        public function showNewRezept()
        {
            echo file_get_contents("Schule/Uebungen/mvc/views/kochbuch/new_rezept/main.tpl.php");
            exit;
        }
    }

?>