<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/barang/store2">
                <div class="modal-body">
                    <div class="container-fluid p-2">
                        @csrf
                        <div class="input-group mb-3">
                        </div>
                        {{-- <div class="form-group">
                            <label for="name">Kode Barang</label>
                            <input type="text" class="form-control" name="nama_barang" autocomplete="off"
                                placeholder="Masukkan kode">
                        </div> --}}
                        <div class="form-group">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" autocomplete="off"
                                placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="name">Kategori</label>
                            <input type="text" class="form-control" name="kategori" autocomplete="off"
                                placeholder="Masukkan kategori">
                        </div>
                      
                     
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
