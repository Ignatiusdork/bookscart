<?php 

// get the most recently added product
$stmt = $pdo->prepare('SELECT FROM products ORDER BY date_added DESC LIMIT 5');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>