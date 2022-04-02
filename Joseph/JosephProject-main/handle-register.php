<?php

include "wartheader.php";

include "configuration.php";

if (isset($_POST["register"])) {

    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];


    // Validation

    //password length
    if (strlen($password) < 6) {
        $passwordError = "password must have 6 characters";
        echo "$passwordError";
    } else {
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }

    //matching passwords
    if ($confirmPassword != $password) {
        $conpasserror = "passwords do not match";
        echo $confirmPassword;
    }

    if (empty ($cpassworderror) and (empty($conpasserror))) {

        $sql = "INSERT INTO `wart`( `firstName`, `secondName`, `emailAddress`, `password`)
              VALUES ('$firstName','$secondName','$emailAddress','$storePass')";


        $result = mysqli_query($link,$sql);

        if ($result){
            echo "You have been Registered";
            header("location:login.php");
        }else{
            echo "error executing this query $sql".mysqli_error($link);

        }
    }

// close my connection
    mysqli_close($link);

}


