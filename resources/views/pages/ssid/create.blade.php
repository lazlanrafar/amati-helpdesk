<!-- Modal -->
<div
    class="modal fade"
    id="formCreate"
    tabindex="-1"
    role="dialog"
    aria-labelledby="formCreateLabel"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Create User
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email-address">Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email-address"
                            placeholder="Enter email"
                            name="email"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            placeholder="Enter Username"
                            name="uid"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                            name="password"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input
                            type="text"
                            class="form-control"
                            id="namalengkap"
                            placeholder="Enter Nama Lengkap"
                            name="nama"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input
                            type="text"
                            class="form-control"
                            id="jabatan"
                            placeholder="Enter Jabatan"
                            name="jabatan"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="akses-select">Akses</label>
                        <select
                            class="form-control"
                            id="akses-select"
                            name="akses"
                            required
                        >
                            <option selected>-- pilih jabatan --</option>
                            <option value="STAFF">Staff</option>
                            <option value="TEKNISI">Teknisi</option>
                            <option value="MANAGER">Manager</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
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
