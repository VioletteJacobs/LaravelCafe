@extends('template.main')
@section('content')

<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{$database1[0] -> sousTitre}}</span>
            <span class="section-heading-lower">{{$database1[0] -> titre}}</span>
          </h2>
          <p class="mb-3">{{$database1[0] -> para}}
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">{{$database1[0] -> buttonVisit}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$database1[1] -> sousTitre}}</span>
                <span class="section-heading-lower">{{$database1[1] -> titre}}</span>
              </h2>
              <p class="mb-0">{{ $database1[1] -> para}}</p>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection