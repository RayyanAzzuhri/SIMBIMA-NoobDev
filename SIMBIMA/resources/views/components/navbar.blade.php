<header>
    <nav class="bg-sky-800">
        <div class="flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex items-center">
                <img src="img/logo.png" class="ml-3 mr-3" alt="Logo Usk" width="50" height="50" />
                <div class="text-center">
                    <h1 class="text-xl font-bold text-white">SIMBIMA</h1>
                    <em class="text-base font-normal text-white">Universitas Syiah Kuala</em>
                </div>
            </div>

            @auth
                @if (Auth::user()->role == '2')
                    <div class="flex items-center">
                        <a href="/dashboard" class="mx-4 font-normal text-white hover:text-gray-400">Dashboard</a>
                        <a href="/data_bimbingan" class="mx-4 font-normal text-white hover:text-gray-400">View
                            Data</a>
                        <a href="/data_bimbingan/create" class="mx-4 font-normal text-white hover:text-gray-400">Input
                            Data</a>
                        <a href="/barchart" class="mx-4 font-normal text-white hover:text-gray-400">Statistik</a>
                        <a href="/logout" class="mx-4 font-normal text-white hover:text-gray-400">Logout</a>
                    </div>
                @else
                    <div class="flex items-center">
                        <a href="/dashboard" class="mx-4 font-normal text-white hover:text-gray-400">Dashboard</a>
                        <a href="/barchart" class="mx-4 font-normal text-white hover:text-gray-400">Statistik</a>
                        <a href="/logout" class="mx-4 font-normal text-white hover:text-gray-400">Logout</a>
                    </div>
                @endif
            @endauth
        </div>
    </nav>
</header>
