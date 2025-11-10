<?php include('config/db.php');
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #8b0000, #000);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: rgba(30, 0, 0, 0.9);
            padding: 30px;
            border-radius: 15px;
            width: 380px;
            text-align: center;
            box-shadow: 0 0 25px rgba(255,0,0,0.8);
        }
        h2 {
            color: #ff4444;
            text-shadow: 0 0 10px #ff4444;
        }
        p { font-size: 16px; margin-bottom: 20px; }
        button {
            background: #d50000;
            border: none;
            color: #fff;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 0 10px #d50000;
        }
        button:hover { transform: scale(1.1); }
        a {
            display: inline-block;
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }
        a:hover { background: #555; }
    </style>
</head>
<body>
<div class="container">
    <h2>⚠️ Delete Student</h2>
    <p>Are you sure you want to delete <b><?= $row['fullname'] ?></b> (<?= $row['student_no'] ?>)?</p>
    <form method="POST">
        <button type="submit" name="confirm">Yes, Delete</button>
        <a href="read.php">Cancel</a>
    </form>
    <?php
    if (isset($_POST['confirm'])) {
        $conn->query("DELETE FROM students WHERE id=$id");
        echo "<p style='color:#00ff88;font-weight:bold;'>🗑️ Student deleted successfully!</p>";
    }
    ?>
</div>
</body>
</html>
