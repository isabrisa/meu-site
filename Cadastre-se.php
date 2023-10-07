<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!--  FIM GOOGLE FONTS -->

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- FIM BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="Estilo.css">
    <title>AfroEmpower</title>

</head>

<body>
    <section class="contato">
        <div class="interface">
            <h2 class="titulo"> <br>FAÇA PARTE DA NOSSA<span> EQUIPE</span></h2>
            <form method="post" action="Confirmar.php">
                <div>
                    <input type="text" name="nome" id="nome-box" class="input" placeholder="Nome completo" required>
                    <label for="nome-box"></label>
                </div>

                <div>
                    <input type="text" name="email" id="nome-box" class="input" placeholder="E-mail" required>
                    <label for="nome-box"></label>
                </div>

                <div>
                    <input type="tel" name="telefone" id="nome-box" class="input" placeholder="Telefone">
                    <label for="nome-box"></label>
                </div>

                <div>
                    <input type="text" name="data" id="nome-box" class="input" placeholder="Data de nascimento"
                        required>
                    <label for="nome-box"></label>
                </div>

                <div>
                    <input type="text" name="cpf" id="nome-box" class="input" placeholder="Digite seu CPF" required>
                    <label for="nome-box"></label>
                </div>


                <div>
                    <textarea name="" id="nome-box" placeholder="Em caso de dúvida, digite-a aqui" required></textarea>
                </div>

                <div class="btn-enviar"><input type="submit" value="CONFIRMAR"></div> <br>

                <center>Já possui uma conta? <a href="Entrar.php"> Entrar</a></center>
                <br> <br>
            </form>
        </div>
    </section>

    <body>

</html>