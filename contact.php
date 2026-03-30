<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="text-muted">Have any questions? We'd love to hear from you.</p>
    </div>

    <div class="row g-5">
        <!-- Contact Form -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 p-4">
                <form id="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="What is this regarding?" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Your message here..." required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Contact Info & Map -->
        <div class="col-md-6">
            <div class="mb-4">
                <h4 class="fw-bold mb-3">Our Office</h4>
                <div class="d-flex mb-3">
                    <i class="fas fa-map-marker-alt text-primary me-3 fs-5 mt-1"></i>
                    <div>
                        <p class="mb-0 fw-bold">Address</p>
                        <p class="text-muted">123 E-Commerce Way, Digital City, 54321</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <i class="fas fa-phone text-primary me-3 fs-5 mt-1"></i>
                    <div>
                        <p class="mb-0 fw-bold">Phone</p>
                        <p class="text-muted">+1 (234) 567-890</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <i class="fas fa-envelope text-primary me-3 fs-5 mt-1"></i>
                    <div>
                        <p class="mb-0 fw-bold">Email</p>
                        <p class="text-muted">support@eshop.com</p>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h4 class="fw-bold mb-3">Follow Us</h4>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="mt-5">
                <h4 class="fw-bold mb-3">Location</h4>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093747!2d144.95373531532243!3d-37.817327679751735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sau!4v1614725063853!5m2!1sen!2sau" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('contact-form').addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Show Toast instead of alert
        const toastElement = document.getElementById('cartToast');
        const toastMessage = document.getElementById('toastMessage');
        if (toastElement && toastMessage) {
            toastMessage.textContent = 'Thank you for contacting us! We will get back to you soon.';
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
        }
        
        e.target.reset();
    });
</script>

<?php include 'includes/footer.php'; ?>
