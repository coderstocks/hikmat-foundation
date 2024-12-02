<!-- Header-->
<header class="bg-dark py-5" id="main-header">
    <div class="container">
        <div class=" text-white">
            <h1 class="display-4 position-absolute top-50 col-md-8 col-12 fw-bolder"><?php echo $_settings->info('home_quote') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0"></p>
        </div>
    </div>
</header>
<!-- Section-->
<style>
    .book-cover{
        object-fit:contain !important;
        height:auto !important;
    }
    #main-header{
        height: 70vh;
        background: radial-gradient(circle, rgba(0,0,0,0.08503151260504207) 22%, rgba(0,0,0,0.19539565826330536) 49%, rgba(0,212,255,0) 100%)!important;
    }
    #main-header:before{
        background-position: center;
        filter: drop-shadow(0px 0px 0px black);
    }
</style>
    <!-- About Start -->
    <div data-aos="fade-up"
    data-aos-duration="1000" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img data-aos="fade-right"
                        data-aos-duration="1000" class="position-absolute w-100 h-100 pt-5 pe-5" src="./dist/img/1.jpg" alt="" style="object-fit: cover;">
                        <img data-aos="fade-up"
                        data-aos-duration="1500" class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="https://hikmatfoundation.netlify.app/img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div data-aos="fade-up"
                        data-aos-duration="1000" class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 data-aos="fade-right"
                        data-aos-duration="1300" class="display-6 mb-5">We Help Girls In Need Around Us.</h1>
                        <div data-aos="fade-right"
                        data-aos-duration="1600"  class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Hikmat Foundation seeks to empower our girls with both an education and a future for themselves and their families which can be achieved by completing their schooling.</p>
                            <span class="text-primary">Mr. Syed Gulrez Hoda, Founder Trustee</span>
                        </div>
                        <p data-aos="fade-right"
                         data-aos-duration="1900"  class="mb-5">The Foundation provides a secure environment at the Noor Girls’ High Schools. The schools are a haven of learning in otherwise challenging circumstances, and are supported by the local community.</p>
                        <a data-aos="fade-right"
                         data-aos-duration="2200"  class="btn btn-primary py-2 px-3 me-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a data-aos="fade-right"
                         data-aos-duration="2200"  class="btn btn-outline-primary py-2 px-3" href="">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Causes Start -->
    <div data-aos="fade-up"
    data-aos-duration="800"  class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Feature Causes</div>
                <h1 class="display-6 mb-5">Every Child Deserves The Opportunity To Learn</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div data-aos="fade-up"
                    data-aos-duration="1000"  class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div data-aos="fade-right"
                                data-aos-duration="800"  class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Education</small>
                            </div>
                            <h5 data-aos="fade-right"
                                data-aos-duration="1000"  class="mb-3">Education For Girls</h5>
                            <p data-aos="fade-right"
                                data-aos-duration="1300" >Educated women are more likely to unde    tand and act on environmental issues, teaching their families and communities about sustainability.</p>
                            <!-- <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark">Rs.10,000 <small class="text-body">Goal</small></p>
                                    <p class="text-dark">Rs.9,542 <small class="text-body">Raised</small></p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="position-relative mt-auto">
                            <img style="height: 250px; object-fit: cover; object-position: top;" data-aos="fade-right"
                                data-aos-duration="1900"  class="img-fluid w-100" src="https://hikmatfoundation.org/wp-content/uploads/2023/07/Board-1-1-1024x576-1.jpg" alt="">
                            <div data-aos="fade-up"
                                data-aos-duration="1600"  class="causes-overlay d-flex justify-content-center py-3">
                                <a class="btn btn-outline-primary" href="">
                                    Donate
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div data-aos="fade-up"
                    data-aos-duration="1000"  class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div data-aos="fade-right"
                            data-aos-duration="800" class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Pure Water</small>
                            </div>
                            <h5 data-aos="fade-right"
                            data-aos-duration="1000"  class="mb-3">Ensure Pure Drinking Water</h5>
                            <p data-aos="fade-right"
                            data-aos-duration="1300" > Install water filtration systems in orphanages to remove contaminants like bacteria, viruses, and chemicals. Options include UV filters, reverse osmosis systems, or portable water purifiers.</p>
                            <!-- <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark">Rs.10,000<small class="text-body">Goal</small></p>
                                    <p class="text-dark">Rs.9,542<small class="text-body">Raised</small></p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="position-relative mt-auto">
                            <img data-aos="fade-right"
                                data-aos-duration="1600"  style="height: 250px; object-fit: cover; object-position: top;" class="img-fluid w-100" src="https://images.squarespace-cdn.com/content/v1/662517f07dd9c95f1eed0910/bb891091-c788-4ce5-a49e-3c5609d916c5/IMG_5186+2.jpg?format=1500w" alt="">
                            <div data-aos="fade-up"
                                data-aos-duration="1800"  class="causes-overlay d-flex justify-content-center py-3">
                                <a class="btn btn-outline-primary" href="">
                                    Donate
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div data-aos="fade-up"
                    data-aos-duration="1000"  class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div data-aos="fade-right"
                            data-aos-duration="800" class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Healthy Life</small>
                            </div>
                            <h5 data-aos="fade-right"
                            data-aos-duration="1000" class="mb-3">Ensure Medical Treatment</h5>
                            <p data-aos="fade-right"
                            data-aos-duration="1300">Ensure all girls receive the necessary vaccinations according to their age and local health guidelines to protect them from preventable diseases.</p>
                            <!-- <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark">Rs.10,000 <small class="text-body">Goal</small></p>
                                    <p class="text-dark">Rs.9,542 <small class="text-body">Raised</small></p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="position-relative mt-auto">
                            <img data-aos="fade-right"
                            data-aos-duration="1600"  style="height: 250px; object-fit: cover; object-position: top;" class="img-fluid" src="https://hikmatfoundation.org/wp-content/uploads/2023/07/Board-1-1-1024x576-1.jpg" alt="">
                            <div data-aos="fade-up"
                            data-aos-duration="1800"  class="causes-overlay d-flex justify-content-center py-3">
                                <a class="btn btn-outline-primary" href="">
                                    Donate
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->
    
    <!-- Service Start -->
    <div data-aos="fade-up"
    data-aos-anchor-placement="top-bottom"data-aos-duration="1800" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div data-aos="fade-up"
                data-aos-duration="600"  class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                <h1 data-aos="fade-up"
                data-aos-duration="900"  class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div data-aos="fade-up"
                data-aos-duration="1000"  class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img data-aos="fade-right"
                        data-aos-duration="1000"  class="img-fluid mb-4" src="https://hikmatfoundation.netlify.app/img/icon-1.png" alt="">
                        <h4 data-aos="fade-right"
                        data-aos-duration="1300"  class="mb-3">Child Education</h4>
                        <p data-aos="fade-right"
                        data-aos-duration="1600"  class="mb-4">Educated women are more likely to understand and act on environmental issues, teaching their families and communities about sustainability.</p>
                        <!-- <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a> -->
                    </div>
                </div>
                <div data-aos="fade-right"
                data-aos-duration="1000"  class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img data-aos="fade-right"
                        data-aos-duration="1000"  class="img-fluid mb-4" src="https://hikmatfoundation.netlify.app/img/icon-2.png" alt="">
                        <h4 data-aos="fade-right"
                        data-aos-duration="1300"  class="mb-3">Medical Treatment</h4>
                        <p data-aos="fade-right"
                        data-aos-duration="1600"  class="mb-4">Ensure all girls receive the necessary vaccinations according to their age and local health guidelines to protect them from preventable diseases.</p>
                        <!-- <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a> -->
                    </div>
                </div>
                <div data-aos="fade-right"
                data-aos-duration="1000"  class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img data-aos="fade-right"
                        data-aos-duration="1000"  class="img-fluid mb-4" src="https://hikmatfoundation.netlify.app/img/icon-3.png" alt="">
                        <h4 data-aos="fade-right"
                        data-aos-duration="1300"  class="mb-3">Pure Drinking Water</h4>
                        <p data-aos="fade-right"
                        data-aos-duration="1600"  class="mb-4">Install water filtration systems in orphanages to remove contaminants like bacteria, viruses, and chemicals. Options include UV filters, reverse osmosis systems, or portable water purifiers.</p>
                        <!-- <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Donate Start -->
    <div data-aos="fade-up"
    data-aos-duration="1000"  class="container-fluid donate-money my-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div data-aos="fade-right"
                    data-aos-duration="1000"  class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donate Now</div>
                    <h1 data-aos="fade-right"
                    data-aos-duration="1300"  class="display-6 text-white mb-5">Thanks For The Results Achieved With You</h1>
                    <p data-aos="fade-right"
                    data-aos-duration="1600"  class="text-white-50 mb-0">Thanks to your kindness, we can provide the orphan girls in our care with essential medical treatment, ensuring they stay healthy, happy, and full of life. Your contribution is not just a donation; it’s a lifeline that allows us to give these children the care and opportunities they deserve.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form data-aos="fade-up"
                        data-aos-duration="1000" >
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input data-aos="fade-right"
                                        data-aos-duration="1000"  type="text" class="form-control bg-light border-0" id="name" placeholder="Your Name">
                                        <label data-aos="fade-right"
                                        data-aos-duration="1300"  for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input data-aos="fade-right"
                                        data-aos-duration="1200"  type="email" class="form-control bg-light border-0" id="email" placeholder="Your Email">
                                        <label data-aos="fade-right"
                                        data-aos-duration="1300"  for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input data-aos="fade-right"
                                        data-aos-duration="1400"  type="number" class="form-control bg-light border-0" id="email" placeholder="Your Email">
                                        <label data-aos="fade-right"
                                        data-aos-duration="1500"  for="email">Your Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input data-aos="fade-right"
                                        data-aos-duration="1600"  type="text" class="form-control bg-light border-0" id="email" placeholder="Your Email">
                                        <label data-aos="fade-right"
                                        data-aos-duration="1700"  for="email">Your Message</label>
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="btn-group d-flex justify-content-around">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                        <label class="btn btn-light py-3" for="btnradio1">Rs.10</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                        <label class="btn btn-light py-3" for="btnradio2">Rs.20</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                        <label class="btn btn-light py-3" for="btnradio3">Rs.30</label>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <button data-aos="fade-right"
                                    data-aos-duration="1900"  class="btn btn-primary px-5" style="height: 60px;">
                                        Donate Now
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->

    <!-- Testimonial Start -->
    <div data-aos="fade-down"
    data-aos-duration="1000"  class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonial</div>
                <h1 class="display-6 mb-5">Trusted By Thousands Of People And Nonprofits</h1>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div data-aos="fade-up"
                data-aos-duration="1000"  class="testimonial-item text-center">
                    <img class="img-fluid bg-secondary rounded-circle p-2 mx-auto mb-4" src="https://hikmatfoundation.org/wp-content/uploads/2024/04/Bala-th.png" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-primary rounded text-center p-4">
                        <p> “I am elated to support Hikmat Foundation’s mission in educating the girls of India. The Anaha Trust is proud to have partnered with Hikmat to bring Noor Girls High School students to Delhi to meet women leaders from across industries and walks of life and to ignite their imaginations.”</p>
                        <h5 class="mb-1">Mr. C. Balagopal, Anaha Trust</h5>
                        <!-- <span class="fst-italic">Profession</span> -->
                    </div>
                </div>
                <div data-aos="fade-up"
                data-aos-duration="1400"  class="testimonial-item text-center">
                    <img class="img-fluid bg-secondary rounded-circle p-2 mx-auto mb-4" src="https://hikmatfoundation.org/wp-content/uploads/2024/04/Nitin-Sood-th.png" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-primary rounded text-center p-4">
                        <p>“Hikmat Foundation is doing incredible work that is priceless for the future of India and the world. I am so grateful to be able to be a part of its cause by contributing to its technology center and fees for some girls. I urge everyone to get involved in some way – big or small.”</p>
                        <h5 class="mb-1">Mr. Nitin Sood</h5>
                        <!-- <span class="fst-italic">Profession</span> -->
                    </div>
                </div>
                <div data-aos="fade-up"
                data-aos-duration="1800"  class="testimonial-item text-center">
                    <img class="img-fluid bg-secondary rounded-circle p-2 mx-auto mb-4" src="https://hikmatfoundation.org/wp-content/uploads/2024/04/Jamie-th.png" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-primary rounded text-center p-4">
                        <p> “My daughters and I contributed our loved books to Hikmat Foundation to help set up their libraries and ignite a love of reading in their students I applaud the foundation for their tremendous work in providing such a wonderful education to these students and for letting my children."</p>
                        <h5 class="mb-1">Ms. Jamie Beth Mehra</h5>
                        <!-- <span class="fst-italic">Profession</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->