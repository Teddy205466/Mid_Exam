<?php include('config/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(20, 20, 20, 0.9);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            width: 400px;
            box-shadow: 0 0 20px rgba(0, 255, 100, 0.5);
        }
        h2 {
            color: #00ff88;
            text-shadow: 0 0 10px #00ff88;
            margin-bottom: 20px;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 8px;
            background: #111;
            color: #0f0;
            box-shadow: 0 0 5px rgba(0,255,150,0.3);
        }
        button {
            background: #00c853;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 0 0 10px #00c853;
        }
        button:hover { transform: scale(1.1); }
        a { color: #00e5ff; text-decoration: none; }
        .success { color: #00ff99; font-weight: bold; }
        .error { color: #ff4444; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <h2> Add Student</h2>
    <form method="POST">
        <input type="text" name="student_no" placeholder="Student Number" required><br>
        <input type="text" name="fullname" placeholder="Full Name" required><br>
        <input type="text" name="branch" placeholder="Branch" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="contact" placeholder="Contact"><br>
        <button type="submit" name="save">Add Student</button><br><br>
        <a href="read.php">📋 View Students</a>
    </form>
    <?php
    if (isset($_POST['save'])) {
        $sn = $_POST['student_no'];
        $fn = $_POST['fullname'];
        $br = $_POST['branch'];
        $em = $_POST['email'];
        $ct = $_POST['contact'];

        $sql = "INSERT INTO students (student_no, fullname, branch, email, contact)
                VALUES ('$sn','$fn','$br','$em','$ct')";
        if ($conn->query($sql)) {
            echo "<p class='success'> Student added successfully!</p>";
        } else {
            echo "<p class='error'> Error: " . $conn->error . "</p>";
        }
    }
    ?>
</div>
</body>
</html>
