<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap.min.css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Paises</title>
</head>

<body>

    <div class="container">

      <div class="p-3 d-flex justify-content-center">
      <div class="card w-75">
        <div class="card-header">
        <h1 class="h1 text-center fw-light">Listado de Paises</h1>
      </div>
      <div class="card-body">
          
        <table class="table table table-bordered">
            <thead>
              <tr class="text-center" style="background-color: aqua">
                <th scope="col">country code</th>
                <th scope="col">country name</th>
                <th scope="col">nationality country</th>
                <th scope="col">options</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($paises as $pais)
                    
                <tr>
                    <th class="text-center" scope="row">{{  $pais->pais_codi }}</th>
                    <td class="text-center">{{ $pais->pais_nomb }}</td>
                    <td class="text-center">{{ $pais->pais_capi }}</td>
                    <td class="text-center">


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