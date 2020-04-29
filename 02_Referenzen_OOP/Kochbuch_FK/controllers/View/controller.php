<?php

    class View
    {
        private $registry;

        public function __construct($registry)
        {
            $this->registry = $registry;
            $this->url_bits = $this->registry->getObject('url')->getURLBits();
        }

        public function guide()
        {
            if( isset( $this->url_bits[1] ) )
            {
                switch( $this->url_bits[1] )
                {
                    case "kochbuch":
                        require_once('kochbuch_template.class.php');
                        $this->kochbuch = new KochbuchTemplate($this->registry);
                        $this->kochbuch->guide();
                    break;

                    default:
                    break;
                }
            }
        }
    }

?>