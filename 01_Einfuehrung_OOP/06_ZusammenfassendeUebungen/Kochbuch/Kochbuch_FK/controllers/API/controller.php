<?php

    class API
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
                        require_once('kochbuch.class.php');
                        $this->kochbuch = new Kochbuch($this->registry);
                        $this->kochbuch->guide_kochbuch();
                    break;

                    default:
                    break;
                }
            }
        }
    }

?>