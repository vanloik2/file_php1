<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>Thêm Question</h1>
    <form action="<?= BASE_URL . 'admin/question/save-add/' . $id . '/' . $sub_id ?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>
        
        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $id ?>" name="quiz_id">
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-light"><a class="nav-link" href="<?= BASE_URL . 'admin/question/list/' . $id .'/' . $sub_id ?>">Ds Question</a></button>
        
    </form>
    <p class="report" style="color:red">
        <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
    </p>
</body>

</html>