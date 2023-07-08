<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TableA</title>
</head>
<body style="background-color:darkslategray">
    <div class="text-white"></div>
    <div class="section text-center mt-5 text-white">
        <h1 class="mb-5">HallA</h1>
        <div class="table_select mb-lg-5">
            <h5>Table</h5>
            <div class="check" style="float: right; margin-right: 20rem;">
                <input class="mb-2" type="checkbox" name="check">
                <label for="check">All</label>
            </div>
        </div>  
    </div>
    <div class="container text-center">
        <div class="row mt-4 mb-5">
            <div class="col-4 d-flex justify-content-between">
                <!-- Button TableModal trigger modal -->
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table1</a>
            </div>
            <div class="col-4">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table2</a>
            </div>
            <div class="col-4">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table3</a>
            </div>
        </div>
        <div class="row text-center mt-4 mb-5">
            <div class="col-4 d-flex justify-content-between">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table4</a>
            </div>
            <div class="col-4">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table5</a>
            </div>
            <div class="col-4">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table6</a>
            </div>
        </div>
        <div class="row text-center mt-4 mb-5">
            <div class="col-4 d-flex justify-content-between">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table7</a>
            </div>
            <div class="col-4">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table8</a>
            </div>
            <div class="col-4">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table9</a>
            </div>
        </div>
        <div class="row text-center mt-4 mb-5">
            <div class="col-4 d-flex justify-content-between">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table10</a>
            </div>
            <div class="col-4">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table11</a>
            </div>
            <div class="col-4">
                <a href="{{route('reservation')}}" type="button" class="btn btn-danger">Table12</a>
            </div>
        </div>
        <div class="row text-center mt-4 mb-5">
            <div class="col-4 d-flex justify-content-between">
                        <!-- Button TableModal trigger modal -->
            <button type="button" class="d-none btn btn-danger">Table1</button>
            </div>
            <div class="col-4">
                        <!-- Button TableModal trigger modal -->
            <button type="button" class="d-none btn btn-danger">Table1</button>
            </div>
            <div class="col-4">
                <a href="{{ route('hall_user') }}" class="btn btn-outline-light">Cancel</a>
            </div>
        </div>
    </div>

    <!-- Modal OrderMenuFood-->
  <div class="modal fade" id="ModalTable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-4" id="exampleModalLabel">Booking Table</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="container">
                    <div class="row mt-5">
                        <div class="mb-3 col-4">
                            <input style="font-size: 15;"  type="text" class="form-control" placeholder="Name"/>
                        </div>
                        <div class="mb-3 col-4">
                            <input style="font-size: 15;" type="tel" class="form-control" placeholder="Phone"/>
                        </div>
                        <div class="mb-3 col-4">
                            <select style="font-size: 15;"  class="form-select btn btn-secondary">
                                <option selected>Hall</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                            </select>
                        </div>                                   
                    </div>
  
                    <div class="row">
                        <div class="mb-3 col-4">
                            <input style="font-size: 15;" type="date" class="form-control" placeholder="Date"/>
                        </div>
                        <div class="mb-3 col-4">
                            <input style="font-size: 15;" type="time" class="form-control" placeholder="Time"/>
                        </div>
                        <div class="mb-3 col-4">
                            <select style="font-size: 15;"  class="form-select btn btn-secondary">
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
                        <textarea class="form-control" rows="10" placeholder="Write something here..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary">Book Now</button>
                </div>
            </form>
      </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>