<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Cadastro de Usuário</h2>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <form action="<?= site_url('/usuarios/cadastrar') ?>" method="post">
        <input type="text" name="login" required placeholder="Login">
        <input type="password" name="password" required placeholder="Senha">
        <button type="submit">Cadastrar</button>
    </form>
    <p>Já tem uma conta? <a href="/login" class="btn btn-link">Entrar</a></p>
</div>
</body>
</html>
