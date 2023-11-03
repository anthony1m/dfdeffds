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
                <h1>Edit Product</h1>
                <p>Fill the form with correct values.</p>
                <hr class="mb-3">
                <?php
                include("config.php");

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $id = $_POST["id"];
                    $name = $_POST["name"];
                    $description = $_POST["description"];
                    $price = $_POST["price"];
                    $stock = $_POST["stock"];

                    // Update the product details in the database
                    $sql = "UPDATE products SET name = ?, description = ?, price = ?, stock = ? WHERE id = ?";
                    $stmt = $conn->prepare($sql);

                    if ($stmt) {
                        $stmt->bind_param("ssdii", $name, $description, $price, $stock, $id);

                        if ($stmt->execute()) {
                            // Product updated successfully
                            echo "Product updated successfully.";
                            header("Location: products-show.php"); // Redirect to the main page after a successful update
                        } else {
                            echo "Error: " . $stmt->error;
                        }

                        $stmt->close();
                    } else {
                        echo "Error preparing the SQL statement.";
                    }
                } elseif (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $productID = $_GET['id'];

                    // Retrieve the product details from the database
                    $sql = "SELECT * FROM products WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $productID);

                    if ($stmt->execute()) {
                        $result = $stmt->get_result();
                        $product = $result->fetch_assoc();
                        $stmt->close();
                    } else {
                        echo "Error: " . $stmt->error;
                    }
                } else {
                    echo "Invalid product ID.";
                }



                // Redirect back to the main page after updating
                ?>

                <form action="edit-data.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <label for="name">Product Name:</label>
                    <input type="text" name="name" value="<?php echo $product['name']; ?>" required>

                    <label for="description">Product Description:</label>
                    <textarea name="description" required><?php echo $product['description']; ?></textarea><br>

                    <label for="price">Price:</label>
                    <input type="number" name="price" step="0.01" value="<?php echo $product['price']; ?>" required>

                    <label for="stock">quantity:</label>
                    <input type="number" name="stock" value="<?php echo $product['stock']; ?>" required>

                    <hr class="mb-3">
                    <input class="btn btn-primary m-2" type="submit" value="Update Product" href="products-show">
                    <a type="button" class="btn btn-primary m-2" href="index.php">Return to the main page</a>
                </form>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>