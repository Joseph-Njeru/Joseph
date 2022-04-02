<?php

$link = mysqli_connect("localhost","root","","brave");

if ($link == false){
    die("Error connecting".mysqli_connect_error($link));
}