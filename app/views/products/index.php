<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        .table thead th {
            background-color: #f1f5f9;
            color: #475569;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>

<div class="container py-4">
    <!-- Header Card -->
    <div class="card card-custom p-4 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h3 class="fw-bold text-dark m-0">Products</h3>
                <small class="text-muted">Manage your inventory and product listing</small>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-light text-dark border px-3 py-2 me-2">
                    <i class="bi bi-person-circle me-1"></i> <?= html_escape($username) ?>
                </span>
                <a href="<?= site_url('products/create') ?>" class="btn btn-primary btn-sm px-3">
                    <i class="bi bi-plus-lg me-1"></i> Add Product
                </a>
                <a href="<?= site_url('logout') ?>" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </div>
        </div>
    </div>

    <!-- Table Card -->
    <div class="card card-custom p-3">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">ID</th>
                        <th scope="col" style="width: 20%;">Product Name</th>
                        <th scope="col" style="width: 25%;">Description</th>
                        <th scope="col" style="width: 12%;">Price</th>
                        <th scope="col" style="width: 10%;">Quantity</th>
                        <th scope="col" style="width: 15%;">Created At</th>
                        <th scope="col" class="text-end" style="width: 13%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td class="text-secondary font-monospace"><?= $product['id'] ?></td>
                            <td class="fw-bold text-dark"><?= html_escape($product['product_name']) ?></td>
                            <td class="text-muted small"><?= html_escape($product['description']) ?></td>
                            <td class="fw-semibold text-success">₱<?= number_format($product['price'], 2) ?></td>
                            <td>
                                <span class="badge bg-secondary-subtle text-secondary border px-2 py-1">
                                    <?= $product['quantity'] ?>
                                </span>
                            </td>
                            <td class="text-muted small"><?= date('M d, Y h:i A', strtotime($product['created_at'])) ?></td>
                            <td class="text-end">
                                <a href="<?= site_url('products/edit/' . $product['id']) ?>" class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="<?= site_url('products/delete/' . $product['id']) ?>"
                                   class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('Sigurado ka bang gusto mong burahin ang produktong ito?')"
                                   title="Delete">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center py-4 text-muted">
                            <i class="bi bi-inbox fs-2 d-block mb-2"></i> Walang produktong nakita.
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>