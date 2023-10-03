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
    

    <div class="text-center container mt-5">
        <h2>ADICIONE AS IMAGENS E O TEXTO DO CARROSEL</h2>
        <table class="table table-bordered my-5">
            <thead>
                <tr>
                    <td>Imagem1</td>
                    <td>Título</td>
                    <td>Subtítulo</td>
                </tr>
                <tr>
                    <td>Imagem2</td>
                    <td>Título</td>
                    <td>Subtítulo</td>
                </tr>
                <tr>
                    <td>Imagem3</td>
                    <td>Título</td>
                    <td>Subtítulo</td>
                </tr>
            </thead>
        </table>
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
                        <input type="text" hidden class="form-control" name="courses[0][name]" value="Robótica">
                        <input type="file" class="form-control" name="courses[0][image]">
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[1][name]" value="Informática">
                        <input type="file" class="form-control" name="courses[1][image]">
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[2][name]" value="Programação">
                        <input type="file" class="form-control" name="courses[2][image]">
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[3][name]" value="Design">
                        <input type="file" class="form-control" name="courses[3][image]">
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[4][name]" value="Criação de Games">
                        <input type="file" class="form-control" name="courses[4][image]">
                    </td>
                    <td>
                        <input type="text" hidden class="form-control" name="courses[5][name]" value="Profissionalizantes">
                        <input type="file" class="form-control" name="courses[5][image]">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-center container">
        <h2>ADICIONE O LINK DO YOUTUBE</h2>
        <div class="row">
            <div class="col-12 my-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="yt_link">
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
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="yt_link">
                    <label for="floatingInput">Celular</label>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="yt_link">
                    <label for="floatingInput">Telefone</label>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="yt_link">
                    <label for="floatingInput">Email</label>
                </div>
            </div>
            <div class="col-12 my-1">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="yt_link">
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#robotica">
                            Robótica
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="robotica" tabindex="-1" aria-labelledby="robotica" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="robotica">Robótica</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <form>
                                    <div class="mb-3">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="conteudo" class="form-label">Conteúdo</label>
                                    <textarea class="form-control" id="conteudo" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                    <button type="button" class="btn btn-primary">+</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="adicionarMais">Mais</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#informatica">
                            Informática
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="informatica" tabindex="-1" aria-labelledby="informatica" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="informatica">Informática</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <form>
                                    <div class="mb-3">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="conteudo" class="form-label">Conteúdo</label>
                                    <textarea class="form-control" id="conteudo" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                    <button type="button" class="btn btn-primary">+</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="adicionarMais">Mais</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#programacao">
                            Programação
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="programacao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Programação</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <form>
                                    <div class="mb-3">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="conteudo" class="form-label">Conteúdo</label>
                                    <textarea class="form-control" id="conteudo" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                    <button type="button" class="btn btn-primary">+</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="adicionarMais">Mais</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#design">
                            Design
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="design" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Design</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <form>
                                    <div class="mb-3">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="conteudo" class="form-label">Conteúdo</label>
                                    <textarea class="form-control" id="conteudo" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                    <button type="button" class="btn btn-primary">+</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="adicionarMais">Mais</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#games">
                            Games
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="games" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Games</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <form>
                                    <div class="mb-3">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="conteudo" class="form-label">Conteúdo</label>
                                    <textarea class="form-control" id="conteudo" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                    <button type="button" class="btn btn-primary">+</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="adicionarMais">Mais</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profissionalizantes">
                            Profissionalizantes
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="profissionalizantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Profissionalizantes</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <form>
                                    <div class="mb-3">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="conteudo" class="form-label">Conteúdo</label>
                                    <textarea class="form-control" id="conteudo" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                    <button type="button" class="btn btn-primary">+</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="adicionarMais">Mais</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Botão para abrir o modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#matematica">
                            Matemática
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="matematica" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Matemática</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Formulário dentro do modal -->
                                <form>
                                    <div class="mb-3">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="conteudo" class="form-label">Conteúdo</label>
                                    <textarea class="form-control" id="conteudo" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                    <button type="button" class="btn btn-primary">+</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="adicionarMais">Mais</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>

    <div class="container text-center my-5">
        <button class="btn btn-primary">Salvar</button>
        <button class="btn btn-primary">Descartar</button>
    </div>


    
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

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