<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dev Web</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel='stylesheet' href='css/styles.css' />

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

      <a class="navbar-brand" href="#">Ocean Web</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
  </div><!-- end container -->
  </nav>

  <div class="box">

    <section class="banner">
      <div class="overlay"></div>
      <div class="container chamada-banner">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2><?php echo htmlentities('<') ?>Ocean Web<?php echo htmlentities('>') ?></h2>
            <p>Desenvolvimento web e marketing digital</p>
          </div>
        </div>
      </div>
    </section><!-- end section banner -->

    <section class='cadastro-lead'>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
            <h2>Entre na nossa lista!</h2>
          </div>
          <div class="col-md-6">
            <form action="" method="post">
              <input type="text" name="nome" /><input type="submit" value="Enviar" />
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="depoimento text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Depoimento</h2>
            <blockquote>
              <p class='mb-0'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis magni porro enim.</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section class="diferenciais text-center">
      <h2>Conheça nossa empresa!</h2>
      <div class="container diferenciais-container">
        <div class="row">
          <div class="col-md-4">
            <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
              </svg></h3>
            <h2>Diferencial #1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus corrupti officiis,
              sint magni nemo nesciunt pariatur, tenetur ex nobis odit aliquam incidunt exercitationem
              eos quo repellat fugit consequuntur? Nesciunt, explicabo!</p>
          </div><!-- end col-md-4 -->
          <div class="col-md-4">
            <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z" />
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
              </svg></h3>
            <h2>Diferencial #2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus corrupti officiis,
              sint magni nemo nesciunt pariatur, tenetur ex nobis odit aliquam incidunt exercitationem
              eos quo repellat fugit consequuntur? Nesciunt, explicabo!</p>
          </div><!-- end col-md-4 -->
          <div class="col-md-4">
            <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
              </svg></h3>
            <h2>Diferencial #3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus corrupti officiis,
              sint magni nemo nesciunt pariatur, tenetur ex nobis odit aliquam incidunt exercitationem
              eos quo repellat fugit consequuntur? Nesciunt, explicabo!</p>
          </div><!-- end col-md-4 -->
        </div>
      </div>
    </section>

  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>