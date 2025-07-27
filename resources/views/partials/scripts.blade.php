 <!-- Bundle JavaScript -->
 <script src="{{asset('assets/js/frontend-bundle.min.js')}}"></script>
 <script src="{{asset('assets/js/backend-bundle.min.js')}}"></script>


 <!-- Masonary Gallery Javascript -->
 <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
 <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>

 <!-- slider JavaScript -->
 <script src="{{asset('assets/js/slider.js')}}"></script>

 <!-- app JavaScript -->
 <script src="{{asset('assets/js/app-landing.js')}}"></script>
 <script src="{{asset('assets/js/app.js')}}"></script>

 @yield('script')

 <script>
     let form = document.getElementById('newsletter-signup');

     form.addEventListener('submit', function(e){
         e.preventDefault();

         let newsletter_signup_email = document.getElementById('newsletter_signup_email').value;

         fetch("{{route('newsletterSignup')}}",{
             method: 'POST',
             body: JSON.stringify({
                 newsletter_signup_email: newsletter_signup_email,
                 _token: "{{csrf_token()}}"
             }),
             headers:{
                 "Content-Type": "application/json"
             }
         })
         .then(function(response){
            return response.json();
         })
         .then(function(data){
            if (data.status==1){
                document.getElementById('newsletter_signup_email').value = "";
                document.getElementById('newsletter-success-alert').style.display= 'flex';
                 
            }
         })
     })
 </script>