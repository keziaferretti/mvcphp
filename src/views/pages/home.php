<?php $render('header'); ?>


<a href="<?= $base; ?>/novo">Novo Usuário</a>

<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Ações</th>
  </tr>
  <?php foreach ($usuarios as $usuario) : ?>
    <tr>
      <td> <?= $usuario['id']; ?> </td>
      <td> <?= $usuario['nome']; ?> </td>
      <td> <?= $usuario['email']; ?> </td>
      <td>
        <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar">
          <img src="<?= $base; ?>/assets/images/document.png" alt="editar">
        </a>
        <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
          <img src="<?= $base; ?>/assets/images/trash.png" alt="excluir">
        </a>
      </td>

    </tr>

  <?php endforeach; ?>
</table>

<?php $render('footer'); ?>