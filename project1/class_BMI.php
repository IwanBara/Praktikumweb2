<?php
require_once 'class_BMIpasien.php';

class BMI extends BMIpasien{
    public $berat;
    public $tinggi;
    
    public function __construct($berat,$tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    function nilaiBMI(){
        $tingg_meter = $this->tinggi/100;
        $this->nilaiBMI =$this->berat / ($tingg_meter * $tingg_meter );
        return $this->nilaiBMI = number_format($this->nilaiBMI,1);
    }

    public function statusBMI(){
        if ($this->nilaiBMI < 18.5){
            return 'Kekurangan berat badan';
        }
        else if ($this->nilaiBMI >=18.5){
            return 'Normal';
        }
        else if ($this->nilaiBMI >=25.0){
            return 'Kelebihan berat badan';
        }
        else if ($this->nilaiBMI >= 30.0){
            return 'Kegemukan';
        }
    }
}
?>