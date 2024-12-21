   @php 

   use App\About;

            @$abouts = About::where('id', 1)->get()->toArray();
            $id = $abouts['0']['id'];
            $about = $abouts['0']['about'];

   @endphp


    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About The Kings Global Tabernacle</h3>
            <p class="mb-5">{{ $about }}</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="http://pic.twitter.com/mYd0dHx0qZ" target="_blank" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="http://facebook.com/kingsglobal.tabernacle.3" target="_blank" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="https://www.linkedin.com/in/kings-media-03a3771ba/" target="_blank" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="https://www.instagram.com/p/CGXsn15lfQr/?igshid=19n5b6avsvczw" target="_blank" class="p-2"><span class="fa fa-instagram"></span></a></li>
              <li><a href="https://youtube.com/channel/UC8Q-CrA7Nnu3QseOL68fm0Q" target="_blank" class="p-2"><span class="fa fa-youtube-play"></span></a></li>
            </ul>

          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="{{ route('activities') }}">Activities</a></li>
              <li><a href="{{ route('event') }}">Events</a></li>
              <li><a href="{{ route('book') }}">Articles</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
              <li><a href="{{ route('ipn') }}">Intercessory Prayer Network</a></li>
            </ul>
          </div>
          <div class="col-md-5 mb-5">
            <h3>Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Address:</span>
                <span  style="color: #C89538;">P.O BOX 2706 UHINDINI, MBEYA, TANZANIA</span></li>
              <li class="d-block"><span class="d-block">Telephone:</span><span  style="color: #C89538;">+255 658 595 867</span></li>
              <li class="d-block"><span class="d-block">Email:</span><span  style="color: #C89538;">thekingsglobal@gmail.com</span></li>
            </ul>
          </div>
          
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
             Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{ asset("$pF/advent/js/jquery-3.2.1.min.js") }}"></script>
    <script src="{{ asset("$pF/advent/js/popper.min.js") }}"></script>
    <script src="{{ asset("$pF/advent/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("$pF/advent/js/owl.carousel.min.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelement-and-player.min.js"></script>
    <script src="{{ asset("$pF/advent/js/jquery.waypoints.min.js") }}"></script>
    <script src="{{ asset("$pF/advent/js/jquery.countdown.min.js") }}"></script>
    @include('style.mainjs')
    {{-- <script src="{{ asset("$pF/advent/js/main.js") }}"></script> --}}

    <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>