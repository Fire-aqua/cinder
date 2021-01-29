<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
        * {
          /*font-family: Helvetica, sans-serif;*/
          font-family: "DejaVu Sans", sans-serif;
        }
        </style>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">№</th>
                    <th scope="col">Название горы</th>
                    <th scope="col">Высота (метры)</th>
                    <th scope="col">Наличие льда</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mountains ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->height }}</td>
                    <td>{{ $data->is_icy }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>