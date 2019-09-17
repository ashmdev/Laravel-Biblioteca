<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
        <input type="text" maxlength="50" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}"
               required>
    </div>
</div>

<div class="form-group">
    <label for="url" class="col-lg-3 control-label requerido">URL</label>
    <div class="col-lg-8">
        <input type="text" maxlength="100" name="url" id="url" class="form-control" value="{{old('url')}}" required>
    </div>
</div>

<div class="form-group">
    <label for="icono" class="col-lg-3 control-label">Icono</label>
    <div class="col-lg-8">
        <input type="text" placeholder="Clickee este campo" readonly maxlength="60" name="icono" id="icono"
               class="form-control icp icp-auto" value="{{old('icono')}}">
    </div>
    <div class="col-lg-1">
        <p class="lead">
            <i class="picker-target fa-2x {{old('icono')}}"></i>
        </p>
    </div>
</div>
