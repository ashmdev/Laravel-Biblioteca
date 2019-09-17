@if(session('mensaje'))
    <div class="alert alert-success alert-dismissible mensaje-emergente">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Menu creado satisfactoriamente!</h4>
        <ul>
            <li>{{session('mensaje')}}</li>
        </ul>
    </div>
    @include('includes.forms.borrar-mensaje-emergente')
@endif