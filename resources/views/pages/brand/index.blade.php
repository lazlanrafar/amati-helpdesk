@extends('layouts.app') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Brand</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a
                            type="button"
                            class="btn btn-primary"
                            data-toggle="modal"
                            data-target="#formCreate"
                            ><i class="fa fa-plus"></i> Tambah</a
                        >
                        @include('pages.brand.create')
                        <table
                            id="defaultTable"
                            class="table table-bordered table-striped"
                        >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Brand</th>
                                    <th>Tipe Brand</th>
                                    <th>Jenis Brand</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->nama_brand }}</td>
                                    <td>{{ $item->tipe_brand }}</td>
                                    <td>{{ $item->jenis_brand }}</td>
                                    <td></td>
                                </tr>
                                <?php $i++ ?>
                                @include('pages.lokasi.update') @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
