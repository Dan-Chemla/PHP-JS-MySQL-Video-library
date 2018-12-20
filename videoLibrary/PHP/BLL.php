<?php

require_once "DAL.php";
require_once "Video.php";

function is_username_exist($username) {
    $username = addslashes($username);
    $sql = "select count(*) as total_rows from users where username = '$username'";
    $count = get_object($sql)->total_rows;
    return $count > 0;
}

function register($firstname, $lastname, $email, $username, $password) {

    $firstname = addslashes($firstname);
    $lastname = addslashes($lastname);
    $email = addslashes($email);
    $username = addslashes($username);
    $password = addslashes($password);

    $password = sha1($password);

    $sql = "insert into users(userid, firstName, lastName, email, username, password) values(uuid(), '$firstname','$lastname','$email','$username','$password')";
    insert($sql);
}

function is_user_exist($username, $password) {
    $username = addslashes($username);
    $password = addslashes($password);

    $password = sha1($password);

    $sql = "select count(*) as total_rows from users where username = '$username' and password = '$password'";
    $count = get_object($sql)->total_rows;
    return $count > 0;
}

function get_user_id($username) {
    $username = addslashes($username);
    $sql = "select UserID from users where username = '$username'";
    return get_object($sql)->UserID;
}

function getVideosByUser($UserID) {
    $sql = "SELECT VideoID, VideoTitle, CategoryName, Description,Link FROM videos AS V JOIN categories AS C ON V.CategoryID = C.CategoryID WHERE UserID = '$UserID'";

    $dbVideos = select($sql);

    foreach ($dbVideos as $v) {
        $oopVideos[] = new Video($v->VideoID, $v->VideoTitle, $v->CategoryName, $v->Description, $v->Link);
    }

    return $oopVideos;
}

function addVideo($UserID, $videoTitle, $categoryID, $description, $link) {
    $sql = "INSERT INTO videos(UserId,VideoID,VideoTitle,CategoryID,Description,Link) VALUES('$UserID', '', '$videoTitle' , '$categoryID', '$description', '$link')";
    insert($sql);
}

function editVideo($videoTitle, $categoryID, $description, $link, $videoID) {
    $sql = "UPDATE videos SET VideoTitle='$videoTitle', CategoryID='$categoryID',Description='$description', Link='$link' WHERE VideoID = '$videoID'";
    update($sql);
}

function deleteVideo($videoID) {
    $sql = "DELETE FROM videos WHERE VideoID = '$videoID'";
    delete($sql);
}

function playVideo($videoID) {
    $sql = "SELECT Link FROM videos WHERE VideoID = '$videoID'";

    return get_object($sql)->Link;
}

function getVideosByID($videoID) {
    $sql = "SELECT VideoTitle, CategoryID, Description, Link FROM videos WHERE VideoID = '$videoID'";

    $video = get_object($sql);

    return $video;
}

function searchVideo($UserID, $searchQ) {
    $sql = "SELECT VideoID, VideoTitle, CategoryName, Description,Link FROM videos AS V JOIN categories AS C ON V.CategoryID = C.CategoryID WHERE UserID = '$UserID' AND (VideoTitle LIKE '%$searchQ%' OR Description LIKE '%$searchQ%')";

    $dbVideos = select($sql);

    foreach ($dbVideos as $v) {
        $oopVideos[] = new Video($v->VideoID, $v->VideoTitle, $v->CategoryName, $v->Description, $v->Link);
    }

    return $oopVideos;
}
