@extends('layout.sidebar')
@section('title', 'Configuración')

@section('content')


      <div class="divide-y divide-gray-300 mx-auto w-full max-w-7xl">
        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
          <div>
          <h2 class="text-base font-semibold leading-7 text-gray-600">Informacion personal</h2>
            <p class="mt-1 text-sm leading-6 text-gray-400">Utilice una dirección permanente donde pueda recibir correo.</p>
          </div>

          <form class="md:col-span-2">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
              <div class="col-span-full flex items-center gap-x-8">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover">
                <div>
                  <button type="button" class="rounded-md bg-emerald-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500">Change avatar</button>
                  <p class="mt-2 text-xs leading-5 text-gray-400">JPG, GIF or PNG. 1MB max.</p>
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-600">Nombres</label>
                <div class="mt-2">
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-600">Apellidos</label>
                <div class="mt-2">
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="col-span-full">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-600">Dirección de correo electrónico</label>
                <div class="mt-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="col-span-full">
                <label for="username" class="block text-sm font-medium leading-6 text-gray-600">Nombre de usuario</label>
                <div class="mt-2">
                  <div class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-emerald-500">
                    <span class="flex select-none items-center pl-3 text-gray-400 sm:text-sm">OpenTravels.com/</span>
                    <input type="text" name="username" id="username" autocomplete="username" class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
                  </div>
                </div>
              </div>

              <div class="col-span-full">
                <label for="timezone" class="block text-sm font-medium leading-6 text-gray-600">Zona horaria</label>
                <div class="mt-2">
                  <select id="timezone" name="timezone" class="block w-full rounded-md border-0 bg-white py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6 [&_*]:text-black">
                    <option>Hora estándar del Pacífico</option>
                    <option>Hora estándar del Este</option>
                    <option>Meridiano de Greenwich</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="mt-8 flex">
              <button type="submit" class="rounded-md bg-emerald-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Guardar</button>
            </div>
          </form>
        </div>

        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
          <div>
            <h2 class="text-base font-semibold leading-7 text-gray-600">Cambiar la contraseña</h2>
            <p class="mt-1 text-sm leading-6 text-gray-400">Actualice su contraseña asociada a su cuenta.</p>
          </div>

          <form class="md:col-span-2">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
              <div class="col-span-full">
                <label for="current-password" class="block text-sm font-medium leading-6 text-gray-600">Contraseña actual</label>
                <div class="mt-2">
                  <input id="current-password" name="current_password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="col-span-full">
                <label for="new-password" class="block text-sm font-medium leading-6 text-gray-600">Nueva contraseña</label>
                <div class="mt-2">
                  <input id="new-password" name="new_password" type="password" autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="col-span-full">
                <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-600">Confirmar contraseña</label>
                <div class="mt-2">
                  <input id="confirm-password" name="confirm_password" type="password" autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
            </div>

            <div class="mt-8 flex">
              <button type="submit" class="rounded-md bg-emerald-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Guardar</button>
            </div>
          </form>
        </div>

        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
          <div>
            <h2 class="text-base font-semibold leading-7 text-gray-600">Cerrar sesión en otras sesiones</h2>
            <p class="mt-1 text-sm leading-6 text-gray-400">Ingrese su contraseña para confirmar que desea cerrar sesión en sus otras sesiones en todos sus dispositivos.</p>
          </div>

          <form class="md:col-span-2">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
              <div class="col-span-full">
                <label for="logout-password" class="block text-sm font-medium leading-6 text-gray-600">Tu contraseña</label>
                <div class="mt-2">
                  <input id="logout-password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
            </div>

            <div class="mt-8 flex">
              <button type="submit" class="rounded-md bg-emerald-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Cerrar sesión en otras sesiones</button>
            </div>
          </form>
        </div>

        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
          <div>
            <h2 class="text-base font-semibold leading-7 text-gray-600">Borrar cuenta</h2>
            <p class="mt-1 text-sm leading-6 text-gray-400">¿Ya no quieres utilizar nuestro servicio? Puedes eliminar tu cuenta aquí. Esta acción no es reversible. Toda la información relacionada con esta cuenta se eliminará permanentemente.</p>
          </div>

          <form class="flex items-start md:col-span-2">
            <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400">Sí, eliminar mi cuenta</button>
          </form>
        </div>
      </div>
  

@endsection
