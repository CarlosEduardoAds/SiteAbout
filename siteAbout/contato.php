<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
      function validar_form_contato(){
        var nome = formcontato.nome.value;
        var email = formcontato.email.value;
        var assunto = formcontato.assunto.value;
        var mensagem = formcontato.mensagem.value;

        if(nome == ""){
          alert("Campo nome é obrigatorio");
          formcontato.nome.focus();
          return false;
        }if(email == ""){
          alert("Campo email é obrigatorio");
          formcontato.email.focus();
          return false;
        }if(assunto == ""){
          alert("Campo assunto é obrigatorio");
          formcontato.assunto.focus();
          return false;
        }if(mensagem == ""){
          alert("Campo mensagem é obrigatorio");
          formcontato.mensagem.focus();
          return false;
        }
      }
    </script>
  </head>
  <body>
    <div class="cont1">
      <header>
        <nav class='cabecalho'>
          <div class="menu" id="mymenu">
            <img  src="img/logo.png" style="width:150px; float:left"/>
            <div class="topnav" id="myTopnav">
              <a href="index.html">Home</a>
              <a href="sobre.html">Sobre</a>
              <a href="servico.html">Serviços</a>
              <a href="cliente.html">Clientes</a>
              <a href="contato.php" class="active">Fale conosco</a>
              <a style="float:right;  color:red" href="restrito.php">Restrito</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                <script>
                function myFunction() {
                  var x = document.getElementById("myTopnav");
                  if (x.className === "topnav") {
                    x.className += " responsive";
                  } else {
                    x.className = "topnav";
                  }
                }
                </script>
              </a>
            </div>
          </div>
        </nav>
      </header>
    </div>

    <div style="background-color:#DFDFDF"class="cont1">
      <div class="container">
        <div class="contatoes">
          <h1 style="text-align:left">telefone</h1>
          <h2 style="text-align:left">+55 11 5972-4190</h2>
          <h1 style="text-align:left">Whatsapp</h1>
          <h2 style="text-align:left">+55 11 9 8484-5893</h2>
          <h1 style="text-align:left">E-mail</h1>
          <h2 style="text-align:left">contato@aboutbrasil.com.br</h2>
        </div>
        <div class="contato">
          <form action="action_page.php">
            <labe for="fname">Nome</label>
            <input type="text" id="fname" name="firstname" placeholder="Nome..">
            <label for="lname">Email</label>
            <input type="text" id="lname" name="lastname" placeholder="Email..">
            <label for="lname">Assunto</label>
            <input type="text" id="lname" name="lastname" placeholder="Assunto..">
            <label  for="subject">mensagemt</label>
            <textarea id="subject" name="subject" placeholder="mensagem.." style="height:100px"></textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>

      <br>
      <br>
      <br>

      <div class="cont1">
        <img style="margin-left:45%" src="img/duvida.png">
        <p style="font-size:40px;color:#1497ea">Dúvidas</p>
        <p style="font-size:20px">Atendentes prontos para solucionar suas dúvidas e direcionar seus problemas. Pode contar com a gente sempre, estamos prontos para atendê-lo!</p>

      <br>
      <br>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.6459490009775!2d-46.70653978501986!3d-23.688616184619857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4fd5d7fdc68f%3A0xed9ec6f0631c662e!2sAbout+Brasil!5e0!3m2!1spt-BR!2sbr!4v1561642592038!5m2!1spt-BR!2sbr"  width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen></iframe>


    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
    <div class="footer">
      <h3>Fale conosco</h3>
      <h4>Telefone: +55 11 5972-4190 </h4>
      <h4>Email: contato@aboutbrasil.com.br</h4>
      <br>
      <h4>Rua Lauzane, 585 - Capela do Socorro - São Paulo/S</h4>
      <h4>CEP: 04782-010</h4>
    </div>
  </body>
</html>
