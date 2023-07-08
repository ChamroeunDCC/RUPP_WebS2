

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
    {{-- header --}}
    @include('user.header')

    <section class="menu">
        <div class="container mt-5">
            <h1>CHECK OUT OUR MENU</h1>
        </div>
       
        <section id="breakfast">
            <div class="row d-flex justify-content-center mt-5">
                <h2>Breakfast</h2>
                @php
                    $foodData = DB::table('menu_food')->where('type_food', '=', "Breakfast")->get();
                @endphp
                @foreach ($foodData as $foodItems)
                    <div class="col-3">
                        <img width="10px" src="{{asset('Images/imagesFood/'.$foodItems->img_food)}}" alt=""/>
                        <div>
                            <h5> {{$foodItems->name}} </h5>
                            <a href="{{ route('food_order', $foodItems->id) }}"><button class="btn btn-danger">{{$foodItems->price}}$</button>
                                
                            </a>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            <div class="row d-flex justify-content-center mt-5">
                <h2>Lunch</h2>
                @php
                    $foodData = DB::table('menu_food')->where('type_food', '=', "Lunch")->get();
                @endphp
                @foreach ($foodData as $foodItems)
                    <div class="col-3">
                        <img width="10px" src="{{asset('Images/imagesFood/'.$foodItems->img_food)}}" alt=""/>
                        <div>
                            <h5> {{$foodItems->name}} </h5>
                            <a href="{{ route('food_order', $foodItems->id) }}"><button class="btn btn-danger">{{$foodItems->price}}$</button>
                                
                            </a>
                        </div>
                    </div>
                @endforeach
            <div class="row d-flex justify-content-center mt-5">
                <h2>Dinner</h2>
                @php
                    $foodData = DB::table('menu_food')->where('type_food', '=', "Dinner")->get();
                @endphp
                @foreach ($foodData as $foodItems)
                    <div class="col-3">                      
                        <img id="image" width="10px" src="{{asset('Images/imagesFood/'.$foodItems->img_food)}}" alt=""/>
                        <h5 id="name"> {{$foodItems->name}} </h5>
                        <a href="{{ route('food_order', $foodItems->id) }}"><button class="btn btn-danger">{{$foodItems->price}}$</button>
                                
                        </a>
                    </div>  
                @endforeach
            </div>
        </section>
    </section> 




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>  
</body>
</html>


<script>
  $(document).ready(function(){
     $(document).on('click', '.btn_menu', function(event){
        event.preventDefault();
        var id = $(this).data('id');
        $('#orderFood').modal('show');
        $('#id_menu').val(id);

        $.ajax({
            type: "GET",
            url: "/menu/food_order/"+id_menu,
            success: function (response) {
                console.log(response);
            }
        })
     }) 
    
       
  })


</script>

