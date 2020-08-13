<?php

    class Registry
    {
        private $objects;

        public function __construct()
        {

        }

        public function setObject($object, $key)
        {
            require_once( $object . '.class.php' );
    	    $this->objects[ $key ] = new $object( $this );
        }

        public function getObject( $key )
        {
            return $this->objects[ $key ];
        }
    }

?>