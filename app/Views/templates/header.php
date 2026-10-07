<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<nav>
    <div class="nav-container">
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/about') ?>">About</a>

        <?php if (session()->get('isLoggedIn')): ?>

            <a href="<?= base_url('/customers') ?>">
                Customer Accounts
            </a>

            <a href="<?= base_url('/users') ?>">
                User Accounts
            </a>

            <span class="nav-user">
                <?= esc(session()->get('full_name')) ?>
            </span>

            <a href="<?= base_url('/logout') ?>" class="logout-link">
                Logout
            </a>

        <?php else: ?>

            <a href="<?= base_url('/login') ?>">
                Login
            </a>

        <?php endif; ?>
    </div>
</nav>

<main class="container">