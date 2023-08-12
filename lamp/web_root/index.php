<?php
echo 'welcome to <a href="https://luxiaoyou.com/">luxiaoyou.com</a>';

$host = 'db'; // MySQL服务器主机名
$username = 'root'; // MySQL用户名
$password = 'root2023'; // MySQL密码
$database = 'mydb'; // 要连接的数据库名称


// 创建数据库连接
$conn = new mysqli($host, $username, $password, $database);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

echo " MySQL 连接成功!!";

// 在这里可以执行你的数据库查询和操作

// 关闭数据库连接
$conn->close();
?>