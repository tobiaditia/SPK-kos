<div class="modal fade" id="show-modal" aria-hidden="true">
    <div class="modal-dialog 
        {{ isset($size) ? $size : '' }}
        ">
        <style>
            label {
                font-weight: normal !important;
            }

        </style>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul">{{ $titleModal }}</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        @if ($type == 'kos')
                            <table class="table">
                                <tr>
                                    <td>Nama</td>
                                    <td id="nama"></td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td id="id_lokasi"></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td id="deskripsi"></td>
                                </tr>
                                <tr>
                                    <td>No.Hp</td>
                                    <td id="no_hp"></td>
                                </tr>
                            </table>
                        @elseif ($type == 'kamar')
                            <table class="table">
                                <tr>
                                    <td>Nama Kos</td>
                                    <td id="namakos"></td>
                                </tr>
                                <tr>
                                    <td>Nama Kamar</td>
                                    <td id="namakamar"></td>
                                </tr>
                                <tr>
                                    <td>Kapasitas</td>
                                    <td id="kapasitas"></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td id="harga"></td>
                                </tr>
                                <tr>
                                    <td>Pembayaran</td>
                                    <td id="pembayaran"></td>
                                </tr>
                                <tr>
                                    <td>Fasilitas</td>
                                    <td id="fasilitas"></td>
                                </tr>
                            </table>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
