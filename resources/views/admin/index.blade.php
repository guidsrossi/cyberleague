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

    <!-- Inclua os arquivos de estilo do TinyMCE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tinymce@5.9.2/themes/silver/theme.min.css">
    <script src="https://cdn.jsdelivr.net/npm/tinymce@5.9.2/tinymce.min.js"></script>


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
                    <a class="nav-link active" style="color: #c0a71b;" aria-current="page" href="#"><strong>INÍCIO</strong></a>
                    <a class="nav-link" href="#nossos_cursos"><strong>NOSSOS CURSOS</strong></a>
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
    
<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="text-center container mt-5">
        <h2>ADICIONE AS IMAGENS E O TEXTO DO CARROSEL</h2>
        <table class="table table-bordered my-5">
            <thead>
                <tr>
                    <td>Imagem</td>
                    <td>Título</td>
                    <td>Subtítulo</td>
                    <td></td>
                </tr>
            </thead>
            <tbody id="tbodyCarousel">

            </tbody>
        </table>
        <div class="col-12 d-flex" style="justify-content:end; padding:0;">
            <div class="d-flex col-2 w-150 ms-auto mb-4 flex-row-reverse removed" onclick="addCarousel()" style="padding:0;">
                <button type="button" class="btn btn-primary removed"  >+</button>
            </div>
        </div>
    </div>

    <div class="text-center container">
        <h2>ADICIONE AS IMAGENS DO "NOSSOS CURSOS"</h2>
        <table class="table table-bordered my-5">
            <thead>
                <tr>
                    <th scope="row">Robótica</th>
                    <th scope="row">Informática</th>
                    <th scope="row">Programação</th>
                    <th scope="row">Design</th>
                    <th scope="row">Criação de Games</th>
                    <th scope="row">Profissionalizantes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[robotica][name]" value="robotica">
                        <input type="file" class="form-control" name="courses[robotica][image]">
                        <a href="/storage/{{$courses->where('name', 'robotica')->first()->image}}" target="_blank">Ver imagem</a>
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[informatica][name]" value="informatica">
                        <input type="file" class="form-control" name="courses[informatica][image]">
                        <a href="/storage/{{$courses->where('name', 'informatica')->first()->image}}" target="_blank">Ver imagem</a>
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[programacao][name]" value="programacao">
                        <input type="file" class="form-control" name="courses[programacao][image]">
                        <a href="/storage/{{$courses->where('name', 'programacao')->first()->image}}" target="_blank">Ver imagem</a>
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[design][name]" value="design">
                        <input type="file" class="form-control" name="courses[design][image]">
                        <a href="/storage/{{$courses->where('name', 'design')->first()->image}}" target="_blank">Ver imagem</a>
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[games][name]" value="games">
                        <input type="file" class="form-control" name="courses[games][image]">
                        <a href="/storage/{{$courses->where('name', 'games')->first()->image}}" target="_blank">Ver imagem</a>
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[profissionalizantes][name]" value="profissionalizantes">
                        <input type="file" class="form-control" name="courses[profissionalizantes][image]">
                        <a href="/storage/{{$courses->where('name', 'profissionalizantes')->first()->image}}" target="_blank">Ver imagem</a>
                    </td>
                    <input type="text" hidden class="form-control" name="courses[matematica][name]" hidden value="profissionalizantes">
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-center container">
        <h2>ADICIONE O LINK DO YOUTUBE</h2>
        <div class="row">
            <div class="col-12 my-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="yt_link" value="{{$info->yt_link}}">
                    <label for="floatingInput">Digite o link</label>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center container">
        <h2>ADICIONE AS INFORMAÇÕES DE CONTATO</h2>
        <div class="row my-5">
            <div class="col-12 my-1">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="cellphone" value="{{$info->cellphone}}">
                    <label for="floatingInput">Celular</label>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="telephone" value="{{$info->telephone}}">
                    <label for="floatingInput">Telefone</label>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{$info->email}}">
                    <label for="floatingInput">Email</label>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="address" value="{{$info->address}}">
                    <label for="floatingInput">Endereço</label>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center container">
        <h2>MUDANÇAS NA TELA DE CURSOS</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roboticaModal">
                            Robótica
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="roboticaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Robótica</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <div id="robotica">
                                    </div>
                                    <div class="mb-3">
                                     <button type="button" class="btn btn-primary" onclick="addCourse('robotica')">+</button>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#informaticaModal">
                            Informática
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="informaticaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Informática</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <div id="informatica">
                                    </div>
                                    <div class="mb-3">
                                     <button type="button" class="btn btn-primary" onclick="addCourse('informatica')">+</button>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#programacaoModal">
                            Programação
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="programacaoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Programação</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <div id="programacao">
                                    </div>
                                    <div class="mb-3">
                                     <button type="button" class="btn btn-primary" onclick="addCourse('programacao')">+</button>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#designModal">
                            Design
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="designModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Design</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <div id="design">
                                    </div>
                                    <div class="mb-3">
                                     <button type="button" class="btn btn-primary" onclick="addCourse('design')">+</button>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gamesModal">
                            Games
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="gamesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Games</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <div id="games">
                                    </div>
                                    <div class="mb-3">
                                     <button type="button" class="btn btn-primary" onclick="addCourse('games')">+</button>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profissionalizantesModal">
                            Profissionalizantes
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="profissionalizantesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Profissionalizantes</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                    <div id="profissionalizantes">
                                    </div>
                                    <div class="mb-3">
                                     <button type="button" class="btn btn-primary" onclick="addCourse('profissionalizantes')">+</button>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#matematicaModal">
                            Matemática
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="matematicaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Matemática</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                    <div id="matematica">
                                    </div>
                                    <div class="mb-3">
                                     <button type="button" class="btn btn-primary" onclick="addCourse('matematica')">+</button>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>

    <input type="text" name="deleted_items" value="" hidden/>

    <div class="container text-center my-5">
        <button class="btn btn-primary">Salvar</button>
        <a class="btn btn-primary" href="{{ route('admin.index') }}">Desfazer</a>
    </div>

