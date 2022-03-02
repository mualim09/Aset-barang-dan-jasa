@extends('layouts.main')
@section('container')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">{{ $title }}</h4>
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
                
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->
<div class="row">

    {{-- <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                </div>
                
                <div>
                    <h5 class="font-16">Aset Fisik</h5>
                </div>
                <h3 class="mt-4">{{ $jumlahfisik }} Data </h3>
                <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: @php $hasil = $jumlahfisik/$jumlahkategori*100; echo floor($hasil); @endphp%" aria-valuenow="@php $hasil = $jumlahfisik/$jumlahkategori*100; echo floor($hasil); @endphp" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">@php $hasil = $jumlahfisik/$jumlahkategori*100; echo floor($hasil); @endphp%</span></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Aset Virtual</h5>
                </div>
                <h3 class="mt-4">{{ $jumlahvirtual }} Data</h3>
                <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: @php $hasil = $jumlahvirtual/$jumlahkategori*100; echo floor($hasil); @endphp%" aria-valuenow="@php $hasil = $jumlahvirtual/$jumlahkategori*100; echo floor($hasil); @endphp" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">@php $hasil = $jumlahvirtual/$jumlahkategori*100; echo floor($hasil); @endphp%</span></p>
            </div>
        </div>
    </div> --}}

    

</div>
 <!-- START ROW -->
 <div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row">
                    
                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light float-right mb-2 ml-3" data-toggle="modal" data-target=".bs-example-modal-center"><i class="mdi mdi-plus"></i>tambah data </button>
                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Form Konsumen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/tambahpembelanjaan" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="barang" class="col-sm-4 col-form-label">Nama Barang</label>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('barang') is-invalid @enderror" type="text"  name="barang" id="barang" >
                                            @error('barang')
                                            <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                                
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="merek" class="col-sm-4 col-form-label">Merek</label>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('merek') is-invalid @enderror" type="text"  name="merek" id="merek" >
                                            @error('merek')
                                            <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                                
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori" class="col-sm-4 col-form-label">Kategory Barang</label>
                                        <div class="col-sm-8">
                                            <select name="kategori" id="kategori" class="form-control">
                                               @foreach ($categories as $category)
                                               <option value="{{ $category->id }}">{{ $category->nama_kategory }}</option>
                                               @endforeach
                                                
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('harga') is-invalid @enderror" type="number"  name="harga" id="notelepon"  >
                                            @error('harga')
                                            <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                                
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('jumlah') is-invalid @enderror" type="number"  name="jumlah" id="notelepon"  >
                                            @error('jumlah')
                                            <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                                
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="total" class="col-sm-4 col-form-label">Total</label>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('total') is-invalid @enderror" type="number"  name="total" id="total"  >
                                            @error('total')
                                            <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                                
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tglpembelian" class="col-sm-4 col-form-label">Tanggal pembelian </label>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('tglpembelian') is-invalid @enderror" type="date"  name="tglpembelian" id="tglpembelian"  >
                                            @error('tglpembelian')
                                            <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                                
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                                </form>
                            </div>
                        <!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                    </div>
                    
               
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama Barang </th>
                                <th scope="col">Kategori</th>
                                <th scope="col">merek</th>
                                <th scope="col">Jumlah </th>
                                <th scope="col" >Total </th>
                                <th scope="col" colspan="2" >Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembelanjaans as $pembelanjaan)
                            @php
                                $total = 10/100*$pembelanjaan->harga + $pembelanjaan->harga*$pembelanjaan->jumlah ;
                            @endphp
                            <tr>
                                <td>{{ $pembelanjaan->nama_barang }}</td>
                                <td>{{ $pembelanjaan->id_categories }}</td>
                                <td>{{ $pembelanjaan->merek }}</td>
                                <td>{{ $pembelanjaan->jumlah  }}</td>
                                <td>Rp. {{  number_format($total,2,',','.')  }}</td>

                                <td>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit data"><i class="mdi mdi-pencil"></i></a>&nbsp;<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete data"><i class="mdi mdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                                
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- END ROW -->
    </div>
@endsection
