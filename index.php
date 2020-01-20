<?php
$badword = $_GET['badword'];
$frase = "Una mattina mi son svegliato oh bella ciao bella ciao bella ciao ciao ciao una mattina mi son svegliato e ho trovato invasor";
$frase_sostituita = str_replace($badword, '***', $frase);
echo $frase_sostituita

?>
<!-- <h1>Una mattina mi son svegliato oh bella ciao bella ciao bella ciao ciao ciao una mattina mi son svegliato e ho trovato  <?php echo $badword ?> </h1> -->
<!-- <pre>
  <?php print_r($frase_sostituita); ?>
</pre> -->

<?php
// $parole = explode(' ', $frase);
// echo '<pre>';
// var_dump($parole);
// echo '</pre>';
 ?>
