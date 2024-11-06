<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Login</title>
<style>
body {
  font-family: sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
  margin: 0;
}

.hero {
  background-color: rgba(0, 0, 0, 0.7);
  padding: 50px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  text-align: center;
  color: white;
}


.hero h2 {
  margin-bottom: 30px;
}


.hero p {
  margin-bottom: 30px;
}

.hero input[type="email"],
.hero input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.hero button {
  background-color: #007bff;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease; 
  width: 100%; 

}

.hero button:hover {
  background-color: dodgerblue;
}

.InputSubmit {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
    }

    .InputSubmit:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }
voltar:hover {
        background-color: #0056b3;
        transform: scale(1.05);
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
 transform: scale(1.05);
    }

</style>
</head>

<section class="hero">
  <h2>Um mundo de descobertas e aprendizados!</h2>
  <p>Tire suas dúvidas, compartilhe conhecimento e conecte-se com outros desenvolvedores.</p>

  
  
  <a href="home.php" class="btn-voltar">Voltar</a>
   
    
    <form action="teste_login.php" method="POST">
      <h1>Login</h1>
      
</body>
</html>
  <div class="input-group"> <label for="email">Email</label> <input type="email" id="email" placeholder="email">

  </div>

  <div class="input-group"> <label for="senha">Senha</label> <input type="password" id="senha" placeholder="Senha">
  </div>

 <input class="InputSubmit" type="submit" name="submit" value="Enviar">

 
</section>
</form>
  </div>

</body>
</html>
