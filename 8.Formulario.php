<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Formulario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <form action="calculadora.php" method="POST">
            <div class="input-group mb-6">
                <input name="valor1" type="text" class="form-control" placeholder="número 1">
            </div>
            <div class="input-group mb-6">
                <input name="valor2" type="text" class="form-control" placeholder="número 2">
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operador" value="0">
                <label class="form-check-label" for="operador">
                    Suma
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operador" value="1">
                <label class="form-check-label" for="operador">
                    Resta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operador" value="2">
                <label class="form-check-label" for="operador">
                    Multiplicación
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operador" value="3">
                <label class="form-check-label" for="operador">
                    División
                </label>
            </div>

            <br>
            <div class="input-group mb-6">
                <input type="submit" class="form-control"  >
            </div>
        </form>
    </div>
    
</body>
</html>