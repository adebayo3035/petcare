<?php
$conn = mysqli_connect('localhost', 'root', '', 'petcare');
$error_message = [];
    
    // ADD SUBSCRIBERS
$customer_email = "";
if (isset($_POST['subscribeBtn'])) {
    $customer_email = $_POST['subscriberEmail'];
    if (empty($_POST['subscriberEmail'])) {
        $error_message['customer_email'] = "Please Fill Your Email is required";
    }
        // Check if E-mail AlreadY Exist
    $sql = "SELECT subscriber_email FROM subscribers WHERE subscriber_email = '$customer_email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $error_message['customer_email'] = "This E-mail Already Exist. Please Check.";
    }
    if (count($error_message) == 0) {
        $customer_email = $_POST['subscriberEmail'];
        $query = "INSERT INTO subscribers (subscriber_email) VALUES ('$customer_email')";
        $Insert_results = mysqli_query($conn, $query);
        if ($Insert_results) {
            $success_message = "You have been added to Our Subscription List";
            $customer_email = "";
            echo $success_message;
        } else {
            $failed_message = "Error Adding User to Subscription List";
            $customer_email = "";
            echo $failed_message;
        }
        exit();
    }
}

    // ADD BOOKINGS
$booking_id = "";
$customer_firstname = "";
$customer_lastname = "";
$customer_email = "";
$customer_phone = "";
$DOA = "";
$TOA = "";
$comment = "";

 //function to generate a random text with a given length
function generateRandomText($length)
{
    // Define the character set to choose from
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    $text = '';
    $charSetLength = strlen($characters);

    // Generate random characters to build the text
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charSetLength - 1);
        $text .= strtoupper($characters[$randomIndex]);
    }

    return $text;
}

if (isset($_POST['schedule_appointment'])) {
    // Usage example: Generate a random text with length 10
$customer_email = $_POST['email'];
$customer_phone = $_POST['phone'];
$customer_firstname = $_POST['firstname'];
$customer_lastname = $_POST['lastname'];
$DOA = $_POST['appointment_date'];
$TOA = $_POST['appointment_time'];
$comment = $_POST['comment'];

// perform form validation
$error_message = array();
if (empty($_POST['email'])) {
    $error_message['customer_email'] = "Please Fill Your Email is required";
}
if (empty($_POST['phone'])) {
    $error_message['customer_phone'] = "Please Fill Your Phone Number is required";
}
if (empty($_POST['firstname'])) {
    $error_message['customer_firstname'] = "Please Fill Your First Name is required";
}
if (empty($_POST['lastname'])) {
    $error_message['customer_lastname'] = "Please Fill Your Lastname is required";
}
if (empty($_POST['appointment_date'])) {
    $error_message['appointment_date'] = "Please Select Appointment Date";
}
if (empty($_POST['appointment_time'])) {
    $error_message['appointment_time'] = "Please Select Appointment Time";
}
    $date_of_appointment = date('Y-m-d', strtotime($DOA));
    $time_of_appointment = date('H:i:s', strtotime($TOA));
    // Check if The Date is Free
$sql = "SELECT date_of_appointment FROM bookings WHERE date_of_appointment = '$date_of_appointment' LIMIT 2";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    //echo "Please Select another Date, that Date has been Choosen Already";
     $error_message['booking_id'] = "Please Select another Date, that Date has been Choosen Already.";
}
if (count($error_message) == 0) {
    
    $booking_id = generateRandomText(10);
    // echo $booking_id . "<br/>";
    $query = "INSERT INTO bookings (booking_id, customer_firstname, customer_lastname, customer_email, customer_phone, date_of_appointment, time_of_appointment, comment) 
        VALUES ('$booking_id', '$customer_firstname', '$customer_lastname', '$customer_email', '$customer_phone', '$date_of_appointment', '$time_of_appointment', '$comment')";
    $Insert_results = mysqli_query($conn, $query);
    if ($Insert_results) {
        echo "<script>location.replace('../messages/booking_success.php');</script>";
        // $success_message = "You Booking has been Successfully Received. Thank You";
        // $customer_email = "";
        // echo $success_message . "<br/>";
        // echo $date_of_appointment . "<br/>";
        // echo $time_of_appointment;
        $booking_id = "";
        
    } else {
        echo "<script>location.replace('../messages/booking_fail.php');</script>";
        // $failed_message = "Error Creating Booking Please try Again";
        // $customer_email = "";
        // echo $failed_message;
    }
    // header("Location: ".$_SERVER['booking.php']);
    exit();
}
}

?>

