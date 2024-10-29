<!DOCTYPE html>

<?php
$result_str = $result = '';
if (isset($_POST['submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total Bill for '.$units.' units =  Rs.'.$result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    $cost_block_1 = 6.00;
    $cost_block_2 = 9.00;
    $cost_block_3 = 15.00;
   

    if($units <= 30) {
        $bill = $units * $cost_block_1;
    }
    else if($units > 30 && $units <= 60) {
        $temp = 30 * $cost_block_1;
        $remaining_units = $units - 30;
        $bill = $temp + ($remaining_units * $cost_block_2);
    }
    else {
        $temp = (30 * $cost_block_1) + (30 * $cost_block_2);
        $remaining_units = $units - 60;
        $bill = $temp + ($remaining_units * $cost_block_3);
    }
    
    return $bill;
}

?>

<body>
    <div id="page-wrap">
		<form action="" method="post" >
            
                <h2>Electricity Bill Calculator</h2>
            	<input type="number" name="units"/><br><br>
            	<input type="submit" name="submit" value="CALCULATE" />
                
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
</body>
</html>