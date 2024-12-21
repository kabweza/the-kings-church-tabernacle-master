@include('incs.header')
 <body>
  @include('incs.navbar')
   <!-- END header -->


   <section class="home-slider owl-carousel">
     @foreach($events as $event)

        @php
          $image1 = $event->picture;
          $g = ("\\");
          $f = "/";
         $image = str_replace($g, $f, $image1);
         @endphp

     <div class="slider-item" style="background-image: url('{{ asset("$pF/storage/$image") }}');">
       <div class="container">
         <div class="row slider-text align-items-center justify-content-center">
           <div class="col-md-8 text-center col-sm-12 element-animate">
             
           </div>
         </div>
       </div>
     </div>
     @endforeach
   </section>

   <!-- END slider -->

   <section class="section">
     <div class="container">
       <div class="row mb-5 justify-content-center element-animate">
         <div class="col-md-12">
           <span class="section-heading">Ministries</span>
           <h2>Events &amp; Ministries</h2>
         </div>
       </div>
       <div class="row">
        @foreach( $events as $event)
        <a href="#">
            <div class="col-md-6 col-lg-4 mb-4 element-animate">
              <div class="media custom-media">
               <a href="/event/{{ $event->eventTitle }}">
                <img class="mr-3" src="{{ asset("$pF/storage/$event->picture") }}" alt="Generic placeholder image">
               </a>
                <div class="media-body">
                  <h3 class="mt-0"><a href="/event/{{ $event->eventTitle }}">{{ $event->eventTitle }}</a></h3>
                  <p class="post-meta">Start Date: {{ \Carbon\Carbon::parse($event->startingTime)->isoFormat('MMMM D, YYYY') }}</a></p>
                  <p class="post-meta">End Date: {{ \Carbon\Carbon::parse($event->endingTime)->isoFormat('MMMM D, YYYY') }}</a></p>
                  <p>{{ $event->content }}</p>
                </div>
              </div>
            </div>
        </a>
         @endforeach

       </div>
     </div>
   </section>

   <!-- END section -->

       @include('incs.footer')
     </body>
   </html>