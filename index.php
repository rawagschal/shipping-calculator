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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<div class='parent'>
    <h1 class='cta'>Shipping Calculator</h1>
        <h3 class='cta'> Please enter the following:</h3>

    <form action='' method='post' id='shipping-form'>
        <div class='form-group'>
            <label for='zip'>Zip Code</label>
                <input type='text' class='form-control' name='zip' id='zip' required='required'/>
            <label for='weight'>Weight (lbs)</label>
                <input type='text' class='form-control' name='weight' id='weight' required='required'/>                
            <button type='submit' class='btn btn-secondary'>Calculate</button>
        </div>
            
        <?php if (isset($total)) { ?>
            <h2>Total Shipping Cost: $
                <?php echo $total ?>
            </h2>
        <?php }  ?>
</div>
</body>
</html>