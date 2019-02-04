<?php

require_once "BLL.php";

session_start();

$command = $_REQUEST["command"];

switch ($command) {

    case "register":
        if (!isset($_POST["firstname"]) || ($_POST["firstname"]) == "") {
            header("Location: ../HTML/register.php?error=Missing First Name.");
        } elseif (!isset($_POST["lastname"]) || ($_POST["lastname"]) == "") {
            header("Location: ../HTML/register.php?error=Missing Last Name.");
        } elseif (!isset($_POST["username"]) || ($_POST["username"]) == "") {
            header("Location: ../HTML/register.php?error=Missing Username.");
        } elseif (!isset($_POST["password"]) || ($_POST["password"]) == "") {
            header("Location: ../HTML/register.php?error=Missing Password.");
        } elseif (is_username_exist($_POST["username"])) {
            header("Location: ../HTML/register.php?error=Username already taken");
        } else {
            register($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["username"], $_POST["password"]);
            $_SESSION["UserID"] = get_user_id($_POST["username"]);
            header("Location: ../HTML/videoLibrary.php");
        }
        break;

    case "login":
        if (!isset($_POST["username"]) || ($_POST["username"]) == "") {
            header("Location: ../HTML/login.php?error=Missing Username.");
        } elseif (!isset($_POST["password"]) || ($_POST["password"]) == "") {
            header("Location: ../HTML/login.php?error=Missing Password.");
        } elseif (is_user_exist($_POST["username"], $_POST["password"])) {
            $_SESSION["UserID"] = get_user_id($_POST["username"]);
            header("Location: ../HTML/videoLibrary.php");
        } else {
            header("Location: ../HTML/login.php?error=Incorrect Username or Password");
        }
        break;

    case "logout":
        session_destroy();
        header("Location: ../HTML/login.php");
        break;

    case "getVideosByUser":
        if (!isset($_SESSION["UserID"])) {
            header("Location: ../HTML/login.php");
        } else {
            $oopVideos = getVideosByUser($_SESSION["UserID"]);
            $json = json_encode($oopVideos);
            echo $json;
        }
        break;

    case "addVideo";
        if (!isset($_POST["videoTitle"]) || ($_POST["videoTitle"]) == "") {
            header("Location: ../HTML/addVideo.php?error=Missing Video Title.");
        } elseif (!isset($_POST["link"]) || ($_POST["link"]) == "") {
            header("Location: ../HTML/addVideo.php?error=Missing Link to Video.");
        } elseif (preg_match('#https?://(?:www\.)?youtube\.com/watch\?v=([A-Za-z0-9]{11})#', $_POST["link"]) == 0) {
            header("Location: ../HTML/addVideo.php?error=Invalid Link.");
        } else {
            addVideo($_SESSION["UserID"], $_POST["videoTitle"], $_POST["categoryID"], $_POST["description"], $_POST["link"]);
            header("Location: ../HTML/videoLibrary.php");
        }
        break;

    case "playVideo":
        $link = playVideo($_GET["videoID"]);
        //changing the link to embed:
        $link = substr($link, 32);
        $link = "https://www.youtube.com/embed/$link";
        header("Location: ../HTML/playVideo.php?link=$link");
        break;

    case "editVideo":
        if (preg_match('#https?://(?:www\.)?youtube\.com/watch\?v=([A-Za-z0-9]{11})#', $_POST["link"]) == 0) {
            header("Location: ../HTML/editVideo.php?videoID=".$_POST["videoID"]."&catname=Automotive&error=Invalid Link.");
        } else {
            editVideo($_POST["videoTitle"], $_POST["categoryID"], $_POST["description"], $_POST["link"], $_POST["videoID"]);
            header("Location: ../HTML/videoLibrary.php");
        }
        break;

    case "deleteVideo":
        deleteVideo($_GET["videoID"]);
        header("Location: ../HTML/videoLibrary.php");
        break;

    case "searchVideo":
        $oopVideos = searchVideo($_SESSION["UserID"], $_GET["searchQ"]);
        $json = json_encode($oopVideos);
        echo $json;
        break;
}


    