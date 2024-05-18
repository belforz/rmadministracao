<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> R&M Administração </title>

<link rel="icon" type="image/png" href="./src/img/logo.png">



<!-- Principal CSS -->
<link rel="stylesheet" href="principalstyle.css" />

<!-- Icons Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Bootstrap CSS -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <div class="controller-logo-mobile">
        <div class="logo">
          <img src="./src/img/logo.png" alt="">
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./php/historiaRM.php">INSTITUCIONAL</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">SERVIÇOS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./php/engRM.php">R&M ENGENHARIA</a></li>
              <li><a class="dropdown-item" href="./php/todosRM.php">R&M TODOS</a></li>
              <li><a class="dropdown-item" href="./php/admRM.php">R&M ADMINISTRAÇÃO</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./php/contato.php">CONTATO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./php/blog.php">BLOG</a>
          </li>
          <li class="nav-item hoverCondomino">
            <a class="nav-link" href="https://rafaelf.superlogica.net/clients/areadocondomino">AREA DO CONDOMINIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/remadministracao/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"></path>
              </svg></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/remadministracao"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                <path d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z"></path>

              </svg></a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

  <main class="root">


    <div class="container-xxl bg-light my-6 py-6 pt-0" style="background-color: #D3D3D3;">
      <div class="container">

        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
          <h2 class="display-6 mb-2" style="color:var(--SecondaryColor)">Nossos Produtos</h2>

        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="position-relative mt-auto">
              <a class="link-controller" href="./php/admRM.php"><img class="img-fluid" src="./src/img/logoadm.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="position-relative mt-auto">
              <a class="link-controller" href="./php/engRM.php"><img class="img-fluid" src="./src/img/logoeng.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="position-relative mt-auto">
              <a class="link-controller" href="./php/todosRM.php"><img class="img-fluid" src="./src/img/logotodos.png" alt=""></a>

            </div>
          </div>
        </div>

      </div>
    </div>
    </div>

  </main>

  <?php include('./php/whatsapp.php'); ?>

  <footer class="footer-59391">
    <div class="border-bottom pb-5 mb-4">
      <div class="container">
        <div class="row align-items-center" style="justify-content:center;">

          <div class="col-lg-6 text-lg-center">
            <ul class="list-unstyled nav-links nav-left mb-4 mb-lg-0" style="margin-left:2rem;">
              <li><a href="./php/historiaRM.php">Institucional</a></li>
              <li><a href="#servicos">Soluções</a></li>
              <li><a href="./php/privacidade.php">Politicas de Privacidade</a></li>
              <li><a href="./php/termos.php">Termos de Uso</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="list-unstyled nav-links social nav-right text-lg-right" style="margin-left: 2rem;">
                <li><a href="https://www.facebook.com/remadministracao"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/remadministracao/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 site-logo order-1 order-lg-2 mb-3 mb-lg-0">
          <a href="#" class="m-0 p-0">R&M Soluções</a>
        </div>
        <div class="col-lg-4 order-2 order-lg-1 mb-3 mb-lg-0">

          <a href="https://maps.app.goo.gl/ELZb6QKw3q9phies6" style="text-decoration:none !important; color:#17171D;">Endereço:
            <br>
            Rua Caramuru, 417 - CJ 83
            <br>
            CEP 04138-001 <br>
            Chácara Inglesa - São Paulo</a>

        </div>
        <!-- <ul class="list-unstyled nav-links m-0 nav-left">
            <li><a href="#">Termos de Uso</a></li>
            <li><a href="#">Sobre</a></li> 
            <li><a href="#">Politicas de Privacidade</a></li>
            <li><a href="#">Contato</a></li>
          </ul> -->
        <div class="col-lg-4 text-lg-right order-3 order-lg-3">
          <p class="m-0 text-muted"><small>&copy; 2024. R&M Soluções. Todos os direitos reservados.</small></p>
          <p class="m-0 text-muted small-text"><small>designed by <a class="belforz" href="https://portfoliobelforz.vercel.app/">belforz</a></small></p>
        </div>
      </div>




    </div>
    </div>
    </div>

  </footer>
  
  <!-- Jquery -->
  <script src="./src/js/jquery-3.3.1.min.js"></script>
  <script src="./src/js/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>