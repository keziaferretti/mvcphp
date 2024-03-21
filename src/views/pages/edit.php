<?php $render('header'); ?>

<h2>Editar Usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">

  <label>
    Nome:<br>
    <input type="text" name="nome" value="<?=$usuario['nome'];?>"/>
  </label><br><br>
  <label for="">
    Email:<br>
    <input type="email" name="email" value="<?=$usuario['email'];?>"/>
  </label>
  <br><br>
  <input type="submit" value="salvar">
</form>

<?php $render('footer'); ?>