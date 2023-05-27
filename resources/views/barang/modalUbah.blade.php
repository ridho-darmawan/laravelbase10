<div class="modal fade" id="ubahBarang{{$barang->id}}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('barang.update',$barang->id) }}" method="POST"  enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('patch')

                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input class="form-control" name="nama_barang" id="nama_barang" autocomplete="off"  value="{{ $barang->nama_barang }}">
                        </div>                       
                        
                    </div>

                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>


            </form>
        </div>

        </div>
    </div>
</div>
