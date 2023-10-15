<?php
$server = "localhost";
$username = "root";
$password = "";
$databaseName = 'donation';

$con = mysqli_connect($server, $username, $password, $databaseName);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donorName = mysqli_real_escape_string($con, $_POST['donorName']);
    $donorEmail = mysqli_real_escape_string($con, $_POST['donorEmail']);
    $donationAmount = floatval($_POST['donationAmount']);
    $campaign = mysqli_real_escape_string($con, $_POST['campaign']);
    $aadhar = $_POST['aadhar'] ? intval($_POST['aadhar']) : null;
    $pan = $_POST['pan'] ? mysqli_real_escape_string($con, $_POST['pan']) : null;
    $income = $_POST['income'] ? floatval($_POST['income']) : null;
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $age = $_POST['age'] ? intval($_POST['age']) : null;
    $taxDeductible = mysqli_real_escape_string($con, $_POST['taxDeductible']);
    $taxIdentificationNumber = $_POST['taxIdentificationNumber'] ? mysqli_real_escape_string($con, $_POST['taxIdentificationNumber']) : null;
    $organizationName = $_POST['organizationName'] ? mysqli_real_escape_string($con, $_POST['organizationName']) : null;
    $comments = mysqli_real_escape_string($con, $_POST['comments']);
    $consent = isset($_POST['consent']) ? "Yes" : "No"; 

    $donateSql = "INSERT INTO `donate` (`donor_name`, `email`, `amount`, `campaign`) 
                  VALUES ('$donorName', '$donorEmail', $donationAmount, '$campaign')";

    $paymentSql = "INSERT INTO `paymentinfo` (`amount`, `tdd`, `taxid`, `orgname`, `comm`) 
                  VALUES ($donationAmount, '$taxDeductible', '$taxIdentificationNumber', '$organizationName', '$comments')";

    $personalSql = "INSERT INTO `personaldetails` (`email`, `aadhar`, `PAN`, `Income`, `Gender`, `Age`) 
                  VALUES ('$donorEmail', $aadhar, '$pan', $income, '$gender', $age)";

$to = $_POST['donorEmail']; // Get the donor's email from the form
$subject = 'Thank you for your donation'; // Set the email subject
$message = 'Dear ' . $_POST['donorName'] . ',<br><br>';
$message .= 'Thank you for your generous donation of ₹' . $_POST['donationAmount'] . ' to our campaign: ' . $_POST['campaign'] . '.<br><br>';
$message .= 'We appreciate your support.<br><br>';
$message .= 'Sincerely,<br>GiveHope';

// Additional headers
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// You may need to configure your SMTP settings here
$headers[] = 'From: Your Organization <30debrup@gmail.com>';

// Send the email
if (mail($to, $subject, $message, implode("\r\n", $headers))) {
    echo "Successfully donated! An email acknowledgment has been sent to your email address.";
} else {
    echo "Error: Unable to send an email acknowledgment.";
}
    if ($con->query($donateSql) === true && $con->query($paymentSql) === true && $con->query($personalSql) === true) {
        header("Location: payment.php");
    } else {
        echo "Error: " . $con->error;
    }
}

$con->close();
?>
