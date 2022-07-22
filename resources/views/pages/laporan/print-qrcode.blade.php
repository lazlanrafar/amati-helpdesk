<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
    <div class="container">
        <div class="row">
            @foreach ($list_ap as $item)
                <?php
                $dataqrcode = $item->idap . ', Jenis Access Point, ' . $item->brand->nama_brand . ' ' . $item->brand->tipe_brand . ', Tanggal Inventaris :' . $item->tgl_inventaris . ', Lokasi :' . $item->lokasi->nama_lokasi . '/' . $item->lokasi->unit . '/' . $item->lokasi->sublokasi . ', Keterangan :' . $item->keterangan;
                ?>
                <div class="col-4 mb-1">
                    <div class="card" style="border: 1px solid black">
                        <div class="card-body">
                            <img class="w-100"
                                src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $dataqrcode }}"
                                alt="">
                            <h4 class="text-center mt-3">{{ $item->idap }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($list_hardware as $item)
                <?php
                $dataqrcode = $item->idhardware . ', Jenis Hardware, ' . $item->brand->nama_brand . ' ' . $item->brand->tipe_brand . ', Tanggal Inventaris : ' . $item->tgl_inventaris . ', Lokasi :' . $item->lokasi->nama_lokasi . '/' . $item->lokasi->unit . '/' . $item->lokasi->sublokasi . ', Keterangan : ' . $item->keterangan;
                ?>
                <div class="col-4 mb-1">
                    <div class="card" style="border: 1px solid black">
                        <div class="card-body">
                            <img class="w-100"
                                src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $dataqrcode }}"
                                alt="">
                            <h4 class="text-center mt-3">{{ $item->idhardware }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($list_switch as $item)
                <?php
                $dataqrcode = $item->idswitch . ', Jenis Switch, ' . $item->brand->nama_brand . ' ' . $item->brand->tipe_brand . ', Tanggal Inventaris : ' . $item->tgl_inventaris . ', Lokasi :' . $item->lokasi->nama_lokasi . '/' . $item->lokasi->unit . '/' . $item->lokasi->sublokasi . ', Keterangan : ' . $item->keterangan;
                ?>
                <div class="col-4 mb-1">
                    <div class="card" style="border: 1px solid black">
                        <div class="card-body">
                            <img class="w-100"
                                src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $dataqrcode }}"
                                alt="">
                            <h4 class="text-center mt-3">{{ $item->idswitch }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
