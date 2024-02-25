   <!-- JAVASCRIPT -->
   <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
   <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

   <!-- glightbox js -->
   <script src="{{asset('assets/libs/glightbox/js/glightbox.min.js')}}"></script>

   <!-- Swiper JS -->
   <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>

   <!-- fg-emoji-picker JS -->
   <script src="{{asset('assets/libs/fg-emoji-picker/fgEmojiPicker.js')}}"></script>

   <!-- page init -->
   <script src="{{asset('assets/js/pages/index.init.js')}}"></script>

   <script src="{{asset('assets/js/app.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   @if (Session::has('success'))
   <script>
       swal("Success","{{ Session::get('success') }}",'success' ,{
        button:true,
        button:"OK",
        timer:3000,
       });
   </script>
   @endif
   @if (Session::has('error'))
   <script>
       swal("Error","{{ Session::get('error') }}",'error' ,{
        button:true,
        button:"OK",
        timer:3000,
       });
   </script>
   @endif


