<?php

    class URL
    {
        private $registry;

        public function __construct($registry)
        {
            $this->registry = $registry;
            $this->url = $this->setURL();
            $parsed_url = parse_url($this->url);
            $this->url_path = $parsed_url["path"];
            $this->url_bits = $this->calculateURLBits();
        }

        public function getURL()
        {
            return $this->url;
        }

        public function getURLPath()
        {
            return $this->url_path;
        }

        public function getURLBits()
        {
            return $this->url_bits;
        }

        public function setURL()
        {
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
                $url = "https"; 
            else
                $url = "http"; 
            
            // Here append the common URL characters. 
            $url .= "://"; 
            
            // Append the host(domain name, ip) to the URL. 
            $url .= $_SERVER['HTTP_HOST']; 
            
            // Append the requested resource location to the URL 
            $url .= $_SERVER['REQUEST_URI'];

            return $url;
        }

        public function calculateURLBits()
        {
            $path = $this->url_path;
            $bits_remaing = TRUE;
            $url_bits = array();

            while( $bits_remaing )
            {
                $first_slash_pos = stripos($path, '/');
                $path = substr($path, $first_slash_pos+1);

                if( $path == '' )
                {
                    $url_bits = NULL;
                    $bits_remaing = FALSE;
                    break;
                }

                if( strstr($path, '/', true) !== FALSE )
                {
                    $bit = strstr($path, '/', true);
                } else
                {
                    $bit = $path;
                    $bits_remaing = FALSE;
                }

                array_push($url_bits, $bit);
                $path = strstr($path, '/');
            }

            return $url_bits;
        }
    }

?>