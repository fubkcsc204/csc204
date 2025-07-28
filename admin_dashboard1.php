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

           <h2>Training Applicants</h2>
        <form action="submit_application.php" method="post" class="signup-form">
            <label for="student_name">Student Full Name:</label>
            <input type="text" id="student_name" name="student_name" required>

            <label for="parent_name">Parent/Guardian Name:</label>
            <input type="text" id="parent_name" name="parent_name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="course">Select Training Course:</label>
            <select id="course" name="course" required>
                <option value="Computer Applications">Computer Applications</option>
                <option value="Programming">Programming</option>
                <option value="Web Technology">Web Technology</option>
                <option value="Networking Systems">Networking Systems</option>
            </select>

            <label for="message">Any Additional Note:</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit" class="btn">Apply Now</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Mungadi Tech. All rights reserved.</p>
    </footer>
</body>
</html>
