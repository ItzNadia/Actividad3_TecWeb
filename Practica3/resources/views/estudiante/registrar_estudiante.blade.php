@section('content')
<link href="{{ asset('/css/registro.css') }}" rel="stylesheet">
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container-registro mt-5">

    <form action="" method="post" action="action('ClienteController@registrarCliente') ">

        @csrf

        <div class="form-group form-registro">
            <label>Nombre</label>
            <input type="text" class="form-control  $errors->has('nombre') ? 'error' : '' " name="nombre" id="nombre">
            
            <!-- Error -->
            @if ($errors->has('nombre'))
            <div class="error">
                {{$errors->first('nombre')}} 
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Apellido Paterno</label>
            <input type="text" class="form-control  $errors->has('apellidoP') ? 'error' : '' " name="apellidoP" id="apellidoP">
            
            <!-- Error -->
            @if ($errors->has('apellidoP'))
            <div class="error">
                {{$errors->first('apellidoP')}} 
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Apellido Materno</label>
            <input type="text" class="form-control  $errors->has('apellidoM') ? 'error' : '' " name="apellidoM" id="apellidoM">
            
            <!-- Error -->
            @if ($errors->has('apellidoM'))
            <div class="error">
                {{$errors->first('apellidoM')}} 
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Fecha Nacimiento</label>
            <input type="date" class="form-control  $errors->has('fechaNac') ? 'error' : '' " name="fechaNac" id="fechaNac">
            
            <!-- Error -->
            @if ($errors->has('fechaNac'))
            <div class="error">
                {{$errors->first('fechaNac')}} 
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Correo</label>
            <input type="email" class="form-control  $errors->has('correo') ? 'error' : '' " name="correo"
                id="correo">

            @if ($errors->has('correo'))
            <div class="error">
                {{$errors->first('correo')}}  
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Telefono</label>
            <input type="text" class="form-control  $errors->has('telefono') ? 'error' : '' " name="telefono"
                id="telefono">

            @if ($errors->has('telefono'))
            <div class="error">
                {{$errors->first('telefono')}}  
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Calle</label>
            <input type="text" class="form-control  $errors->has('calle') ? 'error' : '' " name="calle"
                id="calle">

            @if ($errors->has('calle'))
            <div class="error">
                {{$errors->first('calle')}} 
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Colonia</label>
            <input type="text" class="form-control  $errors->has('colonia') ? 'error' : '' " name="colonia" id="colonia">
            
            <!-- Error -->
            @if ($errors->has('colonia'))
            <div class="error">
                {{$errors->first('colonia')}} 
            </div>
            @endif
        </div>



        <div class="form-group form-registro">
            <label>Codigo Postal</label>
            <input type="text" class="form-control  $errors->has('codigoPostal') ? 'error' : '' " name="codigoPostal" id="codigoPostal">

            <!-- Error -->
            @if ($errors->has('tipoCliente'))
            <div class="error">
                {{$errors->first('tipoCliente')}} 
            </div>
            @endif
        </div>

        <div class="div-btn-submit">
            <input type="submit" name="send" value="Submit" class="btn-submit">
        </div>
    </form>
</div>
@endsection