<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Atividade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Atividade</h1>
        <form action="<?= site_url('atividades/update/' . $atividade['id']); ?>" method="post">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" value="<?= $atividade['name']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" class="form-control" required><?= $atividade['description']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="start_datetime">Data e Hora de Início:</label>
                <input type="datetime-local" name="start_datetime" value="<?= $atividade['start_datetime']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="end_datetime">Data e Hora de Término:</label>
                <input type="datetime-local" name="end_datetime" value="<?= $atividade['end_datetime']; ?>" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Atividade</button>
            <a href="<?= site_url('atividades'); ?>" class="btn btn-secondary">Voltar para Atividades</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
