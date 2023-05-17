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

    <main class="pt-20" style="background-color: #0e4166; position: relative; text-align: white;">
        <div class="container px-96">
            <div style="display: flex; justify-content: space-between;">
                <section>
                    <p class="text-white text-center">List Mahasiswa yang sedang dibimbing</p>
                    <table class="border-black bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">No</th>
                                <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">Nama</th>
                                <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">NPM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_bimbing as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->nama }}</td>
                                </tr>
                            @endforeach
                            <!-- Tambahkan baris lainnya di sini -->
                        </tbody>
                    </table>
                </section>

                <section>
                    <p class="text-white text-center">List Mahasiswa yang sedang diuji</p>
                    <table class="border-black bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">No</th>
                                <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">Nama</th>
                                <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">NPM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_uji as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->nama }}</td>
                                </tr>
                            @endforeach
                            <!-- Tambahkan baris lainnya di sini -->
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <x-background></x-background>
    </main>


    <footer class="py-5 text-center bg-white fixed-bottom">
        <p>&copy; 2023 NoobDev</p>
    </footer>

</body>

</html>
