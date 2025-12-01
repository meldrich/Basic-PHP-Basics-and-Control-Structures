<?php 
$username = "Adrian Jose";
$greeting = "Hello " . $username . "!";
$offer = array("Product" => "Chocolate", "quantity" => 5, "usual_price" => 75, "discount_price" => 65);

$usual_price = $offer['quantity'] * $offer['usual_price'];
$offer_price = $offer['quantity'] * $offer['discount_price'];
$saving = $usual_price - $offer_price;
?>

<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title> The Candy Store </title>
</head>
<body>
    <h2> MULTI-BUY OFFER</h2>
    <p><?php echo $greeting; ?></p>
    <p>Buy <?php echo $offer['quantity']; ?> packs of <?php echo $offer['Product']; ?> for $<?php echo $offer['discount_price']; ?> <br>
    (usual price $<?php echo $offer['usual_price']; ?>)
    </p>
    

</body>
</html>
<?php include "includes/footer.php"; ?>
