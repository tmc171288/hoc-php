<!-- tinh so trang $num_page hien thi khi co tong so bai $total_row va so bai tren moi trang $num_per_page  
-->

<?php
$total_row = 10;
$number_page = 3;

$num_page = ceil($total_row / $number_page);

echo $num_page . " Trang";





?>