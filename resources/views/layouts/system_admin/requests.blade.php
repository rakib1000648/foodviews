@extends('layouts.master_company')

@section('page_title') Dashboard @endsection





@section('content')
@if(Auth::user()->hasAnyRole(['SystemAdmin']))

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="breadcrumb-range-picker">
                <span><i class="icon-calender"></i></span>
                <span class="ml-1">August 08, 2017 - August 08, 2017</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-4">
  <div class="col-xl-3 col-lg-4">
    <h2 class="page-heading">Hi,Welcome Back!</h2>
    <p class="mb-0">Your restaurent admin template</p>
            </div>




        </div>



            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">New company requests</h4>
                        <div class="table-responsive">
                            <table class="table verticle-middle table-responsive-lg mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Domain</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">City</th>
                                        <th scope="col">address</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">T & C</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($allinfo AS $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->domain}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->phone}}</td>
                                        <td>{{$data->city_name}}</td>
                                        <td>{{$data->address}}</td>
                                        <td>{{$data->category_name}}</td>
                                        <td>
                                        @if($data->tc=="1")
                                          Agreed
                                        @else
                                          Disagreed
                                        @endif
                                        </td>

                                        <td>{{$data->created_at}}</td>

                                        <td>
                                            <span>
                                              <a class="btn btn-primary btn-sm mr-1" href="{{url('/systemadmin/requests/accept',$data->id)}}" role="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Accept"><strong><i class="fas fa-check-circle"></i></strong></a>



                                              <a class="btn btn-danger btn-sm ml-1" href="#" role="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><strong><i class="fas fa-times-circle"></i></strong></a>


                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endif
@endsection
