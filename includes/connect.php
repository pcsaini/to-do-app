<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 15/12/16
 * Time: 5:14 PM
 */

$conn = mysqli_connect("localhost","root","") or die("connection error");
mysqli_select_db($conn,"to-do");