</form>


    
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>

        var count = 0;
    
        function addCarousel(model){

            if (!model) {
                model = {
                    "id": 0,
                    "image": "",
                    "title1": "",
                    "title2": "",
                }
            }
            
            let divDad = document.getElementById("tbodyCarousel");
            
            div = document.createElement("tr");

            div.innerHTML += `
                <td>
                    <input type="text" name="carousels[${count}][carousels_id]" value="${model.id}" hidden/>
                     
                    ${model.image ? `<a href="/storage/${model.image}" target="_blank">Ver imagem</a>` : '<input type="file" class="form-control"  name="carousels[${count}][image]" value="" }/> '}        
                <td>
                    <input type="text" class="form-control"  name="carousels[${count}][title1]" value="${model.title1}" }/>
                </td>
                <td>
                    <input type="text" class="form-control"  name="carousels[${count}][title2]" value="${model.title2}" }/>          
                </td>
                <td> 
                    <button type="button" class="btn btn-danger" onclick="removeItem(this, ${model.id})">-</button>
                </td>
            `;
            
            count++;
            divDad.appendChild(div);
        }
        function removeItem(element, id){
            element.parentNode.parentNode.remove();

            // remove do carousels array
            if (id) {
                deleted_items.push(id);

                document.querySelector('input[name="deleted_items"]').value = JSON.stringify(deleted_items);
            }
        }

        var model;
        var deleted_items = [];
        var divCount = 0;

        function addCourse(type, model = null) {
            const divContainer = document.getElementById(type);
            
            const newDiv = document.createElement("div");
            const divCount = divContainer.querySelectorAll(".course-div").length;

            if (!model) {
                model = {
                    "id": 0,
                    "name": "",
                    "description": "",
                }
            }

            newDiv.className = "course-div"; // Adicione uma classe para identificar as divs dos cursos
            
            newDiv.innerHTML = `
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" name="courses[${type}][topics][${divCount}][title]" class="form-control" id="titulo_${divCount}" value="${model.name}">
                </div>
                <div class="mb-3">
                    <label for="conteudo" class="form-label">Conteúdo</label>
                    <textarea class="form-control" name="courses[${type}][topics][${divCount}][description]" id="textEditor_${type}_${divCount}" rows="3">${model.description}</textarea>
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-danger" onclick="removeDiv(this)">-</button>
                </div>
            `;
            
            divContainer.appendChild(newDiv);

            // Inicialize o TinyMCE para o novo campo de texto
            tinymce.init({
                selector: `#textEditor_${type}_${divCount}`,
                plugins: 'advlist autolink lists link image charmap print preview anchor',
                toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright',
                font_formats: 'sans-serif;Arial=arial,helvetica,sans-serif;Tahoma=tahoma,arial,helvetica,sans-serif;',
            });
        }

        function removeDiv(element) {
            element.parentNode.parentNode.remove();
        }

        var robotica, informatica, programacao, design, games, profissionalizantes, matematica;

        @php
            $model = [];
            foreach ($carousels as $carousel) {
                $model[] = [
                    'id' => $carousel->id,
                    'image' => $carousel->image,
                    'title1' => $carousel->title1,
                    'title2' => $carousel->title2,
                ];
            }
            $model = json_encode($model);
            echo "model = $model;";


            $robotica = $courses->where('name', 'robotica')->first()->course_topics;
            $informatica = $courses->where('name', 'informatica')->first()->course_topics;
            $programacao = $courses->where('name', 'programacao')->first()->course_topics;
            $design = $courses->where('name', 'design')->first()->course_topics;
            $games = $courses->where('name', 'games')->first()->course_topics;
            $profissionalizantes = $courses->where('name', 'profissionalizantes')->first()->course_topics;
            $matematica = $courses->where('name', 'matematica')->first()->course_topics;

            echo "robotica = " . json_encode($robotica) . ";";
            echo "informatica = " . json_encode($informatica) . ";";
            echo "programacao = " . json_encode($programacao) . ";";
            echo "design = " . json_encode($design) . ";";
            echo "games = " . json_encode($games) . ";";
            echo "profissionalizantes = " . json_encode($profissionalizantes) . ";";
            echo "matematica = " . json_encode($matematica) . ";";
        @endphp

        window.onload = function(){
            console.log(model);
            model.forEach(element => {
                addCarousel(element);
            });

            robotica.forEach(element => {
                addCourse('robotica', element);
            });

            informatica.forEach(element => {
                addCourse('informatica', element);
            });

            programacao.forEach(element => {
                addCourse('programacao', element);
            });

            design.forEach(element => {
                addCourse('design', element);
            });

            games.forEach(element => {
                addCourse('games', element);
            });

            profissionalizantes.forEach(element => {
                addCourse('profissionalizantes', element);
            });

            matematica.forEach(element => {
                console.log(element);
                addCourse('matematica', element);
            });
        }

        tinymce.init({
            selector: '#textEditor',
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright',
            font_formats: 'sans-serif;Arial=arial,helvetica,sans-serif;Tahoma=tahoma,arial,helvetica,sans-serif;',
        });


    </script>

</body>

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
    .nav-link:hover {
        transform: scale(0.9);
        transition: transform 0.3s;
    }

    .nav-link .fab {
        font-size: 24px;
    }

    .form-floating {
    border: 1px solid #000; /* Adicione uma borda preta de 1px */
    }


</style>


</html>