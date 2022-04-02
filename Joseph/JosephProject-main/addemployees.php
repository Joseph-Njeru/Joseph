<?php

//check if the user is loggedin;
//session_start();

//if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
//  header("location: login.php");
 // exit();
//}

include "wartheader.php"
?>


<div class="row m-2">
    <div class="col-6">
        <h3 class="grey"> Add Employee </h3>
    </div>


    <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">View Data</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">WART ADMIN DATA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-hover table-bordered m-3">
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>number</th>
                            </tr>
                            <tr>
                                <td>Jane Johnstone</td>
                                <td>Female</td>
                                <td>1072</td>

                            </tr>

                            <tr>
                                <td>Abubakar Seif</td>
                                <td>Female</td>
                                <td>2016</td>
                            </tr>
                            <tr>
                                <td>Simon Peter</td>
                                <td>Male</td>
                                <td>3045</td>
                            </tr>
                            <tr>
                                <td>Jayden Cue</td>
                                <td>Male</td>
                                <td>3632</td>
                            </tr>
                            <tr>
                                <td>Esther Sharon</td>
                                <td>Female</td>
                                <td>0001</td>
                            </tr>

                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="row m-2">

    <form action="handleaddemployees.php" method="post" enctype="multipart/form-data">
        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label> Enter your Full Name </label>
                <input class=" form-control" type="text" name="fullname" placeholder="">
                <div class="col-md-6">
                    <label> Enter your Clock Number </label>
                    <input class=" form-control" type="text" name="clocknumber" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <label> Enter your Email Address </label>
                <input class=" form-control" type="email" name="emaladdress" placeholder="  ">
            </div>
        </div>
        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label> Enter your Phone Number </label>
                <input class=" form-control" type="text" name="phonenumber" placeholder=" ">
            </div>
            <div class="col-md-6">
                <label> Enter your Location </label>
                <input class=" form-control" type="text" name="location" placeholder=" ">
            </div>
        </div>


        <div class="row m-2">
            <div class="col-md-6">
                <label> Date of Birth </label>
                <input class="form-control" type="date" name="">

            </div>
            <div class="col-md-6">
                <label> Gender </label>
                <select class="form-control" name="gender" id="">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other"></option>

                </select>
            </div>

            <div class="row m-2 p-2">
                <div class="col-md-6">
                    <label> Your Photo </label>
                    <input class="form-control" type="File" name="">
                </div>
                <div class="col-md-6">
                    <label> Your Cv </label>
                    <input class="form-control" type="File" name="">
                </div>

            </div>

        </div>

        <div class="m-2 p-2">
            <div class="text-center">
                <input type="submit" class=" col-6 btn btn-outline-danger" value="Submit">
            </div>


        </div>


    </form>


</div>


</div>
</div>
</div>


</body>
</html>
