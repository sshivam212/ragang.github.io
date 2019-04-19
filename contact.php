<html>
<head>
<title>
</title>
<body>
<?php 
    include_once "header.php";

?>
<form action="contactus.php"  onsubmit="return validateForm();" method="post">
    <div class="row collapse">
        <div class="large-2 columns">
            <label class="inline">First Name</label>
        </div>
        <div class="large-10 columns">
            <input type="text" id="firstName" name="firstName" placeholder="Your Name" required>
        </div>
    </div>

    <div class="row collapse">
        <div class="large-2 columns">
            <label class="inline">Last Name</label>
        </div>
        <div class="large-10 columns">
            <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
        </div>
    </div>

    <div class="row collapse">
        <div class="large-2 columns">
            <label class="inline" > Your Email</label>
        </div>
        <div class="large-10 columns">
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
    </div>
    <label>Your Message</label>
    <textarea rows="8" name="message" required></textarea>
    <br><br>
    <button type="submit" class="radius button">Submit</button>
</form>
</body>
</head>
</html>