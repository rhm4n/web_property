@extends('layout.index')

@section('title', 'Detail') 

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/style_detail.css')}}">
@endsection


@section('content')
<div class="container">

    <div class="utama ml-4">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row justify-content-center">
            <div class="col-9 main">
              <img class="img-thumbnail" id="mainImg" src="{{asset('assets/image/thumb/bg-image0.jpg')}}" />
            </div>
            <div class="col-3 thumbs">
              <li onclick="thumbChange(0)">
                <img class="img-thumbnail" src="{{asset('assets/image/thumb/bg-image0.jpg')}}" />
              </li>
              <li onclick="thumbChange(1)">
                <img class="img-thumbnail" src="{{asset('assets/image/thumb/bg-image1.jpg')}}" />
              </li>
              <li onclick="thumbChange(2)">
                <img class="img-thumbnail" src="{{asset('assets/image/thumb/bg-image2.jpg')}}" />
              </li>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- list Item -->

    <div class="container">
      <div class="row label">
        <div class="col-8">
          <h5>Griya Arini Permai</h5>
          <p>Jl.asddsdfad Kendari Sultra</p>
          <button class="ml-auto btn btn-success" type="button">
            Pesan Sekarang
          </button>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="row wrap-col">
              <div class="col-6 list-wrap">
                <li class="d-flex">
                  <div class="luar">
                    <i class="icon fa fa-arrows-alt"></i>
                  </div>
                  <div class="dalam">
                    <h5>Luas Tanah</h5>
                    <p>91 M2</p>
                  </div>
                </li>
              </div>
              <div class="col-6 list-wrap">
                <li class="d-flex">
                  <div class="luar">
                    <i class="icon fa fa-object-group"></i>
                  </div>
                  <div class="dalam">
                    <h5>Luas Bangunan</h5>
                    <p>36 M2</p>
                  </div>
                </li>
              </div>
              <div class="col-6 list-wrap">
                <li class="d-flex">
                  <div class="luar">
                    <i class="icon fa fa-object-ungroup"></i>
                  </div>
                  <div class="dalam">
                    <h5>Dimensi Tanah</h5>
                    <p>7M X 13M</p>
                  </div>
                </li>
              </div>
              <div class="col-6 list-wrap">
                <li class="d-flex">
                  <div class="luar">
                    <i class="icon fa fa-home"></i>
                  </div>
                  <div class="dalam">
                    <h5>Dimensi Bangunan</h5>
                    <p>6M X 6M</p>
                  </div>
                </li>
              </div>
              <div class="col-6 list-wrap">
                <li class="d-flex">
                  <div class="luar">
                    <i class="icon fa fa-plug"></i>
                  </div>
                  <div class="dalam">
                    <h5>Daya Listrik</h5>
                    <p>1300 WATT</p>
                  </div>
                </li>
              </div>
              <div class="col-6 list-wrap">
                <li class="d-flex">
                  <div class="luar">
                    <i class="icon fa fa-file-text"></i>
                  </div>
                  <div class="dalam">
                    <h5>Sertifikat</h5>
                    <p>SHM</p>
                  </div>
                </li>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-9 label2">
            <h5>Persyaratan</h5>
            <hr />
            <div class="row">
              <div class="col-6">
                <h6>PNS</h6>
                <p>scan ktp (ktp suami dan istri).</p>
                <p>scan kk.</p>
                <p>surat nikah.</p>
                <p>npwp.</p>
                <p>sk terakhir (sk 100 % terlegalisir).</p>
                <p>slip gaji 3 bulan terakhir.</p>
                <p>rekening koran 3 bulan terakhir.</p>
                <p>keterangan belum memiliki rumah.</p>
                <p>keterangan penghasilan.</p>
                <p>spt tahunan.</p>
                <p>foto berwarna 4x6.</p>

              </div>
              <div class="col-6">
                <h6>KARYAWAN SWASTA</h6>
                <p>Scan ktp (ktp suami dan istri).</p>
                <p>Scan kk.</p>
                <p>Surat nikah.</p>
                <p>Npwp.</p>
                <p>Surat ket. Kerja (surat dari perusahaan yang di ttd dan stempel).</p>
                <p>Slip gaji 3 bulan terakhir.</p>
                <p>Rekening koran 3 bulan terakhir.</p>
                <p>Keterangan belum memiliki rumah.</p>
                <p>Spt tahunan.</p>
                <p>Foto berwarna 3x4.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-9 label2">
            <h5>Spesifikasi Teknis</h5>
            <hr />
            <p>Pondasi batu kali</p>
            <p>Atap spandek</p>
            <p>Pintu jati</p>
            <p>dll...</p>
          </div>
        </div>
      </div>

      <div class="container keunggulan">
        <div class="row">
          <div class="col-lg-9 label2">
            <h5>Keunggulan</h5>
            <hr />
            <p>Bebas banjir</p>
            <p>20m dari rumah sakit</p>
            <p>30m dari pom bensin</p>
          </div>
        </div>
      </div>
    </div>    

  </div>

<script>
    function thumbChange(num) {
    var thumb = "{{asset('assets/image/thumb/bg-image')}}" + num + ".jpg";
    document.getElementById("mainImg").src = thumb;
}
</script>
@endsection