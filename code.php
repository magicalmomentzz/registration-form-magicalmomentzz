<?php
session_start();
// dbconfig file start

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/magicalmomentzz-81671-firebase-adminsdk-j9kwo-d8d8677993.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://magicalmomentzz-81671-default-rtdb.asia-southeast1.firebasedatabase.app/eventfirst')
    ->create();

$database = $firebase->getDatabase();

// dbconfig file end


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobNo = $_POST['mobNo'];
    $quantity = $_POST['quantity'];
    $payment = $_POST['payment'];

    $data = [
        'name' => $name,
        'email'=> $email,
        'mobNo' => $mobNo,
        'quantity' => $quantity,
        'payment'=> $payment
    ];
    $ref = "eventfirst/";
    // Create a key for a new post
    $postdata = $database->getReference($ref)->push($data);

    if($postdata){
        $_SESSION['status']= "you will get your pass before one day of events";
        header("location : index.php");

    }else{
        $_SESSION['status']= "check your payment status. something went wrong";
        header("location : insert.php");
    }
}



?>