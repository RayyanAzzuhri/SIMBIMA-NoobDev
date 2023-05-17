@extends('data_bimbingan.layout')

@section('content')

    <body>
        <header>
            <nav class="bg-sky-800 border-gray-200 dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between mx-auto p-4">
                    <div class="flex items-center">
                        <img src="http://sipil.usk.ac.id/wp-content/uploads/2018/02/Logo-Unsyiah-Kuning-HD-1012x972-Transparan-1.png"
                            class="ml-3 mr-3" alt="Logo Usk" width="50" height="50" />
                        <div class="text-center">
                            <h1 class="text-xl font-bold text-white">SIMBIMA</h1>
                            <em class="text-base font-normal text-white">Universitas Syiah Kuala</em>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a href="/dashboard" class="mx-4 font-normal text-white hover:text-gray-400">Dashboard</a>
                        <a href="/data_bimbingan" class="mx-4 font-normal text-white hover:text-gray-400">View Data</a>
                        <a href="/data_bimbingan/create" class="mx-4 font-normal text-white hover:text-gray-400">Input
                            Data</a>
                        <a href="/barchart" class="mx-4 font-normal text-white hover:text-gray-400">Statistik</a>
                        <a href="/" class="mx-4 font-normal text-white hover:text-gray-400">Logout</a>
                    </div>
                </div>
            </nav>
        </header>

        <div class="row">
            <div>
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Tabel Mahasiswa</h2>
                    </div>
                    <div class="card-body">

                        <br />
                        <br />
                        <div class="table-responsive mx-12 ">
                            <table class="table table-auto border">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Dosen Pembimbing 1</th>
                                        <th>Dosen Pembimbing 2</th>
                                        <th>Dosen Penguji</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data_bimbingan as $item)
                                        <tr class="hover:bg-stone-100">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->NIM }}</td>
                                            <td>{{ $item->dosen_pembimbing_1 }}</td>
                                            <td>{{ $item->dosen_pembimbing_2 }}</td>
                                            <td>{{ $item->dosen_penguji }}</td>
                                            <td>
                                                <form method="POST" action="{{ url('/data_bimbingan' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Student"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="pt-3 text-center bg-white">
            <p>&copy; 2023 NoobDev</p>
        </footer>
    </body>
@endsection
