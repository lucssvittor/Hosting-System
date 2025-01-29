<?php
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js"></script>
    <title>Sistema De Hospedagem V1</title>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <header>
        <img src="img/eu.png" alt="Logo" style="display: flex; width: 200px; height: 200px ;" />
        </header>
        <a href="index.php?menuop=home">Home</a>
        <a href="index.php?menuop=consulta">Clientes</a>
        <a href="index.php?menuop=quartos">Quartos</a>
        <a href="index.php?menuop=home">Funcionarios</a>
        <a href="index.php?menuop=quadro-permissoes">Permissões</a>
        <a href="index.php?menuop=quadro-financeiro">Financeiro</a>
        <a href="index.php?menuop=quadro-faturamento">Faturamento</a>
        <a href="index.php?menuop=quadro-compras">Compras</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <header>


        <main>
            <?php
            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
            switch ($menuop) {
                case 'home':
                    include("home/home.php");
                    break;

                  // CLIENTES   
                  
                case 'cadastro-clientes':
                    include("clientes/cadastro-clientes.php");
                    break;
                case 'consulta':
                    include("clientes/consulta.php");
                    break;
                case 'inserir-clientes':
                    include("clientes/inserir-clientes.php");
                    break;
                case 'editar-clientes':
                    include("clientes/editar-clientes.php");
                    break;
                case 'atualizar-clientes':
                    include("clientes/atualizar-clientes.php");
                    break;

                  // QUARTOS      
                case 'quartos':
                    include("quartos/quartos.php");
                    break;
                case 'cadastro-quartos':
                    include("quartos/cadastro-quartos.php");
                    break;


                 // PERMISSÕES
                 case 'quadro-permissoes':
                    include("permissoes/quadro-permissoes.php");
                    break;
                 

                 // FINANCEIRO  
                 case 'quadro-financeiro':
                    include("financeiro/quadro-financeiro.php");
                    break;
                    

                 // FATURAMENTO   
                    case 'quadro-faturamento':
                        include("faturamento/quadro-faturamento.php");
                        break;
                    
                
                // COMPRAS   
                case 'quadro-compras':
                    include("compras/quadro-compras.php");
                    break;
                    case 'formulario-compras':
                        include("compras/formulario-compras.php");
                        break;
                        case 'add-compras':
                            include("compras/add-compras.php");
                            break;
                     

                default:
                    include("home/home.php");
                    break;
            }
            ?>
        </main>
    </div>

</body>
</html>
