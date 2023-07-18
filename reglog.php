<!-- 

// include "config.php";

//   if (isset($_POST['submit'])) {

//     $name = $_POST['name'];

//     $phonenumber = $_POST['phonenumber'];

//     $email = $_POST['email'];

//     $password = $_POST['password'];

//     $confirmpassword = $_POST['confirmpassword'];ex
    
//     $sql = "INSERT INTO  `reg`(`id`, `name`, `email`, `phonenumber`, `password`, `confirmpassword`)
//     VALUES ('$name','$phonenumber','$email','$password','$confirmpassword')";

//     $result = $conn->query($sql);

//     if ($result == TRUE) {

//       echo "New record created successfully.";

//     }else{

//       echo "Error:". $sql . "<br>". $conn->error;

//     } 

//     $conn->close(); 

//   }

//   if($name==text){
//     echo ''
//   }
//   else{
//     echo 'wronginput '
//   }
//   if($phonenumber==number){
//     echo ''
//   }
//   else{
//     echo 'wronginput '
//   }
//  if ($email==email){
//     echo ''
//   }
//   else{
//     echo 'wronginput '
//   }
//   if($password==text){
//     echo ''
//   }
//   else{
//     echo 'wronginput '
//   }
// if($password==$confirmpassword){
//     echo ''
//   }
//   else{
//     echo 'wrongpassword '
//   }

// ?> -->

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form >

  <fieldset>

    <legend>Personal information:</legend>

    Name:<br>

    <input type="text" name="name">

    <br>

    Phone Number:<br>

    <input type="number" name="phonenumber">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

   Confirm Password:<br>

    <input type="password" name="password">

    <br>

    <input type="submit" name="Register" value="submit">

  </fieldset>

</form>

</body>

</html>