<div class="modal fade" id="hapusBarang{{$barang->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <p>Anda yakin ingin menghapus Barang ini?</p>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>
