<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Resetando o estilo padrão */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo geral do corpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilo do container */
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        /* Título do formulário */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Estilo das seções do formulário */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        /* Campos de entrada */
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Estilo do botão */
        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulário de Contato</h2>
        <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="assunto">Assunto:</label>
                <input type="text" id="assunto" name="assunto" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
