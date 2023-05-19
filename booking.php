<?php
    include('controllers/mycontrollers.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survery Form</title>
    <script src="https://kit.fontawesome.com/7cab3097e7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-query.css">
</head>

<body>
    <div class="container">
        <header id="header">
            
            <div class="logo">
                <h1 id="header-text"> PetCare</h1>
                <a href="javascript:void(0);" class="icon" id="navIcon">
                    <i class="fa fa-bars" id="openIcon"></i>
                    <!-- <i class="fa-solid fa-xmark" id ="closeIcon"></i> -->
                </a>
            </div>
            <nav id="navlist" class="navlist">
                <ul>
                    <li>
                        <a href="index.php" class="nav-link"> Home </a>
                    </li>
                    <li>
                        <a href="index.php#services" class="nav-link"> Services </a>
                    </li>
                    <li>
                        <a href="index.php#about-us" class="nav-link"> About </a>
                    </li>
                    <li>
                        <a href="data.html" target="_blank" class="nav-link"> Testimonial </a>
                    </li>

                </ul>

                <div class="book-schedule">

                    <a href="https://wa.me/2348103273279?text=I'm%20interested%20in%20your%20Pet%20Vaccination%20programme"
                        target="_blank" id="schedule"><i class="fa-brands fa-whatsapp"></i> CHAT WITH US</a>
                </div>
            </nav>
        </header>

        <div class="form-container">
            <main>
                <h1> PetCare</h1>
                <h2>Vaccination Booking Form</h2>
            </main>

            <form action="" method="post" id="booking-form">
            <?php   
                    if(count($error_message) > 0): 
                ?>
                        <div class="alert alert-danger">
                            
                            <?php 
                                foreach ($error_message as $error): 
                            ?>
                                <li>
                                    <?php
                                        echo $error; 
                                    ?>
                                </li>
                                <?php endforeach; ?>
                        </div>
                <?php endif; ?>
                <!-- <div class="form-input">
                    <label class="upper-label">Booking ID <i>*</i></label>
                    <div class="name-wrapper">
                        <div class="name-form">
                            <input type="text" name="booking_id" id="booking_id" disabled>
                        </div>
                        <div class="name-form">
                            <button id="generateID" onclick="randomString();">Generate Booking ID</button>
                        </div>
                    </div>

                </div> -->
                <div class="form-input">
                    <label class="upper-label">Name <i>*</i></label>
                    <div class="name-wrapper">
                        <div class="name-form">
                            <input type="text" name="firstname" id="firstname" placeholder="Type your answer here" required>
                            <label for="firstname" id="firstname-label">First Name</label>
                        </div>
                        <div class="name-form">
                            <input type="text" name="lastname" id="lastname" placeholder="Type your answer here" required>
                            <label for="lastname" id="lastname-label">Last Name</label>
                        </div>
                    </div>

                </div>

                <div class="form-input">
                    <label for="email">Email Address <i>*</i></label>
                    <input type="email" name="email" placeholder="Johndoe@gmail.com" required>
                </div>
                <div class="form-input">
                    <label for="phone">Phone Number <i>*</i></label>
                    <input type="tel" name="phone" placeholder="+234 810 327 3279" required>
                </div>
                <div class="form-input">
                    <label for="appointment_date">Date of Appointment <i>*</i></label>
                    <input type="date" name="appointment_date" placeholder="07/05/2023" required>
                </div>
                <div class="form-input">
                    <label for="appointment_time">Appointment Time <i>*</i></label>
                    <input type="time" name="appointment_time" placeholder="Select Time" required>
                    <i id="select-time"> Please Select Time between 10:00am - 4:00pm</i>
                </div>
                <div class="form-input">
                    <label for="comments">Additional Comments <i>*</i></label>
                    <textarea name="comment" id="comments" cols="30" rows="10" placeholder="any additional information"
                        aria-setsize="off" required></textarea>
                        <p class="counter"> Characters: <span id="charCount">0</span></p>
                </div>
                <button type="submit" id="schedule_appointment" name="schedule_appointment"> Schedule
                    Appointment</button>
                    
            </form>
        </div>
    </div>
    <script src="main.js"></script>
    <script>
        // Generate Random Booking ID in booking form
        const bookingForm = document.getElementById("booking-form");

        // bookingForm.addEventListener("submit", function (event) {
        //     event.preventDefault();
        // })

        function randomString() {
            //define a variable consisting alphabets in small and capital letter 
            let generateBtn = document.getElementById('generateID')
            let characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz1234567890";

            //specify the length for the new string  
            let lenString = 7;
            let randomstring = '';

            //loop to select a new character in each iteration  
            for (let i = 0; i < lenString; i++) {
                let rnum = Math.floor(Math.random() * characters.length);
                randomstring += characters.substring(rnum, rnum + 1);
            }
            //display the generated string   
            document.getElementById("booking_id").value = randomstring;
            generateBtn.style.cursor = "not-allowed"
            
            generateBtn.disabled = true;

        }

         // Get the textarea element
         var textarea = document.getElementById("comments");

// Get the span element to display the character count
var charCountSpan = document.getElementById("charCount");

// Add event listener for input event
textarea.addEventListener("input", function() {
    // Get the current text value
    var text = textarea.value;

    // Update the character count
    charCountSpan.textContent = text.length;
    if(text.length === 100){
        window.addEventListener("DOMContentLoaded", function() {
            // Get the input element

            // Add event listener for keydown event
            textarea.addEventListener("keydown", function(event) {
                // Check if any key other than Backspace is pressed
                if (event.key !== "Backspace") {
                    // Prevent the default behavior (typing)
                    event.preventDefault();
                }
            });
        });
    }
});
    </script>
</body>

</html>