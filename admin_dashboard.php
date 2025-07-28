<?php
// admin_dashboard.php
session_start();
require 'db.php';

// Fetch users
$users_sql = "SELECT id, fullname, email, phone, created_at FROM users ORDER BY created_at DESC";
$users_result = $conn->query($users_sql);

// Fetch messages
$messages_sql = "SELECT id, name, email, phone, message, submitted_at FROM contact_messages ORDER BY submitted_at DESC";
$messages_result = $conn->query($messages_sql);

// OPTIONAL: Simple admin check (replace 'admin@example.com' with your admin email)
// if (!isset($_SESSION['user_id']) || $_SESSION['user_email'] !== 'admin@example.com') {
//     die('Access denied');
// }

// Fetch users
$users_sql = "SELECT id, fullname, email, phone, created_at FROM users ORDER BY created_at DESC";
$users_result = $conn->query($users_sql);

// Fetch messages
$messages_sql = "SELECT id, name, email, phone, message, submitted_at FROM contact_messages ORDER BY submitted_at DESC";
$messages_result = $conn->query($messages_sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dashboard {
            padding: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #0077b6;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>Admin Dashboard - Mungadi Tech</h1>
        </nav>
    </header>

    <section class="dashboard">
        <h2>Registered Users</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>
            </tr>
            <?php while ($row = $users_result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['fullname'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['created_at'] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>

        <h2>Contact Messages</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>
            <?php while ($row = $messages_result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['message'] ?></td>
                <td><?= $row['submitted_at'] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </section>

    <footer>
        <p>&copy; 2025 Mungadi Tech. All rights reserved.</p>
    </footer>
</body>
</html>
