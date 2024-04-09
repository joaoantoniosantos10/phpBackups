<?php
include("header.php");
include_once("CLASSES/validacao.php");
$name = $_GET["name"];
$password = $_GET["password"];
$validacao = new Validacao($name, $id);
?>

<main>

<form action="">
 
<fieldset>
<label for="name">Usuário</label>
<input type="text" name="name" id="name">
</fieldset>

<fieldset>
<label for="password">Senha</label>
<input type="text" name="password" id="password">
<img  src="img/chave.png" alt="">
</fieldset>

</form>


</main>

<?php
include("footer.php");
?>