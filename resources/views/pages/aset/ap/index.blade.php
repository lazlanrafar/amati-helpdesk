@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Aset - Access Point</h1>
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
                            <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#formCreate"><i
                                    class="fa fa-plus"></i> Tambah</a>
                            @include('pages.aset.ap.create')
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis</th>
                                        <th>Brand</th>
                                        <th>Jumlah Port</th>
                                        <th>Frekuensi</th>
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
                                            <td>{{ $item->idap }}</td>
                                            <td>{{ $item->jenis_ap }}</td>
                                            <td>
                                                {{ $item->brand->nama_brand }},
                                                {{ $item->brand->tipe_brand }}
                                            </td>
                                            <td>{{ $item->jumlah_port }}</td>
                                            <td>{{ $item->frekuensi }}</td>
                                            <td>{{ $item->tgl_inventaris }}</td>
                                            <td>
                                                {{ $item->lokasi->nama_lokasi }},
                                                {{ $item->lokasi->unit }},
                                                {{ $item->lokasi->sublokasi }}
                                            </td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>
                                                <form id="formDelete{{ $item->id }}"
                                                    action="{{ route('ap.destroy', $item->id) }}" method="POST"
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
                                                $dataqrcode = $item->idap . ', Jenis Access Point, ' . $item->brand->nama_brand . ' ' . $item->brand->tipe_brand . ', Tanggal Inventaris :' . $item->tgl_inventaris . ', Lokasi :' . $item->lokasi->nama_lokasi . '/' . $item->lokasi->unit . '/' . $item->lokasi->sublokasi . ', Keterangan :' . $item->keterangan;
                                                ?>
                                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#modalQrCode{{ $item->id }}">
                                                    <i class="fa fa-qrcode"></i>
                                                </a>
                                                @include('includes.qrcode', [
                                                    'title' => 'QrCode Aset - Access Point',
                                                    'filename' => $item->idap,
                                                ])
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @include('pages.aset.ap.update')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
