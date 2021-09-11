<?php
include('connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
$form_values = $_POST;
$fullname = $_POST['fullname'];
print_r($form_values);


echo "Connected successfully";

$sql = "INSERT INTO students (fullname)
VALUES ('".$fullname."')";

$all_students_query = "SELECT * from students";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    	<h2>Finally</h2>
        <form method="post" action="submit.php">
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Fullname</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Fullname" name="fullname" required="required">
</div>
    <button type="submit">Submit</button>
    </form>
    <a href="index.php">List ALl Students</a>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>