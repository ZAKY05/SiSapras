<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/barang/store">
                <div class="modal-body">
                    <div class="container-fluid p-2">
                        @csrf
                        <div class="input-group mb-3">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama peminjam</label>
                            <input type="text" class="form-control" name="nama_peminjam" autocomplete="off"
                                placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                            <label for="name">Kelas</label>
                            <input type="text" class="form-control" name="kelas" autocomplete="off"
                                placeholder="Masukkan kelas">
                        </div>
                        <div class="form-group">
                            <label for="name">Barang</label>
                            {{-- <input type="text" class="form-control" name="barang" id="barang" autocomplete="off"
                                placeholder="Masukkan Nama Barang"> --}}
                            <select class="form-control" name="id_barang">
                                @foreach ($barang as $item)
                                    <option value="{{ $item->id_barang }}">{{ $item->nama_barang }}</option>
                                @endforeach
                            </select>
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
