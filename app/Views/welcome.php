<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="hero">
    <h1>Welcome to My Task Management System</h1>

    <p class="date">
        Today's date: <?= esc($today) ?>
    </p>

    <p>
        This page displays only tasks scheduled for today.
    </p>
</div>

<div class="card">
    <h2>Today's Tasks</h2>

    <?php if (!empty($tasks)): ?>

        <?php foreach ($tasks as $task): ?>

            <div class="task">

                <div class="task-title">
                    <?= esc($task['title']) ?>
                </div>

                <div>
                    Date: <?= esc($task['task_date']) ?>
                </div>

                <span class="status">
                    <?= esc(ucfirst($task['status'])) ?>
                </span>

            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <div class="empty">
            No tasks scheduled for today.
        </div>

    <?php endif; ?>

    <a class="btn" href="/tasks">
        View All Tasks
    </a>
</div>

<?= $this->endSection() ?>