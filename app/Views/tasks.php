<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="hero">
    <h1>All Tasks</h1>
    <p>Complete task list ordered by date.</p>
</div>

<div class="card">

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
            No tasks found.
        </div>

    <?php endif; ?>

</div>

<?= $this->endSection() ?>