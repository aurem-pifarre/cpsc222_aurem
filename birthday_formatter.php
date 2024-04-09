

<html>
	<head>

		<title>Chapters 7 & 12</title>
	</head>

	<body>
		<h1>Birthday Formatter</h1>
	<?php if($_SERVER['REQUEST_METHOD'] != 'POST'){?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
		
		<table border = 1>
	<?php
		echo "\t\t\t<tr\n>";
                echo "\t\t\t\t<td><b>Month</b></td>\n";
                echo "\t\t\t\t<td><b>Day</b></td>\n";
                echo "\t\t\t\t<td><b>Year</b></td>\n";
		echo "\t\t\t\t<td><b>Hour</b></td>\n";
		echo "\t\t\t\t<td><b>Minute</b></td>\n";
		echo "\t\t\t\t<td><b>AM/PM</b></td>\n";		
               	echo "\t\t\t</tr>\n";
		
		echo "\t\t\t<tr>\n";
		echo "\t\t\t<td>";
	?>
		<select name='month'>
			<option value = 'January'> January</option>
			<option value = 'February'> February</option>
			<option value = 'March'> March</option>
			<option value = 'April'> April</option>
			<option value = 'May'> May</option>
			<option value = 'June'> June</option>
			<option value = 'July'> July</option>
			<option value = 'August'> August</option>
			<option value = 'September'> September</option>
			<option value = 'October'> October</option>
			<option value = 'November'> November</option>
			<option value = 'December'> December</option>

		</select>
	<?php
		echo "</td>";
                echo "\t\t\t<td>";
        ?>
                <select name='day'>
        <?php
              	for($d=1; $d<=31; $d++){
        		echo "\t\t\t<option value = '$d'> $d</option>\n";
        	}
                echo "t\t\t</td>";
                        
                ?>

                        
                      

                </select>

	<?php
		echo "\t\t\t</td>";
		
		echo "\t\t\t<td>";
	?>		
			<select name='year'>
		<?php
			for($y=2024; $y>=1970; $y--){
				echo "\t\t\t<option value = '$y'> $y</option>\n";
			}
			echo "t\t\t</td>";
			
		?>
	</select>

        <?php
                echo "\t\t\t</td>";

                echo "\t\t\t<td>";
        ?>
                        <select name='hour'>
                <?php
                        for($h=1; $h<=12; $h++){
                                echo "\t\t\t<option value = '$h'> $h</option>\n>";
                        }
                        echo "t\t\t</td>";        
                ?>
	</select>

        <?php
                echo "\t\t\t</td>";

                echo "\t\t\t<td>";
        ?>
                        <select name='minute'>
                <?php
                        for($min=1; $min<=60; $min++){
                                echo "\t\t\t<option value = '$min'> $min</option>\n>";
                        }
                        echo "t\t\t</td>";                
                ?>
	</select>
	<?php
	       echo "\t\t\t</td>";

               echo "\t\t\t<td>";
	?>
	                <select name='am/pm'>
                        <option value = 'AM'> AM</option>
                        <option value = 'PM'> PM</option>
			</select>
	<?php
		echo "\t\t\t</td>";
		echo "\t\t\t</tr>";

		echo "\t\t\t<tr>";
		echo "\t\t\t<td colspan='6'>";
	?>
		<center><input type="submit" name="submit" value="Formate Date" />
		</form>
	<?php 
		echo "\t\t\t</td>";
		echo "\t\t\t</tr>";
	}
	 if($_SERVER['REQUEST_METHOD']=='POST')
        {
		if($_POST['minute']<10)
		{
			$minute = $_POST['minute'];
			$minute = "0".$_POST['minute'];
			$_POST['minute'] = $minute;
		}
		$date = new DateTime("{$_POST['month']}{$_POST['day']},{$_POST['year']}{$_POST['hour']}:{$_POST['minute']}{$_POST['am/pm']}");
		echo $date->format('l F jS, Y - g:ia');
		echo "<br>";
		echo "<br>";
		echo "<embed><a href='page_date.php?foo=bar'>Show date in ISO format</a>";
	}
			
	
	?>
		
	
	</body>
</html>
	
