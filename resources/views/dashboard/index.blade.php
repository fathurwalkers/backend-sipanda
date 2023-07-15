@extends('layouts.dashboard-layouts')


@section('header-content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <h5 class="my-auto text-dark">Index Page - Dashboard</h5>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">

            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="container mt-2">

        <div class="row">

            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Voting</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">234</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Data Pengguna</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">5932</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">DPT</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">14</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
