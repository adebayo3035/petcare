<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survery Form</title>
</head>
<body>
    <div class="container">
        <h1> Pet Vaccination Booking Form</h1>
        <form action="" method="post">
            <div class="form-input">
                <label>Name <i>*</i></label>
                <div class="name-form">
                    <input type="text" name="firstname" id="firstname" placeholder="Type your answer here">
                    <label for="firstname">First Name</label>
                </div>
                <div class="name-form">
                    <input type="text" name="lastname" id="lastname" placeholder="Type your answer here">
                    <label for="lastname">Last Name</label>
                </div>
            </div>

            <div class="form-input">
                <label for="email">Email Address</label>
                <input type="email" name="email" placeholder="Johndoe@gmail.com">
            </div>
            <div class="form-input">
                <label for="phone">Phone Number</label>
                <input type="phone" name="phone" placeholder="+234 810 327 3279">
            </div>
            <div class="form-input">
                <label for="appointment_date">Date of Appointment</label>
                <input type="date" name="appointment_date" placeholder="07/05/2023">
            </div>
            <div class="form-input">
                <label for="appointment_time">Appointment Time</label>
                <input type="time" name="appointment_time" placeholder="Select Time">
                <i> Please Select Time between 10:00am - 4:00pm</i>
            </div>
            <div class="form-input">
                <textarea name="comments" id="comments" cols="30" rows="10" placeholder="any additional information"></textarea>
            </div>
            <button type="submit" id="schedule_appointment"> Schedule Appointment</button>
        </form>
    </div>
</body>
</html>