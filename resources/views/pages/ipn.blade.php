@include('incs.header')
 <body>
  @include('incs.navbar')

@php
  use App\Eventipn;
  use App\Ipnschedule;
  use App\Aboutipn;

$events = Eventipn::orderBy('created_at', 'DESC')->paginate(6);

$schedules = Ipnschedule::orderBy('created_at', 'DESC')->paginate(4);

$abouts = Aboutipn::orderBy('created_at', 'ASC')->paginate(3);

@endphp

  <section class="section">
    <div class="container">
      <div class="row mb-5 justify-content-center element-animate">
        <div class="col-md-12">
          <span class="section-heading">INTERCESSORY PRAYER NETWORK</span>
          <h2>Events</h2>
        </div>
      </div>
      <div class="row">
        @foreach($events as $event)
        <div class="col-md-6 col-lg-4 mb-4 element-animate">
          <div class="media custom-media">
            <img class="mr-3" width="30" src="{{ asset("$pF/storage/$event->picture") }}" alt="Generic placeholder image">
            <div class="media-body">
              <h3 class="mt-0"><a href="#">{{ $event->eventTitle }}</a></h3>
              <p class="post-meta">{{ $event->startingTime }} <a>{{ $event->location }}</a></p>
              <p>{{ $event->content }}</p>
            </div>
          </div>
        </div>
        @endforeach
        

      </div>

    </div>
  </section>

  <section class="element-animate worship-time">
    
    <div class="half d-md-flex d-block">
      <div class="image order-2">
        <br><br><br><br>
          @foreach($abouts as $about)
          <h3 class="mb-4 mt-5 text-center">{{ $about->title }}</h3>
          <p class="mb-4 mt-5 text-center">{{ $about->content }}</p>
          @endforeach
      </div>
      <div class="text element-animate">
        <h3 class="mb-4 mt-5 text-center">INTERCESSORY PRAYER NETWORK</h3>
        <h3 class="mb-4 mt-5 text-center">SCHEDULE</h3>
        
        <ul class="worship-time-list mb-5 text-center">
          @foreach($schedules as $schedule)  
          <li>
            <a href="#">{{ $schedule->title }}
            <span>{{ $schedule->startingTime }} - {{ $schedule->endingTime }}</span>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </section>


     @include('incs.footer')
   </body>
 </html> 