<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('ap.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Update Aset - Access Point
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <select class="form-control" id="lokasi" name="idlok" required>
                            @foreach ($list_lokasi as $lokasi)
                                @if ($lokasi->id == $item->idlok)
                                    <option value="{{ $lokasi->id }}" selected>
                                        {{ $lokasi->nama_lokasi }},
                                        {{ $lokasi->unit }},
                                        {{ $lokasi->sublokasi }}
                                    </option>
                                @else
                                    <option value="{{ $lokasi->id }}">
                                        {{ $lokasi->nama_lokasi }},
                                        {{ $lokasi->unit }},
                                        {{ $lokasi->sublokasi }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select class="form-control" id="brand" name="idbrand" required>
                            @foreach ($list_brand as $brand)
                                @if ($brand->id == $item->idbrand)
                                    <option value="{{ $brand->id }}" selected>
                                        {{ $brand->nama_brand }}
                                        {{ $brand->tipe_brand }}
                                    </option>
                                @else
                                    <option value="{{ $brand->id }}">
                                        {{ $brand->nama_brand }}
                                        {{ $brand->tipe_brand }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis-ap">Jenis Access Point</label>
                        <select class="form-control" id="jenis-ap" name="jenis_ap" required>
                            @foreach ($list_jenis as $jenis)
                                @if ($jenis == $item->jenis_ap)
                                    <option value="{{ $jenis }}" selected>
                                        {{ $jenis }}
                                    </option>
                                @else
                                    <option value="{{ $jenis }}">
                                        {{ $jenis }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_port">Jumlah Port</label>
                        <input type="number" class="form-control" id="jumlah_port" placeholder="Enter jumlah port"
                            name="jumlah_port" value="{{ $item->jumlah_port }}" required />
                    </div>
                    <div class="form-group">
                        <label for="frekuensi">Frekuensi</label>
                        <select class="form-control" id="frekuensi" name="frekuensi" required>
                            <option value="" selected>-- pilih frekuensi --</option>
                            @foreach ($list_frekuensi as $frek)
                                @if ($frek == $item->frekuensi)
                                    <option value="{{ $frek }}" selected>
                                        {{ $frek }}
                                    </option>
                                @else
                                    <option value="{{ $frek }}">
                                        {{ $frek }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_inventaris">Tanggal Inventaris</label>
                        <input type="date" class="form-control" id="tgl_inventaris"
                            placeholder="Enter Tanggal Inventaris" name="tgl_inventaris"
                            value="{{ $item->tgl_inventaris }}" required />
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="Enter keterangan"
                            name="keterangan" value="{{ $item->keterangan }}" required />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-warning">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
