<?php
$data = new DateTime();
$intervalo = new DateInterval('P5Y10M12DT2H5M30S');
$data->sub($intervalo); //para acionar  e add e pra subitrair e sub
echo $data->format('d/m/Y h:i:s') . PHP_EOL;