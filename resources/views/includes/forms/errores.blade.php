@if ($errors->any())
    <div class="alert alert-danger alert-dismissible mensaje-emergente">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Problema con los campos ingresados!</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @include('includes.forms.borrar-mensaje-emergente')
@endif