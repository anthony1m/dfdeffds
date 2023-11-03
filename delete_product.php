<?php
include("config.php"); // Include your database connection configuration

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productID = $_GET['id'];

    // SQL query to delete the product with the specified ID
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productID);

    if ($stmt->execute()) {
        echo "Product deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid product ID.";
}
$conn->close();
header("Location: products-show.php?message=" . urlencode($deleteMessage));
exit();
?>
