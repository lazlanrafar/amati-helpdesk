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
                        <label for="jenis_history">Jenis History</label>
                        <input type="text" class="form-control" id="jenis_history" placeholder="Enter Jenis History"
                            name="jenis_history" required />
                    </div>
                    <div class="form-group">
                        <label for="akses-select">Perangkat</label>
                        <select class="form-control" id="akses-select" name="idprkt" required>
                            <option selected value="">-- Pilih perangkat --</option>
                            <option disabled style="font-weight: 700">HARDWARE</option>
                            @foreach ($list_hardware as $h)
                                <option value="{{ $h->idhardware }}">
                                    {{ $h->jenis_hardware }},
                                    {{ $h->brand->nama_brand }}
                                    {{ $h->brand->tipe_brand }}
                                </option>
                            @endforeach
                            <option disabled style="font-weight: 700">ACCESS POINT</option>
                            @foreach ($list_ap as $ap)
                                <option value="{{ $ap->idap }}">
                                    {{ $ap->jenis_ap }},
                                    {{ $ap->brand->nama_brand }}
                                    {{ $ap->brand->tipe_brand }},
                                    {{ $ap->frekuensi }}
                                </option>
                            @endforeach
                            <option disabled style="font-weight: 700">SWITCH</option>
                            @foreach ($list_switch as $s)
                                <option value="{{ $s->idswitch }}">
                                    {{ $s->jenis_switch }},
                                    {{ $s->brand->nama_brand }}
                                    {{ $s->brand->tipe_brand }},
                                    {{ $s->jumlah_port }}
                                    {{ $s->jenis_port }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kerusakan">Kerusakan</label>
                        <input type="text" class="form-control" id="kerusakan" placeholder="Enter Kerusakan"
                            name="kerusakan" required />
                    </div>
                    <div class="form-group">
                        <label for="perbaikan">Perbaikan</label>
                        <input type="text" class="form-control" id="perbaikan" placeholder="Enter Perbaikan"
                            name="perbaikan" required />
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal"
                            name="tanggal" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
