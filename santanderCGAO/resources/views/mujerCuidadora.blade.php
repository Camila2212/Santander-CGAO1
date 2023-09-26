<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>

<body>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Formulario para ingresar los datos de la mujer -->
          <form action="{{ route('mujer.create') }}" method="post">
            @csrf

        <!-- ID -->
        <div class="form-group">
            <input type="hidden" class="form-control" id="idMujer" name="idMujer" required>
        </div>
        
        <!-- Tipo de Documento -->
        <div class="form-group">
            <label for="tipoDocMujer">Tipo de Documento</label>
            <input type="text" class="form-control" id="tipoDocMujer" name="tipoDocMujer" required>
        </div>
        
        <!-- Documento -->
        <div class="form-group">
            <label for="numeroDocMujer">Documento</label>
            <input type="text" class="form-control" id="numeroDocMujer" name="numeroDocMujer" required>
        </div>

        <!-- Nombres -->
        <div class="form-group">
            <label for="nombreMujer">Nombre</label>
            <input type="text" class="form-control" id="nombreMujer" name="nombreMujer" required>
        </div>

        <!-- Apellidos -->
        <div class="form-group">
            <label for="apellidoMujer">Apellido</label>
            <input type="text" class="form-control" id="apellidoMujer" name="apellidoMujer" required>
        </div>

        <!-- Teléfono -->
        <div class="form-group">
            <label for="telefonoMujer">Teléfono</label>
            <input type="text" class="form-control" id="telefonoMujer" name="telefonoMujer" required>
        </div>
        
        <!-- Correo Electrónico -->
        <div class="form-group">
            <label for="correoMujer">Correo Electrónico</label>
            <input type="email" class="form-control" id="correoMujer" name="correoMujer" required>
        </div>

        <!-- Ciudad -->
        <div class="form-group">
            <label for="ciudadMujer">Ciudad</label>
            <input type="text" class="form-control" id="ciudadMujer" name="ciudadMujer" required>
        </div>

        <!-- Dirección -->
        <div class="form-group">
            <label for="direccionMujer">Dirección</label>
            <input type="text" class="form-control" id="direccionMujer" name="direccionMujer" required>
        </div>

        <!-- Ocupación -->
        <div class="form-group">
            <label for="ocupacionMujer">Ocupación</label>
            <input type="text" class="form-control" id="ocupacionMujer" name="ocupacionMujer" required>
        </div>

        <!-- Botón de Enviar -->
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>





    <h1 class="text-center">Mujeres cuidadoras</h1>
    <div class="container">
        <div class="p-5 responsive">
            <!-- Botón para abrir el modal de inserción -->
                 <button type="submit"href="class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar mujer</button>
       
                <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de Documento</th>
                        <th>Documento</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Correo Electrónico</th>
                        <th>Ciudad</th>
                        <th>Dirección</th>
                        <th>Ocupación</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $mujer)
                        <tr>
                            <td>{{ $mujer->idMujer }}</td>
                            <td>{{ $mujer->tipoDocMujer }}</td>
                            <td>{{ $mujer->numeroDocMujer }}</td>
                            <td>{{ $mujer->nombreMujer }}</td>
                            <td>{{ $mujer->apellidoMujer }}</td>
                            <td>{{ $mujer->telefonoMujer }}</td>
                            <td>{{ $mujer->correoMujer }}</td>
                            <td>{{ $mujer->ciudadMujer }}</td>
                            <td>{{ $mujer->direccionMujer }}</td>
                            <td>{{ $mujer->ocupacionMujer }}</td>

                            <td>
                                {{-- <a href="{{ route('mujerCuidadora.update', $mujer->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('mujerCuidadora.delete', $mujer->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta mujer?')">Eliminar</button>
                    </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</body>

</html>
