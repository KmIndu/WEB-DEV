<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
  
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO students (name, age, gender, email, phone) VALUES ('$name', '$age', '$gender', '$email', '$phone');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        $insert = true;
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Student Registration Form</h3>
        <p>Enter your details and submit this form</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>