@extends('admin.layouts.app')
@section('title')
    Data CCTV
@endsection
@section('breadcumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/dashboard">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data CCTV</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Data CCTV</h6>
    </nav>
@endsection
@section('content')
    <div class="row m-auto">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Data
                            </button>
                        </div>
                        <div class="col">
                            <form action="/CCTV" method="get">
                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="search" placeholder="Type here...">
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
                @if (session()->has('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>{{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif


                <div class="card-body px-2 py-2 pt-0 pb-2">
                    <div class="table-responsive p-2" style="max-height: 400px !important">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IP CCTV
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama Device</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tipe</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Lokasi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                       Username</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Password</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tanggal Pembelian</th>
                                    {{--  <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>  --}}
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>


                                    <td>
                                      <div class="d-flex px-4">
                                        <div>

                                        </div>
                                        <div class="my-auto">
                                          <h6 class="mb-0 text-xs">{{$loop->iteration}}</h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex ">

                                        <div class="my-auto">
                                          <h6 class="mb-0 text-xs">{{$item->ip_cctv}}</h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0">{{$item->device_name}}</p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0">{{$item->tipe}}</p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0">{{$item->lokasi}}</p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0">{{$item->username}}</p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0">{{$item->password}}</p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0">{{$item->tgl_pembelian}}</p>
                                    </td>
                                    <td class="align-middle text-center  justify-content-center d-flex">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm bg-gradient-info me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal1{{$item->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                            </svg>
                                        </button>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm bg-gradient-danger me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal2{{$item->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                        <div class="modal fade" id="exampleModal1{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            @include('admin.kategori_barang.CCTV.edit')
                                        <div class="modal fade" id="exampleModal2{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            @include('admin.kategori_barang.CCTV.hapus')
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/tambahcctv" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">IP CCTV</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="ip_cctv" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Device</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="device_name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tipe</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="tipe" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Lokasi</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="lokasi" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Pembelian</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="tgl_pembelian" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn bg-gradient-success">Simpan Data</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
