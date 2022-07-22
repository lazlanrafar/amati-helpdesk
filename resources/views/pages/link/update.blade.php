<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('link.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Update Link
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
                                @if ($switch->id == $item->idswitch)
                                    <option value="{{ $switch->id }}" selected>
                                        {{ $switch->jenis_switch }},
                                        {{ $switch->nama_brand }}
                                        {{ $switch->tipe_brand }},
                                        {{ $switch->jumlah_port }}
                                        {{ $switch->jenis_port }}
                                    </option>
                                @else
                                    <option value="{{ $switch->id }}">
                                        {{ $switch->jenis_switch }},
                                        {{ $switch->nama_brand }}
                                        {{ $switch->tipe_brand }},
                                        {{ $switch->jumlah_port }}
                                        {{ $switch->jenis_port }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="port">Port</label>
                        <input type="number" class="form-control" id="port" placeholder="Enter Port"
                            name="port" required value="{{ $item->port }}" />
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" placeholder="Enter Status"
                            name="status" required value="{{ $item->status }}" />
                    </div>
                    <div class="form-group">
                        <label for="arah">Arah</label>
                        <input type="text" class="form-control" id="arah" placeholder="Enter Arah"
                            name="arah" required value="{{ $item->arah }}" />
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="Enter Keterangan"
                            name="keterangan" required value="{{ $item->keterangan }}" />
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
