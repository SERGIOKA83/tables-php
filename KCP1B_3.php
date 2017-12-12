<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8" />
		
		<title>Задание 3</title>
		
		<link rel="stylesheet" href="style.css" />
		
	</head>
	<body>
		
		<h1>Задание 3</h1>
		
		<h2>Вклад в банк</h2>
		
		<table class = "pow_table">
			
			<thead>
				
				<tr id="color_hat">
					
					<th>Год</th>
					
					<th>Ежегодно 30%</th>
					
					<th>Ежемесячно 3%</th>
					
				</tr>
				
			</thead>
			
			<tbody>
				
				<?php
					
					$tenge = 100; //Денежки
					
					$years = 0; 
					
					$months = 4*12; //Месяцы
					
					$count_m = 0;
					
					$sum_m = 0;
					
					$sum_y = 0;
					
					$tenge_m = $tenge_y = $tenge;
					
					while($count_m<=$months)
					{	
				        $count_m++;
						
						$sum_m = $tenge_m * 3/100;
						
						$tenge_m += $sum_m;
						
						if(!($count_m % 12)){
							
							$sum_y = $tenge_y * 30/100;
						
						    $tenge_y += $sum_y;
						
						    $years++;
				
						    echo "<tr>
						             <td>$years</td>
						             <td>".round($tenge_y,2)."</td>
						             <td>".round($tenge_m,2)."</td> 
						          </tr>";
							  
						}
					}
					
				?>  
				
			</tbody>
			
		</table>
		
	</body>
</html>					