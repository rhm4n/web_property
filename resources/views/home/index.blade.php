    @extends('layout.index')

    @section('css')
    <link rel="stylesheet" href="{{asset('assets/css/style_home.css')}}">
    @endsection

    @section('title', 'Home')        
    
    
    @section('content')
        
    
    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid text-center ">
        <div class="container ">
            <h5 class="display-4">BEST INVESTMENT</h5>
            <p class="lead">Jl. Supu Yusuf, Kota Kendari, Sulawesi Tenggara</p>
        </div>
    </div>



    <!-- info panel -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="kategori">Type</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>All</option>
                            <option>Subsidi</option>
                            <option>Komersil</option>
                            <option>Take Over</option>
                        </select>
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="kategori">Luas Tanah/Bangunan</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>All</option>
                            <option>91/36</option>
                            <option>91/36</option>
                            <option>120/45</option>
                        </select>
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="kategori">Perumahan</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>All</option>
                            <option>Griya Arini Permai</option>
                            <option>Diamon Alfa</option>
                            <option>dll..</option>
                        </select>
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="kategori">Lokasi</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>All</option>
                            <option>Kendari</option>
                            <option>Konsel</option>
                            <option>Kolaka</option>
                        </select>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Mulai Pencarian</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- konten -->
    <section>
        <div class="container">
            <div class="row konten-wrap justify-content-center">
                <div class="col-12">
                    <div class="row wrap mb-5">

                        <div class="col-lg-4 my-2">
                            <div class="card">
                            <a href="/detail">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/image/img3.png')}}" class="img-fluid" alt="...">
                                </div>
                            </a>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="card-title">Diamond Alfa Praja</h5>
                                            <p class="card-text" id="card-text">Jl.Praja Andonohu <span
                                                    id="nama-kota">Kendari</span>
                                            </p>
                                        </div>
                                        <div class="col-4 img-logo">
                                            <img class="img-thumbnail rounded-circle" src="{{asset('assets/image/logo-dmd.png')}}">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-7">
                                            <div class="list-harga text-center">
                                                Rp.1.460.000.000</div>
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-success brosur"><i class="fa fa-cloud-download"></i>
                                                Brosur</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 my-2">
                            <div class="card">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/image/bg-image2.jpg')}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="card-title">Griya Arini Permai</h5>
                                            <p class="card-text" id="card-text">Jl.Lalombaku, kec. Puuwatu <span
                                                    id="nama-kota">Kendari</span>
                                            </p>
                                        </div>
                                        <div class="col-4 img-logo">
                                            <img class="img-thumbnail rounded-circle" src="{{asset('assets/image/logo-aln.png')}}">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-7">
                                            <div class="list-harga text-center">
                                                Rp.146.000.000</div>
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-success brosur"><i class="fa fa-cloud-download"></i>
                                                Brosur</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 my-2">
                            <div class="card">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/image/img.png')}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="card-title">Diamond Alfa Praja</h5>
                                            <p class="card-text" id="card-text">Jl.Praja Andonohu <span
                                                    id="nama-kota">Kendari</span>
                                            </p>
                                        </div>
                                        <div class="col-4 img-logo">
                                            <img class="img-thumbnail rounded-circle" src="{{asset('assets/image/logo-dmd.png')}}">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-7">
                                            <div class="list-harga text-center">
                                                Rp.1.460.000.000</div>
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-success brosur"><i class="fa fa-cloud-download"></i>
                                                Brosur</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 my-2">
                            <div class="card">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/image/bg-image3.jpg')}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="card-title">Griya Arini Permai</h5>
                                            <p class="card-text" id="card-text">Jl.Lalombaku, kec. Puuwatu <span
                                                    id="nama-kota">Kendari</span>
                                            </p>
                                        </div>
                                        <div class="col-4 img-logo">
                                            <img class="img-thumbnail rounded-circle" src="{{asset('assets/image/logo-aln.png')}}">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-7">
                                            <div class="list-harga text-center">
                                                Rp.146.000.000</div>
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-success brosur"><i class="fa fa-cloud-download"></i>
                                                Brosur</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 my-2">
                            <div class="card">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/image/img2.png')}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="card-title">Diamond Alfa Praja</h5>
                                            <p class="card-text" id="card-text">Jl.Praja Andonohu <span
                                                    id="nama-kota">Kendari</span>
                                            </p>
                                        </div>
                                        <div class="col-4 img-logo">
                                            <img class="img-thumbnail rounded-circle" src="{{asset('assets/image/logo-dmd.png')}}">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-7">
                                            <div class="list-harga text-center">
                                                Rp.1.460.000.000</div>
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-success brosur"><i class="fa fa-cloud-download"></i>
                                                Brosur</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 my-2">
                            <div class="card">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/image/bg-image.jpg')}}" class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="card-title">Griya Arini Permai</h5>
                                            <p class="card-text" id="card-text">Jl.Lalombaku, kec. Puuwatu <span
                                                    id="nama-kota">Kendari</span>
                                            </p>
                                        </div>
                                        <div class="col-4 img-logo">
                                            <img class="img-thumbnail rounded-circle" src="{{asset('assets/image/logo-aln.png')}}">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-7">
                                            <div class="list-harga text-center">
                                                Rp.146.000.000</div>
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-success brosur"><i class="fa fa-cloud-download"></i>
                                                Brosur</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    @endsection
    