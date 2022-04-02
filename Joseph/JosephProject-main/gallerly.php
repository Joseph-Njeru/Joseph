<?php
include "wartheader.php";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>

<h2 class="text-center">The Gallerly</h2>
<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dignissimos eligendi facere hic ipsa iste iusto magnam nesciunt placeat, veniam. A at distinctio, fuga hic nobis odit repellendus sapiente ullam!</p>

<div class="row">
    <div class="column">
        <img src="images/R.gif" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="images/R.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="images/smart-car.png" alt="Mountains" style="width:100%">
    </div>
</div>
<div class="row">
    <div class="column">
        <img src="images/OIP.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="images/Car-Software.png" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="images/11.jpg" alt="Mountains" style="width:100%">
    </div>
</div>
<div class="row">
    <div class="column">
        <img src="images/car-seat.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="images/complication.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="images/Autoradio.jpg" alt="Mountains" style="width:100%">
    </div>
</div>
<div class="row">
    <div class="column">
        <img src="images/autonomous-driving.webp" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="images/wart.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="images/automotive-engineering.jpg" alt="Mountains" style="width:100%">
    </div>
</div>
</body>
</html>
