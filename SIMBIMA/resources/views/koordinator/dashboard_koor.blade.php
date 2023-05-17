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
        {{ Auth::user()->name }}

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>NPM</th>
                </tr>
            </thead>
            <tbody>
                {{-- @forelse ($data as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->user->alamat }}</td>
                        <td>{{ $value->tanggal }}</td>
                        <td>{{ $value->jam }}</td>
                        <td>
                            @if ($value->status == 0)
                                <a href="{{ route('pemanggilan-selesai', $value->id) }}"
                                    class="btn btn-primary">Selesaikan</a>
                            @else
                                <button type="button" class="btn btn-success" disabled>Sukses</button>
                            @endif
                        </td>
                    </tr>

                @empty
                    Data Kosong
                @endforelse --}}
            </tbody>
        </table>


        <x-background></x-background>
    </main>

    <footer class="py-5 text-center bg-white fixed-bottom">
        <p>&copy; 2023 NoobDev</p>
    </footer>

</body>

</html>
