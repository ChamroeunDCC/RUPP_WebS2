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
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Hall</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Table</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                                <tbody>        
                       
                                    @foreach ( $hallData as $hallItems)
                                        
                                    
                                    <tr>
                                        <td>
                                            <p> {{ $hallItems->name }} </p>                                        
                                        </td>
                                        <td>
                                            <p>
                                                {{ $hallItems->phone }}
                                            </p>
                                        </td>
                                        <td> {{ $hallItems->hall }}</td>
                                        <td>{{ $hallItems->date }}</td>
                                        <td> {{ $hallItems->time }}</td>
                                        <td>{{ $hallItems->table }}</td>
                                        <td> {{ $hallItems->description }}</td>
                                        <td>
                                            <a class="btn btn-info waves-effect waves-linght" href="">Accept</a>
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
                                          <a href="{{ route('hall_delete',$hallItems->id) }}" class="btn btn-danger">Delete</a>
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