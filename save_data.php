<?php
// 连接到数据库（请根据你的数据库配置进行修改）
$servername = "localhost";
$username = "数据库用户名";
$password = "密码";
$dbname = "数据库名称";

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $cycleDays = $data['cycle_days'];
    $periodDays = $data['period_days'];
    $fightCount = $data['fight_count'];
    $healthStatus = $data['health_status'];
    $currentPeriodDate = $data['current_period_date']; // 新添加的字段

    try {
        // 获取上次月经日期
        $stmt = $pdo->query("SELECT MAX(current_period_date) FROM timeline_data");
        $lastPeriodDate = $stmt->fetchColumn();

        // 计算月经周期
        $cycleDays = (strtotime($currentPeriodDate) - strtotime($lastPeriodDate)) / (60 * 60 * 24);

        // 插入数据到数据库
        $stmt = $pdo->prepare("INSERT INTO timeline_data (cycle_days, period_days, fight_count, health_status, current_period_date) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$cycleDays, $periodDays, $fightCount, $healthStatus, $currentPeriodDate]);

        $response = ['status' => 'success', 'message' => 'Data saved successfully'];
        echo json_encode($response);
    } catch (PDOException $e) {
        $response = ['status' => 'error', 'message' => 'Error saving data: ' . $e->getMessage()];
        echo json_encode($response);
    }
} else {
    header("HTTP/1.0 405 Method Not Allowed");
    echo "Method Not Allowed";
}
?>
