<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statistic</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <x-navbar></x-navbar>

    <div class="container">
        <div class="container py-10">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                    <input value="pendamping" class="sex" type="radio" name="options" id="option1" autocomplete="off"
                        checked>pendamping
                </label>
                <label class="btn btn-primary	">
                    <input value="penguji" type="radio" class="sex" name="options" id="option2"
                        autocomplete="off">penguji
                </label>
                <label class="btn btn-primary">
                    <input value="total" type="radio" class="sex" name="options" id="option3"
                        autocomplete="off">total
                </label>
            </div>
        </div>


        <div class="grid-container">
            <div id="vis" class="grid-item"></div>
            <div id="table-container" class="grid-item"></div>
        </div>
        <div id="tooltip"></div>
        <!-- Libraries -->
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"
            type="text/css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/d3.v7.min.js') }}"></script>

        <!-- your script file -->
        <link rel="icon" href="data:;base64,iVBORwOKGO=" />
        <!-- <script src="js/barchart.js"></script> -->

        <script src="{{ asset('js/barchart.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </div>

    <footer class="py-5 text-center bg-white fixed-bottom">
        <p>&copy; 2023 NoobDev</p>
    </footer>
</body>
