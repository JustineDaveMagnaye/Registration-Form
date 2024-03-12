<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $student_number = $_POST['student_number'];
  $course = $_POST['course'];
  
  echo "<h2>Registration Details:</h2>";
  echo "Student Name: " . $name . "<br>";
  echo "Student Email: " . $email . "<br>";
  echo "Date of Birth: " . $dob . "<br>";
  echo "Gender: " . $gender . "<br>";
  echo "Student Number: " . $student_number . "<br>";
  echo "List of Courses: " . $course . "<br>";
}
?>
