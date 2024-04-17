<div class =" row ">
<div class="cold-md-6" >

<div class="mb-3">
 
<label for="rol_id" class="form-label">Elija un Rol</label>



</select>
</div>

<div class="cold-md-6">
 <label for="name" class="form-label">Username</label>
 <input type="text" name='name' value="{{isset($user)?$user->name:''}}" class="form-control">
 </div>

 <div class="cold-md-6">
 <label for="usu_nombres" class="form-label">Nombres y Apellidos</label>
 <input type="text" name='usu_nombres' class="form-control" value="{{isset($user)?$user->usu_nombres:''}}">
 </div>

 <div class="cold-md-6">
 <label for="usu_telefono" class="form-label">Teléfono</label>
 <input type="text" name='usu_telefono' class="form-control" value="{{isset($user)?$user->usu_telefono:''}}">
 </div>

 <div class="cold-md-6">
 <label for="correo" class="form-label">Correo Electronico</label>
 <input type="text" name='email' class="form-control" value="{{isset($user)?$user->email:''}}">
</div>

<button type="submit" class="btn btn-success">Guardar</button>
</div>


</div>