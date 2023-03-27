<?php

if (isset($_POST["submit"])) {
    #Grabbing data
    $instructorid = $_POST["inst_code"];

    include_once "../database/database.classes.php";
    include_once "../classes/instructor-login.classes.php";
    include_once "../controller/instructor-login.contr.php";

    $login = new InstructorLoginContr($inst_code);

    $login->loginUser();

    header('Location: ../view/homepage.php');
}
