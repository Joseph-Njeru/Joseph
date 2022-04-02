<?php
//check if the user is loggedin
//session_start();

//if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
   // header("location: login.php");
   // exit();
//}

include "wartheader.php";
include "configuration.php";
if (isset($_GET['id']) and !empty($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM `employees` WHERE id=$id";

    $result = mysqli_query($link, $sql);

    if ($result) {
        $data = mysqli_num_rows($result);

        if ($data == 1) {
            $row = mysqli_fetch_array($result);
            $fullname = $row ['fullname'];
            $clocknumber = $row ['clocknumber'];
            $emailaddress = $row ['emailaddress'];
            $phonenumber = $row ['phonenumber'];
            $location = $row ['location'];
            $dob = $row ['dob'];
            $gender = $row ['gender'];
            $photo = $row ['photo'];
            $filepath = "uploads/$photo";
            $cv = $row ['cv'];

?>
            <di class="row m-2">
            <div class="text-center">
                <p><?php echo "<img class='rounded-circle' src='$filepath' width='100' height='100'>"?> </p>
            </div>
            </di>

        <div class="row m-2">
            <div class="card col-md-5 m-2">
                <div class="card-body">
                    <div class="text-center">

                        <div>
                            <label class="form-label h5"> FULL NAME </label>
                            <P><?PHP echo $fullname;?></P>
                        </div>
                         <div>
                            <label class="form-label h5"> CLOCK NUMBER </label>
                            <P><?PHP echo $clocknumber;?></P>
                        </div>
                        <div>
                            <label class=" form-label"> EMAIL ADDRESS </label>
                            <P><?PHP echo $emailaddress;?></P>
                        </div>
                        <div>
                            <label class="form-label h5"> PHONE NUMBER </label>
                            <P><?PHP echo $phonenumber;?></P>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="row m-2">
                <div class="card col-md-5 m-2">
                    <div class="card-body">
                        <div class="text-center">

                            <div>
                                <label class=" form-label"> LOCATION </label>
                                <P><?PHP echo $location;?></P>
                            </div>
                            <div>
                                <label class="form-label h5"> DOB </label>
                                <P><?PHP echo $dob;?></P>
                            </div>
                            <div>
                                <label class=" form-label"> GENDER </label>
                                <P><?PHP echo $gender;?></P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




<?php
        }
    }else {
        echo "Error executing querry $sql". mysqli_error($link);
    }
}
?>
