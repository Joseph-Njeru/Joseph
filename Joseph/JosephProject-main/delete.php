<?php
//check if the user is loggedin
//session_start();
//if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
// header("location: login.php");
//  exit();
//}

include "wartheader.php";
include "configuration.php";
if (isset($_POST['submit']) and !empty($_POST['id'])){
    $id = $_POST['id'];

    echo $sql ="DELETE FROM `employees` WHERE id = $id";

    $results = mysqli_query($link, $sql);

    if ($results) {
        echo " you delete the record";
        header("location; Edocs.php");

    } else {
        echo "error executing your query $sql" . mysqli_error($link);
    }

} else {
    echo "Try deleting a record";
}


?>

<div class="row m-2 p-2">
    <div class="alert alert-danger col-md-6">
        <form action="delete.php" method="post">
            <div class="p-2">
                <label class="form-label"> are you sure you want to delete this record? </label>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

            </div>

            <div class="p-2">
                <input class="col md-3 btn btn-danger" type="submit" value="Yes" name="submit">
                <a  class=" col md-3 btn btn-primary" href="Edocs.php">No</a>

            </div>

        </form>

    </div>
    </body>
    </html>
</div>