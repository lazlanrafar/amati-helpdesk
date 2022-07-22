<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="formUpdateLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('user.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdateLabel">
                        Update User
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email-address">Email address</label>
                        <input type="email" class="form-control" id="email-address" placeholder="Enter email"
                            name="email" value="{{ $item->email }}" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password"
                            placeholder="Input For Change Password" name="password" />
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namalengkap" placeholder="Enter Nama Lengkap"
                            name="nama" value="{{ $item->nama }}" required />
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" placeholder="Enter Jabatan"
                            name="jabatan" value="{{ $item->jabatan }}" required />
                    </div>
                    <div class="form-group">
                        <label for="akses-select">Akses</label>
                        <select class="form-control" id="akses-select" name="akses" required>
                            <option selected value="{{ $item->akses }}">{{ $item->akses }}</option>
                            <option value="STAFF">Staff</option>
                            <option value="TEKNISI">Teknisi</option>
                            <option value="MANAGER">Manager</option>
                        </select>
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
