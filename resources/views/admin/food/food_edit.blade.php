@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <h4 class="card-title">Food Update Page</h4><br><br>

                    <form action="{{ route('food_update',$editData->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Food Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="foodName" value="{{ $editData->name }}" name="foodName">
                            </div>
                        </div>

                        <input type="hidden" name="old_img" value="{{ $editData->img_food }}">
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control image1" type="file" id="image" name="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label"></label>
                            <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:95px !important;" src="{{ asset('Images/imagesFood/'.$editData->img_food)}}" alt="ad_image">
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="price" name="price" value="{{ $editData->price }}">
                            </div>
                        </div>

                        <input type="hidden" name="old_type" value="{{ $editData->type_food }}">
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Food Type</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="type_food" aria-label="Default select example">
                                    <option selected value="Open this select food type">Open this select food type</option>
                                    <option value="Breakfast">Breakfast</option>
                                    <option value="Lunch">Lunch</option>
                                    <option value="Dinner">Dinner</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-info waves-effect waves-linght">Update Food</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    $(document).ready(function(){
        $(".image2").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage2").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection