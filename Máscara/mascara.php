
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }
        h1 {
            text-align: center;
        }
        form {
            background: #fff;
            padding: 10px;
            border: 1px solid #000;
            max-width: 300px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
        }
        input {
            width: 100%;
            padding: 5px;
            border: 1px solid #000;
        }
        .error {
            color: red;
            font-size: 0.8em;
        }
        button {
            background-color: #008CBA;
            color: white;
            padding: 5px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>

    <h1>Formulário de Cadastro</h1>
    <form id="form">
        <div class="form-group">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" required>
            <div class="error" id="error-nome"></div>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" maxlength="14" required>
            <div class="error" id="error-cpf"></div>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" maxlength="15" required>
            <div class="error" id="error-telefone"></div>
        </div>
        <div class="form-group">
            <label for="data-nascimento">Data de Nascimento:</label>
            <input type="text" id="data-nascimento" maxlength="10" required>
            <div class="error" id="error-data-nascimento"></div>
        </div>
        <div class="form-group">
            <label for="cep">CEP:</label>
            <input type="text" id="cep" maxlength="10" required>
            <div class="error" id="error-cep"></div>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" required>
            <div class="error" id="error-email"></div>
        </div>
        <button type="submit">Enviar</button>
    </form>

    <script>
        function aplicarMascara(input, mascara) {
            input.addEventListener('input', function() {
                let valor = this.value.replace(/\D/g, '');
                let resultado = '';
                let i = 0;

                for (let char of mascara) {
                    if (char === '0') {
                        if (i < valor.length) {
                            resultado += valor.charAt(i);
                            i++;
                        } else {
                            break;
                        }
                    } else {
                        resultado += char;
                    }
                }
                this.value = resultado;
            });
        }

        aplicarMascara(document.getElementById('cpf'), '000.000.000-00');
        aplicarMascara(document.getElementById('telefone'), '(00) 00000-0000');
        aplicarMascara(document.getElementById('data-nascimento'), '00/00/0000');
        aplicarMascara(document.getElementById('cep'), '00000-000');

        document.getElementById('form').addEventListener('submit', function(event)) {
            let isValid = true;}
            document.querySelectorAll('.error').forEach(error => error.textContent = '');

            const campos = ['nome', 'cpf', 'telefone', 'data-nascimento', 'cep', 'email'];
            campos.forEach(campo => {
                const input = document.getElementById(campo);
                if (!input.value) {
                    document.getElementById(`error-${campo}`).textContent = 'Campo obrigatório.';
                    isValid = false;
                }
        });

            const email = document.getElementById('email').value