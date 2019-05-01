<!DOCTYPE html>
<html>
<head>
  <title>PHP form to MySql</title>
</head>

<body>

<?php
  require("connect.php");

  if(isset($_POST['submit']))
  {
    $uname = $_POST['uName'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $sql = "INSERT INTO users (User_Name, Email, Location) VALUES ('$uname', '$email', '$location')";

    $db = connection();
    mysqli_query($db,$sql);

  }?>
  <form action=""; method = "post">
    Username <input type = "text" name = "uName"> <br>
    Email <input type = "email" name = "email"> <br>
    Location <input type = "text" name="location"> <br>
    <input type="submit" name="submit" value="SUBMIT">
  </form>

  <?php

  $query = "SELECT * FROM users";
  $db = connection();
  $output = mysqli_query($db, $query);

    ?>

    <table border="2">
      <th> ID </th>
      <th> USERNAME </th>
      <th> EMAIL </th>
      <th> LOCATION </th>


    <?php
      while ($result = mysqli_fetch_array($output)){
        echo "<tr>";

        echo "<td>" . $result['User_Id']. "</td>";
        echo "<td>" . $result['User_Name']. "</td>";
        echo "<td>" . $result['Email']. "</td>";
        echo "<td>" . $result['Location']. "</td>";

        echo "</tr>";
      }
    ?>

    </table>
</body>
</html>
