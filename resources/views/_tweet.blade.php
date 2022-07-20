<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
<div class="row">
    <div class="col-sm-1">
        <img src="https://i.pravatar.cc/50">
    </div>
    <div class="col-sm-8">
        <h5 class="fw-bold">{{$tweet->user->name}}</h5>
    </div>
    <div class="col-sm-3">
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Edit
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>
<div class="mt-3 border-bottom">
    <p>{{$tweet->text}}</p>
</div>
</body>
</html>
