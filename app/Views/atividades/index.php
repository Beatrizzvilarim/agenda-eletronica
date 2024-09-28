<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js'></script>
    <title>Atividades</title>

</head>
<body>
<div class="container">
    <h2>Suas Atividades</h2>
    <div id='calendar'></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/atividades/getEvents', 
                editable: true,
                dateClick: function(info) {
                    
                    window.location.href = '/atividades/verAtividadesPorData/' + info.dateStr; 
                }
            });

            calendar.render(); 
        });

    </script>

<div id="button-container"></div> <!-- Container para o botão -->

<script>
    $(document).ready(function() {
        // Criação do botão usando jQuery
        const button = $('<a>', {
            href: '<?= site_url('atividades/criar') ?>',
            class: 'btn btn-success mb-3',
            text: 'Criar Nova Atividade'
        });

        // Adiciona o botão ao container
        $('#button-container').append(button);
    });
</script>



    <!-- Exibe todas as atividades do usuário -->
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data Início</th>
                <th>Data Fim</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($atividades)): ?>
                <?php foreach ($atividades as $atividade): ?>
                    <tr>
                        <td><?= $atividade['name'] ?></td>
                        <td><?= $atividade['description'] ?></td>
                        <td><?= $atividade['start_datetime'] ?></td>
                        <td><?= $atividade['end_datetime'] ?></td>
                        <td><?= $atividade['status'] ?></td>
                        <td>
                            <!-- Botões para ler, atualizar e deletar atividade -->
                            <a href="<?= site_url('atividades/view/' . $atividade['id']); ?>">Ver</a>
                            <a href="<?= site_url('atividades/edit/' . $atividade['id']); ?>" class="btn btn-warning">Editar</a>
                            <a href="<?= site_url('atividades/excluir/'.$atividade['id']) ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                            

                            <!-- Form para alterar status -->
                            <form action="<?= site_url('atividades/alterarStatus/'.$atividade['id']) ?>" method="post" style="display:inline;">
                                <select name="status" onchange="this.form.submit()">
                                    <option value="pendente" <?= $atividade['status'] == 'pendente' ? 'selected' : '' ?>>Pendente</option>
                                    <option value="concluída" <?= $atividade['status'] == 'concluída' ? 'selected' : '' ?>>Concluída</option>
                                    <option value="cancelada" <?= $atividade['status'] == 'cancelada' ? 'selected' : '' ?>>cancelada</option>
                                </select>
                            </form>
                            
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Nenhuma atividade encontrada.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
