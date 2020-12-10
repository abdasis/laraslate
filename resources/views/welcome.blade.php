<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/@tabler/core@latest/dist/css/tabler.min.css">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal">
                Laraslate
                <a href=".">
                    {{-- <h1></h1> --}}
                  {{-- <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> --}}
                </a>
              </h1>
            </div>
          </header>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col align-middle mt-5">
                    <div class="card card-stacked">
                        <div class="card-body">
                            <h3 class="card-title">Bahasa Indonesia</h3>
                            <textarea class="form-control" name="" id="" rows="9"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col align-middle mt-5">
                    <div class="card card-stacked">
                        <div class="card-body">
                            <h3 class="card-title">Bahasa Inggris</h3>
                            <textarea class="form-control" name="" id="" rows="9"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary mt-3 btn-square btn-block w-100 btn-lg">Translate</button>
        </div>
        <script src="https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js"></script>
    </body>
</html>
