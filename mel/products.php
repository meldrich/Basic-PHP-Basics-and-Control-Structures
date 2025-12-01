<?php
$name = "Adrian Jose";
$greeting = "Hello $name!";

$product = "Meldrich Special";
$cost = 10; 

$totals = [];
for ($i = 1; $i <= 15; $i++) {
    $totals[$i] = $cost * $i * (1 - ($i * 4 / 100));
}
?>

<?php require "includes/header.php"; ?>

<h2>OUR PRODUCT DISCOUNT</h2>

<p><?php echo $greeting; ?></p>
<p>Product: <strong><?php echo $product; ?></strong></p>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($totals as $qty => $price): ?>
            <tr>
                <td><?php echo $qty . " " . ($qty === 1 ? "pack" : "packs"); ?></td>
                <td>$<?php echo number_format($price, 2); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "includes/footer.php"; ?>

