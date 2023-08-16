@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Food Data</h4>

                        <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Food Image</th>
                                    <th>Food name</th>
                                    <th>Food Type</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ( $foodData as $foodItems )
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <img width="80px" src="{{ asset('/Images/imagesFood/'.$foodItems->img_food) }}" alt="">
                                        </td>
                                        <td>
                                            <p style="width: 270px !important;">
                                                {{ $foodItems->name }}
                                            </p>
                                        </td>
                                        <td> {{ $foodItems->type_food }} </td>
                                        <td>{{ $foodItems->price }}$</td>
                                        <td>
                                            <a class="btn btn-info waves-effect waves-linght" href="{{ route('food_edit',$foodItems->id) }}">Update</a>
                                            <button class="btn btn-danger waves-effect waves-linght" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>  
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                          <input type="text" name="delete" id="delete" value="{{ $foodItems->id }}">
                                          <a href="{{ route('foodDelete',$foodItems->id) }}" class="btn btn-danger">Delete</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>

@endsection