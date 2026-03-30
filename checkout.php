<?php 
include 'includes/header.php'; 
?>

<div class="container my-5">
    <h2 class="fw-bold mb-4 text-center">Checkout</h2>

    <div class="row g-5">
        <!-- Order Summary (Mobile First) -->
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary fw-bold">Your Order</span>
                <span class="badge bg-primary rounded-pill" id="checkout-cart-count">0</span>
            </h4>
            <ul class="list-group mb-3 shadow-sm" id="checkout-items">
                <!-- JS will populate this -->
            </ul>

            <div class="card shadow-sm border-0 bg-light">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <strong id="checkout-subtotal">$0.00</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping</span>
                        <strong class="text-success">Free</strong>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span class="fs-5 fw-bold">Total</span>
                        <strong class="fs-4 text-primary" id="checkout-total">$0.00</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Checkout Form -->
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3 fw-bold">Shipping Information</h4>
            <form class="needs-validation" id="checkout-form" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">Valid first name is required.</div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">Valid last name is required.</div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>

                    <div class="col-md-5">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                            <option>Canada</option>
                            <option>United Kingdom</option>
                        </select>
                        <div class="invalid-feedback">Please select a valid country.</div>
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                            <option>New York</option>
                            <option>Ontario</option>
                        </select>
                        <div class="invalid-feedback">Please provide a valid state.</div>
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">Zip code required.</div>
                    </div>
                </div>

                <hr class="my-4">

                <h4 class="mb-3 fw-bold">Payment</h4>
                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">Name on card is required</div>
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">Credit card number is required</div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">Expiration date required</div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">Security code required</div>
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Place Order</button>
            </form>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center py-4">
      <div class="modal-body">
        <i class="fas fa-check-circle text-success mb-3" style="font-size: 5rem;"></i>
        <h3 class="fw-bold">Order Placed Successfully!</h3>
        <p class="text-muted">Thank you for your purchase. We've received your order and will process it shortly.</p>
        <a href="index.php" class="btn btn-primary mt-3 px-5">Back to Home</a>
      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        renderCheckout();

        const form = document.getElementById('checkout-form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (!form.checkValidity()) {
                e.stopPropagation();
                form.classList.add('was-validated');
            } else {
                // Clear cart and show success modal
                localStorage.removeItem('cart');
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
                
                // Also update cart count in header
                updateCartCount();
            }
        });
    });

    function renderCheckout() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const checkoutItems = document.getElementById('checkout-items');
        const checkoutTotal = document.getElementById('checkout-total');
        const checkoutSubtotal = document.getElementById('checkout-subtotal');
        const cartCount = document.getElementById('checkout-cart-count');

        if (cart.length === 0) {
            window.location.href = 'products.php';
            return;
        }

        let itemsHtml = '';
        let total = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;
            itemsHtml += `
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">${item.name}</h6>
                        <small class="text-muted">Quantity: ${item.quantity}</small>
                    </div>
                    <span class="text-muted">$${itemTotal.toFixed(2)}</span>
                </li>
            `;
        });

        checkoutItems.innerHTML = itemsHtml;
        checkoutSubtotal.textContent = `$${total.toFixed(2)}`;
        checkoutTotal.textContent = `$${total.toFixed(2)}`;
        cartCount.textContent = cart.reduce((sum, item) => sum + item.quantity, 0);
    }
</script>

<?php include 'includes/footer.php'; ?>
