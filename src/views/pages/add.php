<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">

  <label>
    Nome:<br>
    <input type="text" name="nome" />
  </label><br><br>
  <label for="">
    Email:<br>
    <input type="email" name="email" />
  </label>
  <br><br>
  <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>