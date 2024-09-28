<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Nova Atividade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Criar Nova Atividade</h2>
    <form action="<?= site_url('atividades/criar') ?>" method="post">
        <div class="form-group">
            <label for="name">Nome da Atividade</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="start_datetime">Data de Início</label>
            <input type="datetime-local" name="start_datetime" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_datetime">Data de Fim</label>
            <input type="datetime-local" name="end_datetime" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Atividade</button>
    </form>
</div>
</body>
</html>
