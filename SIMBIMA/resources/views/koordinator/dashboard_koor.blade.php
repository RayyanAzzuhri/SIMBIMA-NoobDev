<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <x-navbar></x-navbar>

    <main class="pt-20" style="background-color: #0e4166; position: relative text-align: white;">

        @foreach ($data_bimbingan as $bimbingan)
            @if ($bimbingan->dosen_pembimbing_2 == Auth::user()->name || $bimbingan->dosen_pembimbing_1 == Auth::user()->name)
                <p>{{ $bimbingan->nama }}</p>
                {{-- <p>{{ $bimbingan->dosen_pembimbing_1 }}</p>
                <p>{{ $bimbingan->dosen_pembimbing_2 }}</p>
                <p>{{ $bimbingan->dosen_penguji }}</p> --}}
            @endif
        @endforeach

        <div class="container px-96">
            <table class="min-w-full tabel">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">No</th>
                        <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">Nama</th>
                        <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">NPM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">{{ Auth::user()->name }}</td>
                        <td class="border px-4 py-2">12345678</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">2</td>
                        <td class="border px-4 py-2">Jane Smith</td>
                        <td class="border px-4 py-2">87654321</td>
                    </tr>
                    <!-- Tambahkan baris lainnya di sini -->
                </tbody>
            </table>
        </div>


        <x-background></x-background>
    </main>

    <footer class="py-5 text-center bg-white fixed-bottom">
        <p>&copy; 2023 NoobDev</p>
    </footer>

</body>

</html>
