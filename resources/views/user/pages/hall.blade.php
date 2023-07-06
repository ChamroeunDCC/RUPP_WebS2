
{{-- @section('title')Hall @endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Food</title>
</head>
<body>
    @include('user.header')
    <section class="hall" style="height:80vh" id="hall">
        <h1>HALL</h1>
        <div class="container">
            <div class="row mt-5">
                <div class="col-6">
        
                    <div class="slider mt-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                <img src="Images/Hall/hall1.jpg" class="d-block w-100" alt=""/>
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/Hall/hall3.jpg" class="d-block w-100" alt=""/>
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/Hall/hall2.jpg" class="d-block w-100" alt=""/>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                    <div class="col-6">
                        <div class="row mb-4 position-relative">
                            <a href="{{ route('tableA') }}"><img class="d-block w-100" src="Images/Hall/hall10.png" alt=""></a>
                            <h3 class="text-white position-absolute top-0 start-position-absolute top-50 start-50 translate-middle">HallA</h3>
                            <span class="position-absolute top-0 start-100 translate-middle">12</span>
                            <span class="position-absolute top-0 start-100 translate-middle ms-4 mt-1">/12</span>
                        </div>
                    <div class="row mb-4 position-relative">
                        <a href="{{ route('tableB') }}"><img class="d-block w-100" src="Images/Hall/hall11.png" alt=""></a>
                        <h3 class="text-white position-absolute top-0 start-position-absolute top-50 start-50 translate-middle">HallB</h3>
                        <span class="position-absolute top-0 start-100 translate-middle">7</span>
                        <span class="position-absolute top-0 start-100 translate-middle ms-4 mt-1">/12</span>
                    </div>
                    <div class="row mb-4 position-relative">
                        <a href="{{ route('tableC') }}"><img class="d-block w-100" src="Images/Hall/hall13.jpg" alt=""></a>
                        <h3 class="text-white position-absolute top-0 start-position-absolute top-50 start-50 translate-middle">HallC</h3>
                        <span class="position-absolute top-0 start-100 translate-middle">5</span>
                        <span class="position-absolute top-0 start-100 translate-middle ms-4 mt-1">/12</span>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>