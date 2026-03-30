<?php 
include 'includes/header.php'; 
?>

<div class="container my-5">
    <h2 class="fw-bold mb-4">Your Shopping Cart</h2>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                                <!-- JS will populate this -->
                                <tr>
                                    <td colspan="5" class="text-center py-4">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <a href="products.php" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left me-2"></i> Continue Shopping
            </a>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">Order Summary</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span id="cart-total">$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping</span>
                        <span class="text-success">Free</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-4">
                        <span class="fw-bold">Total</span>
                        <span class="fw-bold text-primary fs-4" id="cart-total-final">$0.00</span>
                    </div>
                    <div class="d-grid">
                        <a href="checkout.php" class="btn btn-primary btn-lg">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Update the final total when the main total changes
    const observer = new MutationObserver(() => {
        const total = document.getElementById('cart-total').textContent;
        document.getElementById('cart-total-final').textContent = total;
    });
    
    window.addEventListener('load', () => {
        const target = document.getElementById('cart-total');
        if (target) {
            observer.observe(target, { childList: true, characterData: true, subtree: true });
            // Trigger initial update
            document.getElementById('cart-total-final').textContent = target.textContent;
        }
    });
</script>

<?php include 'includes/footer.php'; ?>
