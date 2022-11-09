<?php
$firstname = $_POST['f_name'];
$mobile = $_POST['m_number'];
$email = $_POST['e_mail_set'];
$city = $_POST['city_set'];
$state = $_POST['stat_set'];
$zip = $_POST['zip_cod'];

$conn = new mysqli('localhost','root','','soft_techjet');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into user_contact_deatils(f_name, m_number, e_mail_set, city_set, stat_set, zip) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firstName, $mobile, $email, $city, $state, $zip);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}


?>