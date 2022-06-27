<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 100px;">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
            <tr>

                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->text }}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('create')}}" class="btn btn-primary">Создать запись</a>

</body>
</html>
