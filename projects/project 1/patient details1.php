<!DOCTYPE html>
<html>
<head>
    <title>Postnatal Health Care</title>
    <style>
        body {
            background-image: url("background 2.jpg");
            background-position: center;
            background-size: cover;
        }
        form { 
            width: 39%;
            height: 300px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            background-color: grey;
            border-radius: 10px;
            padding: 50px 35px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.5);
        }
        .background .shape {
            height: 200px;
            width: 200px;
            position: cover;
            border-radius: 50%;
            background: linear-gradient(to right, #ff105f, #ffad06);
        }
        .background .shape:first-child {
            top: -80px;
            left: -80px;
        }
        .background .shape:nth-child(2) {
            top: -80px;
            right: -80px;
        }
        .clearfix button {
            display: inline-block;
            height: 40px;
            width: 100px;
            margin: 8px;
            font-size: 14px;
            font-weight: 300;
            border-radius: 8px;
        }
        footer {
            height: 40px;
        }
        #footer-content {
            background-color: black;
            color: white;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="buttons">
        <button><a href="welcome.php" target="blank">POSTNATAL HEALTH CARE</a></button>
        <button><a href="MOTHER LOGIN.php" target="blank">MOTHER LOGIN</a></button>
        <button><a href="patient sign up1.php" target="blank">PATIENT SIGN UP</a></button>
        <button><a href="patient details.php" target="blank">PATIENT DETAILS</a></button>
        <button><a href="doctor.php" target="blank">DOCTOR'S PAGE</a></button>
        <button><a href="contact us.php" target="blank">Contact us</a></button>
        <button><a href="payment1.php" target="blank">PAYMENT</a></button>
        <button><a href="Login.php" target="blank">ADMIN LOGIN</a></button>
    </div>

    <!-- HTML form for user input -->
    <form method="POST" action="Details.php">
        Mothername:<center></center><input type="text" name="Mothername" placeholder="Mothername" required><br><br>
        Phonenumber:<center></center><input type="tel" name="Phonenumber" placeholder="Enter phonenumber" minlength="10" maxlength="10" required><br><br>
        <label for="symptoms">symptoms:<center></center></label>
        <select name="symptoms" id="symptoms">
            <option value="anxiety">anxiety</option>
            <option value="feeling tired">feeling tired</option>
            <option value="severe mood swings">severe mood swings</option>
            <option value="weight loss or gain">weight loss or gain</option>
            <option value="severe sadness">severe sadness</option>
        </select><br><br>
        Pregnancynumber:<center></center><input type="number" name="times" placeholder="Enter pregnumb" min="1" max="10" required><br><br>
        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" name="submit">SUBMIT</button><br><br>
        </div>
    </form>
    <footer>
        <div id="footer-content">Contacts: pnc@gmail.com 2022</div>
    </footer>
<body>
    <?php
    include 'connect.php';
    if (isset($_POST['submit'])) {
        $Mothername = $_POST['Mothername'];
        $Phonenumber = $_POST['Phonenumber'];
        $symptoms = $_POST['symptoms'];
        $sql = "INSERT INTO details (Mothername, Phonenumber, symptoms) VALUES ('$Mothername', '$Phonenumber', '$symptoms')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Entered successfully";
            if ($symptoms == "panic attack" || $symptoms == "anxiety") {
                // Send email to doctor
                $to = "doctor@example.com"; // Replace with doctor's email
                $subject = "Urgent: Patient Needs Attention";
                $message = "Patient Name: $Mothername\nPhone Number: $Phonenumber\nSymptom: $symptoms\nPlease contact the patient immediately.";
                $headers = "From: noreply@yourdomain.com"; // Replace with appropriate sender email

                if (mail($to, $subject, $message, $headers)) {
                    echo "<script>alert('Email sent to doctor');</script>";
                } else {
                    echo "<script>alert('Failed to send email');</script>";
                }
            }
            header('Location: Details.php');
        } else {
            die(mysqli_error($conn));
        }
    }
    mysqli_close($conn); // Close database connection
    ?>
   
</body>
</html>
