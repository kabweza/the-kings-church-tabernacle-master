@include('incs.header')
 <body>
  @include('incs.navbar')

  @php 

  use App\Activity;
   $activities = Activity::where('id', 1)->get()->toArray();

   if (sizeof($activities) != 0) {
               $title = $activities['0']['title'];
               $content = $activities['0']['content'];
               $picture = $activities['0']['picture'];
          }           

  @endphp


  @include('incs.header')
   <body>
    @include('incs.navbar')
    <hr><br><br><br>
   <section class="section pt-md-5 pb-md-5 element-animate">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-12">
              <span class="section-heading">CHURCH ACTIVITIES</span>
              <h2>{{ $title }}</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>{{ $content }}</p>
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




     {{-- @include('incs.footer') --}}
   </body>
 </html> 