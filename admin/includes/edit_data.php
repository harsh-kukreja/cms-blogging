<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 27-12-2018
 * Time: 15:13
 */

include_once ("admin_connection.php");

if(isset($_POST['edit_category'])){
    $cat_title = $_POST['cat_title'];
    $cat_id =$_POST['cat_id'];
    $query = "UPDATE categories SEt cat_title= '$cat_title' WHERE cat_id = $cat_id";
//    die($query);
    mysqli_query($connection , $query);
    if(mysqli_errno($connection)){
        die(mysqli_error($connection));
    }
    header("Location: ../categories.php");
}

