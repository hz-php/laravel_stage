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

    <h3 class="display-4">
        Добавить статью
    </h3>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label for="title">Введите название</label>
        <input type="text" name="title" id="title" class="title form-control ">
        <label for="text">Введите текст</label>
        <textarea name="text" class="form-control" id="text" cols="30" rows="10"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>

</body>
</html>
