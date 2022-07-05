@extends('layouts.app') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
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
                    <!-- <div class="card-header">
                        <h3 class="card-title">
                            DataTable with default features
                        </h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"
                            ><i class="fa fa-plus"></i> Tambah</a
                        >
                        @include('pages.user.create')
                        <table
                            id="defaultTable"
                            class="table table-bordered table-striped"
                        >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>UID</th>
                                    <th>Email</th>
                                    <th>Akses</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->uid }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->akses }}</td>
                                    <td>
                                        <a
                                            href="{{ url('maintenance/delete/'.$item->id) }}"
                                            class="btn btn-danger"
                                        >
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <a
                                            href="{{ url('maintenance/detail/'.$item->id) }}"
                                            class="btn btn-primary"
                                        >
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">
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
