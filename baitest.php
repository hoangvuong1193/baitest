<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Bùi Hoàng Vượng</title>
</head>

<body>
<?php 
function tinhtongbai2()
{
	//bài này có thể sort giảm dần rồi cộng 2 phần tử đầu tiên nhưng em làm theo cách này ạ
	$numbers = array(0, 100, -4, 8, 143, 5, 99, 100);
	$clength = count($numbers);
	$max2=0;
	$max=$numbers[0];
            for($i = 1; $i < ($clength); $i++) 
			if ($max < $numbers[$i])
			{
				$max2=$max;
                $max= $numbers[$i];
			}
			else
				{
					if($max2<$numbers[$i])
					$max2=$numbers[$i];
				}
			echo $tong	=$max+$max2;
}
tinhtongbai2();
echo "<hr>";
function cautruclaimang()
{
	
	$a=array(11, 2, 8, 10, 5, 99, 1, 8, 9);
	
	$n=3;
	$b=array();
	$i=0;
	$dem=0;
	$t=0;
	while($t<3*$n)
	{
		
		for($i=$dem;$i<3*$n;$i+=$n)
		{
			$b[$t]=$a[$i];
			$t++;
		}
		$dem++;
	}
	foreach($b as $vl)
	echo $vl." " ;
}
cautruclaimang();
echo "<hr>";
function bai3()
{
	
	$numbers = array(1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15);
	sort($numbers);
	$clength = count($numbers);
	
	$min=$numbers[1]-$numbers[0];
	for($i=1;$i<$clength-1;$i++)
	{
		$kc=$numbers[$i+1]-$numbers[$i];
		if($kc<$min)
		$min=$kc;
	}
	
	for($i=0;$i<$clength-1;$i++)
	if($min==($numbers[$i+1]-$numbers[$i]))
	{
		echo $numbers[$i]."-".$numbers[$i+1]."<br>";
	}
}
bai3();
?>
</body>
</html>