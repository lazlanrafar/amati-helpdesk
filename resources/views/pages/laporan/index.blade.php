@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aset</th>
                                        <th>Brand</th>
                                        <th>Jenis</th>
                                        <th>Tgl Inventaris</th>
                                        <th>Lokasi</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($list_ap as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>Access Point</td>
                                            <td>
                                                {{ $item->nama_brand }}, {{ $item->tipe_brand }}
                                            </td>
                                            <td>{{ $item->jenis_ap }}</td>
                                            <td>{{ $item->tgl_inventaris }}</td>
                                            <td>
                                                {{ $item->nama_lokasi }}, {{ $item->unit }}, {{ $item->sublokasi }}
                                            </td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                    @foreach ($list_hardware as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>Hardware</td>
                                            <td>
                                                {{ $item->nama_brand }}, {{ $item->tipe_brand }}
                                            </td>
                                            <td>{{ $item->jenis_hardware }}</td>
                                            <td>{{ $item->tgl_inventaris }}</td>
                                            <td>
                                                {{ $item->nama_lokasi }}, {{ $item->unit }}, {{ $item->sublokasi }}
                                            </td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                    @foreach ($list_switch as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>Switch</td>
                                            <td>
                                                {{ $item->nama_brand }}, {{ $item->tipe_brand }}
                                            </td>
                                            <td>{{ $item->jenis_switch }}</td>
                                            <td>{{ $item->tgl_inventaris }}</td>
                                            <td>
                                                {{ $item->nama_lokasi }}, {{ $item->unit }}, {{ $item->sublokasi }}
                                            </td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                        <?php $i++; ?>
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
