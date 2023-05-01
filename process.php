<?php

include ('responses.php');

function normalize ($string) {
  $table = array(
      'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
      'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
      'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
      'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
      'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
      'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
      'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
      'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r',
  );
  
  return strtr($string, $table);
}

$query = strtolower(normalize($_POST['query']));
$response = "Perdona, no te he entendido. Puedes preguntarme cosas como Quien eres? o Que caracteristicas tiene el universo de warhammer 40000?. Si quieres mas informacion puedes encontrarla en el Codex";

if ($query === 'hola') {
  $response = $response_hola;
}

if ($query === 'quien eres?') {
  $response = $response_quien_eres;
}

if ($query === 'que fue la herejia de horus?') {
  $response = $response_herejia;
}

if ($query === 'quien es el emperador de la humanidad?') {
  $response = $response_emperador;
}

if ($query === 'que facciones principales podemos encontrar en warhammer 40000?') {
  $response = $response_facciones;
}

if ($query === 'que caracteristicas tiene el universo de warhammer 40000?') {
  $response = $response_universo;
}

if ($query === 'que son los primarcas?') {
  $response = $response_primarcas;
}

if ($query === 'que facciones pertenecen al caos?') {
  $response = $response_facciones_caos;
}

echo $response;