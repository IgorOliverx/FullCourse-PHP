<html>

<?php

$numero = $_POST['numero']  ;

?>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <label>Insira um número</label>
    <input type="number" name="numero" value="" placeholder="insira um valor">
    <input type="submit" value="enviar">
    rpf.celso.rcarvalho@outlokk.com
    Hdb5b27@
    eaa@4933
    Limeira2010
</form>



<?php
if($numero == 0){
    print "Valor nulo";
}if($numero>0){
    print "Valor positivo";
} if($numero<0)
{print "valor negativo";}
?>





</html>