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
    <link rel='stylesheet' href='index.css'>
</head>
<body>
    
<section>
        <div class='cta'>
            <h1>Shipping Calculator</h1>
            <h3>Please enter the following:</h3>
        </div>

        <form action='' method='post' id='shipping-form'>
            <div class='input'>
                <label for='zip'>Zip Code</label>
                    <input type='text' name='zip' required='required'/>
            </div>
            <div class='input'>
                <label for='weight'>Weight (lbs)</label>
                    <input type='text' name='weight' required='required'/>                
            </div>  
            <div class='input'>
              <button type='submit' class='btn btn-secondary'>Calculate</button>
            </div>
        </form>

            <?php if (isset($total)) { ?>
                <div id='output'>
                    <h3>Total Shipping Cost: $
                        <?php echo $total ?>
                    </h3>
                </div>
            <?php }  ?>
    </section>

</body>
</html>