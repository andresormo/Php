<form method="get">
  <input type="number" name="altura">
  <input type="submit" value="Enviar">
</form>
<?php
$altura = $_GET['altura'];
$asterisco = 1;
while ($altura > 0) {
  for ($i = 0; $i < $altura; $i++) {
    echo "&nbsp";
  }
  for ($i = 0; $i < $asterisco; $i++) {
    echo "* ";
  }
  $altura--;
  $asterisco++;
  echo "<br>";
}
?>