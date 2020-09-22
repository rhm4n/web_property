@extends('layout.index')

@section('title', 'Detail') 

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/style_detail.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
 

<link rel="stylesheet" href="{{ asset('assets/css/swiper.css')}}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/dark.css')}}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" />
@endsection


@section('content')
<div class="container">

  <div class="content-wrap">

    <div class="container clearfix">

      <div class="row">
        @foreach( $projek as $val )
          <div class="col-lg-3 col-md-6 col-sm-6 bottommargin">

            <div class="oc-item">
              <div class="iportfolio">
                <div class="portfolio-image">
                  <img style="height: 200px; width: 100%;" src="{{ asset( $val->foto ) }}" alt="Gallery Image">
                </div>
                <div class="portfolio-desc" style="background-color: #F0F8FF;">
                  <h3><a href="/projek/view/{{ $val->slug }}" >{{ $val->nama_perumahan }}</a></h3>
                  <span><a href="/projek/view/{{ $val->slug }}">{{ $val->lokasi }}</a></span>
                </div>
              </div>
            </div>

          </div>
        @endforeach

      </div>

    </div>

  </div>


</div>
@endsection