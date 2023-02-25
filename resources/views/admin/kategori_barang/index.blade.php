@extends('admin.layouts.app')
@section('title')
Dashboard
@endsection
@section('breadcumb')
<nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                            href="/dashboard">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Kategori Barang</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Kategori Barang</h6>
            </nav>
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/UMPC">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">UMPC</p>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/CCTV">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">CCTV</p>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/WIFI">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">WIFI</p>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/WIRELESS">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">WIRELESS</p>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>




    </div>




</div>
@endsection
