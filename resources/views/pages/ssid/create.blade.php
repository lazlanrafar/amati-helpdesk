<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('ssid.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Create SSID
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama-ssid">Nama SSID</label>
                        <input type="text" class="form-control" id="nama-ssid" placeholder="Enter Nama SSID"
                            name="nama_ssid" required />
                    </div>
                    <div class="form-group">
                        <label for="pw-ssid">Password SSID</label>
                        <input type="text" class="form-control" id="pw-ssid" placeholder="Enter Password SSID"
                            name="pwd_ssid" required />
                    </div>
                    <div class="form-group">
                        <label for="jenis-ssid">Jenis SSID</label>
                        <input type="text" class="form-control" id="jenis-ssid" placeholder="Enter Jenis SSID"
                            name="jenis_ssid" required />
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <select class="form-control" id="lokasi" name="idlok" required>
                            <option value="" selected>
                                -- pilih Lokasi --
                            </option>
                            @foreach ($list_lokasi as $lokasi)
                                <option value="{{ $lokasi->id }}">
                                    {{ $lokasi->nama_lokasi }}, {{ $lokasi->unit }},
                                    {{ $lokasi->sublokasi }}
                                </option>
                            @endforeach
                        </select>
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
