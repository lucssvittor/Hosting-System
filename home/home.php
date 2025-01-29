<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Hospedagem - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f7fa;
        }
        
        .welcome-section {
            text-align: center;
            margin: auto;
        }

        .welcome-section h2 {
            font-size: 2rem;
            margin-bottom: 5px;
        }

        .welcome-section name {
            color: #002fff;
        }

        .welcome-section p {
            font-size: 1.2rem;
            color: #555;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            justify-items: stretch;
        }

        .card {
            background: rgba(255, 255, 255, 0.8);
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            color: #002fff;
        }

        .card-small {
            width: 100%;
        }

        .card-large {
            grid-column: span 2;
            width: 100%;
        }

        .card-header {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .card-body {
            font-size: 1rem;
            color: #333;
        }

        footer {
            text-align: center;
            margin-top: 25px;
        }

        .footer-links a {
            font-size: 1.5rem;
            margin: 0 0.5rem;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .info-container {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .info-container p {
            margin: 0;
            width: 80%;
        }

    </style>
</head>
<body>

<section class="welcome-section">
    <h2>Olá, <name>Lucas</name>! Tenha Um Ótimo Trabalho :)</h2>
</section>

<div class="footer-container">
    <!-- Card Status dos Quartos -->
    <section class="card card-small">
        <div class="card-header">
            <i class="fas fa-hotel"></i> Status dos Quartos
        </div>
        <div class="card-body">
            <div class="info-container">
                <?php
                $conexao = mysqli_connect("localhost", "root", "", "dbsistema");

                if (!$conexao) {
                    die("Conexão falhou: " . mysqli_connect_error());
                }

                $sqlDisponiveis = "SELECT COUNT(*) AS disponiveis FROM tbquartos WHERE status = 'disponivel'";
                $resultDisponiveis = mysqli_query($conexao, $sqlDisponiveis);
                $rowDisponiveis = mysqli_fetch_assoc($resultDisponiveis);
                $disponiveis = $rowDisponiveis['disponiveis'];

                $sqlOcupados = "SELECT COUNT(*) AS ocupados FROM tbquartos WHERE status = 'ocupado'";
                $resultOcupados = mysqli_query($conexao, $sqlOcupados);
                $rowOcupados = mysqli_fetch_assoc($resultOcupados);
                $ocupados = $rowOcupados['ocupados'];

                $sqlManutencao = "SELECT COUNT(*) AS manutencao FROM tbquartos WHERE status = 'manutencao'";
                $resultManutencao = mysqli_query($conexao, $sqlManutencao);
                $rowManutencao = mysqli_fetch_assoc($resultManutencao);
                $manutencao = $rowManutencao['manutencao'];

                $sqlCancelados = "SELECT COUNT(*) AS cancelados FROM tbquartos WHERE status = 'cancelado'";
                $resultCancelados = mysqli_query($conexao, $sqlCancelados);
                $rowCancelados = mysqli_fetch_assoc($resultCancelados);
                $cancelados = $rowCancelados['cancelados'];

                $sqlTotalQuartos = "SELECT COUNT(*) AS total_quartos FROM tbquartos";
                $resultTotalQuartos = mysqli_query($conexao, $sqlTotalQuartos);
                $rowTotalQuartos = mysqli_fetch_assoc($resultTotalQuartos);
                $totalQuartos = $rowTotalQuartos['total_quartos'];
                $mediaOcupacao = ($ocupados / $totalQuartos) * 100;
                ?>

                <p><strong>Disponíveis:</strong> <span class="info-highlight"><?= $disponiveis ?></span></p>
                <p><strong>Ocupados:</strong> <span class="info-highlight"><?= $ocupados ?></span></p>
                <p><strong>Em Manutenção:</strong> <span class="info-highlight"><?= $manutencao ?></span></p>
                <p><strong>Registros Cancelados:</strong> <span class="info-highlight"><?= $cancelados ?></span></p>
                <p><strong>Média de Ocupação:</strong> <span class="info-highlight"><?= round($mediaOcupacao, 2) ?>%</span></p>
            </div>
        </div>
    </section>

    <!-- Card Notificações Recentes -->
    <section class="card card-large">
        <div class="card-header">
            <i class="fas fa-bell"></i> Notificações Recentes
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Pagamento de reserva #123</strong> confirmado.</li>
                <li><strong>Check-in para quarto #202</strong> realizado.</li>
                <li><strong>Estoque atualizado:</strong> 20 novos itens adicionados.</li>
            </ul>
        </div>
    </section>

    <!-- Card Estatísticas -->
    <section class="card card-large">
        <div class="card-header">
            <i class="fas fa-chart-line"></i> Estatísticas
        </div>
        <div class="card-body">
            <p><strong>Lucro Mensal:</strong> <span class="info-highlight">R$15.000,00</span></p>
            <p><strong>Média de Ocupação:</strong> <span class="info-highlight">75%</span></p>
            <p><strong>Clientes Fidelizados:</strong> <span class="info-highlight">30</span></p>
            <p><strong>Reservas Canceladas:</strong> <span class="info-highlight">5</span> no último mês</p>
            <hr>
            <p>Para mais informações detalhadas, acesse a seção de relatórios.</p>
        </div>
    </section>

    <!-- Card Reservas -->
    <section class="card card-medium">
        <div class="card-header">
            <i class="fas fa-calendar-check"></i> Reservas
        </div>
        <div class="card-body">
            <p><strong>Reservas Confirmadas:</strong> <span class="info-highlight">8</span></p>
            <p><strong>Reservas Pendentes:</strong> <span class="info-highlight">3</span></p>
            <p><strong>Check-ins de Hoje:</strong> <span class="info-highlight">2</span></p>
            <p><strong>Check-outs de Hoje:</strong> <span class="info-highlight">1</span></p>
        </div>
    </section>

    <!-- Card Faturamento -->
    <section class="card card-medium">
        <div class="card-header">
            <i class="fas fa-dollar-sign"></i> Faturamento e Receita
        </div>
        <div class="card-body">
            <p><strong>Receita do Dia:</strong> <span class="info-highlight">R$1.500,00</span></p>
            <p><strong>Total de Pagamentos Recebidos:</strong> <span class="info-highlight">R$10.000,00</span></p>
            <p><strong>Pagamentos Pendentes:</strong> <span class="info-highlight">R$500,00</span></p>
        </div>
    </section>

    <!-- Card Feedback dos Clientes -->
    <section class="card card-small">
        <div class="card-header">
            <i class="fas fa-star"></i> Feedback dos Clientes
        </div>
        <div class="card-body">
            <p><strong>Última Avaliação:</strong> <span class="info-highlight">5/5</span></p>
            <p><strong>Comentários Positivos:</strong> Excelente atendimento!</p>
            <p><strong>Comentários Negativos:</strong> Quarto com cheiro estranho.</p>
        </div>
    </section>

    <!-- Card Funcionários -->
    <section class="card card-small">
        <div class="card-header">
            <i class="fas fa-users"></i> Funcionários
        </div>
        <div class="card-body">
            <p><strong>Funcionários Disponíveis:</strong> <span class="info-highlight">8</span></p>
            <p><strong>Funcionários em Folga:</strong> <span class="info-highlight">3</span></p>
            <p><strong>Funcionários em Turno:</strong> <span class="info-highlight">5</span></p>
        </div>
    </section>
</div>

<footer>
    <p>&copy; 2025 Sistema de Hospedagem. Todos os direitos reservados.</p>
</footer>
</body>
</html>
