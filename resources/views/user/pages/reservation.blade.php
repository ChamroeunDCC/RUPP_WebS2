<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resevation</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    
        
        <h1 class="text-center mt-5">Reservation</h1>
        <form action="{{ route('reservation_store') }}" method="post" >
            

            @csrf

            <div class="container">
            
                <div class="row mt-5">
                    <div class="mb-3 col-4">
                        <input name="name" type="text" class="form-control" placeholder="Name" required/>
                    </div>
                    <div class="mb-3 col-4">
                        <input name="phone" type="tel" class="form-control" placeholder="Phone"required/>
                    </div>
                    <div class="mb-3 col-4">
                        <select name="hall" class="form-select btn btn-secondary" required>
                            <option selected>Hall</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                        </select>
                    </div>                                   
                </div>

                <div class="row">
                    <div class="mb-3 col-4">
                        <input name="date" type="date" class="form-control" placeholder="Date" required/>
                    </div>
                    <div class="mb-3 col-4">
                        <input name="time" type="time" class="form-control" placeholder="Time"required/>
                    </div>
                    <div class="mb-3 col-4">
                        <select name="table" class="form-select btn btn-secondary">
                            <option selected>Table</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                            <option value="3">6</option>
                            <option value="1">7</option>
                            <option value="2">8</option>
                            <option value="3">9</option>
                            <option value="1">10</option>
                            <option value="2">11</option>
                            <option value="3">12</option>
                        </select>
                    </div>                        
                </div>
                <div class="mb-3 col-12">
                    <textarea name="description" class="form-control" rows="10"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" name="btn_booking fs-2" type="submit">Book Now</button>
                </div>
            </div>
        </form>
       
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
