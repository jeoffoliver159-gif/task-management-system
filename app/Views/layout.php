<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'Task Management System') ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        nav {
            background: #1f2937;
            padding: 16px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .brand {
            color: white;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            width: min(1000px, 92%);
            margin: 40px auto;
        }

        .hero,
        .card {
            background: white;
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 22px;
        }

        h1 {
            margin-top: 0;
            color: #111827;
        }

        h2 {
            color: #374151;
        }

        .date {
            color: #6b7280;
        }

        .task {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 18px;
            margin: 12px 0;
        }

        .task-title {
            font-weight: bold;
            font-size: 18px;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            background: #e5e7eb;
            font-size: 12px;
            margin-top: 8px;
        }

        .empty {
            padding: 20px;
            background: #f9fafb;
            border-radius: 8px;
            color: #6b7280;
        }

        footer {
            text-align: center;
            padding: 30px;
            color: #6b7280;
        }

        .profile-row {
            margin: 14px 0;
        }

        .label {
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            background: #111827;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 7px;
            margin-top: 8px;
        }
    </style>
</head>

<body>

<nav>
    <div class="brand">Task Management System</div>

    <div>
        <a href="/">Today</a>
        <a href="/tasks">All Tasks</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </div>
</nav>

<main>
    <?= $this->renderSection('content') ?>
</main>

<footer>
    Developed by Jeoff Oliver Galvez
</footer>

</body>
</html>