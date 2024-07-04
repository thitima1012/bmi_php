<?php
include "./model/HumanBeing.php";
include "./model/BmiIndexer.php";
include "./model/HealthAnalyzer.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $weight = $_POST['weight'] ?? '';
    $height = $_POST['height'] ?? '';

    $hb = new HumanBeing();
    $hb->setHeight($height);
	$hb->setWeight($weight);
	$hb->calculateBMI();

    echo "BMI : ".$hb->getBmi();
    echo "<br>";
    echo "Result : ".$hb->analyzeBmi();
}