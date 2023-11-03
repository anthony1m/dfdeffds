<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Product</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-3">
                <h1>Add Product</h1>
                <p>Fill the form with correct values.</p>
                <hr class="mb-3">
                <?php
                include("config.php");

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $name = $_POST["name"];
                    $description = $_POST["description"];
                    $price = $_POST["price"];
                    $stock = $_POST["stock"];

                    $sql = "INSERT INTO products (name, description, price, stock) VALUES (?, ?, ?, ?)";
                    $stmt = $conn->prepare($sql);

                    if ($stmt) {
                        $stmt->bind_param("ssdi", $name, $description, $price, $stock);

                        if ($stmt->execute()) {
                            echo "Product added successfully.";
                        } else {
                            echo "Error: " . $stmt->error;
                        }

                        $stmt->close();
                    } else {
                        echo "Error preparing the SQL statement.";
                    }

                    $conn->close();
                }
                ?>
                <form action="data.php" method="post">
                    <label for="name">Product Name:</label>
                    <input type="text" name="name" required>
                    <label for="description">Product Description:</label>
                    <textarea name="description" required></textarea>
                    <label for="price">Price:</label>
                    <input type="number" name="price" step="0.01" required>
                    <label for="stock">Stock:</label>
                    <input type="number" name="stock" required>
                    <hr class="mb-3">
                    <input class="btn btn-primary m-2" type="submit" value="Add Product">
                    <a type="button" class="btn btn-primary m-2" href="index.php">Return to the main page</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
