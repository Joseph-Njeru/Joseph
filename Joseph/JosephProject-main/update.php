<?php
//check if the user is loggedin
//session_start();

//if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
  //  header("location: login.php");
  //  exit();
//}
include "wartheader.php";
include "configuration.php";
if (isset($_POST['submit']) and !empty($_POST['id'])){

#updating here
    //pick values
    $id=$_POST["id"];
    $up_id = $_POST["id"];
    $up_fullname = $_POST["fullname"];
    $up_clocknumber = $_POST["clocknumber"];
    $up_emailAddress = $_POST["emailaddress"];
    $up_phoneNumber = $_POST["phonenumber"];
    $up_gender = $_POST["gender"];
    $up_location = $_POST["location"];
    $up_dob = $_POST["dob"];



    //Files
    $photoname =$FILES['photo']['name'];
    $tempname =$FILES['photo']['temp_name'];
    $folder = "uploads/".$photoname;

    //CV
    $cvname =$FILES['CV']['name'];
    $cvtemp =$FILES['cv']['tempname'];
    $cvfolder = "uploads/".$cvname;



    $up_sql = "UPDATE `employees` SET `id`='$up_id',`fullname`='$up_fullname',`clocknumber`='$up_clocknumber'`emailaddress`='$up_emailAddress',`phonenumber`='$up_phoneNumber',
                      `location`='$up_location',`dob`='$up_dob',`gender`='$up_gender',`photo`='$photoname',`cv`='$cvname' WHERE id=$id";


    $up_result= mysqli_query($link, $up_sql);
    if (move_uploaded_file($tempname, $folder)){
        echo "<p class='alert alert-success'>image has been updated</p>";
    }else{
        echo "error uploadng image";
    }

    if (move_uploaded_file($cvtemp, $cvfolder)){
        echo "<p class='alert alert-warning'>Cv has been updated</p>";
    }else{
        echo "error uploadng your cv";
    }

    if ($up_result){
        echo "<p class='alert alert-danger'>record updated Succesifully ";
        echo "<a href='Edocs.php' class='col-md-6 btn btn-primary'>BACK</a>";
    }else{
        echo "error updating the record $up_sql" .mysqli_error($link);
    }


}else{
    if (isset($_GET['id']) and !empty($_GET['id'])){

        $id = $_GET['id'];
        $sql = "SELECT * FROM `employees` WHERE id=$id";

        $result = mysqli_query($link, $sql);

        if ($result){
            $data = mysqli_num_rows($result);

            if ($data ==1){
                $row = mysqli_fetch_array($result);
                $fullname = $row ('fullname');
                 $clocknumber = $row ('clocknumber');
                $emailaddress = $row ('emailaddress');
                $phonenumber = $row ('phonenumber');
                $location = $row ('location');
                $dob = $row ('dob');
                $gender = $row ('gender');
                $photo = $row ('photo');
                $cv = $row ('cv');
            }
        }else {

            echo "Error executing querry $sql". mysqli_error($link);
        }

    }
}




?>


<div class="row m-2">
    <div class="card-header text-primary bg-white"><b>UPDATE THE DATA</b></div>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label>  Enter your Full Name  </label>
                <input class=" form-control" type="text" name="fullname" value= "<?php echo $fullname;?>">
            </div>
              <label>  Enter your Clock Number  </label>
                <input class=" form-control" type="text" name="clocknumber" value= "<?php echo $clocknumber;?>">
            </div>
            <div class="col-md-6">
                <label> Enter your Email Address </label>
                <input class=" form-control" type="email" name="emaladdress" value= "<?php echo $emailaddress;?>">
            </div>
        </div>
        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label> Enter your Phone Number   </label>
                <input class=" form-control" type="text" name="phonenumber" value= "<?php echo $phonenumber;?>">
            </div>
            <div class="col-md-6">
                <label> Enter your Location   </label>
                <input class=" form-control" type="email" name="location" value= "<?php echo $location;?>">
            </div>
        </div>


        <div class="row m-2">
            <div class="col-md-6">
                <label> Date of Birth  </label>
                <input class="form-control" type="date" value= "<?php echo $dob;?>">

            </div>
            <div class="col-md-6">
                <label>  Gender  </label>
                <select class="form-control" name="gender" value= "<?php echo $gender;?>">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other"></option>

                </select>
            </div>

            <div class="row m-2 p-2">
                <div class="col-md-6">
                    <label>  Your Photo  </label>
                    <input class="form-control" type="File" value= "<?php echo $photo;?>" >
                </div>
                <div class="col-md-6">
                    <label>  Your Cv </label>
                    <input class="form-control" type="File" value= "<?php echo $cv;?>" >
                </div>

            </div>


            <div>
                <label>ID</label>
                <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
            </div>

        </div>

        <div class="m-2 p-2">
            <div class="col-md-6">
                <input type="submit" name="update" class=" col-6 btn btn-primary" value="UPDATE">
            </div>
            <div class="col-md-6">
                <a href="Edocs.php" class="col-md-6 btn btn-outline-danger">CANCEL</a>
            </div>


        </div>



    </form>


</div>




</div>
</div>
</div>




</body>
</html>
