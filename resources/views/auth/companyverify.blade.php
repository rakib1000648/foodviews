@extends('layouts.master_customer')

@section('page_title') {{ __('Company verifying') }} @endsection



@section('content')
@if ($message = Session::get('success'))
<br><br>
    <div class="row justify-content-center companyverifymain">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header display-4">{{ __('Thank You') }}</div>

                <div class="card-body">



              <div class="alert alert-info alert-block font-weight-bold">

                      <strong>{{ $message }}</strong>
              </div>



                </div>
            </div>
        </div>
    </div>

@else


<div class="h-100 companyverifymain">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-5">
                <div class="text-center">

                    <h1 class="error-text text-dark font-weight-bold display-1">404</h1>
                        <h4 class="mt-4"><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>
                        <p>You may have mistyped the address or the page may have moved.</p>


                </div>
            </div>
        </div>
    </div>
</div>



  @endif
@endsection
