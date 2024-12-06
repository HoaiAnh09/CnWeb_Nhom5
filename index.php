<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chính</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        main {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
        .selection-container {
            display: flex;
            gap: 20px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<header>
    <h1>Chào mừng đến Hệ thống Tin tức</h1>
</header>
<main>
    <div class="selection-container">
        <button class="btn" onclick="location.href='views/home/index.php'">Người dùng</button>
        <button class="btn" onclick="location.href='views/admin/login.php'">Đăng nhập Admin</button>
    </div>
</main>
</body>
</html>
