@php
    use App\Event;

    $events = Event::paginate(6);

@endphp

<section class="section">
  <div class="container">
    <div class="row mb-5 justify-content-center element-animate">
      <div class="col-md-12">
        <span class="section-heading">Ministries</span>
        <h2>Events &amp; Ministries</h2>
      </div>
    </div>
    <div class="row">
        @foreach($events as $event)

      <div class="col-md-6 col-lg-4 mb-4 element-animate">
        <div class="media custom-media">
    <a href="/event/{{ $event->eventTitle }}">
    <img class="mr-3" width="30" src="{{ asset("$pF/storage/$event->picture") }}" alt="Generic placeholder image">
    </a>
          <div class="media-body">
            <h3 class="mt-0"><a href="/event/{{ $event->eventTitle }}">{{ $event->eventTitle }}</a></h3>
            <p class="post-meta"><a href="#">Starting Time:</a> {{ \Carbon\Carbon::parse($event->startingTime)->isoFormat('MMMM D, YYYY') }}</p>
            <p>{{ $event->content }}</p>
          </div>
        </div>
      </div>
        @endforeach

        
    </div>
    <div>
            <div style="text-align: right;">
                
                {{ $events->links() }}
            </div>
        </div>

  </div>
</section>