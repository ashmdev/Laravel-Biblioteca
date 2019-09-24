<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
        <input type="text" maxlength="50" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $rol->nombre??'')}}"
               required>
    </div>
</div>

<!--
<input type="text" maxlength="50" name="nombre" id="nombre" class="form-control" value="{{isset($rol)?$rol->nombre:old('nombre')}}" required>
-->
