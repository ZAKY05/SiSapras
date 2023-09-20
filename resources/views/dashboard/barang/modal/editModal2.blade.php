@foreach ($data as $dt )
<div class="modal fade" id="editmodal2{{ $dt->id_barang }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit data barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update2/{{ $dt->id_barang }}" method="POST">
                <div class="modal-body">
                    <div class="container-fluid p-2">
                        @csrf
                        <div class="input-group mb-3">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama barang</label>
                            <input type="text" class="form-control" name="nama_peminjam" autocomplete="off"
                                placeholder="Masukkan nama" value="{{ $dt->nama_barang }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Kategori</label>
                            <input type="text" class="form-control" name="kelas" autocomplete="off"
                                placeholder="Masukkan kelas" value="{{ $dt->kategori}}">
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


@endforeach