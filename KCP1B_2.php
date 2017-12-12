<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8" />
		
		<title>Задание 2</title>
		
		<link rel="stylesheet" href="style.css" />
		
	</head>
	<body>
		
		<h1>Задание 2</h1>
		
		<h2>Заполнение по горизонтали и вертикали</h2>
		
		<table class = "pow_table">
		
			<caption>а) по горизонтали</caption>
			
			<tbody class="even_zeebra">
				
				<?php
					
					$n = 18; //Колличество чисел в таблице
					
					define("COLUMN" ,"5"); //Колличество столбцов таблицы
					                       //с вертикальным и горизонтальным заполнением
					
					$row_count = ceil($n/COLUMN); //Колличество рядов таблицы
					
					for($i = 0;$i < $row_count;$i++)
					{	
						echo "<tr>";
						
						for($j = 1;$j <= COLUMN;$j++)
						{
							$num = $i*COLUMN+$j;//вычисляем число помещаемое в ячейку таблицы
							
							if($num<=$n)
							    echo  "<td>$num</td>";
							else
								echo  '<td>&nbsp;</td>';
						}
					
						echo "</tr>";
					}
					
				?>  
				
			</tbody>
			
		</table>
		
		<table class = "pow_table">
		
			<caption>а) по вертикали</caption>
			
			<tbody class="even_zeebra">
				
				<?php
					
					
					
					for($i = 1;$i <=$row_count;$i++)
					{	
						echo "<tr>";
						
						for($j = 0;$j < COLUMN;$j++)
						{
							$num = $j*$row_count+$i; //вычисляем число помещаемое в ячейку таблицы
							
							if($num<=$n)
							    echo  "<td>$num</td>";
							else
								echo  '<td>&nbsp;</td>';
						}
					
						echo "</tr>";
					}
					
				?>  
				
			</tbody>
			
		</table>
		
		<h2>Плавное изменение фона рядов</h2>
		
		<table class = "random_table">
			
			<caption>а) в один столбец</caption>
			
			<thead>
				
				<tr class="fat_bottom_line">
					
					<th>Номер п/п</th>
					
					<th>Число</th>
					
				</tr>
				
			</thead>
			
			<tbody >
				
				<?php
					
					define("N_CONST", '100'); //Колличество случайных чисел выводимых этой и следующей таблицах
					
					$colorCount = 255; //счетчик цвета
					
					$delta = 255/N_CONST; //шаг цвета
					
					for($i = 1;$i <= N_CONST;$i++)
					{	
				        
						
						echo "<tr style=\" background: rgb(".floor($colorCount).",".floor($colorCount).",".floor($colorCount)."); 
						                   color: rgb(255,0,".floor($colorCount).")\">
						          <td>".$i."</td>
						          <td>".mt_rand( 1 , N_CONST )."</td>
						      </tr>";
							  
					    $colorCount -= $delta;
						
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
			
			<tbody >
				
				<?php
					
					$z = 0; //Счетчик записываемых в таблицу случайных чисел.
					        //Согласно заданию их должно быть 100 т.е. N_CONST.
					        //Программа работает с любым колличеством вводимых чисел.
					
					$colorCount = 255; //счетчик цвета
					
					$row_count = N_CONST/$k;
					
					$delta = 255/$row_count; //шаг цвета
					
					
					for($x = 1;$x <= ceil($row_count);$x++)
					{	
						
						
						echo "<tr style=\" background: rgb(".floor($colorCount).",".floor($colorCount).",".floor($colorCount)."); 
						                   color: rgb(255,0,".floor($colorCount).");\">
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
						
						$colorCount -= $delta;
						
					}
					
				?>  
				
			</tbody>
		</table>
		
	</body>
</html>					