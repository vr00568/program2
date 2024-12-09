<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $gender = htmlspecialchars($_POST['gender']);
  $message = htmlspecialchars($_POST['message']);

  echo "<h2>Your Registration Details:</h2>";
  echo "<p><strong>Name:</strong> $name</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Phone:</strong> $phone</p>";
  echo "<p><strong>Gender:</strong> $gender</p>";
  echo "<p><strong>Message:</strong> $message</p>";
}
?>
