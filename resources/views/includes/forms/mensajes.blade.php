@if(session('mensaje'))
    <div class="alert alert-success alert-dismissible mensaje-emergente">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Mensaje del servidor!</h4>
        <ul>
            <li>{{session('mensaje')}}</li>
        </ul>
        @include('includes.forms.borrar-mensaje-emergente')
    </div>
@endif
