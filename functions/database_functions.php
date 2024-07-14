<?php

function db_connect()
{
    $conn = mysqli_connect('localhost', 'root', '', 'Tahleel');
    // mysqli_set_charset($conn, 'utf8');
    // mysqli_set_charset("UTF8", $conn);
    if (!$conn) {
        echo "Can't connect database ".mysqli_connect_error($conn);
        exit;
    }

    return $conn;
}

function getAllBlog()
{
    $conn = db_connect();
    $query = "SELECT * FROM `blogs`  , `user` ,`topic` WHERE  blogs.created_by = user.id and blogs.topic = topic.id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services price failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}

function getAllBlogsbyID($id)
{
    $conn = db_connect();
    $query = "SELECT * FROM `blogs`  , `user` ,`topic` WHERE blogs.blog_id = $id and blogs.created_by = user.id and blogs.topic = topic.id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return mysqli_fetch_assoc($result);
}
function getAllProperties()
{
    $conn = db_connect();
    $query = "SELECT * FROM `properties`  , `user`  WHERE  properties.user_id = user.id ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services price failed! '.mysqli_error($conn);
        exit;
    }
    return $result;
}

function deleteHospitle($id)
{
    $conn = db_connect();
    $query = "DELETE FROM `hospitle` where id_hospitle = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function addHospitle($name)
{
    $conn = db_connect();
    $query = "INSERT INTO `hospitle`( `name_hospitle`) VALUES ('$name')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function editHospitle($id , $name)
{
    $conn = db_connect();
    $query = "UPDATE `hospitle` SET `name_hospitle`='$name' WHERE `id_hospitle`=".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
/////////////////////////////////////////////////////////////////////////
function getAllroom_type()
{
    $conn = db_connect();
    $query = "SELECT * FROM `room_type`";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}

function getAllroom_typebyID($id)
{
    $conn = db_connect();
    $query = "SELECT * FROM `room_type` where room_type_id = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return mysqli_fetch_assoc($result);
}
function deleteroom_type($id)
{
    $conn = db_connect();
    $query = "DELETE FROM `room_type` where room_type_id = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function addroom_type($name)
{
    $conn = db_connect();
    $query = "INSERT INTO `room_type`( `room_type_name`) VALUES ('$name')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function editroom_type($id , $name)
{
    $conn = db_connect();
    $query = "UPDATE `room_type` SET `room_type_name`='$name' WHERE `room_type_id`=".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}






/////////////////////////////////////////////////////////////////////////
function getAllrooms()
{
    $conn = db_connect();
    $query = "SELECT * FROM `rooms`  , `room_type` ,`hospitle` WHERE  room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}
function getAllroomArray()
{
    $conn = db_connect();
    $query = "SELECT rooms.id_room , rooms.info_rome,rooms.price_room ,hospitle.name_hospitle ,room_type.room_type_name FROM `rooms`  , `room_type` ,`hospitle` WHERE status_room = 'فارغة' and room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}
function getAllroomArrayID($id)
{
    $conn = db_connect();
    $query = "SELECT rooms.id_room , rooms.info_rome,rooms.price_room ,hospitle.name_hospitle ,room_type.room_type_name FROM `rooms`  , `room_type` ,`hospitle` WHERE status_room = 'فارغة' and rooms.id_room=$id and room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}


function getAllroomsbyID($id)
{
    $conn = db_connect();
    $query = "SELECT * FROM `rooms` where id_room = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return mysqli_fetch_assoc($result);
}
function deleterooms($id)
{
    $conn = db_connect();
    $query = "DELETE FROM `rooms` where id_room = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function addMessage($name,$email,$phone,$message)
{
    $conn = db_connect();
    $query = "INSERT INTO `message`( `name`, `email`, `phone_number`, `message`) VALUES 
    ('$name','$email','$phone','$message' )";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}

//property add function in database
function addProperty($name,$des,$service,$city,$hood,
$num_bed,$num_bath,$square,$price , $user_id ,$image)
{
    $conn = db_connect();
    $query = "INSERT INTO `properties`( `name`, `description`, `service`, `city`,
    `hood`, `num_bedrooms`, `num_bathrooms`, `square`,`price`,
     `user_id`, `image`) VALUES 
    ('$name','$des','$service','$city','$hood',
'$num_bed','$num_bath','$square','$price' , '$user_id' ,'$image' )";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function addblog($subject,$topic,$content,$user_id,$image)
{
    $conn = db_connect();
    $query = "INSERT INTO `blogs`( `subject`, `topic`, `content`,`created_by`, `topic_image`) VALUES 
    ('$subject','$topic','$content','$user_id','$image')";
    
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function editrooms($id_room,$info_rome,$price_room,$hospitle_room,$tybe_room)
{
    $conn = db_connect();
    $query = "UPDATE `rooms` SET `info_rome`='$info_rome' ,`price_room`=$price_room,`hospitle_room`=$hospitle_room  WHERE `id_room`=".$id_room;
    var_dump($query);
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}


/////////////////////////////////////////////////////////////////
function getAllTopic()
{
    $conn = db_connect();
    $query = "SELECT * FROM `topic` ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}

function getAlluserbyID($id)
{
    $conn = db_connect();
    $query = "SELECT * FROM `user` WHERE id_user = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return $result;
}



function login($email ,$password)
{
    $conn = db_connect();
    $query = "SELECT * FROM `user` , `user_type` WHERE email_user = '$email'  and password ='$password' and user.type = user_type.id ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return mysqli_fetch_assoc($result);
}

function change_password($user_id , $oldpassword,$newpassword){
    $conn = db_connect();
    $query = "UPDATE `user` SET password = '$newpassword'  WHERE `id`='$user_id' and password = '$oldpassword'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'change_password want wronge! '.mysqli_error($conn);
        exit;
    }
    return $result;

}

function regstrion( $name_user, $email_user, $phone_user, $address_user, $nationl_num_user, $password_user, $type_user)
{
    $conn = db_connect();
    $query = "INSERT INTO `user`(`name_user`, `email_user`, `phone_user`, `address_user`, `nationl_num_user`, `password_user`,
     `type_user`) VALUES ('$name_user', '$email_user', '$phone_user', '$address_user', '$nationl_num_user', '$password_user', '$type_user')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return login($email_user ,$password_user);
}



function getAllMessages()
{
    $conn = db_connect();
    $query = "SELECT * FROM `message` ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}

function getAllbooking_sure()
{
    $conn = db_connect();
    $query = "SELECT * FROM `rooms`  , `room_type` ,`hospitle` ,`booking`,`user` WHERE status_room = 'حجز مؤكد' and booking.booking_user_id = user.id_user and booking.booking_room_id = rooms.id_room and room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle ;
    ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
    return $result;
}



 function redirct ($url){
    header("location:$url");
}























