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
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='/index.css'>
</head>
<body>

<div class='card'>
    <h1 class='card-title'>Shipping Calculator</h1>

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

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>