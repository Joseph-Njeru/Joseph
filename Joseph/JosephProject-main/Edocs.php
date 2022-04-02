<?php
//check if the user is loggedin
//session_start();

//if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
   // header("location: login.php");
   // exit();
//}

include "wartheader.php";

?>

    <div class="row m-2">
        <div class="col-6">
            <h3 class="grey"> Monitor Employees </h3>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-primary float-end">
                Download Data
            </button>

        </div>

    </div>



<?php
include "configuration.php";

//Select Query

$sql = "SELECT `id`, `fullname`, `clocknumber`, `emailaddress`, `phonenumber`, `location`, `dob`, `gender`, `photo`, `cv` FROM `employees`";


$result = mysqli_query($link,$sql);

if ($result) {
    $data = mysqli_num_rows($result);


    if ($data = 0) {
        echo "<table class='table table-bordered table-striped bg-white' >";
        echo "<tr>";
        echo "<th> #ID </th>";
        echo "<th> Full Name  </th>";
        echo "<th> Clock Number  </th>";
        echo "<th> Phone Number </th>";
        echo "<th> Location </th>";
        echo "<th> Gender </th>";
        echo "<th>   Photo </th>";
        echo "<th> Actions </th>";
        echo "</tr>";


        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['clocknumber'] . "</td>";
            echo "<td>" . $row['phonenumber'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['photo'] . "</td>";
            echo "<td>
            <a href='delete.php?id=" . $row['id'] . "'class='m-2'><i class='fa fa-trash'></i></a>
            <a href='update.php?id=" . $row['id'] . "' class='m-2'><i class='fa fa-pencil'></i></a>
            <a href='view.php?id=" . $row['id'] . "' class='m-2'<i class='fa fa-eye'></i> </a>
            </td>";
            echo "</tr>";

            echo "</table>";
        }
    }

}

