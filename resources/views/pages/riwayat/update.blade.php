<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('riwayat.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Update Riwayat
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jenis_history">Jenis History</label>
                        <input type="text" class="form-control" id="jenis_history" placeholder="Enter Jenis History"
                            name="jenis_history" value="{{ $item->jenis_history }}" required />
                    </div>
                    <div class="form-group">
                        <label for="akses-select">Perangkat</label>
                        <select class="form-control" id="akses-select" name="idprkt" required>
                            <option selected value="">-- Pilih perangkat --</option>
                            <option disabled style="font-weight: 700">HARDWARE</option>
                            @foreach ($list_hardware as $h)
                                @if ($h->id == $item->idprkt)
                                    <option selected value="{{ $h->id }}">
                                        {{ $h->jenis_hardware }},
                                        {{ $h->nama_brand }}
                                        {{ $h->tipe_brand }}
                                    </option>
                                @else
                                    <option value="{{ $h->id }}">
                                        {{ $h->jenis_hardware }},
                                        {{ $h->nama_brand }}
                                        {{ $h->tipe_brand }}
                                    </option>
                                @endif
                            @endforeach
                            <option disabled style="font-weight: 700">ACCESS POINT</option>
                            @foreach ($list_ap as $ap)
                                @if ($ap->id == $item->idprkt)
                                    <option selected value="{{ $ap->id }}">
                                        {{ $ap->nama_ap }},
                                        {{ $ap->nama_brand }}
                                        {{ $ap->tipe_brand }}
                                    </option>
                                @else
                                    <option value="{{ $ap->id }}">
                                        {{ $ap->jenis_ap }},
                                        {{ $ap->nama_brand }}
                                        {{ $ap->tipe_brand }},
                                        {{ $ap->frekuensi }}
                                    </option>
                                @endif
                            @endforeach
                            <option disabled style="font-weight: 700">SWITCH</option>
                            @foreach ($list_switch as $s)
                                @if ($s->id == $item->idprkt)
                                    <option selected value="{{ $s->id }}">
                                        {{ $s->nama_switch }},
                                        {{ $s->nama_brand }}
                                        {{ $s->tipe_brand }}
                                    </option>
                                @else
                                    <option value="{{ $s->id }}">
                                        {{ $s->jenis_switch }},
                                        {{ $s->nama_brand }}
                                        {{ $s->tipe_brand }},
                                        {{ $s->jumlah_port }}
                                        {{ $s->jenis_port }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kerusakan">Kerusakan</label>
                        <input type="text" class="form-control" id="kerusakan" placeholder="Enter Kerusakan"
                            name="kerusakan" value="{{ $item->kerusakan }}" required />
                    </div>
                    <div class="form-group">
                        <label for="perbaikan">Perbaikan</label>
                        <input type="text" class="form-control" id="perbaikan" placeholder="Enter Perbaikan"
                            name="perbaikan" value="{{ $item->perbaikan }}" required />
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal"
                            name="tanggal" value="{{ $item->tanggal }}" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
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
