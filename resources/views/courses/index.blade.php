<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>

    <link rel="icon" href="ico/logo.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                    <a class="nav-link" href="#robotica"><strong>ROBÓTICA <i class="fas fa-robot"></i></strong></a>
                    <a class="nav-link" href="#informatica"><strong>INFORMÁTICA <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M384 96V320H64L64 96H384zM64 32C28.7 32 0 60.7 0 96V320c0 35.3 28.7 64 64 64H181.3l-10.7 32H96c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H277.3l-10.7-32H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm464 0c-26.5 0-48 21.5-48 48V432c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H528zm16 64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16s7.2-16 16-16zm-16 80c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16zm32 160a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg></i></strong></a>
                    <a class="nav-link" href="#programacao"><strong>PROGRAMAÇÃO <i class="fa-solid fa-code"></i></strong></a>
                    <a class="nav-link" href="#design"><strong>DESIGN <i class="fa-solid fa-brush"></i></strong></a>
                    <a class="nav-link" href="#games"><strong>CRIAÇÃO DE GAMES <i class="fa-solid fa-gamepad"></i></strong></a>
                    <a class="nav-link" href="#profissionalizantes"><strong>PROFISSIONALIZANTES <i class="fa-solid fa-business-time"></i></strong></a>
                    <a class="nav-link" href="#matematica"><strong>MATEMÁTICA <i class="fa-solid fa-square-root-variable"></i></strong></a>
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

    @php
        $robotica = $courses->where('name', 'robotica')->first()->course_topics;
        $informatica = $courses->where('name', 'informatica')->first()->course_topics;
        $programacao = $courses->where('name', 'programacao')->first()->course_topics;
        $design = $courses->where('name', 'design')->first()->course_topics;
        $games = $courses->where('name', 'games')->first()->course_topics;
        $profissionalizantes = $courses->where('name', 'profissionalizantes')->first()->course_topics;
        $matematica = $courses->where('name', 'matematica')->first()->course_topics;
    @endphp

    <div id="robotica" class="container my-5">
        <h2 class="mb-4 title">ROBÓTICA <i class="fas fa-robot"></i></h2>

        @foreach($robotica as $robo)
            <h5>{{$robo->name}}</h5>
            <span>{!!$robo->description!!}</span>
        @endforeach
        

    </div>

    <div id="informatica" class="container my-5">
        <h2 class="mb-4 title">INFORMÁTICA  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M384 96V320H64L64 96H384zM64 32C28.7 32 0 60.7 0 96V320c0 35.3 28.7 64 64 64H181.3l-10.7 32H96c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H277.3l-10.7-32H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm464 0c-26.5 0-48 21.5-48 48V432c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H528zm16 64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16s7.2-16 16-16zm-16 80c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16zm32 160a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg></i></strong></a></h2>

        @foreach($informatica as $informatic)
            <h5>{{$informatic->name}}</h5>
            <p>{!!$informatic->description!!}</p>
        @endforeach

    </div>

    <div id="programacao" class="container my-5">
        <h2 class="mb-4 title">PROGRAMAÇÃO <i class="fa-solid fa-code"></i></h2>

        @foreach($programacao as $programaca)
            <h5>{{$programaca->name}}</h5>
            <p>{!!$programaca->description!!}</p>
        @endforeach

    </div>

    <div id="design" class="container my-5">
            <h2 class="mb-4 title">DESIGN <i class="fa-solid fa-brush"></i></h2>
            
            @foreach($design as $desig)
            <h5>{{$desig->name}}</h5>
            <p>{!!$desig->description!!}</p>
        @endforeach
    </div>

    <div id="games" class="container my-5">
        <h2 class="mb-4 title">GAMES <i class="fa-solid fa-gamepad"></i></h2>

        
        @foreach($games as $game)
            <h5>{{$desig->name}}</h5>
            <p>{!!$desig->description!!}</p>
        @endforeach
    </div>

    <div id="profissionalizantes" class="container my-5">
        <h2 class="mb-4 title">PROFISSIONALIZANTES <i class="fa-solid fa-business-time"></i></h2>

        
        @foreach($profissionalizantes as $profissionalizante)
            <h5>{{$profissionalizante->name}}</h5>
            <p>{!!$profissionalizante->description!!}</p>
        @endforeach
    </div>

    <div id="matematica" class="container my-5">
        <h2 class="mb-4 title">MATEMÁTICA <i class="fa-solid fa-square-root-variable"></i></h2>

        
        @foreach($matematica as $matematic)
            <h5>{{$matematic->name}}</h5>
            <p>{!!$matematic->description!!}</p>
        @endforeach
    </div>

    <img src="img/whatsapp.png" id="whatsappButton">

    <footer class="footer text-center p-3">
        <div>
            <strong>&copy; 2023 Cyber League. Todos os direitos reservados. Site criado por Guilherme Rossi</strong>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QM62NW2Q0E"></script>
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
            height: 400px;
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