<!DOCTYPE html>

<html lang="pt-br">

<head>
  <title>Formulário de Contato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>

  <body>

    <div class="container mx-auto bg-light mt-1 w-90">
      <header class="row">
        <!-- oculte a barra de acessibilidade -->
        <div id="barra_acessibilidade" class="col-12 d-none">
          <ul id="atalhos">
              <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
              <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
          </ul>   
        </div>  

<!-- faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/ -->
        <div class="col-12 col-sm-3">   
          <img src="images/logo.jpg" alt="Logotipo circulos coloridos">
        </div>

        <div class="col-12 col-sm-9">
          <h1 class="font-weight-bold">Empresa XPTO</h1>
        </div>
      </header>

      <section class="row">
        <div class="col-12 d-none">
          <h2 id="menu">Menu</h2>
        </div>
        <div class="col-12">
          <!-- torne o menu responsivo, conforme o exemplo
          consulte https://getbootstrap.com.br/docs/4.1/components/navbar/ -->
          <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Contato</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <article class="col-12">  
          <h2 id="formulario">Formulário de Contato</h2>
          <form action="#" method="post">

            <div class="form-group row mx-1">
              <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome*</label>
              <input type="text" class="form-control col-12 col-sm-10 form-control-sm" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group row mx-1" id="validName">
              <span class="col-sm-2">&nbsp;</span>
              <span class="obligatory--warnings obligatory--errorText">Campo nome obrigatório.</span>
            </div>

            <div class="form-group row mx-1">
              <label for="email" class="col-sm-2 col-form-label col-form-label-sm">E-mail*</label>
              <input type="email" class="form-control col-12 col-sm-10 form-control-sm" id="email" placeholder="Digite seu email">
            </div>
            <div class="form-group row mx-1" id="validEmail">
              <span class="col-sm-2">&nbsp;</span>
              <span class="obligatory--warnings obligatory--errorText">E-mail válido obrigatório.</span>
            </div>

            <div class="form-group row mx-1" id="fg--mensagem">
              <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem*</label>
              <textarea class="form-control col-12 col-sm-10 form-control-sm" id="mensagemField"></textarea>
            </div>            
            <div class="form-group row mx-1" id="validMensagem">
              <span class="col-sm-2">&nbsp;</span>
              <span class="obligatory--warnings obligatory--errorText">Campo mensagem obrigatório.</span>
            </div>

            <div class="form-group row mx-1">
              <span class="col-sm-2">&nbsp;</span>
              <div class="col-12 col-sm-10" id="divSubmit">
                <button type="submit" class="btn  btn-primary mb-4" onClick="validateInputs(event)" id="sendButton">Enviar</button>   
              </div>
            </div>
            <div class="form-group row mx-1">
              <span class="col-sm-2">&nbsp;</span>
              <div class="col-12 col-sm-10">
                <span class="obligatory--warnings" id="obligatory--fields">* Campos obrigatórios.</span>
              </div>
            </div>
          </form>
        </article>
      </section>

      <footer class="row">
        <div class="col-12">
          <p>Copyright © 2021</p>
        </div>
      </footer>
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>

  </body>
</html>