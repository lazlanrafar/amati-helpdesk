<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('link.store') }}" method="POST">
                @csrf
                <input type="hidden" name="uid" value="{{ request()->session()->get('user')['id'] }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Tambah Link
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="idswitch">Switch</label>
                        <select name="idswitch" class="form-control" id="idswitch" required>
                            <option selected value="">-- pilih Switch --</option>
                            @foreach ($list_switch as $switch)
                                <option value="{{ $switch->id }}">
                                    {{ $switch->jenis_switch }},
                                    {{ $switch->nama_brand }}
                                    {{ $switch->tipe_brand }},
                                    {{ $switch->jumlah_port }}
                                    {{ $switch->jenis_port }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="port">Port</label>
                        <input type="number" class="form-control" id="port" placeholder="Enter Port"
                            name="port" required />
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" placeholder="Enter Status"
                            name="status" required />
                    </div>
                    <div class="form-group">
                        <label for="arah">Arah</label>
                        <input type="text" class="form-control" id="arah" placeholder="Enter Arah"
                            name="arah" required />
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="Enter Keterangan"
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
