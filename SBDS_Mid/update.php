<?php
include('config/db.php');
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: radial-gradient(circle at top, #ff9800, #ff5722);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(30, 15, 0, 0.9);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            width: 400px;
            box-shadow: 0 0 25px rgba(255, 152, 0, 0.7);
        }
        h2 {
            color: #ffb84d;
            text-shadow: 0 0 10px #ffb84d;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 8px;
            background: #111;
            color: #ffb84d;
            box-shadow: 0 0 5px rgba(255,152,0,0.4);
        }
        button {
            background: #ff9100;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 0 0 10px #ff9100;
        }
        button:hover { transform: scale(1.1); }
        a { color: #fff; text-decoration: none; }
    </style>
</head>
<body>
<div class="container">
    <h2> Update Student</h2>
    <form method="POST">
        <input type="text" name="student_no" value="<?= $row['student_no'] ?>" required><br>
        <input type="text" name="fullname" value="<?= $row['fullname'] ?>" required><br>
        <input type="text" name="branch" value="<?= $row['branch'] ?>" required><br>
        <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
        <input type="text" name="contact" value="<?= $row['contact'] ?>"><br>
        <button type="submit" name="update">Update</button><br><br>
        <a href="read.php">🔙 Back to List</a>
    </form>
    <?php
    if (isset($_POST['update'])) {
        $sn = $_POST['student_no'];
        $fn = $_POST['fullname'];
        $br = $_POST['branch'];
        $em = $_POST['email'];
        $ct = $_POST['contact'];
        $conn->query("UPDATE students SET student_no='$sn', fullname='$fn', branch='$br', email='$em', contact='$ct' WHERE id=$id");
        echo "<p style='color:#00ff99;font-weight:bold;'> Student updated successfully!</p>";
    }
    ?>
</div>
</body>
</html>
