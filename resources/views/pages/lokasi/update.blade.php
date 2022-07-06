<!-- Modal -->
<div
    class="modal fade"
    id="formUpdate{{$item->id}}"
    tabindex="-1"
    role="dialog"
    aria-labelledby="formUpdate{{$item->id}}Label"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('lokasi.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{$item->id}}Label">
                        Tambah Lokasi
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lokasi">Nama Lokasi</label>
                        <input
                            type="text"
                            class="form-control"
                            id="lokasi"
                            placeholder="Enter Lokasi"
                            name="nama_lokasi"
                            value="{{ $item->nama_lokasi }}"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="unit">Unit</label>
                        <input
                            type="text"
                            class="form-control"
                            id="unit"
                            placeholder="Enter Unit"
                            name="unit"
                            value="{{ $item->unit }}"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="sublokasi">Sublokasi</label>
                        <input
                            type="text"
                            class="form-control"
                            id="sublokasi"
                            placeholder="Enter sublokasi"
                            name="sublokasi"
                            value="{{ $item->sublokasi }}"
                            required
                        />
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
