<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <x-navbar></x-navbar>

    <main class="pt-20" style="background-color: #0e4166; position: relative text-align: white;">
        <section>
            <div>
                <div class="flex flex-col items-center mt-20 justify-center ">
                    <div class="absolute -mt-80 pb-20 mb-16 flex justify-center">
                        <img class="flex items-center mb-6 text-4xl mt-16 w-32 h-32" src="img/logo.png" alt="logo">
                    </div>
                    {{-- form login  --}}
                    <div
                        class="w-full bg-white rounded-lg shadow dark:border mt-4 max-w-md xl:p-0 pt-16 mt-10 dark:border-gray-700">
                        <div class=" space-y-4 space-y-6 p-8 ">
                            <h1 class="font-bold text-center text-3xl text-dark mt-10">
                                Silahkan Login
                            </h1>
                            <form class="space-y-4 space-y-6 float-none" action="/login" method="POST">
                                @csrf
                                <div>
                                    <select name="masuk" id="masuk"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required="">
                                        <option value="" hidden>Masuk Sebagai</option>
                                        <option value="mahasiswa">Mahasiswa</option>
                                        <option value="dosen">Dosen</option>
                                        <option value="admin">Koordinator</option>
                                    </select>
                                </div>

                                <div>
                                    <input type="npm" name="npm" id="npm"
                                        placeholder="Silahkan Masukkan NPM/NIP anda"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required="">
                                </div>

                                <div>
                                    <input type="password" name="password" id="password"
                                        placeholder="Silahkan Masukkan Password anda"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required="">
                                </div>

                                <div>
                                    <button type="submit"
                                        class="w-full
                                        hover:text-black text-white hover:bg-blue-200 bg-sky-800 border font-medium
                                        rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600
                                        dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- Akhir form login --}}
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
