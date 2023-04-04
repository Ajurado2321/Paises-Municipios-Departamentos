<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap.min.css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Municipios</title>
</head>

<body>

    <div class="container">
      <div class="p-3 d-flex justify-content-center">
      <div class="card w-75">
        <div class="card-header">
        <h1 class="h1 text-center fw-light">Listado de Municipios</h1>
      </div>
      <div class="card-body">
            <a href="{{ route('municipios.create') }}" class="btn btn-success mb-3">Add Municipality</a>  
        <table class="table table table-bordered">
            <thead>
              <tr class="text-center" style="background-color: aqua">
                <th scope="col">Municipality code</th>
                <th scope="col">Municipality name</th>
                <th scope="col">Departament Code</th>
                <th scope="col">options</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($municipios as $municipio)
                    
                <tr>
                    <th class="text-center" scope="row">{{  $municipio->muni_codi }}</th>
                    <td class="text-center">{{ $municipio->muni_nomb }}</td>
                    <td class="text-center">{{ $municipio->depa_codi }}</td>
                    <td class="text-center">

                      <a href="{{ route('municipios.edit',['municipio'=>$municipio->muni_codi]) }}" class="btn btn-info">Edit</a>

                     
                    </td>
                </tr>

                @endforeach

            </tbody>
          </table>
        </div>
        </div>
      </div>
  </div>

</body>
{{-- bootstrap.bundle.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- popper.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
{{-- bootstrap.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>