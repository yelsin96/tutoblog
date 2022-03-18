<div class="form-group row">
    <label for="nombre" class="col-sm3 text-right control-label col-form-label requerido">
        Nombre
    </label>
    <div class="col-sm-5">
        <input type="text" name="nombre" id="nombre" class="form-control" maxlength="50" required>
    </div>
</div>

<div class="form-group row">
    <label for="url" class="col-sm3 text-right control-label col-form-label requerido">
        Url
    </label>
    <div class="col-sm-5">
        <input type="text" name="url" id="url" class="form-control" maxlength="100" required>
    </div>
</div>

<div class="form-group row">
    <label for="icono" class="col-sm3 text-right control-label col-form-label requerido">
        Icono
    </label>
    <div class="col-sm-5">
        <input type="text" name="icono" id="icono" class="form-control" maxlength="50" required>
    </div>
    <div class="col-sm-1">
        <span id="mostrar-icono" class="{{old('icono')}}"></span>
    </div>
</div>