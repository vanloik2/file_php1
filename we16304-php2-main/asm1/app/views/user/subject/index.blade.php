<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <style>
        .col_sub {
            display: flex !important;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
        }

        .card_main {
            display: flex !important;
            align-items: center;
        }

        .card-img-top {
            margin-right: 15px;
        }

        .card-title {
            text-transform: uppercase !important;
            font-weight: normal;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ccc;
            padding: 15px;
        }

    </style>
    <div class="container">
        <div class="header">
            <div>
                <img style="width: 175px" src="{{ PUBLIC_URL . 'uploads/logo.png' }}" alt="">
            </div>
            <div class="dropdown">
                <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class='fas fa-user-graduate' style='font-size:36px'></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a style="font-weight: bold" class="dropdown-item" href="#">{{ $_SESSION['user_name']}}</a></li>
                    <li><a class="dropdown-item" href="<?= BASE_URL . 'sign-out' ?>">Sign Out</a></li>

                </ul>
            </div>
        </div>
        @foreach ($model as $item)
            <div class="card col_sub mt-3" style="">
                <div class="card_main">
                    <p><img style="width: 70px" src="{{ PUBLIC_URL . 'uploads/' . $item->img }}" class="card-img-top" alt="..."></p>
                    <div>
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">Số Quiz: {{ count($item->quizs) }}</p>
                    </div>
                </div>
                <a href="{{ BASE_URL . 'user/quiz/' . $item->id }}" class="btn btn-primary">View Course</a>
            </div>
        @endforeach
    </div>

</body>

</html>
