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
                                        {{ $switch->brand->nama_brand }}
                                        {{ $switch->brand->tipe_brand }},
                                        {{ $switch->lokasi->nama_lokasi }} -
                                        {{ $switch->lokasi->unit }} -
                                        {{ $switch->lokasi->sublokasi }}
                                    </option>
                                @else
                                    <option value="{{ $switch->id }}">
                                        {{ $switch->brand->nama_brand }}
                                        {{ $switch->brand->tipe_brand }},
                                        {{ $switch->lokasi->nama_lokasi }} -
                                        {{ $switch->lokasi->unit }} -
                                        {{ $switch->lokasi->sublokasi }}
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
                        <select name="status" id="status" class="form-control" required>
                            @foreach ($list_status as $jenis)
                                @if ($jenis == $item->status)
                                    <option value="{{ $jenis }}" selected>{{ $jenis }}</option>
                                @else
                                    <option value="{{ $jenis }}">{{ $jenis }}</option>
                                @endif
                            @endforeach
                        </select>
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
