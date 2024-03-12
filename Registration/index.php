<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  color: #333;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

h2 {
  text-align: center;
  color: #b30000;
}

form {
  text-align: left;
}

label {
  font-weight: bold;
  color: #b30000;
}

input[type="text"],
input[type="email"],
input[type="date"],
select,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}



input[type="submit"] {
  background-color: #b30000;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #990000;
}
</style>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>

  <form method="post" action="process_registration.php">
    <label for="name">Student Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    
    <label for="email">Student Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    
    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob" required><br>
    
    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br>
    
    <label for="student_number">Student Number (CT21-0143):</label><br>
    <input type="text" id="student_number" name="student_number" required><br>
    
    <label for="course">List of Courses:</label><br>
    <select id="course" name="course" required>
      <option value="">Select a course</option>
      <option value="BSIT">BSIT</option>
      <option value="BSA">BSA</option>
      <option value="ECE">ECE</option>
    </select><br>
    
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
