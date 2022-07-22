<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('lokasi.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Tambah Lokasi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lokasi">Nama Lokasi</label>
                        <select name="nama_lokasi" id="lokasi" onchange="handleUnit()" class="form-control" required>
                            <option value="">-- Pilih Lokasi --</option>
                            @foreach ($list_nama_lokasi as $nama)
                                <option value="{{ $nama }}">{{ $nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Unit</label>
                        <input type="text" class="form-control" id="unit" placeholder="Enter unit"
                            name="unit" required />
                    </div>

                    <div class="form-group">
                        <label for="sublokasi">Sublokasi</label>
                        <input type="text" class="form-control" id="sublokasi" placeholder="Enter sublokasi"
                            name="sublokasi" required />
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
