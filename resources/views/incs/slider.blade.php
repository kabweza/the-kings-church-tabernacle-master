<section class="home-slider owl-carousel">
    @php
        use App\Slider;
        $sliders = Slider::all();

    @endphp
  @foreach($sliders as $slider)
  @php
    $image1 = $slider->picture;
    $g = ("\\");
    $f = "/";
   $image = str_replace($g, $f, $image1);
   @endphp
  <div class="slider-item" style="background-image: url({{ asset("$pF/storage/$image") }});">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate">
          <p class="mb-5"><h1>{{ $slider->content }}</h1></p>
          {{-- <p><a href="#" class="btn btn-white btn-outline-white">Watch Now</a></p> --}}
        </div>
      </div>
    </div>
  </div>
  @endforeach
</section>