<?php 
// session_start();
// require_once("config.php"); // Include the database connection script

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Query the database to check if the user exists
//     $sql = "SELECT email, password FROM users WHERE email = ?";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows) {
//         $row = $result->fetch_assoc();
//         $hashed_password_from_db = $row['password']; // Retrieve the hashed password from the database

//         if (strcmp($password, $hashed_password_from_db) === 0) {
//             // Passwords match; set a session variable and redirect
//             $_SESSION['email'] = $email;
//             header("Location: index.php");
//             exit();
//         } else {
//             echo '<script type="text/javascript">alert("Your username or password is incorrect.");</script>';
//         }
//     } else {
//         echo '<script type="text/javascript">alert("User not found.");</script>';
//     }

//     $stmt->close();
// }

// $conn->close();

session_start();
require_once("config.php"); // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $sql = "SELECT email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password_from_db = $row['password'];

        if (password_verify($password, $hashed_password_from_db)) {
            // Password is correct; set a session variable and redirect
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            echo '<script type="text/javascript">alert("Your username or password is incorrect.");</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("User not found.");</script>';
    }

    $stmt->close();
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Vet Mall</title>
</head>

<body>
  <section>


    <form action="login.php" method="post">
      <div class="container">
        <div class="row d-flex justify-content-center ">
          <div class="col-sm-3">
            <h1>LOGIN</h1>
            <p>Fill the form with correct value.</p>
            <hr class="mb-3">

            <label for="email"><b>email address</b></label>
            <input class="form-control" type="text" name="email" Required>

            <label for="password"><b>Password</b></label>
            <input class="form-control" type="password" name="password" Required>
            <hr class="mb-3">
            <a  class="link p-2 m-2" href="reset.php">Forgot Pass</a>
            <input class="btn btn-primary p-2 m-2" type="submit" name="login" value="login">
            <a type="button" class="btn btn-primary p-2 m-2" href="register.php">register</a>
            
          </div>
        </div>
      </div>
    </form>
  </section>

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