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
    {{-- @foreach ($data_bimbing as $d) --}}
    {{-- {{ dd($data_bimbing) }} --}}
{{-- @endforeach --}}
    <x-navbar></x-navbar>

    <main class="pt-20" style="background-color: #0e4166; position: relative text-align: white;">
        <section>
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-8">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="mb-8 text-xl font-bold leading-none tracking-tight text-white xl:text-4xl">
                        Selamat Datang, {{ Auth::user()->name }} </h1>
                    <p class="pb-2 text-white text-xl">Berikut adalah data pembimbingmu :</p>
                    <section>
                        <table>
                            <thead>
                                @foreach ($data_bimbing as $d)

                                    @if (auth::user()->name == $d->nama)
                                        <tr>
                                            <th class="px-4 py-2 font-semibold text-gray-700 bg-gray-200">Dosen
                                                Pembimbing 1
                                            </th>
                                            <th class="px-4 py-2 font-semibold text-gray-700 bg-gray-200">
                                                {{ $d->dosen_pembimbing_1 }}
                                            </th>

                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 font-semibold text-gray-700 bg-gray-200">Dosen
                                                Pembimbing 2
                                            </th>
                                            <th class="px-4 py-2 font-semibold text-gray-700 bg-gray-200">
                                                {{ $d->dosen_pembimbing_2 }}
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 font-semibold text-gray-700 bg-gray-200">Dosen Penguji
                                            </th>
                                            <th class="px-4 py-2 font-semibold text-gray-700 bg-gray-200">
                                                {{ $d->dosen_penguji }}
                                            </th>
                                        </tr>
                                    @endif
                                @endforeach
                            </thead>
                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="/img/mhs2.png" style="border-radius: 50%;">
                </div>
            </div>
        </section>

        <x-background></x-background>
    </main>

    <footer class="py-5 text-center bg-white fixed-bottom">
        <p>&copy; 2023 NoobDev</p>
    </footer>

</body>

</html>
