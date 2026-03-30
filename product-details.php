<?php 
require_once 'includes/db.php';
include 'includes/header.php'; 

// Get product ID from URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch product details
$sql = "SELECT p.*, c.name as category_name FROM products p 
        LEFT JOIN categories c ON p.category_id = c.id 
        WHERE p.id = $product_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    // Redirect or show error if product not found
    header("Location: products.php");
    exit();
}
?>

<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="products.php">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $product['name']; ?></li>
        </ol>
    </nav>

    <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <img src="https://via.placeholder.com/600x400" class="img-fluid rounded" alt="<?php echo $product['name']; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold mb-3"><?php echo $product['name']; ?></h1>
            <p class="badge bg-primary mb-3"><?php echo $product['category_name']; ?></p>
            <h3 class="text-primary fw-bold mb-4">$<?php echo number_format($product['price'], 2); ?></h3>
            
            <div class="mb-4">
                <h5 class="fw-bold">Description</h5>
                <p class="text-muted"><?php echo $product['description']; ?></p>
            </div>

            <div class="row g-3 align-items-center mb-4">
                <div class="col-auto">
                    <label for="quantity" class="form-label mb-0">Quantity:</label>
                </div>
                <div class="col-auto">
                    <input type="number" id="quantity" class="form-control" value="1" min="1" style="width: 80px;">
                </div>
            </div>

            <button class="btn btn-primary btn-lg px-5 add-to-cart" 
                    data-id="<?php echo $product['id']; ?>" 
                    data-name="<?php echo $product['name']; ?>" 
                    data-price="<?php echo $product['price']; ?>">
                <i class="fas fa-cart-plus me-2"></i> Add to Cart
            </button>
        </div>
    </div>

    <!-- Related Products (Optional but good for UX) -->
    <div class="mt-5 pt-5">
        <h3 class="fw-bold mb-4">Related Products</h3>
        <div class="row g-4">
            <?php
            $related_sql = "SELECT * FROM products WHERE category_id = {$product['category_id']} AND id != $product_id LIMIT 4";
            $related_result = $conn->query($related_sql);

            if ($related_result->num_rows > 0) {
                while($related = $related_result->fetch_assoc()) {
                    ?>
                    <div class="col-md-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="<?php echo $related['name']; ?>">
                            <div class="card-body text-center">
                                <h6 class="card-title fw-bold"><?php echo $related['name']; ?></h6>
                                <p class="text-primary fw-bold small">$<?php echo number_format($related['price'], 2); ?></p>
                                <a href="product-details.php?id=<?php echo $related['id']; ?>" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='col-12'><p class='text-muted'>No related products found.</p></div>";
            }
            ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
