<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('ssid.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
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
                            value="{{ $item->nama_ssid }}" name="nama_ssid" required />
                    </div>
                    <div class="form-group">
                        <label for="pw-ssid">Password SSID</label>
                        <input type="text" class="form-control" id="pw-ssid" placeholder="Enter Password SSID"
                            value="{{ $item->pwd_ssid }}" name="pwd_ssid" required />
                    </div>
                    <div class="form-group">
                        <label for="jenis-ssid">Jenis SSID</label>
                        <input type="text" class="form-control" id="jenis-ssid" placeholder="Enter Jenis SSID"
                            value="{{ $item->jenis_ssid }}" name="jenis_ssid" required />
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="3" required>{{ $item->keterangan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <select class="form-control" id="lokasi" name="idlok" required>
                            <option selected value="{{ $item->idlok }}">{{ $item->nama_lokasi }},
                                {{ $item->unit }},
                                {{ $item->sublokasi }}</option>
                            @foreach ($list_lokasi as $lokasi)
                                @if ($lokasi->id != $item->idlok)
                                    <option value="{{ $lokasi->id }}">
                                        {{ $lokasi->nama_lokasi }}, {{ $lokasi->unit }},
                                        {{ $lokasi->sublokasi }}
                                    </option>
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
