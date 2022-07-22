<!-- Modal -->
<div class="modal fade" id="modalQrCode{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalQrCode{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formCreateLabel">
                    {{ $title }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-center">
                    <img class="mx-auto"
                        src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $dataqrcode }}"
                        alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                {{-- <a href="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $dataqrcode }}&format=png"
                    download="{{ $filename }}" class="btn btn-primary" target="_BLANK">
                    Download
                </a> --}}
                <button onclick="handleDownload()" class="btn btn-warning">
                    Download
                </button>

                <script>
                    function handleDownload() {
                        // window.open("https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $dataqrcode }}&format=png",
                        //     "_blank");

                        var qrCodeBaseUri = 'https://api.qrserver.com/v1/create-qr-code/?',
                            params = {
                                data: '{{ $dataqrcode }}',
                                size: '150x150',
                                margin: 0,
                                download: 1,
                            };
                        window.location.href = qrCodeBaseUri + $.param(params);
                    }
                </script>
            </div>
        </div>
    </div>
</div>
