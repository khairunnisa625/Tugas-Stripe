<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' => 'prod_DsnN0oln2R4ek0', 'description' => 'pendek warna hitam');
$result = $myStripe->editproduct($data);
	echo "<pre>"; print_r($result);