<?php
    class Kompania { 
        private $id;
        private $name;
        private $email;
        private $ceo;
        private $address;
        private $password;

        function __construct($i, $n, $s, $e, $c, $a, $p) {
            $this->id = $i;
            $this->name = $n;
            $this->email = $e;
            $this->ceo = $c;
            $this->address= $a;
            $this->password = $p;
        }

        function getId() {
            return $this->id;
        }
        function getName() {
            return $this->name;
        }
        function getEmail() {
            return $this->email;
        }
        function getCeo() {
            return $this->ceo;
        }
        function getAddress() {
            return $this->address;
        }
        function getPassword() {
            return $this->password;
        }
    }
?>