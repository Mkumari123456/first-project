<!DOCTYPE html>
<html>
<head>
    <title>form</title>
</head>
<body>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>

    <label for="mobile">Mobile:</label>
    <input type="text" name="mobile" required><br><br>

    <label for="date">Date:</label>
    <input type="date" name="date" required><br><br>

    <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    include('db.php');
    if(isset($_POST['submit']))
    {


        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $date=$_POST['date'];

        $result="INSERT INTO test (name,email,mobile,date) VALUE ('$name','$email','$mobile','$date')";
        // echo $result;
        // exit;
        if($conn->query($result)===TRUE){
            echo "new item create successfully";
    
        }
        else{
            echo"error".$result . "<br>".$conn->error;
        }

    }

    ?>


</body>
</html>