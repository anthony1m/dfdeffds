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

    include("config.php");



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $plain_password = $_POST['password']; // Store the plaintext password
      $phonenumber = $_POST['phonenumber'];
      $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT); // Hash the password


      // Check if the email already exists in the database
      $check_query = "SELECT email FROM users WHERE email = ?";
      $stmt_check = $conn->prepare($check_query);
      $stmt_check->bind_param("s", $email);
      $stmt_check->execute();
      $result = $stmt_check->get_result();


      if ($result->num_rows > 0) {
        // Email already exists, display a popup or error message
        echo '<script type="text/javascript">alert("Email already in use. Please choose a different email.");</script>';
      } else {
        // Email is unique, proceed with user registration
        $insert_query = "INSERT INTO users (firstname, lastname, email, password, phonenumber) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($insert_query);

        if ($stmt_insert) {
          $stmt_insert->bind_param("sssss", $firstname, $lastname, $email, $hashed_password, $phonenumber);

          if ($stmt_insert->execute()) {
            echo 'Successfully saved';
            header("Location: index.php");
          } else {
            echo 'Error: ' . $stmt_insert->error; // Display the specific error message
          }
        } else {
          echo 'Statement preparation failed: ' . $conn->error;
        }

        $stmt_insert->close();
      }

      $stmt_check->close();
    } else {
      echo 'Invalid request';
    }
        // Close the database connection when done.
    $conn->close();


    ?>






  </div>

  <div>
    <a href="index.php">register</a>
    <form action="register.php" method="post">
      <div class="container">
        <div class="row d-flex justify-content-center ">
          <div class="col-sm-3">
            <h1>registration</h1>
            <p>Fill the form with correct value.</p>
            <hr class="mb-3">

            <label for="firstname"><b>First Name</b></label>
            <input class="form-control" type="text" name="firstname" Required>

            <label for="lastname"><b>Last Name</b></label>
            <input class="form-control" type="text" name="lastname" Required>


            <label for="email"><b>email address</b></label>
            <input class="form-control" type="email" name="email">

            <label for="phonenumber"><b>Phone Number</b></label>
            <input class="form-control" type="text" name="phonenumber" Required>

            <label for="password"><b>Password</b></label>
            <input class="form-control" type="password" name="password" Required>
            <hr class="mb-3">
            <input class="btn btn-primary m-2" type="submit" name="create" value="create">
            <a type="button" class="btn btn-primary m-2" href="login.php">login</a>
            <a type="button" class="btn btn-primary m-2" href="index.php">return to the main page</a>
          </div>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>