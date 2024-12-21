@php 

use App\Mission;
 $missions = Mission::where('id', 1)->get()->toArray();

 if (sizeof($missions) != 0) {
             $title = $missions['0']['title'];
             $content = $missions['0']['content'];
             $picture = $missions['0']['picture'];
        }   

        $visions = Mission::where('id', 2)->get()->toArray();

        if (sizeof($visions) != 0) {
                    $title1 = $visions['0']['title'];
                    $content1 = $visions['0']['content'];
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
            <span class="section-heading">MISSION & VISION</span>
            <h2>{{ $title1 }}</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>{{ $content1 }}</p>
            <h2 class="mb-4">{{ $title }}</h2>
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