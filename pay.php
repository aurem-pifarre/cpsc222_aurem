<?php
	$employeeName="Kevin Slonka";
	$hours=40.0;
	$payRate = 54.5;
	$federalTaxRate = 0.245;
	$stateTaxRate = 0.055;

	$grossPay = $hours * $payRate;
	$federalWithholding  = $grossPay * $federalTaxRate;
	$stateWithholding = $grossPay * $stateTaxRate;
	$totalDeductions = $federalWithholding + $stateWithholding;
	$netPay = $grossPay - $totalDeductions;
?>
<html>
	<head>
		<title>Pay Calculator</title>
	</head>	
	<body>
		<h1 style = "color:2DB8D4;">Pay Calculator</h1>
		<table border = 1>
	<?php
			
                	echo "\t\t\t<tr>\n";
			echo "\t\t\t\t<th>Description</th>\n";
			echo "\t\t\t\t<th>Amount</th>\n";
			echo "\t\t\t</tr>\n";
			

			echo "\t\t\t<tr>\n";
                	echo "\t\t\t\t<td>Employee Name</td>\n";
			echo "\t\t\t\t<td>$employeeName</td>\n";
			echo "\t\t\t</tr>\n";

			echo "\t\t\t<tr>\n";
                        echo "\t\t\t\t<td>Hours Worked</td>\n";
                        printf('<td>%.1f</td>', $hours);
                        echo "\t\t\t</tr>\n";

			echo "\t\t\t<tr>\n";
                        echo "\t\t\t\t<td>PayRate</td>\n";
                        printf('<td>$%.2f</td>',$payRate);
                        echo "\t\t\t</tr>\n";
			
			echo "\t\t\t<tr>\n";
                        echo "\t\t\t\t<td>GrossPay</td>\n";
                        printf('<td>$%.2f</td>',$grossPay);
                        echo "\t\t\t</tr>\n";
			
			echo "\t\t\t<tr>\n";
                        echo "\t\t\t\t<td>Federal Withholding (24.5%)</td>\n";
                        printf('<td>$%.2f</td>',$federalWithholding);
                        echo "\t\t\t</tr>\n";

			echo "\t\t\t<tr>\n";
                        echo "\t\t\t\t<td>State Withholding (5.5%)</td>\n";
                        printf('<td>$%.2f</td>',$stateWithholding);
                        echo "\t\t\t</tr>\n";

			echo "\t\t\t<tr>\n";
                        echo "\t\t\t\t<td>Total Deduction</td>\n";
                        printf('<td>$%.2f</td>',$totalDeductions);
                        echo "\t\t\t</tr>\n";
			
			echo "\t\t\t<tr>\n";
                        echo "\t\t\t\t<td>Net Pay</td>\n";
			printf('<td>$%.2f</td>',$netPay);                        
                        echo "\t\t\t</tr>\n";

	


			
	?>
	</body>
</html>

