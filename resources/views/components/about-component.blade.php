<div class="container mx-auto flex justify-center items-center h-screen">
    <div class="w-full md:w-1/2 flex flex-col md:flex-row items-center">
        <img src="{{ Storage::url('public/Luis/Neo.jpg') }}" alt="Imagen de presentación"
            class="w-1/2 md:w-auto rounded-full border-4 border-matrix-components">
        <div class="p-4">
            <h1 id="title" class="text-6xl font-italic mb-4 text-matrix-text-bg">Bienvenido....</h1>
            <p class="text-lg">Aquí va el texto de la carta de presentación. Puedes agregar más párrafos si es necesario.
            </p>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var app = document.getElementById('title');

        var typewriter = new Typewriter(app, {
            loop: false,
            delay: 75,
        });

        console.log(typewriter)

        typewriter
            .typeString('Bienvenido..')
            .pauseFor(300)
            .deleteChars(10)

            .start();
    </script>
@endpush
