@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-12">
                                <div>
                                    <div class="card">
                                        <div class="card-header border-0">
                                            <div class="row g-4">
                                                <div class="col-sm-auto">
                                                    <!-- Grids in modals -->
                                                    
                                                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-add-line align-bottom me-1"></i>Add Seat Alocation
                                                    </button>
                                                    <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalgridLabel">Add New Trip</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <form action="{{route('seats.store')}}" method="POST" id="createproduct-form" autocomplete="off" class="needs-validation">
                                                                        @csrf

                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label for="lastName" class="form-label">Trip Name</label>
                                                                                    <select name="trip_id" class="form-select" required aria-label="select example">
                                                                                        <option >Select the Trip</option>
                                                                                        @foreach($trips as $trip)
                                                                                            <option  value="{{$trip->id}}">{{$trip->transection_no}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label for="lastName" class="form-label">Seat Number</label>
                                                                                    <input type="number" name="seat_number" class="form-control" >
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label for="lastName" class="form-label">Booked Is</label>
                                                                                    <select name="is_booked" class="form-select" required aria-label="select example">
                                                                                        <option >Select the book is</option>
                                                                                        <option  value="0">False</option>
                                                                                        <option  value="1">True</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12">
                                                                                <div class="hstack gap-2 justify-content-end">
                                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="d-flex justify-content-sm-end">
                                                        <div class="search-box ms-2">
                                                            <input type="text" class="form-control" id="searchProductList" placeholder="Search Products...">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all" role="tab">
                                                                All <span class="badge bg-secondary align-middle rounded-pill ms-1"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-auto">
                                                    <div id="selection-element">
                                                        <div class="my-n1 d-flex align-items-center text-muted">
                                                            Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-nowrap align-middle table-borderless mb-0">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col">Sl</th>
                                                    <th scope="col">Trip NO</th>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Seat Number</th>
                                                    <th scope="col">Is Booked</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($seatAlocations as $key=>$seatAlocation)
                                                <tr>
                                                    <td>{{$seatAlocation->id}}</td>
                                                    <td>{{$seatAlocation->trip->transection_no }}</td>
                                                    <td>{{$seatAlocation->user->name ?? 'N/A'}}</td>
                                                    <td>{{$seatAlocation->seat_number ?? 'N/A'}}</td>

                                                    @if($seatAlocation->is_booked == true)
                                                    <td>
                                                        <button class="btn btn-sm btn-success remove-item-btn" data-bs-target="#deleteRecordModal">Booked</button>
                                                    </td>
                                                    @else
                                                    <td>
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-target="#deleteRecordModal">Not Booked</button>
                                                    </td>
                                                        
                                                    @endif
                                                    <!-- <td class="d-flex gap-2 text-end">

                                                        <div class="edit">
                                                            <a href="" class="btn btn-sm btn-primary edit-item-btn">Edit</a>
                                                        </div>
                                                        <div class="remove">
                                                            <button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                        </div>
                                                    </td> -->
                                                </tr>
                                                
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2" class="p-4 d-felx justify-content-center"">
                                                        {{ $seatAlocations->links('pagination::bootstrap-4') }} 
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        
                                        <!-- Modal -->
                                        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mt-2 text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#25a0e2,secondary:#00bd9d" style="width:100px;height:100px"></lord-icon>
                                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                <h4>Are you sure ?</h4>
                                                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this record ?</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn w-sm btn-primary" onclick="event.preventDefault(); document.getElementById('delete-form-').submit();">Yes, Delete It!</button>
                                                        </div>

                                                        <form id="" action="" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal -->
                                        <!-- end card header -->

                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
            </div>
        </div>
    </div>

    
@endsection