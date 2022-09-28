<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
<link href="css/login-registro.css" rel="stylesheet" type="text/css"/>
<body>
      <center>
<?php
$name = $email = $gender = $comment = $pass = $conf = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $comment = test_input($_POST["comment"]);
  $pass = test_input($_POST["pass"]);
  $conf = test_input($_POST["conf"]);
  $website = test_input($_POST["website"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Datos registrados</h2>";
echo "<br>".$name;
echo "<br>".$email;
echo "<br>".$gender;
echo "<br>".$comment;
echo "<br>".$pass;
echo "<br>".$conf;
echo "<br>".$website;
?>


<?php
$nameErr = $emailErr = $genderErr = $commentErr = $passErr = $confErr = $websiteErr = "";
$name = $email = $gender = $comment = $pass = $conf = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["comment"])) {
    $commentErr = "Comment is required";
  } else {
    $comment = test_input($_POST["comment"]);
  }

    if (empty($_POST["pass"])) {
    $passErr = "Pass is required";
  } else {
    $pass = test_input($_POST["pass"]);
  }

  if (empty($_POST["conf"])) {
    $confErr = "Conf is required";
  } else {
    $conf = test_input($_POST["conf"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["website"])) {
    $website = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
  }
}
?>

<br><br>
<span class="error"><?php echo $nameErr;?></span>
<span class="error"><?php echo $emailErr;?></span>
<span class="error"><?php echo $genderErr;?></span>
<span class="error"><?php echo $commentErr;?></span>
<span class="error"><?php echo $passErr;?></span>
<span class="error"><?php echo $confErr;?></span>
<span class="error"><?php echo $websiteErr;?></span>
        <a href="http://localhost/LoginWeb" class="myButton">Inicio</a>
    </center>
</body>
</html>