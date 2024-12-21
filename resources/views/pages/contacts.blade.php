@include('incs.header')
 <body>
  @include('incs.navbar')
   <!-- END header -->

   <section class="home-slider owl-carousel">
     
     <div class="slider-item" style="background-image: url('{{ asset("$pF/advent/img/IMG_1638~1.jpg") }}');">
       <div class="container">
         <div class="row slider-text align-items-center justify-content-center">
           <div class="col-md-8 text-center col-sm-12 element-animate">
             <h1>Contact Us</h1>
             <p class="mb-3">Phone Number : +255 658 595 867</p>
             <p class="mb-3">Email Address : thekingsglobal@gmail.com</p>
             <p class="mb-3">Address  : P.O BOX 2706 UHINDINI, MBEYA, TANZANIA</p>
           </div>
         </div>
       </div>
     </div>


   </section>
   <!-- END slider -->

   <section class="section">
     <div class="container">
       <div class="row mb-5 justify-content-center element-animate">
         <div class="col-md-12">
           <span class="section-heading">Contact</span>
           <h2>Send Us Email</h2>
         </div>
       </div>

       <div class="row">
         <div class="col-md-12">
         <form action="/post/contact/us" method="post">
            @csrf
           
           <div class="row mb-4">
             <div class="col-md-4 mb-md-0 mb-4">
               <input name="name" type="text" class="form-control" placeholder="Full Name">
             </div>
             <div class="col-md-4 mb-md-0 mb-4">
               <input name="email" type="email" class="form-control" placeholder="Email Address">
             </div>
             <div class="col-md-4 mb-md-0 mb-4">
               <input name="phone_number" type="text" class="form-control" placeholder="Phone">
             </div>
           </div>
           <div class="row mb-4">
             <div class="col-md-12">
               <textarea name="message" id="" class="form-control" placeholder="Write some words of encouragement" cols="30" rows="10"></textarea>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <input type="submit" class="btn btn-primary btn-block" value="Send Message">
             </div>
           </div>
           
           
         </form>
         </div>

       </div>

       
     </div>
   </section>

   
   <!-- END section -->

       @include('incs.footer')
     </body>
   </html>