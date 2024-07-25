<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            margin: 0;
        }

        .container {
            padding: 25px;
        }

        .loading {
            width: 100%;
            margin: auto;
            display: none;
        }

        .progress-bar {
            height: 2px;
            background-color: #e5e7eb;
            width: 100%;
            overflow: hidden;
        }

        .progress-bar-value {
            width: 100%;
            height: 100%;
            background-color: #ea580c;
            animation: indeterminateAnimation 1s infinite linear;
            transform-origin: 0% 50%;
        }

        @keyframes indeterminateAnimation {
            0% {
                transform:  translateX(0) scaleX(0);
            }
            40% {
                transform:  translateX(0) scaleX(0.4);
            }
            100% {
                transform:  translateX(100%) scaleX(0.5);
            }
        }
    </style>
</head>
<body>
    <div id="loading" class="loading">
        <div class="progress-bar">
            <div class="progress-bar-value"></div>
        </div>
    </div>

    <div class="container">
        <h1>Formulário de Cadastro</h1>
        <form id="formulario" action="processa_formulario.php" method="post" onsubmit="showLoading('btnSalvar')">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" value="Maurício" required><br><br>
            
            <label for="email">E-mail: </label>
            <input type="email" id="email" name="email" value="mauricioc.bilessimo@gmail.com" required><br><br>
            
            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha" value="1234" required><br><br>
            
            <label>Gênero:</label>
            <input type="radio" id="masculino" name="genero" value="masculino" checked required>
            <label for="masculino">Masculino</label>

            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label><br><br>
            
            <label for="termos">Aceito os termos:</label>
            <input type="checkbox" id="termos" name="termos" required><br><br>
            
            <button type="submit" id="btnSalvar">Salvar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function showLoading(buttonId) {
            document.getElementById(buttonId).disabled = true;
            document.getElementById('loading').style.display = 'inline';
        }
    </script>
</body>
</html>
