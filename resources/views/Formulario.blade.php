@extends('Barra')

@section('contenido')

@if (session()->has('confirmacion'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Tu Formulario se guardo satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

<div class="container col-md-6">
    <h1 class="display-4 text-center mt-5 mb-5">Formulario</h1>



    <div class="card text-center mb-5">

        <div class="card-header">
            Ingresa tu formulario
        </div>

        <div class="card-body">
            
            <form method="POST" action="guardarFormulario">
                @csrf

                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                    <input required class="form-control" type="text" name="txtFormulario" placeholder="Titulo del formulario">

                    <div class="alert alert-danger">{{ $errors->first('txtFormulario') }}</div>
                </div>

                <div class="mb-3">
                    <input required class="form-control" type="text" name="txtForm" placeholder="Formulario a ingresar">

                    <div class="alert alert-danger">{{ $errors->first('txtForm') }}</div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar Formulario</button>
                </div>
            
            </form>
        
        </div>

    </div>

</div>    

@stop