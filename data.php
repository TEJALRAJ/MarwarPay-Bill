<?php

// Demand a GET parameter
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Marwarpay Invoice</title>
<?php require_once "bootstrap.php"; ?>

</head>
<body style="background-color:  #ebf6f5;">
	<img src="logo.png" class="rounded mx-auto d-block" alt="logo" width="150px" height="auto">

<div class="container p-3 my-3 bg-primary text-white">
<h1 class="content-align-center">Welcome to Marwarpay Info Solutions Pvt. ltd </h1>

<?php
if ( isset($_REQUEST['name']) ) {
    echo "<p>Welcome: ";
    echo htmlentities($_REQUEST['name']);
    echo "</p>\n";
}
?>

<form action="invoice.php" method="POST" >
Bill Type:
<input type="text" name="bill"><br><br>
Buyer Name:
<input type="text" name="buyer"><br><br>
Buyer Address: 
<p><textarea name="address" rows="3" cols="40" style="resize: none;"></textarea></p>
Dealer Code (Member ID):
<input type="text" name="d_code"><br><br>
Buyer's PAN No:
<input type="text" name="b_pan_num"><br><br>
Buyer's GST No:
<input type="text" name="b_gst_num"><br><br>

Mode/Terms of Payment:
<select name="payment">
<option value="--">Select</option>
<option value="Google Pay">Google Pay</option>
<option value="PhonePe">PhonePe</option>
<option value="Net Banking">Net Banking</option>
<option value="Online Payment">Online Payment</option>
</select><br><br>
Place Of Supply:
<input type="text" name="place"><br><br>
Items 1:
<input type="text" name="item_1" placeholder="Particuler">
<input type="text" name="quant_1" size="5" placeholder="Quantity">
<input type="text" name="rate_1"  size="5" placeholder="Rate">
<input type="text" name="per_1" value="1"  size="5" placeholder="Per">
<br>


Items 2:
<input type="text" name="item_2" placeholder="Particuler">
<input type="text" name="quant_2" size="5" placeholder="Quantity">
<input type="text" name="rate_2"  size="5" placeholder="Rate">
<input type="text" name="per_2" value="1"   size="5" placeholder="Per">
<br>


Items 3:
<input type="text" name="item_3" placeholder="Particuler">
<input type="text" name="quant_3" size="5" placeholder="Quantity">
<input type="text" name="rate_3"  size="5" placeholder="Rate">
<input type="text" name="per_3"  value="1"  size="5" placeholder="Per">
<br>
Items 4:
<input type="text" name="item_4" placeholder="Particuler">
<input type="text" name="quant_4" size="5" placeholder="Quantity">
<input type="text" name="rate_4"  size="5" placeholder="Rate">
<input type="text" name="per_4"  value="1"  size="5" placeholder="Per">
<br>
Items 5:
<input type="text" name="item_5" placeholder="Particuler">
<input type="text" name="quant_5" size="5" placeholder="Quantity">
<input type="text" name="rate_5"  size="5" placeholder="Rate">
<input type="text" name="per_5"  value="1"  size="5" placeholder="Per">
<br>

 GST %:
<input type="number" name="gst"  placeholder="GST"><br>
<br>
<br>

<input type="submit" name="submit" value="Submit">

<br>
<br>
</form>


</div>
</body>
</html>
