<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Interativa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
            transition: background-color 0.5s;
        }
        h1 {
            color: #333;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .change-text {
            background-color: #4CAF50; /* Verde */
            color: white;
        }
        .color-button {
            background-color: #008CBA; /* Azul */
            color: white;
        }
        .color-button:hover {
            background-color: #005f73; /* Azul escuro */
        }
        .welcome-button {
            background-color: #f44336; /* Vermelho */
            color: white;
        }
    </style>
</head>
<body>

    <h1 id="main-text">Bem-vindo à minha página! 🌟</h1>
    
    <button class="change-text" onclick="changeText()">Mudar Texto</button>
    <button class="color-button" onclick="changeBackgroundColor('lightblue')">Cor Azul</button>
    <button class="color-button" onclick="changeBackgroundColor('lightgreen')">Cor Verde</button>
    <button class="color-button" onclick="changeBackgroundColor('lightcoral')">Cor Vermelha</button>
    <button class="welcome-button" onclick="showWelcome()">Dizer Olá! 👋</button>

    <script>
        function changeText() {
            const mainText = document.getElementById('main-text');
            mainText.textContent = mainText.textContent === 'Bem-vindo à minha página! 🌟' 
                ? 'Você mudou o texto! 🎉' 
                : 'Bem-vindo à minha página! 🌟';
        }

        function changeBackgroundColor(color) {
            document.body.style.backgroundColor = color;
        }

        function showWelcome() {
            alert('Bem-vindo à minha página interativa! 🎈');
        }
    </script>

</body>
</html>