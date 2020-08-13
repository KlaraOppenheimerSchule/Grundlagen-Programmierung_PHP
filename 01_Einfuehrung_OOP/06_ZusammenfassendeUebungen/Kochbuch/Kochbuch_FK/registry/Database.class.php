<?php

    class Database
    {
        private $registry;

        public function __construct($registry)
        {
            $this->registry = $registry;
        }

        public function newConnection( $host, $user, $password, $database )
        {
            $this->connection = mysqli_connect( $host, $user, $password, $database);
        }

        public function executeQuery($query)
        {
            $this->query = mysqli_query( $this->connection, $query);
            $affected_rows = mysqli_affected_rows( $this->connection );

            if( $affected_rows > 0)
                return TRUE;
            else
                return FALSE;
        }

        public function getResult()
        {
            $result = mysqli_fetch_all($this->query, MYSQLI_ASSOC);

            $this->result = $result;
            return $this->result;
        }

        public function lastInsertID()
        {
            $id = mysqli_insert_id( $this->connection );

            $this->last_id = $id;
            return $this->last_id;
        }

        public function closeConnection()
        {
            mysqli_close( $this->connection );
        }

        public function __deconstruct()
        {
            $this->closeConnection();
        }
    }

?>