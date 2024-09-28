<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Atividade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Criar Nova Atividade</h1>
    <form action="/atividades/criar" method="post">
        <div class="form-group">
            <label for="name">Nome da Atividade:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="start">Data e Hora de Início:</label>
            <input type="datetime-local" class="form-control" name="start" required>
        </div>
        <div class="form-group">
            <label for="end">Data e Hora de Término:</label>
            <input type="datetime-local" class="form-control" name="end" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Atividade</button>
    </form>
    <a href="/atividades" class="btn btn-secondary mt-3">Voltar para Atividades</a>
</div>
</body>
</html>
