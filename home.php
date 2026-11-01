<?php
ob_start();
?>

<!-- Welcome banner -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body py-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="mb-1">Welcome to Swiskee Co.</h2>
                <p class="text-muted mb-3">
                    Your back-office for <strong>Custom Engraved Pet ID Tags</strong>. Manage products, customers,
                    staff and orders in one place.
                </p>
                <a href="orders.php" class="btn btn-primary me-2"><i class="bi bi-cart-plus me-1"></i>New Order</a>
                <a href="products.php" class="btn btn-outline-secondary"><i class="bi bi-tags me-1"></i>View Products</a>
            </div>
            <div class="col-md-4 text-center d-none d-md-block">
                <i class="bi bi-tag-fill text-primary display-1"></i>
            </div>
        </div>
    </div>
</div>

<!-- Carousel -->
<div id="homeCarousel" class="carousel slide shadow-sm rounded mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
        <div class="carousel-item active bg-primary text-white text-center py-5">
            <div class="py-4 px-5">
                <i class="bi bi-tag-fill display-3"></i>
                <h3 class="mt-2">Custom Engraved Pet ID Tags</h3>
                <p class="mb-5">Engraved with your pet's name and your contact number.</p>
            </div>
        </div>
        <div class="carousel-item bg-danger text-white text-center py-5">
            <div class="py-4 px-5">
                <i class="bi bi-heart-fill display-3"></i>
                <h3 class="mt-2">Made for Every Pet</h3>
                <p class="mb-5">Dogs, cats and everyone in between, in many shapes and colours.</p>
            </div>
        </div>
        <div class="carousel-item bg-success text-white text-center py-5">
            <div class="py-4 px-5">
                <i class="bi bi-shield-check display-3"></i>
                <h3 class="mt-2">Helping Pets Get Home</h3>
                <p class="mb-5">A small tag that makes a big difference if your pet gets lost.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Quick links -->
<div class="row g-3">
    <div class="col-md-6 col-xl-3">
        <a href="products.php" class="text-decoration-none">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-tags-fill fs-1 text-primary"></i>
                    <h5 class="mt-2 text-dark">Products</h5>
                    <p class="text-muted small mb-0">Manage your pet tag inventory</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="customers.php" class="text-decoration-none">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill fs-1 text-success"></i>
                    <h5 class="mt-2 text-dark">Customers</h5>
                    <p class="text-muted small mb-0">Track your pet owners</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="staffs.php" class="text-decoration-none">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-person-badge-fill fs-1 text-warning"></i>
                    <h5 class="mt-2 text-dark">Staffs</h5>
                    <p class="text-muted small mb-0">Manage your team members</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a href="orders.php" class="text-decoration-none">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-cart-fill fs-1 text-danger"></i>
                    <h5 class="mt-2 text-dark">Orders</h5>
                    <p class="text-muted small mb-0">Create orders and view invoices</p>
                </div>
            </div>
        </a>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>