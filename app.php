<html>
  <head>
    <title>Teste PHP</title>
  </head>

  <body>
    <form action="" method="get">
      Exibir até (maior que 2): <input type="number" name="number" /><br />
      <input type="submit" name="submit" value="Calcular" />
    </form>

    <?php $n=$_GET['number']; $ultimo=1; $penultimo=0; echo "0<br />1<br />";
    for($count=1 ; $count<=$n-2 ; $count++){ $atual = $ultimo + $penultimo; echo
    $atual."<br />"; $penultimo = $ultimo; $ultimo = $atual; } ?>

  </body>
</html>
