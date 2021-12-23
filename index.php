<!-- FUNCTIONALITY -->
<?php

function calculate($zip, $weight) {
    if ($zip === 55555) {
        return $weight * $weight - $weight + 1.25;
    } else if ($zip === 55556) {
        return $weight + .75;
    }
}

if (isset($_POST['zip']) && isset($_POST['weight'])) {
    $total = calculate(intval($_POST['zip']), intval($_POST['weight']));
}
?>

<!-- DISPLAY -->
<html>
<head>
    <title>Shipping Calculator</title>
</head>
<body>


    <h1>Shipping Calculator</h1>

        
    <form action='' method='post' id='shipping-form'>
        
        <p> Zip Code 
            <input type='text' name='zip' id='zip' required='required'/>
        </p>
            
        <p> Weight (lbs)
            <input type='text' name='weight' id='weight' required='required'/>
        </p>
        
        <p>
            <input type='submit'/>
        </p>
        
        <?php if (isset($total)) { ?>
            <h2>Total Shipping Cost: $<?php echo $total ?></h2>
        <?php } ?>

</body>
</html>