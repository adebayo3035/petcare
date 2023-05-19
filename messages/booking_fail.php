<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/messages.css">
    <link rel="icon" type="image/x-icon" href="../resources/images/logo-colored.png">
    <title>Error Creating Your Booking</title>
</head>

<body>
    <!-- The Modal -->
    <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content modal-fail" id="clockoutModal" >
    <span class="close" id="close_Clockin">&times;</span> 
    <p>Your Booking was Successful.</p>
</div>

</div>
<!-- eND OF mODAL bOX -->
<script>
    // Get the span element with class name "close"
var closeSpan = document.querySelector('.close');

// Add a click event listener to the close span
closeSpan.addEventListener('click', function() {
  // Redirect to another page
  window.location.replace('../index.php')
});

</script>
</body>
</html>
