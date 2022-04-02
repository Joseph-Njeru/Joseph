<?php


include "wartheader.php";

include "configuration.php";

session_start();

//check if user is logged in using session

if (isset($_SESSION["loggedin"]) and $_SESSION["loggedin"] === true ){
    header("location:ThePane.php");
    exit();
}

if (isset($_POST["login"])){

    $userEmail = $_POST["emailAddress"];
    $userPassword= $_POST["password"];


    $sql="SELECT * FROM `wart` WHERE emailAddress='$userEmail'";

    $result = mysqli_query($link,$sql);

    if ($result){

        $data = mysqli_num_rows($result);

        if ($data == 1){

              while ($row= mysqli_fetch_array($result)){

                  $id = $row["id"];
                  $emailAddress=$row["emailAddress"];
                  $hashedPassword =$row["password"];

                  //verify password

                  if (password_verify($userPassword,$hashedPassword)){

                      session_start();
                      $_SESSION["loggedin"]=true;
                      $_SESSION["id"]=$id;
                      $_SESSION["username"]=$emailAddress;

                      header("location:ThePane.php");


                  }else{
                      echo "Your passwords do not match";
                  }


              }



        }else{
            echo "User was not found in the database";
        }





    }else{
        echo "Error executing this query $sql".mysqli_error($link);
    }




}
