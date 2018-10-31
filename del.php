<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('ID' => 'prod_DsnKoI6fm4zD99');
$result = $myStripe->delproduct($data);
echo "<pre>"; print_r($result);
?>