<!DOCTYPE HTML>
<html>
<head>
    <title>Student Branch Directory System</title>
    <style>
        /* === Background and Layout === */
        body {
            font-family: 'Segoe UI', sans-serif;
            background: radial-gradient(circle at top, #0f2027, #203a43, #2c5364);
            color: #fff;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* === Soft Glow Background === */
        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 20%, rgba(0, 255, 255, 0.15), transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(0, 255, 100, 0.15), transparent 50%);
            z-index: 0;
        }

        /* === Title === */
        h2 {
            font-size: 26px;
            color: #00e5ff;
            text-shadow: 0 0 15px #00e5ff, 0 0 25px #00e5ff;
            z-index: 1;
            margin-bottom: 40px;
            letter-spacing: 1px;
        }

        /* === Button Container === */
        .form-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            z-index: 1;
        }

        /* === Button Style === */
        .btn {
            padding: 14px 30px;
            border-radius: 10px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            background: #111;
            box-shadow: 0 0 15px rgba(0,255,255,0.3);
            border: 2px solid transparent;
        }

        /* === Individual Button Colors === */
        .btn.add { border-color: #00ff88; box-shadow: 0 0 15px #00ff88; }
        .btn.view { border-color: #00b7ff; box-shadow: 0 0 15px #00b7ff; }
        .btn.update { border-color: #ff9100; box-shadow: 0 0 15px #ff9100; }
        .btn.delete { border-color: #d50000; box-shadow: 0 0 15px #d50000; }

        /* === Hover Effects === */
        .btn.add:hover { background: #00ff88; box-shadow: 0 0 25px #00ff88; transform: scale(1.1); }
        .btn.view:hover { background: #00b7ff; box-shadow: 0 0 25px #00b7ff; transform: scale(1.1); }
        .btn.update:hover { background: #ff9100; box-shadow: 0 0 25px #ff9100; transform: scale(1.1); }
        .btn.delete:hover { background: #d50000; box-shadow: 0 0 25px #d50000; transform: scale(1.1); }

        /* === Responsive for Smaller Screens === */
        @media (max-width: 600px) {
            .form-container {
                flex-direction: column;
                gap: 15px;
            }
            h2 {
                font-size: 22px;
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="background-overlay"></div>
    <h2>Welcome to Student Branch Directory System!</h2>
    <div class="form-container">
        <a href="create.php" class="btn add"> Add Student</a>
        <a href="read.php" class="btn view"> View Student</a>
        <a href="read.php" class="btn update"> Update Student</a>
        <a href="read.php" class="btn delete"> Delete Student</a>
    </div>
</body>
</html>
