<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber League</title>

    <link rel="icon" href="ico/logo.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  
    <style>
        #mapa {
            height: 400px;
        }
    </style>

</head>
<body>

    <nav class="navbar border-bottom border-body navbar-expand-lg">
        <div class="container-fluid">
            <img class="navbar-brand logo-completa" src="img/logo_completa.jpg" alt="Logo da Cyber League">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" style="color: #c0a71b;" aria-current="page" href="{{ route('home.index') }}"><strong>INÍCIO</strong></a>
                    <a class="nav-link" href="{{ route('courses') }}"><strong>NOSSOS CURSOS</strong></a>
                    <a class="nav-link" href="#promocao"><strong>PROMOÇÃO</strong></a>
                    <a class="nav-link" href="#sobre_nos"><strong>SOBRE NÓS</strong></a>
                    <a class="nav-link" href="#contatos"><strong>CONTATOS</strong></a>
                    <a class="nav-link" href="#localizacao"><strong>LOCALIZAÇÃO</strong></a>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-start" href="https://www.facebook.com/profile.php?id=100094895619207&mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
                    <a class="nav-link text-start" href="https://www.youtube.com/@cyberleaguecursos"><i class="fab fa-youtube"></i></a>
                    <a class="nav-link text-start" href="https://www.tiktok.com/@cyber.league.curs"><i class="fab fa-tiktok"></i></a>
                    <a class="nav-link text-start" href="https://instagram.com/cyberleaguecursos?igshid=NzZlODBkYWE4Ng=="><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
           @for ($i = 0; $i < count($carousels); $i++)
                @if($i == 0)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i}}" class="active" aria-current="true" aria-label="Slide {{$i+1}}"></button>
                @else
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i}}" aria-label="Slide {{$i+1}}"></button>
                @endif
            @endfor
        </div>

        <div class="carousel-inner">
