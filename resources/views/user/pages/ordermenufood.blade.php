<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyCard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-info">
    <form action="{{route('food_store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="d-flex justify-content-center mt-5 text-center">
            <div class="card text" style="width: 18rem;">
                <input type="text" name="img_food" value="{{ $foodData->img_food }}">
                <img class="card-img-top" src="{{ asset('Images/imagesFood/'. $foodData->img_food) }}" alt="Card image cap">
                <div class="card-body">
                    <input type="text" name="name" value="{{ $foodData->name }}">
                    <h3> {{ $foodData->name }} </h3>
                    <h2 style="font-size: 15px;">Quantity</h2>
                    <div class="mb-2">
                        <button type="button" class='me-2 btn-secondary'><i class="fa-solid fa-minus"></i></button>
                        <b><span>1</span></b>
                        <button type="button" class='ms-2 btn-secondary'><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <input type="text" name="price" value="{{ $foodData->price }}">
                    <h4  class="mb-2"> {{ $foodData->price }}$</h4>
                </div>
                <div>
                    <a href="{{route('menu_user')}}" type="button" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-primary">Add To Card</button>
                </div>
            </div>
        </div>
      
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>