<!--Footer-->
<footer class="page-footer font-small blue-grey lighten-5 pt-0">
    <div class="bg-dark">
       <div class="container">
          <!--Grid row-->
          <div class="row py-4 d-flex align-items-center">
             <!--Grid column-->
             <div class="col-12 col-md-5 text-left mb-4 mb-md-0">
                <h6 class="mb-0 text-white text-center text-md-left">
                   <strong class="text-center">Get connected with us on social media!</strong>
                </h6>
             </div>
             <!--Grid column-->
          </div>
          <!--Grid row-->
       </div>
    </div>
    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
       <div class="row mt-3">
          <!--First column-->
          <div class="col-md-3 col-lg-4 col-xl-3 mb-4 dark-grey-text">
             <h6 class="text-uppercase font-weight-bold">
                <strong>AstonBooks</strong>
             </h6>
             <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
          <!--/.First column-->
          <!--Third column-->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
             <h6 class="text-uppercase font-weight-bold">
                <strong>Useful links</strong>
             </h6>
             <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
             <p>
				@auth 
                <a href="/dashboard" class="text-danger">View Account</a>
				@endauth
             </p>
             <p>
				@guest
                <a href="/register" class="text-danger">Create an account</a>
				@endguest
             </p>
          </div>
          <!--/.Third column-->
          <!--Fourth column-->
          <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
             <h6 class="text-uppercase font-weight-bold">
                <strong>Contact</strong>
             </h6>
             <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
             <p>
                <i class="fa fa-home mr-3"></i> Aston Triangle, Birmingham B4 7ET
             </p>
             <p>
                <i class="fa fa-envelope mr-3"></i> rasools2@aston.ac.uk
             </p>
             <p>
                <i class="fa fa-phone mr-3"></i> 0121 204 3000
             </p>
          </div>
          <!--/.Fourth column-->
       </div>
    </div>
    <!--/.Footer Links-->
    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center bg-secondary">
       <a href="/" class="text-white">
       <strong> © 2019 Copyright: Sayyid Rasool (Student ID: 160031197) - Aston University 2019</strong>
       </a>
    </div>
    <!--/.Copyright -->
 </footer>
 <!--/.Footer-->