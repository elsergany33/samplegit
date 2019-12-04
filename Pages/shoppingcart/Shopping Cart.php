
<!DOCTYPE html>
<html>
   <head>  	
   	<title>
   		Shopping Cart
   	</title>
   	<link rel="stylesheet"  href="shoppingcart.css">
   	<link href=C:\xampp\htdocs\Pages\shoppingcart" rel="stylesheet" type="text/css">
   	</head>
   <body> 
   <header>
     	<ul class="header">
<li><a href="Login.php">login</a></li>
  <li><a href="#help">Help</a></li>
  <li><a href="index.php">Shop</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="home.php">Home</a></li>
</ul>
   	<b>Enaya</b> 
<img src="logo.png" alt="our logo was supposed to be here" width="60" height="60"><b>
عناية
</b>
   </header>
   <br>
<br>
<br>
   <ul class="page">
<li><a href="payment options.html">3  Payment Options</a></li>
  <li><a href="#Shipping details">2  Shipping Details</a></li>
  <li><a href="index.php">1  Shopping Cart</a></li>

</ul>
<br>
<br>
<br>
<hr class="sera1">
<br>
<br>
<pre class="sef1">Shopping Cart                                                      summary</pre>
<hr class="sera2"><hr class="sera3">
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>




   </body>        