<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed do Fórum</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
            margin: 4px;
            padding: 20px;
        }

        header {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }

        .btn-voltar {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        main {
            overflow: hidden;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
        }

        .conteudo-principal {
            width: 70%;
            margin-right: 20px;
        }
        
        .pergunta {
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        
        .pergunta h2 {
            margin-top: 0;
        }

        .info {
            color: #777;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .resposta {
            background-color: #f8f8f8;
            padding: 15px;
            margin-top: 15px;
            border-radius: 5px;
        }

        pre {
            background-color: #eee;
            padding: 10px;
            overflow-x: auto; 
        }


        code {
            font-family: monospace;
        }

        .btn-responder {
            display: inline-block;
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn-criar-pergunta {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        .sugestoes {
            width: 30%;
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 5px;
        }

        .sugestoes h3 {
            margin-top: 0;
        }

        .sugestoes ul {
            list-style: none;
            padding: 0;
        }

        .sugestoes li {
            margin-bottom: 5px;
        }

        .sugestoes a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>

  
    <main>
        <div class="conteudo-principal">
            <h1>Feed do Fórum</h1>
            
            <div class="pergunta">
                <div class="container">
                <aside class="sugestoes">
                    <h3>Sugestões</h3>
                    <ul>
                        <li><a href="#">Como usar arrays em Java?</a></li>
                        <li><a href="#">O que é um loop for em C#?</a></li>
                    </ul>
                
                    <h3>Linguagens</h3>
                    <ul>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">C#</a></li>
                        <li><a href="#">C++</a></li>
                        <li><a href="#">PHP</a></li>
                    </ul>
                </aside>
                
                </div>
                <h2>Como inverter uma string em Python?</h2>
                <p class="info">Linguagem: Python | Por: Usuário1 em 2024-07-26</p>
                <p>Preciso inverter uma string em Python, mas não estou conseguindo. Alguém pode me ajudar?</p>

                <div class="resposta">
                    <p>Você pode usar slicing para inverter uma string:</p>
                    <pre><code>string_invertida = string_original[::-1]</code></pre>
                    <p class="info">Respondido em 2024-07-26</p>
                </div>
                <a href="#" class="btn-responder">Responder</a>
            </div>

            <div class="pergunta">
                <h2>Diferença entre `let` e `var` em JavaScript?</h2>
                <p class="info">Linguagem: JavaScript | Por: Usuário2 em 2024-07-25</p>
                <p>Qual a diferença entre declarar variáveis com `let` e `var` em JavaScript?</p>
                <a href="#" class="btn-responder">Responder</a>
            </div>

            <div class="pergunta">
                <h2>Como inverter uma string em Python?</h2>
                <p class="info">Linguagem: Python | Por: João em 2024-07-26</p>
                <p>Preciso inverter uma string em Python, mas não estou conseguindo. Alguém pode me ajudar?</p>
                <div class="resposta">
                    <p>Você pode usar slicing para inverter uma string:</p>
                    <pre><code>string_invertida = string_original[::-1]</code></pre>
                    <p class="info">Respondido por: Maria em 2024-07-26</p>
                </div>
                <a href="#" class="btn-responder">Responder</a>
            </div>

            <div class="pergunta">
                <h2>Diferença entre `let` e `var` em JavaScript?</h2>
                <p class="info">Linguagem: JavaScript | Por: Pedro em 2024-07-25</p>
                <p>Qual a diferença entre declarar variáveis com `let` e `var` em JavaScript?</p>
                <div class="resposta">
                    <p>`var` tem escopo de função, enquanto `let` tem escopo de bloco.  `let` evita problemas de hoisting.</p>
                    <p class="info">Respondido por: Ana em 2024-07-25</p>
                </div>
                <a href="#" class="btn-responder">Responder</a>
            </div>

            <div class="pergunta">
                <h2>Como conectar ao banco de dados em PHP?</h2>
                <p class="info">Linguagem: PHP | Por: Lucas em 2024-07-24</p>
                <p>Como faço para conectar ao MySQL usando PHP?</p>
                <a href="#" class="btn-responder">Responder</a>
            </div>

            <div class="pergunta">
                <h2>Criando threads em Java</h2>
                <p class="info">Linguagem: Java | Por: Juliana em 2024-07-23</p>
                <p>Como criar e gerenciar threads em Java?</p>
                <a href="#" class="btn-responder">Responder</a>
            </div>


            <div class="pergunta">
                <h2>O que são ponteiros em C++?</h2>
                <p class="info">Linguagem: C++ | Por: Marcos em 2024-07-22</p>
                <p>Como funcionam os ponteiros em C++ e quando devo usá-los?</p>
                <div class="resposta">
                    <p>Ponteiros são variáveis que armazenam endereços de memória. Úteis para alocação dinâmica e manipulação de dados.</p>
                    <p class="info">Respondido por: Sofia em 2024-07-22</p>
                </div>
                <a href="#" class="btn-responder">Responder</a>
            </div>

            <div class="pergunta">
                <h2>Ordenar um array em JavaScript</h2>
                <p class="info">Linguagem: JavaScript | Por: Carla em 2024-07-21</p>
                <p>Como ordernar um array de números em JavaScript?</p>
                <a href="#" class="btn-responder">Responder</a>
            </div>

            <div class="pergunta">
                <h2>Herança em C#</h2>
                <p class="info">Linguagem: C# | Por: Rafael em 2024-07-20</p>
                <p>Como funciona a herança em C#?  Explique os conceitos de classes base e derivadas.</p>
                <a href="#" class="btn-responder">Responder</a>
            </div>

            <div class="pergunta">
                <h2>Manipulando JSON em Python</h2>
                <p class="info">Linguagem: Python | Por: Beatriz em 2024-07-19</p>
                <p>Como ler e escrever dados em formato JSON usando Python?</p>
                <a href="#" class="btn-responder">Responder</a>
            </div>


            <a href="criar_pergunta.php" target="_blank" class="btn-criar-pergunta">+ Criar Pergunta</a>
            
    </main>

</body>
</html>