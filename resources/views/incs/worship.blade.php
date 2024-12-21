@php
    use App\Churchschedule;

    $schedules = Churchschedule::orderBy('created_at', 'ASC')->paginate(4);
@endphp

<section class="element-animate worship-time">
  
  <div class="half d-md-flex d-block">
    <div class="image order-2" style="background-image: url('{{ asset("$pF/advent/img/img_2.jpg") }}')"></div>
    <div class="text element-animate">
      <h3 class="mb-4 mt-5">Worship Time</h3>
      <ul class="worship-time-list mb-5">
       @foreach($schedules as $schedule)
        <li>
          <a href="">{{ $schedule->title }}
          <span>{{ $schedule->startingTime }} - {{ $schedule->endingTime }}</span>
          </a>
        </li>
       @endforeach
      </ul>
    </div>
  </div>

</section>