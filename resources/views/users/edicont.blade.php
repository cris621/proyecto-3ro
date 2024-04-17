<div class =" row ">
<div class="cold-md-6" >

<div class="mb-3">
 


</select>
</div>


<div class="cold-md-6">
    <x-input-label class="form-label" for="update_password_password" :value="__('Nueva contraseña')" />
    <x-text-input class="form-control" id="update_password_password" name="password" type="password" autocomplete="new-password" />
    <x-input-error :messages="$errors->updatePassword->get('password')" />
</div>

<div class="cold-md-6">
    <x-input-label class="form-label" for="update_password_password_confirmation" :value="__('Confirmar contraseña')" />
    <x-text-input class="form-control" id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"  />
</div>

    

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
<button type="submit" class="btn btn-success">Guardar</button>
</div>


</div>