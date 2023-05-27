<div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      	<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
        	<div class="modal-body">
				<form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
					
						<div class="form-group">
							<label for="kode_barang">Kode Barang</label>
							<input class="form-control" name="kode_barang" id="kode_barang" autocomplete="off"  required value="{{old('kode_barang')}}">
							
						</div>

						<div class="form-group">
							<label for="nama_barang">Nama Barang</label>
							<input class="form-control" name="nama_barang" id="nama_barang" autocomplete="off"  required value="{{old('nama_barang')}}">
							
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
