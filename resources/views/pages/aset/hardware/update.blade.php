<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('hardware.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Update Aset - Hardware
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="lokasi">Lokasi</label>
                            <select class="form-control" id="lokasi" name="idlok" required>
                                @foreach ($list_lokasi as $lokasi)
                                    @if ($item->idlok == $lokasi->id)
                                        <option value="{{ $lokasi->id }}" selected>
                                            {{ $lokasi->nama_lokasi }},
                                            {{ $lokasi->unit }},
                                            {{ $lokasi->sublokasi }}
                                        </option>
                                    @else
                                        <option value="{{ $lokasi->id }}">
                                            {{ $lokasi->nama_lokasi }},
                                            {{ $lokasi->unit }},
                                            {{ $lokasi->sublokasi }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="brand">Brand</label>
                            <select class="form-control" id="brand" name="idbrand" required>
                                @foreach ($list_brand as $brand)
                                    @if ($item->idbrand == $brand->id)
                                        <option value="{{ $brand->id }}" selected>
                                            {{ $brand->nama_brand }}
                                            {{ $brand->tipe_brand }}
                                        </option>
                                    @else
                                        <option value="{{ $brand->id }}">
                                            {{ $brand->nama_brand }}
                                            {{ $brand->tipe_brand }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="jenis-hardware">Jenis Hardware</label>
                            <select class="form-control" id="jenis-hardware" name="jenis_hardware" required>
                                @foreach ($list_jenis as $jenis)
                                    @if ($item->jenis_hardware == $jenis)
                                        <option value="{{ $jenis }}" selected>
                                            {{ $jenis }}
                                        </option>
                                    @else
                                        <option value="{{ $jenis }}">
                                            {{ $jenis }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="koneksi">koneksi</label>
                            <input type="text" class="form-control" id="koneksi" placeholder="Enter koneksi"
                                name="koneksi" value="{{ $item->koneksi }}" required />
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="ipaddress">IP Address</label>
                            <input type="text" class="form-control" id="ipaddress" placeholder="Enter ipaddress"
                                name="ipaddress" value="{{ $item->ipaddress }}" />
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="computer_name">Computer Name</label>
                            <input type="text" class="form-control" id="computer_name"
                                placeholder="Enter Computer Name" name="computer_name"
                                value="{{ $item->computer_name }}" />
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="sharing">Sharing</label>
                            <select name="sharing" id="sharing" class="form-control">
                                @if ($item->sharing == 'Ya')
                                    <option value="Ya" selected>Ya</option>
                                    <option value="Tidak">Tidak</option>
                                @else
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak" selected>Tidak</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="tgl_inventaris">Tanggal Inventaris</label>
                            <input type="date" class="form-control" id="tgl_inventaris"
                                placeholder="Enter Tanggal Inventaris" name="tgl_inventaris"
                                value="{{ $item->tgl_inventaris }}" required />
                        </div>
                        <div class="form-group col-12">
                            <label for="keterangan">Keterangan</label>
                            <textarea type="text" class="form-control" id="keterangan" placeholder="Enter keterangan" name="keterangan" required>{{ $item->keterangan }}</textarea>
                        </div>
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
