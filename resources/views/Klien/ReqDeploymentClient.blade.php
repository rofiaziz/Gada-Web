@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Daftar Klien</title>
@endsection
@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6"><h3 class="m-b-35" style="font-family: 'Abril Fatface'; font-size:35px;">Request Penempatan Satpam</h3>
            </div>
            <div class="col-md-6">
                {{-- <form class="form-header" action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Perusahaan" aria-label="Cari-Perusahaan" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
            </form> --}}
         </div>
        </div>
        <!-- DATA TABLE-->
               <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Form Permintaan -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Formulir Penempatan Satpam</div>
                                    <div class="card-body">
                                        {{-- <div class="card-title">
                                            <h3 class="text-center title-2">Pay Invoice</h3>
                                        </div> --}}
                                        {{-- <hr> --}}
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nama Perusahaan</label>
                                                <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Alamat Perusahaan</label>
                                                <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Jumlah satpam</label>
                                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" placeholder="">
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    {{-- <i class="fa fa-lock fa-lg"></i>&nbsp; --}}
                                                    <span id="payment-button-amount">Kirim</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabel Perusahaan-->
                            <div class="col-lg-6"> 
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Perusahaan</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                        
                                            {{-- @foreach ($List as $p) --}}
                        
                                            <tr>
                                                <td> p-> name }}</td>
                                                <td> p-> email }}</td>
                                                <td> p-> address}} </td>
                                                
                                            </tr>
                                            <tr>
                                                <td> p-> name }}</td>
                                                <td> p-> email }}</td>
                                                <td> p-> address}} </td>
                                                
                                            </tr>
                                            <tr>
                                                <td> p-> name }}</td>
                                                <td> p-> email }}</td>
                                                <td> p-> address}} </td>
                                                
                                            </tr>
                                        
                                            {{-- @endforeach                    --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>    
                        </div>
                        
                    </div>
                </div>
            
        <!-- END DATA TABLE-->
    </div>
</div>  
@endsection