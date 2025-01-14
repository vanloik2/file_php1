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
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ccc;
            padding: 15px;
        }
        </style>
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
                <li><a style="font-weight: bold" class="dropdown-item" href="#"><?php echo $_SESSION['user_name']; ?></a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL . 'sign-out' ?>">Sign Out</a></li>

            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASE_URL . 'user/subject' ?>">Môn học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL . 'user/quiz/score/' . $sub_id ?>">Điểm Quiz</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="list-subjects">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Stt</th>
                    <th scope="col">Tên Quiz</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($model as $key => $value)
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><a
                                href="<?= BASE_URL . 'user/take-quiz/' . $value->id . '/' . $value->subject_id ?>"><?= $value->name ?></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>


</body>

</html>
