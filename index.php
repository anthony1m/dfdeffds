
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


        <a href="/register">register</a>



        <nav class="navbar navbar-expand-lg navbar-light bg-light p-2 border">
            <div class="container-fluid border">
                <a class="navbar-brand border border-1" href="#">
                    <img src="../images/attachment_98546587.jpeg" alt="" width="120" height="100">
                </a>
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active p-2 m-2" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 m-2" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active btn btn-primary p-2 m-2" href="register.php">register</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link active btn btn-primary p-2 m-2" href="login.php">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active btn btn-primary p-2 m-2" href="data.php">enter products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active btn btn-primary p-2 m-2" href="products-show.php">products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                appointments
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">dog</a></li>
                                <li><a class="dropdown-item" href="#">cat</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <section class="p-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/Banner-Josera-01.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../images/nobby.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../images/taste-of-the-wild.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../images/Banner-Diamond-01-01.webp" class="d-block w-100" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="bg-warning ">
        <div class="container-fluid p-3 ">
            <div class="row">
                <div class="col p-2 ">INFORMATION</div>
                <div class="col p-2">ABOUT US</div>
                <div class="col p-2">DELIVERY</div>
                <div class="col p-2">PRIVACY POLICY</div>
                <div class="col p-2">CONTACT US</div>
            </div>
            <div class="row">
                <div class="col p-2">pet shop</div>
                <div class="col p-2">pet shop in lebanon</div>
                <div class="col p-2">online pet shops</div>
                <div class="col p-2">pet suppliers</div>
                <div class="col p-2">pet food</div>
            </div>
            <div class="row">
                <div class="col p-2">extras</div>
                <div class="col p-2">brands</div>
                <div class="col p-2">gifts</div>
                <div class="col p-2">affiliates</div>
                <div class="col p-2">specials</div>
            </div>
            <div class="row">
                <div class="col p-2">MY account</div>
                <div class="col p-2">order history</div>
                <div class="col p-2">wish list</div>
                <div class="col p-2">news letter</div>
                <div class="col p-2">returns</div>

            </div>
        </div>
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