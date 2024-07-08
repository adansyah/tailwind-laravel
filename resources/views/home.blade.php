<x-layout>
    <x-slot:title></x-slot:title>
    {{-- <h3 class="text-xl">Halaman Home Page</h3> --}}
    <div class="alert alert-secondary" role="alert">
        <h4 class="alert-heading">Selamat Datang @if (auth()->user())
                {{ auth()->user()->name }}
            @else
                ini siapa
            @endif!</h4>
        <br>
        <p>"Gagal itu makanan sehari-hari, Itu biasa, yang penting bagaimana kamu menyikapinya. Evaluasi dan terus
            bangkit. Jika gagal lagi? Bangkit lagi."</p>
        <hr>
        <p class="mb-0">Crisis De Confianza.</p>
    </div>
</x-layout>
