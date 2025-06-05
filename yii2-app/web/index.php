<?php
// index.php or landing.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome All | Yii2 App in Docker Swarm</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #4facfe, #00f2fe);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      text-align: center;
      background-color: rgba(0, 0, 0, 0.3);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.3);
    }
    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    p {
      font-size: 1.2rem;
    }
    .btn {
      margin-top: 20px;
      padding: 10px 24px;
      background-color: #fff;
      color: #333;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    .btn:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>🚀 Welcome you to Yii2 App! </h1>
    <p>Your Docker Swarm deployment is working perfectly.</p>
    <p>This is a custom landing page to confirm that your stack is running.</p>
    <a href="/index.php" class="btn">Enter Yii2 App</a>
  </div>
</body>
</html>
