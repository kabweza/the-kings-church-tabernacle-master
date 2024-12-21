@php
use App\Specialevent;

$specialevents = Specialevent::orderBy('created_at', 'DESC')->paginate(1);


@endphp



<section class="upcoming-events-highlight">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-3 element-animate">
        <span class="section-heading">Upcoming Events</span>
        @foreach($specialevents as $specialevent)
        <h2><a href="#">{{ $specialevent->eventTitle }}</a></h2>
        <div class="events-meta">
          <span class="mr-2"><span class="ion-clock mr-2"></span>{{ \Carbon\Carbon::parse($specialevent->startingTime)->isoFormat('dddd, MMMM D, YYYY') }}</span>
          <span class="mr-2"><span class="ion-location mr-2"></span>{{ $specialevent->location }}</span>
          {{-- <span class="mr-2"><span class="ion-person mr-2"></span>Pastor Luis Matthew</span> --}}
        </div>
        @endforeach
      </div>
      <div class="col-md-6 element-animate">
        <div id="date-countdown"></div>
      </div>
    </div>
  </div>
</section>
