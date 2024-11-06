<?php

if (isset($_POST['submit']))
{
    
    include_once('config.php');
    
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data_nascimento'];

$result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, telefone, sexo, data_nasc) VALUES('$nome', '$email', '$telefone', '$sexo', '$data_nasc')");

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
<style>
body{
font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right,rgb(20, 147, 200), rgb(17,54,71));
    margin: 0; 
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.box{
    color: white;
    background-color: rgba(0, 0, 0, 0.6);
    padding: 20px; 
    border-radius: 15px;
    width: 30%;
    box-sizing: border-box; 

}

.inputBox {
  display: flex;
  flex-direction: column;
  margin-bottom: 15px;

}

.inputBox label {
  margin-bottom: 5px;

}
.inputBox input, .inputBox select
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;


}

fieldset{

    border: 3px solid dodgerblue;
    border-radius: 10px;
    padding: 20px;

}
legend{

    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 8px;
    width: auto;
    margin: 0 auto 15px;


}
.radio-group {
  margin-bottom: 15px;
}
.radio-group label {
    margin-left: 5px;
}


input[type="submit"] {
    background-color: dodgerblue;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

#submit:hover{

background-image: linear-gradient(to right,rgb(20,147,220), rgb(17,54,71));
}

.input{

    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
position: absolute;
top: 0px;
left: 0px;
pointer-events: none;
transition: .5px;
}
.inputUser:focus ~ .labelInput,
.inputUser:user-valid ~ .labelInput{
    top: -20px;
    font-size: 12px;
    color: dodgerblue;
}

.btn-voltar {
        position: fixed;
        top: 10px;
        left: 10px;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-voltar:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

</style>

</head>
<body>

<a href="home.php" class="btn-voltar">Voltar</a>


    <div class="box">
    <form action="formulario.php" method="POST">
    <fieldset>
        <legend><b>Formulário de Clientes</b></legend>
            <div class="inputBox">
                <label for="nome" class="labelinput" >Nome completo</label>
                <input type="text" name="nome" id="nome" class="inputUser" required>
            </div>

            <div class="inputBox">
                <label for="senha" class="labelinput" >Senha</label>
                <input type="password" name="senha" id="senha" class="inputUser" required>
            </div>
<br><br>
            <div class="inputBox">
                <label for="email" class="labelinput">Email</label>
                <input type="email" name="email" id="email" class="inputUser" required>
            </div>

            <div class="inputBox">
                <label for="telefone" class="labelinput">Telefone</label>
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
            </div>


        <p>Sexo:</p>
        <div class="radio-group">
            <input type="radio" name="genero" value="feminino" id="feminino" required>
            <label for="feminino">Feminino</label>
        </div>
        <div class="radio-group">
          <input type="radio" name="genero" value="masculino" id="masculino" required>
          <label for="masculino">Masculino</label>

        </div>
        <div class="radio-group">
          <input type="radio" name="genero" value="outro" id="outro" required>
          <label for="outro">Outro</label>

        </div>


        <div class="inputBox">
          <label for="data_nascimento">Data de Nascimento</label>
          <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
        </div>

        <input type="submit" name="submit" id="submit" value="Enviar">
        
    </fieldset>

    </form>
        
    </div>
</body>
</html>