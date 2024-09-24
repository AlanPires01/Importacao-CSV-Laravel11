<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Importar CSV</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">   
    </head>
    <body>
        <div class="container">
            <div class="card my-5 border-light shadow ">
                <h3 class="card-header"> Importar Excel</h3>



                @session('success')
                    <div class="alert alert-success" role="alert">{!! $value !!}</div>
                @endsession

                @session('error')
                    <div class="alert alert-danger" role="alert">{!! $value !!}</div>
                @endsession

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif

                <form action="{{route('user.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group my-4">
                        <input class="form-control" type="file" id="file" accept=".csv">
                        <button type="submit" class="btn btn-outline-success" id="fileBtn"><i class="bi bi-upload me-3"></i>Importar</button>
                    </div>

                      
                </form>
            </div>
        </div>
    </body>
</html>