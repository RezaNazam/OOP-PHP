<?php

class Animal {
    private $name;
    private $legs;
    private $cold_blooded;

    public function __construct($name, $legs, $cold_blooded) {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    public function getNama() {
        return $this->name;
    }

    public function setNama($name) {
        $this->name = $name;
    }

    public function getkaki() {
        return $this->legs;
    }

    public function setkaki($legs) {
        $this->legs = $legs;
    }

    public function darahDingin() {
        return $this->cold_blooded;
    }

    public function setDarahDingin($cold_blooded) {
        $this->cold_blooded = $cold_blooded;
    }
}
