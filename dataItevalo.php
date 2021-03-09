<?php
// manipulação de data e hora
$data = new DateTime();
/**
 * -> P representação de período: vem antes do dia, mês, ano e senana
 * Y ano
 * M mês
 * D dia
 * W Semana
 * -> T representação de tempo: vem astes da hora, minito e segundo 
 * H horas
 * M minutos
 * S segundos
 */
$intervalo = new DateInterval('P5yT5M');
$data->add($intervalo);

var_dump($data);
