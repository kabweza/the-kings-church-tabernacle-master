@include('incs.header')
 <body>
  @include('incs.navbar')
  <hr><br><br><br>
 <section class="section pt-md-5 pb-md-5 element-animate">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-12">
            <span class="section-heading">EVENT</span>
            <h2>{{ $title }}</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>{{ $content }}</p>
            <p>Starting at: {{ $start }}</p>
            <p>Ending at: {{ $end }}</p>
            <h2 class="mb-4">Location:{{ $location }}</h2>
            
          </div>
          <div class="col-md-6">
            <p><img src="{{ asset("$pF/storage/$picture") }}" alt="Image placeholder" class="img-fluid"></p>
            
          </div>
        </div>
        <div class="row">
        </div>
      </div>
    </section>        


     @include('incs.footer')
   </body>
 </html> 