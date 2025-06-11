<?php
require_once 'Database.php';

$db = new Database();
$conn = $db->getConnection();

$query = "
SELECT 
    p.id, p.name AS product_name, p.price, p.created_at,
    u.name AS user_name,
    c.name AS category_name
FROM 
    products p
JOIN users u ON p.user_id = u.id
JOIN categories c ON p.category_id = c.id
ORDER BY p.created_at DESC";

$stmt = $conn->prepare($query);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Người đăng</th>
            <th>Danh mục</th>
            <th>Ngày tạo</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= htmlspecialchars($product['product_name']) ?></td>
            <td><?= number_format($product['price'], 0, ',', '.') ?> VND</td>
            <td><?= htmlspecialchars($product['user_name']) ?></td>
            <td><?= htmlspecialchars($product['category_name']) ?></td>
            <td><?= $product['created_at'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
