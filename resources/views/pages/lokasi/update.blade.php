<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('lokasi.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Tambah Lokasi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lokasi">Nama Lokasi</label>
                        <select name="nama_lokasi" id="lokasi" onchange="handleUnit()" class="form-control" required>
                            <option selected value="{{ $item->nama_lokasi }}">{{ $item->nama_lokasi }}</option>
                            @foreach ($list_nama_lokasi as $nama)
                                @if ($nama != $item->nama_lokasi)
                                    <option value="{{ $nama }}">{{ $nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Unit</label>
                        <select class="form-control" name="unit" required>
                            <option disabled style="font-weight: 700">KANTOR KORPORAT</option>
                            @foreach ($list_unit_kantor_korporat as $unit)
                                @if ($item->unit == $unit)
                                    <option selected value="{{ $unit }}">{{ $unit }}</option>
                                @else
                                    <option value="{{ $unit }}">{{ $unit }}</option>
                                @endif
                            @endforeach
                            <option disabled>==========================</option>
                            <option disabled style="font-weight: 700">UNIT BISNIS SERVICE</option>
                            @foreach ($list_unit_bisnis_service as $unit)
                                @if ($item->unit == $unit)
                                    <option selected value="{{ $unit }}">{{ $unit }}</option>
                                @else
                                    <option value="{{ $unit }}">{{ $unit }}</option>
                                @endif
                            @endforeach
                            <option disabled>==========================</option>
                            <option disabled style="font-weight: 700">UNIT BISNIS INSFRASTRUKTUR</option>
                            @foreach ($list_unit_bisnis_infrastruktur as $unit)
                                @if ($item->unit == $unit)
                                    <option selected value="{{ $unit }}">{{ $unit }}</option>
                                @else
                                    <option value="{{ $unit }}">{{ $unit }}</option>
                                @endif
                            @endforeach
                            <option disabled>==========================</option>
                            <option disabled style="font-weight: 700">UNIT BISNIS GTRANS</option>
                            @foreach ($list_unit_bisnis_gtrans as $unit)
                                @if ($item->unit == $unit)
                                    <option selected value="{{ $unit }}">{{ $unit }}</option>
                                @else
                                    <option value="{{ $unit }}">{{ $unit }}</option>
                                @endif
                            @endforeach
                            <option disabled>==========================</option>
                            <option disabled style="font-weight: 700">UNIT BISNIS BES</option>
                            @foreach ($list_unit_bisnis_bes as $unit)
                                @if ($item->unit == $unit)
                                    <option selected value="{{ $unit }}">{{ $unit }}</option>
                                @else
                                    <option value="{{ $unit }}">{{ $unit }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sublokasi">Sublokasi</label>
                        <input type="text" class="form-control" id="sublokasi" placeholder="Enter sublokasi"
                            name="sublokasi" value="{{ $item->sublokasi }}" required />
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
