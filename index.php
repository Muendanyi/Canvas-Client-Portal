<?php
@include 'inc/header.php';
// @include 'config.php';
?>




<div id="carouselExampleDark" class="carousel carousel-light slide slide-on-screen" data-bs-ride="carousel" data-bs-pause="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
        <img src="bg-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Access Control </h5>
            <p>The purpose of access control is to reduce the security risk associated with unauthorized access to physical and logical systems. Access control is a critical component of security compliance programs because it ensures that security technology and access control policies are in place to protect sensitive information such as customer data.</p>
            <a class="text-dark" href=""><button class="py-2 px-3  btn-anm"> Online Demo </button></a>
            <a class="text-darka" href="https://www.canvasintelligence.com/get-in-touch/"><button class="py-2 px-3 btn-anm"> Contact Us  </button></a>
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="bg-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Metric Usage</h5>
            <p>Metrics are quantitative assessment measures that are commonly used for assessing, comparing, and tracking performance or production. In general, a collection of metrics will be used to create a dashboard that management or analysts will review on a regular basis in order to maintain performance assessments, opinions, and business strategies.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="bg-3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Freshdesk</h5>
            <p>Freshdesk converts email, web, phone, chat, and social requests into tickets and unifies ticket resolution across channels. Freshdesk also allows you to automate workflows, provide self-service, manage SLAs, and measure metrics, allowing you to stay on top of all things customer support.</p>
        </div>
        </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
</div>
<div class="container px-2">

        <div class="row  mt-lg-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h2 class="top-header"> Use PowerBI to gain insights into your day-to-day operations. </h2>
                <p class="py-3"> Get insight to critical component of security that determines who has access to specific data, easily track critical performance metrics and incorporate these insights into their operations and 
                    Use "support ticket" to describe a customer's interactions.
                </p>
                
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <img class="img-fluid" src="insights-img-v1.jpg" alt="Team Work" >
            </div>

        </div>
    
</div>

    <section class="px-lg-4">
        <div class="row mt-4 box-wrap ">
            <div class="col-lg-5">
                <h2> Gain insights, make better decisions—across your organization </h2>

            </div>
            <div class="col-lg-2 text-start box">
                <button class="btn text-start" id="access-btn"><img class="nav-icons" src="p1-icon-a.png" alt=" Access Control">
                <h6 class="py-2"> Get insights to Access Control in your organization</h6></button>
            </div>
            <div class="col-lg-2 box  mx-lg-1">
                <button class="btn text-start" id="metrics-btn"><img class="nav-icons" src="p1-icon-b.png" alt="Communication img">
                <h6 class="py-2"> Get insights to Usage across your organization</h6></button>
            </div>
            <div class="col-lg-2 box">
                <button class="btn text-start" id="freshdesk-btn"><img class="nav-icons" src="p1-icon-c.png" alt="freshdesk img">
                <h6 class="py-2"> Get insights to interactions in your organization</h6></button>
            </div>

        </div>
    </section>


    <section class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 mt-5">
                <div class="">
                    <img class="img-fluid screen-border height" src="bg-1.jpg" alt="" id="access-control-img" width="100%">
                    <img class="img-fluid screen-border height" src="bg-2.jpg" alt="" id="metrics-usage-img"  width="100%">
                    <img class="img-fluid screen-border height" src="bg-3.jpg" alt="" id="freshdesk-img"  width="100%">
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-12 mt-lg-5 text-start ">
                <div class="top" id="access-control-sec">
                  <h5 class=""> Get insights to Access Control in your organization</h5>  
                  <p> Access control is a critical component of security that determines who has access to specific data, apps, and resources and under what conditions.</p>
                </div>

                <div class="top" id="metrics-usage-sec">
                    <h5 class=""> Get insights to Usage across your organization</h5>  
                    <p> Access control is a critical component of security that determines who has access to specific data, apps, and resources and under what conditions.</p>
                  </div>

                  <div class="top" id="freshdesk-sec">
                    <h5 class=""> Get insights to support interactions in your organization</h5>  
                    <p> Access control is a critical component of security that determines who has access to specific data, apps, and resources and under what conditions.</p>
                  </div>
            </div>

        </div>
    </section>



    <!-- <section class="container" id="feed">
    <div class="px-5">    
        <div class="row mt-lg-5"> -->
            <!-- <div class=" col-lg-4 col-md-6 col-sm-12">
                <iframe class="roundedd" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcanvasintelligence&tabs=timeline&width=400&height=550&small_header=false&adapt_container_width=false&hide_cover=true&show_facepile=false&appId"
                 width="400" height="550" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div> -->

            <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6950443602506305536" height="500" width="400" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>   
            </div> -->

            <!-- <div class="col-lg-4 col-sm-6 col-sm-12">
                <iframe src="Power BI Blog—Updates and News _ Microsoft Power BI.html" width="400" height="550"></iframe>
            </div> -->
    <!-- </section> -->

    <section class="slide-on-screen gradient-color py-3">
        <div class="text-center">      
            <h2 class="py-2"> What Out Clients say about Us!!</h2>
        </div>
    <div class="container">
        <div class="row border  box-wrap gx-2 ">
            <div class="border grad-card box col-lg-4 col-md-6 col-sm-12 text-center py-3">
                <img class="round-img shadow-lg" src="Tsakani.JPG" alt="">
                <h5 class="py-1">Tsakani Sambo</h5>
                <p class="container">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac consequat arcu. Morbi tellus sem, varius ac mi sed, 
                    eleifend tristique neque. Cras at hendrerit nisi. Maecenas sit amet scelerisque arcu. Vivamus orci nunc, bibendum id 
                </p>
            <div class="h4">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
                <p>User Rating</p>
            </div>

            <div class="col-lg-4 grad-card  box col-md-6 col-sm-12 border text-center py-3">
                <img class="round-img shadow-lg" src="beauty-1.jpg" alt="">
                <h5 class="py-1">Beauty Noluthando</h5>
                <p class="container">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac consequat arcu. Morbi tellus sem, varius ac mi sed, 
                    eleifend tristique neque. Cras at hendrerit nisi. Maecenas sit amet scelerisque arcu. Vivamus orci nunc, bibendum id 
                </p>
            <div class="h4">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
                <p>User Rating</p>
            </div>

            <div class="col-lg-4   box col-md-6 col-sm-12 border text-center py-3">
                <img class="round-img shadow-lg" src="dakalo.JPG" alt="">
                <h5 class="py-1">Dakalo Nengwenani</h5>
                <p class="container">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac consequat arcu. Morbi tellus sem, varius ac mi sed, 
                    eleifend tristique neque. Cras at hendrerit nisi. Maecenas sit amet scelerisque arcu. Vivamus orci nunc, bibendum id 
                </p>
            <div class="h4">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
                <p>User Rating</p>
            </div>

            
        </div>

        
    </div>
    </section>
  


<script src="javascript.js"></script>
</body>
</html>