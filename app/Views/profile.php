<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">

    <h1>Developer Profile</h1>

    <?php if ($user): ?>

        <div class="profile-row">
            <span class="label">Username:</span>
            <?= esc($user['username']) ?>
        </div>

        <div class="profile-row">
            <span class="label">Full Name:</span>
            <?= esc($user['full_name']) ?>
        </div>

        <div class="profile-row">
            <span class="label">Email:</span>
            <?= esc($user['email']) ?>
        </div>

    <?php else: ?>

        <div class="empty">
            No user profile found.
        </div>

    <?php endif; ?>

</div>

<?= $this->endSection() ?>