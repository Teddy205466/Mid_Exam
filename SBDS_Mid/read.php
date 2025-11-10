<?php include('config/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 850px;
            background: rgba(10, 10, 30, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 25px rgba(0, 150, 255, 0.6);
            text-align: center;
        }
        h2 {
            color: #00b7ff;
            text-shadow: 0 0 10px #00b7ff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            color: #fff;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #00b7ff;
            padding: 8px;
            text-align: center;
        }
        th { background: #00b7ff; color: #000; }
        a {
            color: #00e5ff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<div class="container">
    <h2>📋 Student Records</h2>
    <a href="create.php">➕ Add New Student</a>
    <table>
        <tr>
            <th>ID</th><th>Student No</th><th>Name</th><th>Branch</th><th>Email</th><th>Contact</th><th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['student_no']}</td>
                    <td>{$row['fullname']}</td>
                    <td>{$row['branch']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['contact']}</td>
                    <td>
                        <a href='update.php?id={$row['id']}'>✏️ Edit</a> |
                        <a href='delete.php?id={$row['id']}'>🗑️ Delete</a>
                    </td>
                 </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
