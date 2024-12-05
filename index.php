<?php include  'Connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="text" name="KHname" placeholder="Enter name khmer"><br><br>

            <input type="text" name="ENname" placeholder="Enter name khmer"><br><br>

            <input type="number" name="age" placeholder="Enter name khmer"><br><br>

            <input type="submit" name="save_btn" value="Save">
            </form>
    </div>
<?php
    if(isset($_POST['save_btn'])){
        $khname=$_POST['KHname'];
        $enname=$_POST['ENname'];
        $age=$_POST['age'];

    $query="INSERT INTO school (Name_Khmer,Name_Englisg,School_Name) VALUES('$khname','$enname','age')";
    $data=mysqli_query($con,$query);
    }
?>
</body>
</html>