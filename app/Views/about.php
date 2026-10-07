<!DOCTYPE html>
<html>
<head>
    <title>About the POS System</title>
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
        <h1>About the POS System</h1>

        <p>
            This project is a basic Point-of-Sale application created
            with CodeIgniter 4. It demonstrates how routes, controllers,
            views, and static arrays work together in a multi-page website.
        </p>
    </main>
</body>
</html>