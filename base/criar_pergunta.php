<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Pergunta</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #209cee; /* Azul mais escuro */
            color: white;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Para o footer ficar no final da página */
        }


        header {
          background-color: (to right,rgb(20, 147, 200), rgb(17,54,71));
            padding: 10px 0;
           text-align: center;
        }

        .btn-voltar {
            padding: 10px 20px;
            background-color: #0056b3;
            display: inline-block;
            color: white;
            text-decoration: none;
           border-radius: 5px;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;  
            padding: 20px;

        }

        h1 {
            color: white;
        }

        form {
          background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 50%;
            max-width: 600px;

        }

        label {
            display: block; 
            margin-bottom: 10px;
            color: white; 
        }

        input[type="text"],
        select,
        textarea {
            width: calc(100% - 22px); 
            padding: 10px;
            margin-bottom: 20px;
           border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; 
        }

        input[type="submit"] {
            background-color: #007bff; 
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; 

        }

        input[type="submit"]:hover {
          background-color: #0056b3; 
        }



        
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
           margin-top: auto; 
        }
    </style>
</head>
<body>

    <header>
        <a href="feed.php" class="btn-voltar">Voltar</a>
    </header>

    <main>
        <h1>Criar Pergunta</h1>
        <form action="salvar_pergunta.php" method="post">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required><br><br>

            <label for="linguagem">Linguagem:</label>
            <select id="linguagem" name="linguagem">
                <option value="python">Python</option>
                <option value="javascript">JavaScript</option>
                <option value="C#">C#</option>
                <option value="Lua">Lua</option>
                <option value="Ruby">Ruby</option>
                <option value="C++">C++</option>
                
            </select><br><br>

            <label for="conteudo">Conteúdo:</label>
            <textarea id="conteudo" name="conteudo" rows="5" required></textarea><br><br>

            <input type="submit" value="Publicar Pergunta">
        </form>
    </main>
    <footer>
        <p>Fórum</p>
    </footer>
</body>
</html>