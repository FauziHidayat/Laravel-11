<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title> <!-- parsing dari web route -->
    <h3 class="text-xl">Halaman About</h3>
    <p>Nama : {{ $name }}</p>
</x-layout>