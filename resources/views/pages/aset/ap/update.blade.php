<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('ap.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Tambah Aset - Access Point
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <select class="form-control" id="lokasi" name="idlok" required>
                            <option value="" selected>-- pilih lokasi --</option>
                            @foreach ($list_lokasi as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->nama_lokasi }},
                                    {{ $item->unit }},
                                    {{ $item->sublokasi }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select class="form-control" id="brand" name="idbrand" required>
                            <option value="" selected>-- pilih brand --</option>
                            @foreach ($list_brand as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->nama_brand }}
                                    {{ $item->tipe_brand }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis-ap">Jenis Access Point</label>
                        <select class="form-control" id="jenis-ap" name="jenis_ap" required>
                            <option value="" selected>-- pilih jenis --</option>
                            @foreach ($list_jenis as $jenis)
                                <option value="{{ $jenis }}">
                                    {{ $jenis }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_port">Jumlah Port</label>
                        <input type="number" class="form-control" id="jumlah_port" placeholder="Enter jumlah port"
                            name="jumlah_port" required />
                    </div>
                    <div class="form-group">
                        <label for="frekuensi">Frekuensi</label>
                        <select class="form-control" id="frekuensi" name="frekuensi" required>
                            <option value="" selected>-- pilih frekuensi --</option>
                            @foreach ($list_frekuensi as $jenis)
                                <option value="{{ $jenis }}">
                                    {{ $jenis }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_inventaris">Tanggal Inventaris</label>
                        <input type="date" class="form-control" id="tgl_inventaris"
                            placeholder="Enter Tanggal Inventaris" name="tgl_inventaris" required />
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="Enter keterangan"
                            name="keterangan" required />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
