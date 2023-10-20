<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>appointments</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
                <div class="col-12">
                    <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Appointment form</h3>
                </div>
                <form action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" placeholder="Enter Date">
                        </div>
                        <div class="col-md-6">
                            <input type="time" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="col-12">
                            <select class="form-select">
                                <option selected>Purpose Of Appointment</option>
                                <option value="1">Web Design</option>
                                <option value="2">Web Development</option>
                                <option value="3">IOS Developemt</option>
                                <option value="4">others</option>

                            </select>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 mt-5">                        
                            <button type="submit" class="btn btn-primary float-end">Book Appointment</button>
                            <button type="button" class="btn btn-outline-secondary float-end me-2">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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