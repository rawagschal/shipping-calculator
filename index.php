<!DOCTYPE html>

<head>
    <title>Shipping Calculator</title>
</head>


<!-- FUNCTIONALITY -->
<?php

$zip = $_POST['zip'];
$weight= $_POST['weight'];
$total = $_POST[''];

?>

<!-- DISPLAY -->
<body>
    <h1>Shipping Calculator</h1>
    <form action='' method='post' id='shipping-form'>
        
        <p> Zip Code </p>
            <input type='int' name='zip' id='zip' required='required'/>
            
        <p> Weight (lbs) </p>
            <input type='int' name='weight' id='weight' required='required'/>
        
        <input type='submit' name='submit' value='submit'>

        <!-- replace input w diff element-->
        <input readonly='readonly' name='total' value='total'>
        
    </form>

</body>