<?php 
require_once 'includes/db.php';
include 'includes/header.php'; 
?>

<!-- Hero Section -->
<header class="hero-advanced text-white text-center mb-5">
    <div class="container animate-fade-up">
        <h1 class="display-3 fw-bold mb-3">Welcome to E-SHOP</h1>
        <p class="lead mb-4 fs-4">Discover the best deals on your favorite products.</p>
        <a href="products.php" class="btn btn-light btn-lg px-5 rounded-pill shadow-lg">Shop Now <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
</header>

<!-- Featured Products Section -->
<section class="container my-5">
    <div class="text-center mb-5 animate-fade-up delay-1">
        <h2 class="fw-bold display-6">Featured Products</h2>
        <div class="bg-primary mx-auto rounded" style="width: 60px; height: 4px;"></div>
    </div>

    <div class="row g-4">
        <?php
        $sql = "SELECT * FROM products WHERE is_featured = 1 LIMIT 4";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $delay = 1;
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-3 animate-fade-up delay-<?php echo $delay; ?>">
                    <div class="card h-100">
                        <div class="card-img-wrapper">
                            <span class="badge bg-danger badge-custom">Featured</span>
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
            echo "<div class='col-12 text-center'><p>No featured products found.</p></div>";
        }
        ?>
    </div>
</section>

<!-- Features Section -->
<section class="bg-white py-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <i class="fas fa-truck-fast fs-1 text-primary mb-3"></i>
                <h4 class="fw-bold">Fast Delivery</h4>
                <p class="text-muted">We deliver your orders quickly and safely to your doorstep.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-shield-halved fs-1 text-primary mb-3"></i>
                <h4 class="fw-bold">Secure Payment</h4>
                <p class="text-muted">Your transactions are protected with state-of-the-art security.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-headset fs-1 text-primary mb-3"></i>
                <h4 class="fw-bold">24/7 Support</h4>
                <p class="text-muted">Our dedicated team is always here to help you with any queries.</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="fw-bold mb-3">Subscribe to Our Newsletter</h2>
                <p class="text-muted mb-4">Stay updated with our latest products, offers, and trends.</p>
                <form id="newsletter-form" class="d-flex gap-2 max-width-600 mx-auto">
                    <input type="email" class="form-control form-control-lg" placeholder="Enter your email address" required>
                    <button type="submit" class="btn btn-primary btn-lg px-4">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('newsletter-form').addEventListener('submit', (e) => {
        e.preventDefault();
        const toastElement = document.getElementById('cartToast');
        const toastMessage = document.getElementById('toastMessage');
        if (toastElement && toastMessage) {
            toastMessage.textContent = 'Thank you for subscribing to our newsletter!';
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
        }
        e.target.reset();
    });
</script>

<?php include 'includes/footer.php'; ?>
