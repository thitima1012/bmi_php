<?php

class HumanBeing {
    private $height;
    private $weight;
    private $bmi;
    
    private function getHeight() {
        return $this->height;
    }
    
    public function setHeight($height) {
        $this->height = $height;
    }

    private function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getBmi() {
        return $this->bmi;
    }

    private function setBmi($bmi) {
        $this->bmi = $bmi;
    }
    
    public function calculateBMI() {
        $bi = new BmiIndexer();
        $this->setBmi($bi->calculateBMI($this->getHeight(), $this->getWeight()));
    }
    
    public function analyzeBmi() {
        $ha = new HealthAnalyzer();
        return $ha->analyzeBmi($this->getBmi());
    }
}