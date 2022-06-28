<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 80%;
            height: 80%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #eee;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 50%;
        }
        .swiper-button-prev,
        .swiper-button-next {
            width: 32px;
            height: 32px;
            margin-top: -16px;
        }
        .swiper-button-prev {
            background: url(https://haniwaman.com/cms/wp-content/uploads/2018/05/swiper3.png) no-repeat center center / contain;
        }
        .swiper-button-prev::after {
            content: "";
        }
        .swiper-button-next {
            background: url(https://haniwaman.com/cms/wp-content/uploads/2018/05/swiper4.png) no-repeat center center / contain;
        }
        .swiper-button-next::after {
            content: "";
        }
    </style>
</head>
<div>
<div class="swiper mySwiper" style="margin-top: 100px;">

    <div class="swiper-wrapper">
        @foreach($items as $slide)
            <div class="swiper-slide">
                @if(!empty($slide->img))
                    <img src="{{ asset('/storage/' . $slide->img) }}" alt="{{ $slide->title }}"
                         title="{{ $slide->title }}" width="140px">
                @else
                    <img src="{{ asset('/storage/uploads/no-photo.png') }}" alt="{{ $slide->title }}"
                         title="{{ $slide->title }}" width="140px">
                @endif</div>
        @endforeach
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>


<div class="container" style="margin-top: 100px;">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Text</th>
            <th scope="col">Img</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->text }}</td>
                <td>
                    @if(!empty($item->img))
                        <img src="{{ asset('/storage/' . $item->img) }}" alt="{{ $item->title }}"
                             title="{{ $item->title }}" width="140px">
                    @else
                        <img src="{{ asset('/storage/uploads/no-photo.png') }}" alt="{{ $item->title }}"
                             title="{{ $item->title }}" width="140px">
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('create')}}" class="btn btn-primary">Создать запись</a>
</div>
<div class="footer">
    <br>
    <br>
    <br>
</div>
</body>
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            clickable: true,
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },

    });
</script>
</html>
