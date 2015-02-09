<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Salary Calculation</title>
</head>
<body style="text-align: center;">

<fieldset>
    <legend>Employee Salary Calculation</legend>

    <form action="index.php" method="post">

        <label>Employee Name</label>
        <input type="text" name="name">
        <br>

        <label>Basic Salary</label>
        <input type="text" name="basicAmount">
        <br>

        <label>House Rent</label>
        <input type="text" name="houseRent">%
        <br>

        <label>Medical Cost</label>
        <input type="text" name="medical">%
        <br>

        <input type="submit" name="submit" value="Calculate">
    </form>
</fieldset>
</body>
</html>

<?php
require_once('employeesalary.php');

if(isset($_POST['name']) && isset($_POST['basicAmount']) && isset($_POST['houseRent']) && isset($_POST['medical']))
{
    $salaryCalculate = new EmployeeSalary();

    $name = $_POST['name'];
    $basicAmount = $_POST['basicAmount'];
    $houseRent = $_POST['houseRent'];
    $medical = $_POST['medical'];

    $salaryCalculate->setName($name);
    $salaryCalculate->setTotalAmount($basicAmount);
    $salaryCalculate->setHouseRent($houseRent);
    $salaryCalculate->setMedicalCost($medical);


    echo $salaryCalculate->getHouseRent();
    echo "<br>";
    echo $salaryCalculate->getMedicalCost();
    echo "<br>";
    echo $salaryCalculate->getTotalAmount();
}

?>