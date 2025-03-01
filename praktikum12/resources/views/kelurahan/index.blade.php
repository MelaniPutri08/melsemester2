@include('admin.header')
@include('admin.sidebar')
<!-- resources/views/kelurahan/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Kelurahan</h1>
    <ul>
        @foreach ($list_kelurahan as $kelurahan)
            <li>{{ $kelurahan->nama }}</li>
        @endforeach
    </ul>
@endsection

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Kelurahan</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>kec_id</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kelurahan as $kelurahan)
                                <tr>
                                    <td>{{ $kelurahan->id }}</td>
                                    <td>{{ $kelurahan->nama }}</td>
                                    <td>{{ $kelurahan->kec_id }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="view_pasien.php?id=<?= $kelurahan['id'] ?>">View</a>
                                        <a class="btn btn-primary" href="form_pasien.php?idedit=<?= $kelurahan['id'] ?>">Edit</a>
                                        <a class="btn btn-primary" href="delete_pasien.php?iddel=<?= $kelurahan['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $kelurahan['nama'] ?>?')) {return false}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
