<?php
$num=[];
for($i=0;$i<100;$i++)
{
    $num[]=rand(1,1000);
}
echo "Случайнык числа:" . implode(", ", $num) . "\n";
echo "Макс число" . max($num) . "\n";
echo "Мин число" . min($num) . "\n";
?>
<?php
$img=glob("*.jpg,jpeg,png,gif,bmp", GLOB_BRACE);
foreach($img as $images)
{
    echo '<img src="' . $images . '" alt="' . $images . '" style="max-width: 200px; margin: 10px;">';
}
?>
<?php
echo "<table border='1'>";
{
    echo "<tr>";
    for($j=2;$j<=10;$j++)
    {
        echo "<td>" . $i*$j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<?php
$initialAmount = 300;
$interestRate = 0.20;
$years = 20;

echo "<table border='1'>";
echo "<tr><th>Год</th><th>Сумма</th><th>Прибыль</th></tr>";

for ($year = 1; $year <= $years; $year++) {
    $profit = $initialAmount * $interestRate;
    $initialAmount += $profit;
    echo "<tr><td>$year</td><td>" . number_format($initialAmount, 2) . "</td><td>" . number_format($profit, 2) . "</td></tr>";
}

echo "</table>";
?>
<?php
$num=347689;
$reversnum=strrev($num);
echo "Число:$num\n";
echo "Число наоборот: $reversnum";
?>
<?php
$number = 347689;
$digits = str_split($number);
$count = count($digits);
$maxDigit = max($digits);
$minDigit = min($digits);
$sumDigits = array_sum($digits);
$average = $sumDigits / $count;

echo "Число: $number\n";
echo "Количество цифр: $count\n";
echo "Самая большая цифра: $maxDigit\n";
echo "Самая маленькая цифра: $minDigit\n";
echo "Сумма цифр: $sumDigits\n";
echo "Среднее значение: $average\n";
?>