<form action="{{route('send.mail')}}" method="POST">
  @csrf
  <div class="border-b-4 border-matrix-hover pb-12">
      <h2 class="text-base font-semibold leading-7 ">Contacto:</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="first_name" class="block text-lg text-matrix-700 leading-6 ">Nombres:</label>
          <div class="mt-2">
            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-matrix-footer placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last_name" class="block text-lg text-matrix-700  leading-6 ">Apellidos:</label>
          <div class="mt-2">
            <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-matrix-footer placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-6">
          <label for="email" class="block text-lg text-matrix-700  leading-6 ">Email address:</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-matrix-footer placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-6">
          <label for="content" class="block text-lg text-matrix-700  leading-6 ">Contenido:</label>
          <div class="mt-2">
            <textarea id="content" name="content" type="email" rows="5" autocomplete="email" class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-matrix-footer placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <input type="submit" class="bg-matrix-hover font-bold py-2 px-4 rounded" value="Enviar">

      </div>
    </div>
</form>