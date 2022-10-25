@section('contenido')

@if (session()->has('confirmacion'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Tu recuerdo se guardo satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

<div class="container col-md-6">
    <h1 class="display-4 text-center mt-5 mb-5">Ingresar</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{$error}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif

    <div class="card text-center mb-5">

        <div class="card-header">
            Querido diario!!!
        </div>

        <div class="card-body">
            
            <form method="POST" action="guardarRecuerdo">
                @csrf

                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                    <input class="form-control" type="text" name="txtTitulo" placeholder="Titulo de recuerdo">

                    <p class="text-danger  fst-italic"> {{ $errors->first('txtTitulo') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtRecuerdo" placeholder="Recuerdo">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtRecuerdo') }} </p>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
                </div>
            
            </form>
        
        </div>

    </div>

</div>    

@stop
