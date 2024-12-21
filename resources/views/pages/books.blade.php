@include('incs.header')
 <body>
  @include('incs.navbar')
   <!-- END header -->

   <section class="home-slider owl-carousel">
     @foreach($books as $book)

        @php
          $image1 = $book->picture;
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

   <section class="section">
     <div class="container">
       <div class="row mb-5 justify-content-center element-animate">
         <div class="col-md-12">
           <span class="section-heading">Books & Articles</span>
           <h2>Books & Articles List</h2>
         </div>
       </div>
       <div class="row">
        @foreach($books as $book )
        @php
            $file = @(json_decode($book->bookFile))[0]->download_link;

        @endphp
         <div class="col-md-6 col-lg-4 mb-4 element-animate">
           <div class="media custom-media">
            <a href="{{ Voyager::image( $file ) }}">
             <img class="mr-3" width="30" src="{{ asset("$pF/storage/$book->picture") }}" alt="Generic placeholder image"></a>
             <div class="media-body">
               <h3 class="mt-0"><a href="{{ Voyager::image( $file ) }}">{{ $book->title }}</a></h3>
               <a href="{{ Voyager::image( $file ) }}"><p class="post-meta">Book/Article Author: {{ $book->author }}</p></a>
               <p>{{ $book->content }}</p>
             </div>
           </div>
         </div>
         @endforeach

       </div>
       <div>
           <div style="text-align: right;">
               
               {{ $books->links() }}
           </div>
       </div>
     </div>
   </section>


       @include('incs.footer')
     </body>
   </html>