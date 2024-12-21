@php
   use App\Sermon; 
 

   $sermons = Sermon::orderBy('created_at', 'DESC')->paginate(6);

@endphp

<section class="section pt-5 pb-2">
  <div class="container">
    <div class="row mb-5 justify-content-center element-animate">
      <div class="col-md-12">
        <span class="section-heading">Recent Sermons</span>
        <h2>Listen & Watch Our Sermons</h2>
      </div>
    </div>
    <div class="row">
        @foreach($sermons as $sermon)
      <div class="col-12 col-sm-6 col-lg-4 mb-5">
        <div class="element-animate">
            <iframe frameborder="0" allowfullscreen width="350" height="200" style="border-radius: 10px" 
            src="https://www.youtube.com/embed/{{ $sermon->youtubeLink }}">
            </iframe>
            <p>{{ $sermon->sermonTitle }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>