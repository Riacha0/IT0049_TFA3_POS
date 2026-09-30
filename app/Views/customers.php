<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/customers">Customer Accounts</a>
        <a href="/users">User Accounts</a>
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