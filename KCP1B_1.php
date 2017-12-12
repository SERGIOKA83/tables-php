<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8" />
		
		<title>Задание 1</title>
		
		<link rel="stylesheet" href="style.css" />
		
	</head>
	<body>
		
		<h1>Задание 1</h1>
		
		<h2>Квадраты и кубы</h2>
		
		<table class = "pow_table">
			
			<thead>
				
				<tr id="color_hat">
					
					<th>Число</th>
					
					<th>Квадрат числа</th>
					
					<th>Куб числа</th>
					
				</tr>
				
			</thead>
			
			<tbody>
				
				<?php
					
					$n = 10; //Задает ограничение для цикла
					
					for($i = 2;$i <= $n;$i++)
					{	
						echo "<tr>
						<td>$i</td>
						<td>".pow($i,2)."</td>
						<td>".pow($i,3)."</td> 
						</tr>";
					}
					
				?>  
				
			</tbody>
			
		</table>
		
		
		
		<h2>Случайные числа</h2>
		
		<table class = "random_table">
			
			<caption>а) в один столбец</caption>
			
			<thead>
				
				<tr class="fat_bottom_line">
					
					<th>Номер п/п</th>
					
					<th>Число</th>
					
				</tr>
				
			</thead>
			
			<tbody class="zeebra">
				
				<?php
					
					define("N_CONST", '100'); //Колличество случайных чисел выводимых этой и следующей таблицах
					
					for($i = 1;$i <= N_CONST;$i++)
					{	
						echo "<tr>
						<td>$i</td>
						<td>".mt_rand( 1 , N_CONST )."</td>
						</tr>";
					}
					
				?>  
				
			</tbody>
			
		</table>
		
		<?php
			
			/*
				Колличество столбцов с случайными числами
				в следующей таблице задается переменной $k                   
			*/
			
			$k = 3; //Колличество столбцов 
		?>
		
		<table class = "random_table">
			
			<caption>б) в n столбцов</caption>
			
			<thead>
				
				<tr class="fat_bottom_line">
					
					<th>Номер п/п</th>
					
					<th colspan="<?= $k ?>" >Число</th>
					
				</tr>
				
			</thead>
			
			<tbody class="zeebra">
				
				<?php
					
					$z = 0; //Счетчик записываемых в таблицу случайных чисел.
					//Согласно заданию их должно быть 100 т.е. N_CONST.
					//Программа работает с любым колличеством вводимых чисел.
					
					for($x = 1;$x <= ceil(N_CONST/$k);$x++)
					{	
						
						echo "<tr>
						<td>$x</td>";
						
						for($y = 1;$y <= $k;$y++)
						{	
							$z++;
							
							if($z <= N_CONST)
							$rnd = mt_rand( 1 , N_CONST );
							else
							$rnd = '&nbsp;';
							
							echo "<td>".$rnd."</td>";
							
						}
						echo "</tr>";
					}
					
				?>  
				
			</tbody>
		</table>
		
	</body>
</html>					