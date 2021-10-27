
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>clientes</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


<div class="jumbotron">
  <h1 class="display-4">welcome</h1>
  <p class="lead">prueba aws.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <form action="{{ url('formulario') }}" method="POST">
                @csrf
       
                <div class="form-group">
                     <input type="text" name="nombre" id="nombre" class="form-control"  placeholder="Nombre" required>
                </div>
       
                @error('nombre')
                    <div class="alert alert-danger">
                         El nombre es requerido
                    </div>
                @enderror
       
                <div class="form-group">
                     <input type="text" name="apellido" id="apellido" class="form-control"  placeholder="Apellido" required>
                </div>
       
                @error('apellido')
                    <div class="alert alert-danger">
                         El apellido es requerido
                    </div>
                @enderror
       
                <div class="form-group">
                     <input type="text" name="direccion" id="direccion" class="form-control"  placeholder="Dirección" required>
                </div>
       
                @error('direccion')
                    <div class="alert alert-danger">
                         La dirección es requerido
                    </div>
                @enderror
       
                <div class="form-group">
                 <input type="text" maxlength="10" name="telefono" id="telefono" class="form-control"  placeholder="Telefono" required>
                </div>
       
                @error('telefono')
                    <div class="alert alert-danger">
                     El telefono es requerido
                    </div>
                @enderror
       
                <div class="form-group">
                     <input type="text" name="correo" id="correo" class="form-control" placeholder="E-mail/Correo electronico" required>
                </div>
       
                @error('correo')
                    <div class="alert alert-danger">
                         El correo es requerido
                    </div>
                @enderror
      
               <br>
                <button type="submit" class="btn btn-success btn-black">Agregar datos</button>
           </form>
</div>

<div class="jumbotron">
  <h1 class="display-4">Registro</h1>
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-dark">Submit</button>
</form>
  <hr class="my-4">
</div>