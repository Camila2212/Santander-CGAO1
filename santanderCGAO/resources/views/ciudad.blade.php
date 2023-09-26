<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciudad</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/099486b956.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
</head>

<body>
    <h1 id="ha" class="text-center">Ciudad</h1>

    

    <!-- Modal Registar ciudad-->
    <div class="modal fade" id="modalInsertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Ciudad</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ciudad.create') }}" method="POST">
                        @csrf
                        <div class="mb-0">
                            <input type="hidden" class="form-control" id="id" aria-describedby="emailHelp"
                                name="id">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre </label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                                name="nombre">
                        </div>
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Insertar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="p-5 table-responsive">
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalInsertar">Registrar
            Ciudad</button>


        <table class="table table-hover table-striped table-bordered">
            <thead class="bg-info">
                <tr>
                    <th scope="col">idCiudad</th>
                    <th scope="col">Nombre</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
               
                @foreach ($datos as $ciudad)
                <tr>
                    <td>{{ $ciudad->idCiudad }}</td>
                    <td>{{ $ciudad->nombreCiudad }}</td>
                   

                    
                  </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>

</body>

</html>



