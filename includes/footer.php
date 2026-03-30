</div> <!-- End content-wrapper -->

<footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">E-SHOP</h5>
                <p>Your one-stop destination for all your shopping needs. Quality products, fast shipping, and excellent customer service.</p>
            </div>
            <div class="col-md-2 mb-4">
                <h5 class="fw-bold mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="products.php" class="text-light text-decoration-none">Products</a></li>
                    <li><a href="about.php" class="text-light text-decoration-none">About Us</a></li>
                    <li><a href="contact.php" class="text-light text-decoration-none">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold mb-3">Customer Support</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Shipping Policy</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Returns & Refunds</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Terms & Conditions</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold mb-3">Connect With Us</h5>
                <div class="d-flex gap-3">
                    <a href="#" class="text-light fs-4"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light fs-4"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light fs-4"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light fs-4"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <hr class="mt-4">
        <div class="text-center">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> E-SHOP. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Toast Container -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="cartToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-primary text-white">
      <i class="fas fa-shopping-cart me-2"></i>
      <strong class="me-auto">Cart Update</strong>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body" id="toastMessage">
      Product added to cart!
    </div>
  </div>
</div>

<!-- Custom JS -->
<script src="assets/js/main.js"></script>
</body>
</html>
