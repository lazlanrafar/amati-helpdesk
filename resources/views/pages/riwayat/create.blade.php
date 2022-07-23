<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('riwayat.store') }}" method="POST">
                @csrf
                <input type="hidden" name="uid" value="{{ request()->session()->get('user')['id'] }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Create Riwayat
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal"
                            name="tanggal" required />
                    </div>
                    <div class="form-group">
                        <label for="jenis_history">Jenis History</label>
                        <select name="jenis_history" id="jenis_history" required class="form-control">
                            <option value="" selected>-- Pilih Jenis History --</option>
                            @foreach ($list_jenis_history as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="akses-select">Perangkat</label>
                        <select class="form-control" id="akses-select" name="idprkt" required>
                            <option selected value="">-- Pilih perangkat --</option>
                            <option disabled style="font-weight: 700">HARDWARE</option>
                            @foreach ($list_hardware as $h)
                                <option value="{{ $h->idhardware }}">
                                    {{ $h->idhardware }},
                                    {{ $h->brand->nama_brand }}
                                    {{ $h->brand->tipe_brand }},
                                    {{ $h->lokasi->unit }} -
                                    {{ $h->lokasi->sublokasi }}
                                </option>
                            @endforeach
                            <option disabled style="font-weight: 700">ACCESS POINT</option>
                            @foreach ($list_ap as $ap)
                                <option value="{{ $ap->idap }}">
                                    {{ $ap->idap }},
                                    {{ $ap->brand->nama_brand }}
                                    {{ $ap->brand->tipe_brand }},
                                    {{ $ap->lokasi->unit }} -
                                    {{ $ap->lokasi->sublokasi }}
                                </option>
                            @endforeach
                            <option disabled style="font-weight: 700">SWITCH</option>
                            @foreach ($list_switch as $s)
                                <option value="{{ $s->idswitch }}">
                                    {{ $s->idswitch }},
                                    {{ $s->brand->nama_brand }}
                                    {{ $s->brand->tipe_brand }},
                                    {{ $s->lokasi->unit }} -
                                    {{ $s->lokasi->sublokasi }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kerusakan">Isu</label>
                        <textarea type="text" required class="form-control" id="kerusakan" placeholder="Enter Isu" name="kerusakan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="perbaikan">Troubleshoot</label>
                        <textarea type="text" class="form-control" id="perbaikan" placeholder="Enter Troubleshoot" name="perbaikan" required></textarea>
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
