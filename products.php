<?php 
require_once 'includes/db.php';
include 'includes/header.php'; 

// Get category from URL if exists
$category_id = isset($_GET['category']) ? $_GET['category'] : null;
$search_query = isset($_GET['search']) ? $_GET['search'] : '';

// Fetch categories for filter
$cat_sql = "SELECT * FROM categories";
$cat_result = $conn->query($cat_sql);

// Fetch products based on category and search
$prod_sql = "SELECT * FROM products WHERE 1=1";
if ($category_id) {
    $prod_sql .= " AND category_id = " . intval($category_id);
}
if ($search_query) {
    $safe_search = $conn->real_escape_string($search_query);
    $prod_sql .= " AND (name LIKE '%$safe_search%' OR description LIKE '%$safe_search%')";
}
$prod_result = $conn->query($prod_sql);
?>

<div class="container my-5">
    <div class="row">
        <!-- Sidebar Filters -->
        <div class="col-md-3 mb-4">
            <h4 class="fw-bold mb-4">Categories</h4>
            <div class="list-group">
                <a href="products.php" class="list-group-item list-group-item-action <?php echo !$category_id ? 'active' : ''; ?>">
                    All Products
                </a>
                <?php
                if ($cat_result->num_rows > 0) {
                    while($cat = $cat_result->fetch_assoc()) {
                        $active = ($category_id == $cat['id']) ? 'active' : '';
                        echo "<a href='products.php?category={$cat['id']}' class='list-group-item list-group-item-action {$active}'>{$cat['name']}</a>";
                    }
                }
                ?>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold m-0">Our Products</h2>
                <span class="text-muted"><?php echo $prod_result->num_rows; ?> products found</span>
            </div>

            <div class="row g-4">
                <?php
                if ($prod_result->num_rows > 0) {
                    $delay = 1;
                    while($row = $prod_result->fetch_assoc()) {
                        ?>
                        <div class="col-md-4 animate-fade-up delay-<?php echo $delay > 4 ? 4 : $delay; ?>">
                            <div class="card h-100">
                                <div class="card-img-wrapper">
                                    <?php if($row['is_featured']) echo '<span class="badge bg-danger badge-custom">Featured</span>'; ?>
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="<?php echo $row['name']; ?>">
                                    <div class="card-actions">
                                        <button class="btn btn-light btn-sm rounded-circle shadow add-to-cart" data-id="<?php echo $row['id']; ?>" data-name="<?php echo $row['name']; ?>" data-price="<?php echo $row['price']; ?>" title="Add to Cart">
                                            <i class="fas fa-cart-plus text-primary"></i>
                                        </button>
                                        <a href="product-details.php?id=<?php echo $row['id']; ?>" class="btn btn-light btn-sm rounded-circle shadow" title="View Details">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body text-center d-flex flex-column justify-content-between">
                                    <h5 class="card-title fw-bold mb-2"><?php echo $row['name']; ?></h5>
                                    <p class="text-primary fw-bold fs-5 mb-0">$<?php echo number_format($row['price'], 2); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $delay++;
                    }
                } else {
                    echo "<div class='col-12 text-center'><p class='py-5'>No products found in this category.</p></div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
