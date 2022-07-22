<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('switch.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Tambah Aset - Switch
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="lokasi">Lokasi</label>
                            <select class="form-control" id="lokasi" name="idlok" required>
                                <option value="" selected>-- pilih lokasi --</option>
                                @foreach ($list_lokasi as $lokasi)
                                    <option value="{{ $lokasi->id }}">
                                        {{ $lokasi->nama_lokasi }},
                                        {{ $lokasi->unit }},
                                        {{ $lokasi->sublokasi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="brand">Brand</label>
                            <select class="form-control" id="brand" name="idbrand" required>
                                <option value="" selected>-- pilih brand --</option>
                                @foreach ($list_brand as $brand)
                                    <option value="{{ $brand->id }}">
                                        {{ $brand->nama_brand }}
                                        {{ $brand->tipe_brand }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="jenis-switch">Jenis Switch</label>
                            <select class="form-control" id="jenis-switch" name="jenis_switch" required>
                                <option value="" selected>-- pilih jenis --</option>
                                @foreach ($list_jenis as $jenis)
                                    <option value="{{ $jenis }}">
                                        {{ $jenis }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="jumlah_port">Jumlah Port</label>
                            <input type="number" class="form-control" id="jumlah_port" placeholder="Enter jumlah port"
                                name="jumlah_port" required />
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="jenis_port">Jenis Port</label>
                            <select class="form-control" id="jenis_port" name="jenis_port" required>
                                <option value="" selected>-- pilih jenis port --</option>
                                @foreach ($list_jenis_port as $jenis)
                                    <option value="{{ $jenis }}">
                                        {{ $jenis }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="tgl_inventaris">Tanggal Inventaris</label>
                            <input type="date" class="form-control" id="tgl_inventaris"
                                placeholder="Enter Tanggal Inventaris" name="tgl_inventaris" required />
                        </div>
                        <div class="form-group col-12">
                            <label for="keterangan">Keterangan</label>
                            <textarea type="text" class="form-control" id="keterangan" placeholder="Enter keterangan" name="keterangan" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-warning">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
