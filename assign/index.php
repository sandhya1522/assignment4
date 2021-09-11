<?php
include('connection.php');
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

$students = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$students[] = $row['fullname'];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Students</title>
  </head>
  <body>
  	<h2>
  		<a href="submit.php">Create New</a>
  	</h2>
  	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($students as $key => $student) { ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $student; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>