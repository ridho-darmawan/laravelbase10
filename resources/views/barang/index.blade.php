@extends('layouts.template')
@section('title','Data Barang')

@section('content')


<div class="container-fluid">

   
    <div class="card">
        <div class="card-header">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahBarang" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus"></i> Tambah Barang</a>
            @include('barang.modalTambah')
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode barang</th>
                        <th>Nama Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no= 1;
                    @endphp
                    
                    @forelse ($barangs as $barang)
                        <tr>
                            <td>{{ $no++ }}.</td>
                            <td>{{$barang->kode_barang}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>
                                
                                <a href="#ubahBarang{{ $barang->id }}" data-toggle="modal" data-keyboard="false" data-backdrop="static" class="badge badge-warning"><i class="fa fa-pen"></i> Ubah</a> |
                                @include('barang.modalUbah')
                                <a href="#hapusBarang{{ $barang->id }}" data-toggle="modal" data-keyboard="false" data-backdrop="static" class="badge badge-danger"><i class="fa fa-trash"></i> Hapus</a>
                                @include('barang.modalHapus')
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Data Belum Tersedia</td>
                        </tr>

                    @endforelse


                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
      </div>

</div>
@endsection

{{-- @push('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
    CKEDITOR.replace('content1');
    </script>
@endpush --}}
