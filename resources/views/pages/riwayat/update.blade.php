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
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal"
                            name="tanggal" value="{{ $item->tanggal }}" required />
                    </div>
                    <div class="form-group">
                        <label for="jenis_history">Jenis History</label>
                        <select name="jenis_history" id="jenis_history" required class="form-control">
                            @foreach ($list_jenis_history as $jenis)
                                <option value="{{ $jenis }}"
                                    {{ $jenis == $item->jenis_history ? 'selected' : '' }}>
                                    {{ $jenis }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="akses-select">Perangkat</label>
                        <select class="form-control" id="akses-select" name="idprkt" required>
                            <option selected value="">-- Pilih perangkat --</option>
                            <option disabled style="font-weight: 700">HARDWARE</option>
                            @foreach ($list_hardware as $h)
                                @if (strval($h->idhardware) == strval($item->idprkt))
                                    <option selected value="{{ $h->idhardware }}">
                                        {{ $h->idhardware }},
                                        {{ $h->brand->nama_brand }}
                                        {{ $h->brand->tipe_brand }},
                                        {{ $h->lokasi->unit }} -
                                        {{ $h->lokasi->sublokasi }}
                                    </option>
                                @else
                                    <option value="{{ $h->idhardware }}">
                                        {{ $h->idhardware }},
                                        {{ $h->brand->nama_brand }}
                                        {{ $h->brand->tipe_brand }},
                                        {{ $h->lokasi->unit }} -
                                        {{ $h->lokasi->sublokasi }}
                                    </option>
                                @endif
                            @endforeach
                            <option disabled style="font-weight: 700">ACCESS POINT</option>
                            @foreach ($list_ap as $ap)
                                @if ($ap->idap == $item->idprkt)
                                    <option selected value="{{ $ap->idap }}">
                                        {{ $ap->idap }},
                                        {{ $ap->brand->nama_brand }}
                                        {{ $ap->brand->tipe_brand }},
                                        {{ $ap->lokasi->unit }} -
                                        {{ $ap->lokasi->sublokasi }}
                                    </option>
                                @else
                                    <option value="{{ $ap->idap }}">
                                        {{ $ap->idap }},
                                        {{ $ap->brand->nama_brand }}
                                        {{ $ap->brand->tipe_brand }},
                                        {{ $ap->lokasi->unit }} -
                                        {{ $ap->lokasi->sublokasi }}
                                    </option>
                                @endif
                            @endforeach
                            <option disabled style="font-weight: 700">SWITCH</option>
                            @foreach ($list_switch as $s)
                                @if ($s->idswitch == $item->idprkt)
                                    <option selected value="{{ $s->idswitch }}">
                                        {{ $s->idswitch }},
                                        {{ $s->brand->nama_brand }}
                                        {{ $s->brand->tipe_brand }},
                                        {{ $s->lokasi->unit }} -
                                        {{ $s->lokasi->sublokasi }}
                                    </option>
                                @else
                                    <option value="{{ $s->idswitch }}">
                                        {{ $s->idswitch }},
                                        {{ $s->brand->nama_brand }}
                                        {{ $s->brand->tipe_brand }},
                                        {{ $s->lokasi->unit }} -
                                        {{ $s->lokasi->sublokasi }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kerusakan">Isu</label>
                        <textarea type="text" required class="form-control" id="kerusakan" placeholder="Enter Isu" name="kerusakan" required>{{ $item->kerusakan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="perbaikan">Troubleshoot</label>
                        <textarea type="text" class="form-control" id="perbaikan" placeholder="Enter Troubleshoot" name="perbaikan" required>{{ $item->perbaikan }}</textarea>
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
