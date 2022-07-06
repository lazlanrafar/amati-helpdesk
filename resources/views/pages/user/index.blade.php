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
                        <a
                            type="button"
                            class="btn btn-primary"
                            data-toggle="modal"
                            data-target="#formCreate"
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
                                            type="button"
                                            class="btn btn-danger"
                                            data-toggle="modal"
                                            data-target="#dialogDelete{{$item->id}}"
                                        >
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <div
                                            class="modal fade"
                                            id="dialogDelete{{$item->id}}"
                                            tabindex="-1"
                                            role="dialog"
                                            aria-labelledby="dialogDelete{{$item->id}}Label"
                                            aria-hidden="true"
                                        >
                                            <div
                                                class="modal-dialog"
                                                role="document"
                                            >
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button
                                                            type="button"
                                                            class="close"
                                                            data-dismiss="modal"
                                                            aria-label="Close"
                                                        >
                                                            <span
                                                                aria-hidden="true"
                                                                >&times;</span
                                                            >
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Konfirmasi Delete User :
                                                        {{$item->nama}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button
                                                            type="button"
                                                            class="btn btn-secondary"
                                                            data-dismiss="modal"
                                                        >
                                                            Close
                                                        </button>
                                                        <form
                                                            action="{{ route('user.destroy', $item->id) }}"
                                                            method="POST"
                                                            class="d-inline"
                                                        >
                                                            @csrf
                                                            @method('delete')
                                                            <button
                                                                type="submit"
                                                                class="btn btn-primary"
                                                            >
                                                                Konfirmasi
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a
                                            type="button"
                                            class="btn btn-warning"
                                            data-toggle="modal"
                                            data-target="#formUpdate{{$item->id}}"
                                        >
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @include('pages.user.update')
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
