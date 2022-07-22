<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('brand.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Update Brand
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_brand">Nama Brand</label>
                        <input type="text" class="form-control" id="nama_brand" placeholder="Enter Nama Brand"
                            name="nama_brand" value="{{ $item->nama_brand }}" required />
                    </div>
                    <div class="form-group">
                        <label for="tipe_brand">Tipe Brand</label>
                        <input type="text" class="form-control" id="tipe_brand" placeholder="Enter Tipe Brand"
                            name="tipe_brand" value="{{ $item->tipe_brand }}" required />
                    </div>
                    <div class="form-group">
                        <label for="jenis_brand">Jenis Brand</label>
                        <select name="jenis_brand" class="form-control" id="jenis_brand">
                            <option selected value="{{ $item->jenis_brand }}">{{ $item->jenis_brand }}</option>
                            @foreach ($list_jenis as $jenis)
                                @if ($jenis != $item->jenis_brand)
                                    <option value="{{ $jenis }}">{{ $jenis }}</option>
                                @endif
                            @endforeach
                        </select>
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
