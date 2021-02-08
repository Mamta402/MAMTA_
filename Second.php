<?php
require_once('config.php');
$name=$_POST["Name"];
$city=$_POST["city"];
$email=$_POST["Email"];
$branch=$_POST["Branch"];
$gender=$_POST["gender"];
$year=$_POST["year"];
$sql="INSERT INTO `users` (`id`, `username`, `email`, `branch`, `gender`, `city`) VALUES ('NULL', '$name', '$email', '$branch', '$gender', '$city')";
$detail="INSERT INTO `student detail`(`id`, `username`, `branch`, `year`) VALUES ('NULL','$name','$branch','$year')";
mysqli_query($conn,$sql);
mysqli_query($conn,$detail);
?>



<!DOCTYPE html>
<html>
    <head>
        <form method="POST" action="Second.php" >
            Name : <input type="text" name="Name" required><br>
            Email:<input type="email" name="Email" required><br>
            Branch :<input type="text" name="Branch" required><br>
            Year:<input type="number" name="year" required><br>
           
            <br><br>
           Gender: 
                  <input type="radio" name="gender">Male<br>
                  <input type="radio" name="gender">Female<br>
                  <input type="radio" name="gender">other<br>

                  City :<select name="city" required>
                    <option value="Dehradun">Dehradun</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Kanpur">Kanpur</option>
                    <option value="Indore">Indore</option>
                    <option value="Bhopal">Bhopal</option>
          
            <input type="submit" name="Submit">
        </form>
    </head>
</html>
<?php
if(isset($_POST['Submit'])){
echo"RECORD <br>";
echo "$name   $email  $city  $branch  $year";
}
?>
