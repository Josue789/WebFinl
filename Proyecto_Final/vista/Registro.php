<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Registro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <div class="box">
        <div class="container text-center">
            <div class="position-absolute top-0 start-0">
                <img src="img/CCUP.png" class="img-fluid" width="100" height="100" alt="" >
            </div>

            <div class="row justify-content-between">

                <div class="col-6 mt-5">

                    <label class="display-3 mt-4">Nuevo Coach</label>
                    <form action="">

                        <div class="input-group mb-3">
                            <span class="input-group-text material-symbols-outlined p-3">
                                person
                            </span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Juan Pérez ">
                                <label for="floatingInput">Nombre</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text material-symbols-outlined p-3">
                                mail
                            </span>
                            <div class="form-floating">
                                <input type="mail" class="form-control" id="floatingInput" placeholder="ejemplo@dominio.com ">
                                <label for="floatingInput">Correo</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text material-symbols-outlined p-3">
                                mail
                            </span>
                            <div class="form-floating">
                                <input type="mail" class="form-control" id="floatingInput" placeholder="ejemplo@dominio.com ">
                                <label for="floatingInput">Confirmar Correo</label>
                            </div>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text material-symbols-outlined p-3">
                                school
                            </span>
                            <select class="form-select form-select-lg" aria-label="Large select example">
                                <option selected>Institucion</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <a href="login.php" class=" btn btn-outline-danger" type="button">Cancelar</a>  
                            </div>
                            
                            <div class="col-6">
                                <button class=" btn btn-primary" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-3 mt-5">
                  <label class="display-3 mt-5 mb-4">Bienvenido</label>

                  <div id="carouselExampleSlidesOnly" class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/no-image-found.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/no-image-found.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/no-image-found.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>

                  <label class="display-3">Coach</label>
                </div>
              </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>