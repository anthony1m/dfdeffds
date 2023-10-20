<?php
require_once('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div>
      <?php
if(isset($_POST['create'])){
  echo'user submitted';
  $firstname    = $_POST['firstname'];
  $lastname     = $_POST['lastname'];
  $email        = $_POST['email'];
  $password     = $_POST['password'];
  $phonenumber  = $_POST['phonenumber'];
  $sql="INSERT INTO users(firstname,lastname,email, password, phonenumber) VALUES(?,?,?,?,?)";
  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->execute([$firstname, $lastname,$email, $password, $phonenumber]);
  if ($result){
    echo 'successfully saved';
  }else{
  echo 'there were errors while saving the data';

}
}
      ?>
    </div>
    <div>

    <a href="/register">register</a>
<form action="registration.php" method="post">
<div class="container">
<div class="row">
  <div class="col-sm-3">
<h1>registration
</h1>
<p>Fill the form with correct value.</p>
<hr class="mb-3">

<label for="firstname"><b>First Name</b></label>
<input class="form-control" type="text" name="firstname" Required>

<label for="lastname"><b>Last Name</b></label>
<input class="form-control" type="text" name="lastname" Required>


<label for="email"><b>email address</b></label>
<input class="form-control" type="email" name="email" Required>

<label for="phonenumber"><b>Phone Number</b></label>
<input class="form-control" type="text" name="phonenumber" Required>

<label for="password"><b>Password</b></label>
<input class="form-control" type="password" name="password" Required>
<hr class="mb-3">
<input class="btn btn-primary"type="submit"name="create" value="Sign Up">
</div>
</div>

</div>


</form>


    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>