<!doctype html>
<head>
</head>
<body>
    <?php
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $website = test_input($_POST["website"]);
      $comment = test_input($_POST["comment"]);
      $gender = test_input($_POST["gender"]);
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?> 

    <h2>FORM VALIDATION</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <br>
    E-mail: <input type="text" name="email">
    <br>
    Website: <input type="text" name="website">
    <br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br>
    <input type="submit" name="submit" value="click here">
    <br>
    </form>

    <?php
    echo "<h2>Your Inputs:</h2>";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $website;
    ?>

</body>
</html>
