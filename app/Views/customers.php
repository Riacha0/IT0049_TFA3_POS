<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
   <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
   <nav>
    <div class="nav-container">
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/customers') ?>">Customer Accounts</a>
        <a href="<?= base_url('/users') ?>">User Accounts</a>

        <?php if (session()->get('isLoggedIn')): ?>
            <span class="nav-user">
                <?= esc(session()->get('full_name')) ?>
            </span>

            <a href="<?= base_url('/logout') ?>" class="logout-link">
                Logout
            </a>
        <?php else: ?>
            <a href="<?= base_url('/login') ?>">Login</a>
        <?php endif; ?>
    </div>
</nav>
    <main>
        <h1>Customer Accounts</h1>
        <?php if (session()->getFlashdata('success')): ?>
    <div class="success-message">
        <?= esc(session()->getFlashdata('success')) ?>
    </div>
<?php endif ?>

<a href="<?= base_url('/customers/new') ?>" class="button add-button">
    Add New Customer
</a>

        <table border="1">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                        <td>
    <a
        href="<?= base_url('/customers/edit/' . $customer['id']) ?>"
        class="button edit-button"
    >
        Edit
    </a>
</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
             </table>
         </main>
</body>
</html>