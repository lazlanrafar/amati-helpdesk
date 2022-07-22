@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Aset - Hardware</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('includes.error-card')
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"><i
                                    class="fa fa-plus"></i> Tambah</a>
                            @include('pages.aset.hardware.create')
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis</th>
                                        <th>Brand</th>
                                        <th>Koneksi</th>
                                        <th>Komputer Name / IP</th>
                                        <th>Sharing</th>
                                        <th>Tgl Inventaris</th>
                                        <th>Lokasi</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->idhardware }}</td>
                                            <td>{{ $item->jenis_hardware }}</td>
                                            <td>
                                                {{ $item->brand->nama_brand }}, {{ $item->brand->tipe_brand }}
                                            </td>
                                            <td>{{ $item->koneksi }}</td>
                                            <td>
                                                @if ($item->computer_name && $item->ipaddress)
                                                    {{ $item->computer_name }} / {{ $item->ipaddress }}
                                                @elseif ($item->ipaddress)
                                                    {{ $item->ipaddress }}
                                                @elseif ($item->computer_name)
                                                    {{ $item->computer_name }}
                                                @endif
                                            </td>
                                            <td>{{ $item->sharing }}</td>
                                            <td>{{ $item->tgl_inventaris }}</td>
                                            <td>
                                                {{ $item->lokasi->nama_lokasi }},
                                                {{ $item->lokasi->unit }},
                                                {{ $item->lokasi->sublokasi }}
                                            </td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>
                                                <form id="formDelete{{ $item->id }}"
                                                    action="{{ route('hardware.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <a type="button" class="btn btn-danger"
                                                        onclick="handleDelete({{ $item->id }})">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </form>

                                                <script>
                                                    function handleDelete(id) {
                                                        Swal.fire({
                                                            title: 'Apakah kamu yakin?',
                                                            text: "kamu akan menghapus data ini!",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Ya, hapus!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                document.getElementById('formDelete' + id).submit();
                                                            }
                                                        })
                                                    }
                                                </script>
                                                <a type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#formUpdate{{ $item->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <?php
                                                $dataqrcode = $item->idhardware . '-' . $item->jenis_hardware . '-' . $item->brand->nama_brand . '-' . $item->brand->tipe_brand . '-' . $item->koneksi . '-' . $item->computer_name . '-' . $item->ipaddress . '-' . $item->sharing . '-' . $item->tgl_inventaris . '-' . $item->lokasi->nama_lokasi . '-' . $item->lokasi->unit . '-' . $item->lokasi->sublokasi . '-' . $item->keterangan;
                                                ?>
                                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#modalQrCode{{ $item->id }}">
                                                    <i class="fa fa-qrcode"></i>
                                                </a>
                                                @include('includes.qrcode', [
                                                    'title' => 'QrCode Aset - Hardware',
                                                    'filename' => $item->idhardware,
                                                ])
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @include('pages.aset.hardware.update')
                                    @endforeach
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
