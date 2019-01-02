<?php
include 'konek_order.php';
$ID            =        $_POST['id'];
$table_number  =        $_POST['table_number'];
$item_id   		=        $_POST['item_id'];
$qty           =        $_POST['qty'];
$sql1				= "SELECT price FROM item WHERE id='$item_id'";
$result1			= mysqli_query($connect, $sql1);
$row1				= mysqli_fetch_assoc($result1);
$row3  			=$row1['price'];
$total	      = $qty*$row3;
$diskon			= "20%"; 
	if($total > 100000 ){
		echo $diskon;
}	else {
		echo	$diskon = "-";
}
	if ($total	> 100000){
		echo $after_diskon = ($total - ($total * 20/100)); 		
}	else {	
		echo $after_diskon = $total;
}

$sql3 = "UPDATE order1 SET table_number = '$table_number', item_id = '$item_id', qty='$qty', total = '$total', diskon = '$diskon', after_diskon = '$after_diskon'  WHERE id = '$ID'";
mysqli_query($connect,$sql3);
header('location:pro.php');
?> 
