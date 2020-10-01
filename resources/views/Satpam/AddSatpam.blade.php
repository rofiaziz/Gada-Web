@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Tambah Satpam</title>
@endsection
@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title-3 m-b-30" style="font-size:45px;" >
                <i class="zmdi zmdi-account-calendar" ></i>
                <b>Tambah Satpam Baru</b></h3>
        </div>
            {{-- <div class="col-md-6">
                <form class="form-header" action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Perusahaan" aria-label="Cari-Perusahaan" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
            </form>
        </div> --}}
        </div>
        <!-- DATA TABLE-->
        <div class="content">
            <div class="row">
              <div class="col-md-8 offset-md-2">
                  <div class="card card-user">
                    <div class="card-header">
                      <p class="card-title" style="text-align:center; font-size:25px; color: black;"><b>Formulir Pendaftaran Satpam</b></p>
                    </div>
                    <div class="card-body">

                      <form method="post" action="/Satpam/add">
                        
                        {{ csrf_field() }}

                          <div class="row">

                            <div class="card-title col-md-8 offset-md-2">
                              <h3 class="text-center title-2"><b>Data Diri </b></h3>
                            </div>
                            <hr>

                            <div class="col-md-12 ">
                              <div class="form-group">
                                <h5 label>Nama Lengkap Satpam</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                                  @if($errors->has('name'))
                                  <div class="text-danger">
                                      {{ $errors->first('name')}}
                                  </div>
                                  @endif
                              </div>
                            </div>


                            <div class="col-md-4 ">
                              <div class="form-group">
                                <h5 label>NIK</label>
                                <input type="text" name="nik" class="form-control" placeholder="">
                                  @if($errors->has('nik'))
                                  <div class="text-danger">
                                      {{ $errors->first('nik')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Berat badan</label>
                                <input type="text" name="bb" class="form-control" placeholder="123">
                                    @if($errors->has('bb'))
                                    <div class="text-danger">
                                            {{ $errors->first('bb')}}
                                     </div>
                                    @endif
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Tinggi Badan</label>
                                <input type="text" name="tb" class="form-control" placeholder="123">
                                    @if($errors->has('tb'))
                                    <div class="text-danger">
                                            {{ $errors->first('tb')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-12 row form-group">
                              <div class="col col-md-3">
                                  <h5 label class=" form-control-label">Golongan Darah</label>
                              </div>
                              <div class="col col-md-6">
                                  <div class="form-check">
                                      <div class="radio">
                                          <label for="radio1" class="form-check-label ">
                                              <input type="radio" id="radio1" name="goldar" value="O" class="form-check-input"><b> O </b>
                                          </label>
                                      </div>
                                      <div class="radio">
                                          <label for="radio2" class="form-check-label ">
                                              <input type="radio" id="radio2" name="goldar" value="A" class="form-check-input"><b> A </b>
                                          </label>
                                      </div>
                                      <div class="radio">
                                          <label for="radio3" class="form-check-label ">
                                              <input type="radio" id="radio3" name="goldar" value="B" class="form-check-input"><b> B </b>
                                          </label>
                                      </div>
                                      <div class="radio">
                                          <label for="radio4" class="form-check-label ">
                                              <input type="radio" id="radio4" name="goldar" value="AB" class="form-check-input"><b> AB </b>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="col-md-12 row form-group">
                              <div class="col col-md-3">
                                  <h5 label class=" form-control-label">Jenis Kelamin</label>
                              </div>
                              <div class="col col-md-6">
                                  <div class="form-check">
                                      <div class="radio">
                                          <label for="radio1" class="form-check-label ">
                                              <input type="radio" id="radio1" name="kelamin" value="Laki-laki" class="form-check-input"><b> Laki-laki </b>
                                          </label>
                                      </div>
                                      <div class="radio">
                                          <label for="radio2" class="form-check-label ">
                                              <input type="radio" id="radio2" name="kelamin" value="Perempuan" class="form-check-input"><b> Perempuan </b>
                                          </label>
                                      </div>
                                      
                                  </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>Agama</label>
                                <input type="text" name="agama" class="form-control" placeholder="">
                                    @if($errors->has('agama'))
                                    <div class="text-danger">
                                            {{ $errors->first('agama')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>Kewarganegaraan</label>
                                <input type="text" name="negara" class="form-control" placeholder="Indonesia">
                                    @if($errors->has('negara'))
                                    <div class="text-danger">
                                            {{ $errors->first('negara')}}
                                     </div>
                                    @endif
                              </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>Bank</label>
                                <input type="text" name="bank" class="form-control" placeholder="">
                                    @if($errors->has('bank'))
                                    <div class="text-danger">
                                            {{ $errors->first('bank')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>Nomor Rekening</label>
                                <input type="text" name="norek" class="form-control" placeholder="123">
                                    @if($errors->has('norek'))
                                    <div class="text-danger">
                                            {{ $errors->first('norek')}}
                                     </div>
                                    @endif
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>Finger Print 1</label>
                                <input type="text" name="fing1" class="form-control" placeholder="123">
                                    @if($errors->has('fing1'))
                                    <div class="text-danger">
                                            {{ $errors->first('fing1')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>Finger Print 2</label>
                                <input type="text" name="fing2" class="form-control" placeholder="123">
                                    @if($errors->has('fing2'))
                                    <div class="text-danger">
                                            {{ $errors->first('fing2')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>BPJS Ketenagakerjaan</label>
                                <input type="text" name="bpjs ketenagakerjaan" class="form-control" placeholder="123">
                                    @if($errors->has('bpjs ketenagakerjaan'))
                                    <div class="text-danger">
                                            {{ $errors->first('bpjs ketenagakerjaan')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>BPJS Kesehatan</label>
                                <input type="text" name="bpjs kesehatan" class="form-control" placeholder="123">
                                    @if($errors->has('bpjs kesehatan'))
                                    <div class="text-danger">
                                            {{ $errors->first('bpjs kesehatan')}}
                                     </div>
                                    @endif
                              </div>
                            </div>


                            <div class="col-md-12">
                              <div class="form-group">
                                <h5 label>Alamat Lengkap</label>
                                  <textarea class="form-control" name="address" placeholder=""></textarea>
                                    @if($errors->has('address'))
                                    <div class="text-danger">
                                        {{ $errors->first('address')}}
                                    </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <h5 label>Tempat Tanggal Lahir</label>
                                  <textarea class="form-control" name="ttl" placeholder=""></textarea>
                                    @if($errors->has('address'))
                                    <div class="text-danger">
                                        {{ $errors->first('address')}}
                                    </div>
                                    @endif
                              </div>
                            </div>
                            
                            
                            {{-- Data Keluarga  --}}
                            <div class="card-title col-md-8 offset-md-2" style="padding-top: 50px">
                              <h3 class="text-center title-2"><b>Data Keluarga </b></h3>
                            </div>
                            <hr>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Nama Ayah</label>
                                <input type="text" name="ayah" class="form-control" placeholder="">
                                    @if($errors->has('ayah'))
                                    <div class="text-danger">
                                            {{ $errors->first('ayah')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Nama Ibu</label>
                                <input type="text" name="ibu" class="form-control" placeholder="">
                                    @if($errors->has('ibu'))
                                    <div class="text-danger">
                                            {{ $errors->first('ibu')}}
                                     </div>
                                    @endif
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Status Nikah</label>
                                <input type="text" name="Status" class="form-control" placeholder=" ">
                                    @if($errors->has('Status'))
                                    <div class="text-danger">
                                            {{ $errors->first('Status')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Nama Istri</label>
                                <input type="text" name="Istri" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>NIK Istri</label>
                                <input type="text" name="NIK Istri" class="form-control" placeholder="123">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Jumlah Anak</label>
                                <input type="text" name="Jumlah" class="form-control" placeholder="123">
                                </div>
                            </div>
                           
                            {{-- Data Pendidikan  --}}
                            <div class="card-title col-md-8 offset-md-2" style="padding-top: 50px">
                              <h3 class="text-center title-2"><b>Data Pendidikan </b></h3>
                            </div>
                            <hr>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Jenjang Pendidikan</label>
                                <input type="text" name="Jenjang" class="form-control" placeholder="SMA">
                                    @if($errors->has('Jenjang'))
                                    <div class="text-danger">
                                            {{ $errors->first('Jenjang')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Sekolah / Universitas</label>
                                <input type="text" name="clSekolahient" class="form-control" placeholder="SMA 1 Sleman">
                                    @if($errors->has('Sekolah'))
                                    <div class="text-danger">
                                            {{ $errors->first('Sekolah')}}
                                     </div>
                                    @endif
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Upload Ijazah</label>
                                <input type="text" name="Ijazah" class="form-control" placeholder="Upload berkas">
                                    @if($errors->has('Ijazah'))
                                    <div class="text-danger">
                                            {{ $errors->first('Ijazah')}}
                                     </div>
                                    @endif
                              </div>
                            </div>


                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Pendidikan Satpam</label>
                                <input type="text" name="" class="form-control" placeholder="">
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Tempat Diklat</label>
                                <input type="text" name="" class="form-control" placeholder="123">
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Tahun Diklat</label>
                                <input type="text" name="" class="form-control" placeholder="123">
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>No Ijazah</label>
                                <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>No KTA</label>
                                <input type="number" name="" class="form-control" placeholder="123">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Masa Berlaku</label>
                                <input type="date" name="" class="form-control" placeholder="123">
                                </div>
                            </div>


                            {{-- Data Sertifikat  --}}
                            <div class="card-title col-md-8 offset-md-2" style="padding-top: 50px">
                              <h3 class="text-center title-2"><b>Data Sertifikat </b></h3>
                            </div>
                            <hr>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>No Sertifikat</label>
                                <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Bidang Keterampilan</label>
                                <input type="text" name="" class="form-control" placeholder="123">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Kualifikasi</label>
                                <input type="text" name="" class="form-control" placeholder="123">
                                </div>
                            </div>


                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>No Reg</label>
                                <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Masa Berlaku</label>
                                <input type="date" name="" class="form-control" placeholder="123">
                                </div>
                            </div>

                           {{-- Data Akun  --}}
                            <div class="card-title col-md-8 offset-md-2" style="padding-top: 50px">
                              <h3 class="text-center title-2"><b>Data Akun Untuk Login </b></h3>
                            </div>
                            <hr>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="">
                                    @if($errors->has('email'))
                                    <div class="text-danger">
                                            {{ $errors->first('email')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Password</label>
                                <input type="text" name="pass" class="form-control" placeholder="123">
                                    @if($errors->has('pass'))
                                    <div class="text-danger">
                                            {{ $errors->first('pass')}}
                                     </div>
                                    @endif
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Outsourcing</label>
                                <input type="hidden" name="out" disabled=""  value="{{ Auth::user()->id }}" class="form-control" >
                                <input  name="" disabled="" placeholder="{{ Auth::user()->name }}"  class="form-control" >
                                
                              </div>
                            </div>


                          </div>
                         <div class="row">
                            <div class="update ml-auto mr-auto">
                              <button type="submit" class="btn btn-primary btn-round" style="width:20rem; font-size:19px">Tambahkan</button>
                            </div>
                          </div>
                      </form>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>  
@endsection