<?php
// 连接到数据库（请根据你的数据库配置进行修改）
$servername = "localhost";
$username = "数据库用户名";
$password = "密码";
$dbname = "数据库名称";

$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接数据库失败：" . $conn->connect_error);
}

// 查询数据
$sql = "SELECT * FROM timeline_data";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// 关闭数据库连接
$conn->close();

// 将数据以 JSON 格式返回给前端
header('Content-Type: application/json');
echo json_encode($data);
?>
