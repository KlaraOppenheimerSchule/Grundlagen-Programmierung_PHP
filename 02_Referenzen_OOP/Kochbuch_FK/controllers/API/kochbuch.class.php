<?php

    class Kochbuch
    {
        private $registry;

        public function __construct($registry)
        {
            $this->registry = $registry;
            $this->url_bits = $this->registry->getObject('url')->getURLBits();

            require_once('Schule/Uebungen/mvc/models/kochbuch.model.php');
            $this->kochbuch_model = new KochbuchModel($this->registry);
        }

        public function guide_kochbuch()
        {
            if( isset( $this->url_bits[2] ) )
            {
                switch( $this->url_bits[2] )
                {
                    case "showRezepte":
                        $this->showRezepte();
                    break;

                    case "showRezept":
                        $this->showSingleRezept();
                    break;

                    case "showRezeptZutaten":
                        $this->showRezeptZutaten();
                    break;

                    case "showZutaten":
                        $this->showZutaten();
                    break;

                    case "newRezept":
                        $this->newRezept();
                    break;

                    default:
                        echo "default";
                    break;
                }
            }
        }

        function showRezepte()
        {
            $rezepte = $this->kochbuch_model->selectRezepte();

            if( $rezepte == 0 )
            {
                exit;
            } else
            {
                echo json_encode($rezepte);
		        exit;
            }
        }

        function showSingleRezept()
        {
            if( isset( $_GET["rezeptid"] ) )
            {
                $rezept_id = $_GET["rezeptid"];

                $rezept = $this->kochbuch_model->selectSingleRezept($rezept_id);

                if( $rezept == 0 )
                {
                    exit;
                } else
                {
                    echo json_encode($rezept);
                    exit;
                }
            }
        }

        function showRezeptZutaten()
        {
            if( isset( $_GET["rezeptid"] ) )
            {
                $rezept_id = $_GET["rezeptid"];

                $zutaten = $this->kochbuch_model->selectRezeptZutaten($rezept_id);

                if( $zutaten == 0 )
                {
                    exit;
                } else
                {
                    echo json_encode($zutaten);
                    exit;
                }
            }
        }

        function showZutaten()
        {
            $zutaten = $this->kochbuch_model->selectZutaten();

            if( $zutaten == 0 )
            {
                exit;
            } else
            {
                echo json_encode($zutaten);
                exit;
            }
        }

        function newRezept()
        {
            $name = $_POST["name"];
            $time = $_POST["time"];
            $text = $_POST["text"];
            $zutaten = $_POST["zutaten"];
            $amount = $_POST["amount"];

            if( $this->kochbuch_model->insertRezept($name, $time, $text) )
                $rezept_id = $this->registry->getObject('db')->lastInsertID();
            else
                die("SQL-Error");
            
            $zutaten_count = count($amount);

            for( $i = 0; $i < $zutaten_count; $i++ )
            {
                if( $amount[$i] == '' )
                {
                    continue;
                } else
                {
                    if( $this->kochbuch_model->insertRezeptZutat($rezept_id, $zutaten[$i], $amount[$i]) )
                        continue;
                    else
                        die("SQL-Error");
                }
            }
        
            echo "Rezept hinzugefügt!";
            echo "<br><br>";
            echo '<a href="/View/kochbuch/main"><button type="button">Zurück</button></a>';
        }
    }

?>