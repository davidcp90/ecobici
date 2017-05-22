        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Nombre y Apellidos *</label>
          <div class="col-sm-10 col-xs-12">
            <input type="text" placeholder="Ingrese el Nombre y Apellido" name="name" class="form-control" value="<?php if($user){ ?>{{ $user->name }}<?php } ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Email *</label>
          <div class="col-sm-10 col-xs-12">
            <input type="email" placeholder="Ingrese su email" name="email" class="form-control" value="<?php if($user){ ?>{{ $user->email }}<?php } ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Cedula *</label>
          <div class="col-sm-10 col-xs-12">
            <input type="number" placeholder="Ingrese el No. de Cedula " name="cedula" class="form-control" value="<?php if($user){ ?>{{ $user->cedula }}<?php } ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Telefono Fijo</label>
          <div class="col-sm-10 col-xs-12">
            <input type="text" placeholder="Ingrese el Telefono fijo" name="telefono_fijo" class="form-control" value="<?php if($user){ ?>{{ $user->telefono_fijo}}<?php } ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Celular</label>
          <div class="col-sm-10 col-xs-12">
            <input type="text" placeholder="Ingrese el No. Celular" class="form-control" name="celular" value="<?php if($user){ ?>{{ $user->celular }}<?php } ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Dirección</label>
          <div class="col-sm-10 col-xs-12">
            <input type="text" placeholder="Ingrese la dirección " class="form-control" name="direccion" value="<?php if($user){ ?>{{ $user->direccion }}<?php } ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label hidden-xs">Validación de aptitudes</label>
          <div class="col-sm-10 col-xs-12">
            <select class="form-control" name="usuario_aprobado">
                <option>Seleccione un metodo</option>
                <option value="curso" >Curso</option>
                <option value="cuestionario">Cuestionario</option>
              </select>
              <small>Metodo por el cual el usuario validara que tiene aptitudes para montar en bicicleta</small>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-xs-1">
          </div>
          <div class="col-sm-4 col-xs-10">
            <button type="submit" class="btn btn-lg btn-primary" id="guardar"><i class="fa fa-save"> </i> Guardar</button>
            <a href="/admin/users" class="btn btn-lg btn-default"><i class="fa fa-times"> </i> Cancelar</a>
          </div>
          </div>