<?php

$host = '208.82.114.142';
$name = 'tijanama_tijana';
$pass = 'golf4tdi';
$db = 'tijanama_termini';

if($conn = mysqli_connect($host, $name, $pass)){

} else {
  echo 'connect problem';
}

if(mysqli_select_db($conn, $db)) {

} else {
echo 'Couldnt connect to a database';
}

?>
