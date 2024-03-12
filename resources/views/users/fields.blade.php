<div class =" row ">
<div class="cold-md-6" >

<div class="mb-3">
 
<label for="rol_id" class="form-label">Elija un Rol</label>

<select name="rol_id">
@foreach($roles as $r)
    <option value="{{$r->rol_id}}" {{ isset($user) && $user->rol?'selected':''}}>{{$r->rol_descripcion}}</option>
@endforeach


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

<div class="cold-md-6">
 <label for="password" class="form-label">Contraseña</label>
 <input type="password" name='password' class="form-control">
</div>

<button type="submit" class="btn btn-success">Guardar</button>
</div>


</div>