<?= view('templates/header') ?>

<h1>User Accounts</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div class="success-message">
        <?= esc(session()->getFlashdata('success')) ?>
    </div>
<?php endif; ?>

<a href="<?= base_url('/users/new') ?>" class="button add-button">
    Add New User
</a>

<table>
    <thead>
        <tr>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php if (!empty($user['avatar'])): ?>
                        <img
                            src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                            alt="<?= esc($user['full_name']) ?>"
                            class="table-avatar"
                        >
                    <?php else: ?>
                        <div class="avatar-placeholder">
                            <?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?>
                        </div>
                    <?php endif; ?>
                </td>

                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['created_at']) ?></td>

                <td>
                    <a
                        href="<?= base_url('/users/edit/' . $user['id']) ?>"
                        class="button edit-button"
                    >
                        Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>