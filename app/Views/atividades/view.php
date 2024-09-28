<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Atividade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalhes da Atividade</h1>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><?= $atividade['name']; ?></h5>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Descrição:</strong> <?= $atividade['description']; ?></p>
                <p class="card-text"><strong>Data e Hora de Início:</strong> <?= $atividade['start_datetime']; ?></p>
                <p class="card-text"><strong>Data e Hora de Término:</strong> <?= $atividade['end_datetime']; ?></p>
                <p class="card-text"><strong>Status:</strong> <?= $atividade['status']; ?></p>
            </div>
            <div class="card-footer">
                <a href="<?= site_url('atividades'); ?>" class="btn btn-primary">Voltar para Atividades</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
