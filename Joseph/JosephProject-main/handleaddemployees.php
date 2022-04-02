<?php

include "wartheader.php";
include "configuration.php";
if (isset($_POST["submit"])) {

    //pick values
    $fullname = $_POST["fullname"];
    $clocknumber = $_POST["clocknumber"];
    $emailaddress = $_POST["emailaddress"];
    $phonenumber = $_POST["phonenumber"];
    $gender = $_POST["gender"];
    $location = $_POST["location"];
    $dob = $_POST["dob"];


    //Files
    $photoname = $FILES['photo']['name'];
    $tempname = $FILES['photo']['temp_name'];
    $folder = "uploads/" . $photoname;

    //CV
    $cvname = $FILES['CV']['name'];
    $cvtemp = $FILES['cv']['tempname'];
    $cvfolder = "uploads/" . $cvname;


    $sql = "INSERT INTO `employees`(`id`, `fullname`, `clocknumber`, `emailaddress`, `phonenumber`, `location`, `dob`, `gender`, `photo`, `cv`) 
    VALUES ('$id','$fullname','$clocknumber', '$emailaddress','$phonenumber','$location','$dob','$gender','$photoname','$cvname')";


    $result = mysqli_query($link, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        echo "<p class='alert alert-success'>image has been uploaded</p>";
    } else {
        echo "error uploadng image";
    }

    if (move_uploaded_file($cvtemp, $cvfolder)) {
        echo "<p class='alert alert-success'>cv uploadeded succesifully</p>";
    } else {
        echo "error uploadng your cv";
    }


    if ($result) {
        echo "<p class='alert alert-success'>Record added succesifully</p>";
        echo "<a href='Edocs.php' class='btn btn-primary col-md-4'>BACK</a>";
        //header("location: addemployees.php");

    } else {
        echo "error executing this querry $sql" . mysqli_error($link);
    }


}