<!-- 
          <div class="carousel-item active">
            <img src="/img/robotica.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>ROBÓTICA</h5>
              <p>Robótica na prática com materiais de qualidade.</p>
            </div>
          </div> -->

         @foreach($carousels as $key => $carousel)
            <div class="carousel-item @if ($key === 0) active @endif">

                <img src="/storage/{{$carousel->image}}" class="d-block w-100 img-fluid" style="height: 800px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>{{$carousel->title1}}</h5>
                <p>{{$carousel->title2}}</p>
                </div>
            </div>

          @endforeach



          <!-- <div class="carousel-item">
            <img src="/img/roblox.png" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>PLATAFORMA INTERATIVA</h5>
              <p>Cursos de qualidade, com uma plataforma renomada.</p>
            </div>
          </div> -->

        </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <h1 id="nossos_cursos" class="text-center m-4 title">NOSSOS CURSOS</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/storage/{{$courses->where('name', 'robotica')->first()->image}}" class="card-img-top" style="height:400px;" alt="Robótica">
                    <div class="card-body">
                        <h5 class="card-title">ROBÓTICA</h5>
                        <p class="card-text mb-4">O curso de "Robótica Completa" é uma emocionante jornada educacional projetada para aqueles que desejam desvendar os mistérios por trás da criação e programação de robôs.</p>
                        <a href="{{ route('courses') }}" class="btn btn-warning mt-3"><strong>SABER MAIS</strong></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/storage/{{$courses->where('name', 'informatica')->first()->image}}" class="card-img-top" style="height:400px;" alt="Informática">
                    <div class="card-body">
                        <h5 class="card-title">INFORMÁTICA</h5>
                        <p class="card-text">Os cursos de Informática são uma jornada educativa projetada para fornecer aos participantes as habilidades essenciais necessárias para compreender e aproveitar o vasto mundo da tecnologia da informação. </p>
                        <a href="{{ route('courses') }}" class="btn btn-warning"><strong>SABER MAIS</strong></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/storage/{{$courses->where('name', 'programacao')->first()->image}}" class="card-img-top" style="height:400px;" alt="Programação">
                    <div class="card-body">
                        <h5 class="card-title">PROGRAMAÇÃO</h5>
                        <p class="card-text">Os cursos de Programação é um mergulho envolvente no universo da programação de computadores, destinado a indivíduos que desejam adquirir as habilidades essenciais para criar software, 
                            aplicativos e soluções tecnológicas.</p>
                        <a href="{{ route('courses') }}" class="btn btn-warning"><strong>SABER MAIS</strong></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/storage/{{$courses->where('name', 'design')->first()->image}}" class="card-img-top" style="height:400px;" alt="Design">
                    <div class="card-body">
                        <h5 class="card-title">DESIGN</h5>
                        <p class="card-text">O curso de Design é uma jornada educacional que explora os princípios essenciais do design, voltados para a criação de elementos visuais atraentes e impactantes.</p>
                        <a href="{{ route('courses') }}" class="btn btn-warning"><strong>SABER MAIS</strong></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/storage/{{$courses->where('name', 'games')->first()->image}}" class="card-img-top" style="height:400px;" alt="Criação de Games">
                    <div class="card-body">
                        <h5 class="card-title">CRIAÇÃO DE GAMES</h5>
                        <p class="card-text mb-4">O curso de Criação de Jogos é uma jornada emocionante para aqueles que desejam mergulhar no universo da criação de jogos digitais.</p>
                        <a href="{{ route('courses') }}" class="btn btn-warning mt-3"><strong>SABER MAIS</strong></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/storage/{{$courses->where('name', 'profissionalizantes')->first()->image}}" class="card-img-top" style="height:400px;" alt="Profissionalizantes">
                    <div class="card-body">
                        <h5 class="card-title">PROFISSIONALIZANTES</h5>
                        <p class="card-text">Os cursos de Profissionalizantes é um programa abrangente destinado a equipar os participantes com as competências necessárias para prosperar no ambiente profissional contemporâneo</p>
                        <a href="{{ route('courses') }}" class="btn btn-warning border-1"><strong>SABER MAIS</strong></a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 id="promocao" class="text-center m-4">PROMOÇÃO - MATRÍCULA E MATERIAL GRÁTIS</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-bg-6 col-12 mb-4 text-center">
                <img class="evolua img-fluid" src="/img/logo_completa.jpg" alt="Teste">
            </div>
            <div class="col-bg-6 col-12 align-middle">
                <h1 class="text-center">POUCAS VAGAS</h1>
                <p class="mt-5" style="font-size: 20px;">Aproveite a promoção, durante este mês com matrícula e material totalmente <strong>GRATUITOS</strong>. Clique abaixo e receba e mais informações:</>
                <p id="whatsappPromo" class="btn btn-warning w-100"><strong>OBTENHA DESCONTO</strong></p>
            </div>
        </div>
    </div>


    <h1 id="sobre_nos" class="text-center m-4 title">SOBRE NÓS</h1>

    <div class="container mt-5">
            <p>A Cyber League entende que o futuro pertence aos que se adaptam e dominam a tecnologia e a criatividade. Com uma plataforma interativa e individualizada com a abordagem centrada no aluno e uma dedicação inabalável ao progresso. Possuímos mais de 60 cursos em tecnologia e profissionalizantes, que abrangem robótica, informática, programação, design, criação de games, matemática, gestão de RH, assistente financeiro e contábil, entre outros. 
                A escola oferece uma experiência de aprendizado única, com atividades teóricas e práticas que despertam no aluno o máximo interesse pela área escolhida.</p>
            <div class="text-center d-flex justify-content-center my-5">
                <iframe class="d-block d-md-none justify-content-center" width="350" height="200" src="{{$info->yt_link}}" title="Cyber League" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe class="d-none d-md-block justify-content-center" width="800" height="400" src="{{$info->yt_link}}" title="Cyber League" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
    </div>

    <h1 id="contatos" class="text-center m-4 title">CONTATOS</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <p class="m-0 p-0"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M0 64C0 28.7 28.7 0 64 0H256c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm64 96v64c0 17.7 14.3 32 32 32H224c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H96c-17.7 0-32 14.3-32 32zM80 352a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm24 56a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zm56-56a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm24 56a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zm56-56a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm24 56a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM128 48c-8.8 0-16 7.2-16 16s7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H128z"/></svg><strong> Celular: </strong>{{$info->cellphone}}</p>
                <p class="m-0 p-0"><i class="fa-solid fa-phone"></i><strong> Telefone: </strong>{{$info->telephone}}</p>
                <p class="m-0 p-0"><i class="fa-solid fa-envelope"></i><strong> Email: </strong>{{$info->email}}</p>
                <p class="m-0 p-0"><i class="fa-solid fa-location-dot"></i><strong> Endereço: </strong>{{$info->address}}</p>
            </div>
        </div>
    </div>

    <h1 id="localizacao" class="text-center mt-4 title">LOCALIZAÇÃO</h1>
    
    <div class="container mb-5 rounded-3" id="mapa"></div>

    
    
    <img src="img/whatsapp.png" id="whatsappButton">
    
    <footer class="footer">
        <div class="container">
            <strong>&copy; 2023 Cyber League. Todos os direitos reservados.</strong>
        </div>
    </footer>
    
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QM62NW2Q0E">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-QM62NW2Q0E');

        document.addEventListener("DOMContentLoaded", function () {
            const whatsappButton = document.getElementById("whatsappButton");
        
            whatsappButton.addEventListener("click", function () {
            const phoneNumber = "+5511993782839";
            const message = "Gostaria de saber mais sobre os cursos.";
            const url = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(message)}`;
        
            window.open(url, "_blank");
            });
        });


        document.addEventListener("DOMContentLoaded", function () {
            const whatsappButton = document.getElementById("whatsappPromo");
        
            whatsappButton.addEventListener("click", function () {
            const phoneNumber = "+5511993782839";
            const message = "PROMOÇÃO INAUGURAÇÃO CYBER LEAGUE.";
            const url = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(message)}`;
        
            window.open(url, "_blank");
            });
        });
        
        var mymap = L.map('mapa').setView([-23.457078430903408, -46.50929681867313], 13); // Nova Iorque
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap);

        var marker = L.marker([-23.457078430903408, -46.50929681867313]).addTo(mymap);
        marker.bindPopup("Cyber League").openPopup();


    </script>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Orbitron&display=swap');

    .title{
        font-family: 'Orbitron', sans-serif;
    }

    .logo-completa{
    height: 120px;
    width: auto;
    padding: 0px;
    margin: 0px;
    }

    .logo{
        height: 70px;
        width: auto;
        padding-left: 30px;
    }

    .evolua{
        height: 300px;
        width: auto;
    }

    .footer {
        background-color: #FFD700;
        padding: 20px;
        text-align: center;
        margin-top: 20px;
    }

    .navbar-color{
        background-color: #FFD700;
    }

    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 10px;
        border-radius: 5px;
    }
    .card {
        border: none;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: scale(1.02);
    }

    .nav-link:hover {
        transform: scale(0.9);
        transition: transform 0.3s;
    }

    .math{
        height: 300px;
        width: auto;
    }


    .div-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 70vh;
    }

    .nav-link .fab {
        font-size: 24px;
    }

    #whatsappButton {
        position: fixed;
        bottom: 15px;
        right: 20px;
        border: none;
        cursor: pointer;
        background-image: url("img/whatsapp.png");
        background-size: cover;
        background-position: center;
        width: 100px;
        height: auto;
        z-index: 9999
    }

    #whatsappButton:hover {
    transform: scale(1.1);
    transition: transform 0.3s;
    }

</style>


</html>