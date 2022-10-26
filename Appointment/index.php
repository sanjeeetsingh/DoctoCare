<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <p><?php
  $DID=$_GET['id'];
  echo $DID; 
  ?></p>
  <div class="container">
    <div class="title">APPOINTMENT DETAILS</div>
    <div class="content">
      <form action="connect1.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name" required name="firstName">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your last name" required name="lastName">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name="number">
          </div>
            <div class="input-box">
            <span class="details">Appointment Date</span>
            <input type="date" placeholder="Enter your appointment date" required name="app_date">
          </div>
            <div class="input-box">
            <span class="details">City</span>
            <input type="text" placeholder="Enter your city" required name="city">
          </div>
            
        </div>
        <div class="time-details">
          <input type="radio" name="time" value="5-6" id="dot-1">
          <input type="radio" name="time" value="6-7" id="dot-2">
          <input type="radio" name="time" value="7-8" id="dot-3">
          <span class="time-title">Time Slots Available</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="time">5-6</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="time">6-7</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="time">7-8</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="hidden" value=<?php
  $DID=$_GET['id'];
  echo $DID; 
  ?> name="doc_id">
          <input type="submit" value="SUBMIT">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
