<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTLY_Home</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
</head>
<body >
    
    
  <?php require('inc/header.php'); ?>



    <!-- Carousel -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
        
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/images/carousel/1.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="/images/carousel/4.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
            <img src="/images/carousel/2.jpg" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="/images/carousel/5.png" class="w-100 d-block"/>
            </div>
            
        </div>
        
    </div>
  </div>   
   <!--Check availability  -->
   <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4  rounded">
            <h5 class="mb-2">Check booking availability</h5>
            <form >
                <div class="row align-items-end ">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500">Check-in</label>
                        <input type="date" class="form-control shadow-none" >
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500">Check-out</label>
                        <input type="date" class="form-control shadow-none" >
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500">Adults</label>
                        <select  class="form-select shadow-none">
                           <option selected>Open menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            
                        </select>
                        
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight:500">Children</label>
                        <select  class="form-select shadow-none">
                           <option selected>Open menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            
                        </select>
                        
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </div>
            </form>

        </div>
      </div>
   </div>
   <!-- our rooms -->
    <h2 class="mt-2 pt-4 mb-4  text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="/images/rooms/r2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">$25 per night</h6>
                        <div class="features mb-4">
                           <h6 class="mb-1">Features</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bedroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1balcony
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bathroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1kitchen
                           </span>
                        </div>
                        <!-- div facilities -->
                        <div class="features mb-4">
                           <h6 class="mb-1">Facilities</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Wifi
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              AC
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Free parking
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Heater
                           </span>
                        </div>
                        <!-- ratings -->
                         <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill  bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                           </span>
                            
                         </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- room2 -->
            <div class="col-lg-4  col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="/images/rooms/r2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">$25 per night</h6>
                        <div class="features mb-4">
                           <h6 class="mb-1">Features</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bedroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1balcony
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bathroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1kitchen
                           </span>
                        </div>
                        <!-- div facilities -->
                        <div class="features mb-4">
                           <h6 class="mb-1">Facilities</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Wifi
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              AC
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Free parking
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Heater
                           </span>
                        </div>
                        <!-- ratings -->
                         <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill  bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                           </span>
                            
                         </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- room 3 -->
            <div class="col-lg-4  col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="/images/rooms/r2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">$25 per night</h6>
                        <div class="features mb-4">
                           <h6 class="mb-1">Features</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bedroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1balcony
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bathroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1kitchen
                           </span>
                        </div>
                        <!-- div facilities -->
                        <div class="features mb-4">
                           <h6 class="mb-1">Facilities</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Wifi
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              AC
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Free parking
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Heater
                           </span>
                        </div>
                        <!-- ratings -->
                         <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill  bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                           </span>
                            
                         </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
              <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Rooms >>></a> 
            </div>

     <!-- OUR FACILITIES -->
        <h2 class="mt-2 pt-4 mb-4  text-center fw-bold h-font">OUR FACILITIES</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                     <img src="/images/features/f3.svg" width="80px">
                     <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="/images/features/f5.svg" width="80px">
                    <h5 class="mt-3">Air conditioner</h5>
               </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                     <img src="/images/features/f1.svg" width="80px">
                     <h5 class="mt-3">Television</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="/images/features/f2.svg" width="80px">
                    <h5 class="mt-3">Heater</h5>
               </div>
               <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="/images/features/f4.svg" width="80px">
                <h5 class="mt-3">Massage</h5>
               </div>
               <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Facilities >>></a> 
               </div>
            </div>
        </div>
        </div>
     <!-- Testimonials -->
     <h2 class="mt-2 pt-4 mb-4  text-center fw-bold h-font">TESTIMONIALS</h2>
     <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <!-- test1 -->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center mb-3">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                     
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
              <!-- test2 -->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center p-4">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                     
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
              <!-- test 3 -->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center p-4">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                    
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
              <!-- test 4 -->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center p-4">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                    
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                 </div>
              </div>
              <!-- test 5-->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center p-4">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                    
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        
     </div>
     

    </div>
    <!-- Reach us -->
    <h2 class="mt-2 pt-4 mb-4  text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9167084301002!2d36.876638974709394!3d-1.218089135554836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f15f826d2697b%3A0x283746033cb1b5a5!2sUnited%20States%20International%20University%20Africa!5e0!3m2!1sen!2ske!4v1728632094684!5m2!1sen!2ske"  loading="lazy" ></iframe>

            </div>
            <div class="col-lg-4 col-md-4">
               <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +254796632214" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>(254) 796632214
                    </a>
               </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> &nbsp; Facebook
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter-x"></i>&nbsp; twitter-x
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> &nbsp; Instagram
                        </span>
                    </a>
                    
             
               </div>
            </div>
        </div>
    </div>
    
 
    <?php require('inc/footer.php'); ?>

   
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop:"true",
        autoplay:{
            delay:3500,
            disableOnInteraction:false
        }
    
        });
  
     var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320: {
           slidesPerView:1,
        },
        640: {
           slidesPerView:1,
        },
        768: {
           slidesPerView:2,
        },
        1024: {
           slidesPerView:3,
        }
      }
     });
  </script>
</body>
</html>