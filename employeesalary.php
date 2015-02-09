<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 09/02/15
 * Time: 15:13
 */

class EmployeeSalary {

    private $name;
    private $basicAmount;
    private $houseRent;
    private $medical;


    public function setName($name)
    {
        if(strlen($name) >=3)
        {
            return $this->name = $name;
        }
    }

    public function setTotalAmount($basicAmount)
    {
        return $this->basicAmount;
    }

    public function setHouseRent($houseRent)
    {
        return $this->houseRent = $$houseRent;
    }


    public function setMedicalCost($medicalCost)
    {
        return $this->medical = $medicalCost;
    }


    public function getHouseRent()
    {
        $totalHouseRent = $this->basicAmount * $this->houseRent/100;
        return $totalHouseRent;
    }

    public function getMedicalCost()
    {
        $totalMedicalCost = $this->basicAmount * $this->medical/100;
        return $totalMedicalCost;
    }

    public function getTotalAmount()
    {
        $totalSalary = $this->basicAmount + $this->getHouseRent() + $this->getMedicalCost();
        return $totalSalary;
    }

} 