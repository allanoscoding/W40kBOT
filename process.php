<?php
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
$query = $_POST['query'];
$query = strtolower(normalize($query));
$response = 'No te he entendido';

if ($query === 'hola') {
  $response = 'Hola caracola';
}

if ($query === 'que fue la herejia de horus?') {
  $response = 'La Herejía de Horus fue un evento ficticio que se desarrolló en el universo de Warhammer 40,000, creado por Games Workshop. Es una historia épica que involucra a las fuerzas del Imperio humano, los Marines Espaciales, los Titanes y otras facciones en una guerra total que abarca toda la galaxia.
  En la trama, Horus Lupercal, uno de los Primarcas leales al Emperador, se rebela contra su padre y se convierte en el líder de una insurrección que involucra a otros Primarcas y a sus legiones de Marines Espaciales. La guerra resultante se llama la Herejía de Horus, y su objetivo final es derrocar al Emperador y tomar el control del Imperio.
  La Herejía de Horus es una historia larga y compleja que se desarrolla a lo largo de varios libros, juegos y otros medios. Es una de las historias más importantes e influyentes del universo de Warhammer 40,000, y ha tenido un impacto duradero en la mitología y el trasfondo del juego.'
  ;
}

echo $response;