@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')
 <!-- Subscribe 2 -->
 <div class="modal fade" id="modal-subscribe-2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
  
            <div class="modal-body p-md-0">
              <div class="row no-gutters">
                <div class="col-md-4 col-xl-6 d-none d-md-flex bg-img rounded-left" style="background-image: url(https://www.intelligentsiacoffee.com/media/wysiwyg/cms/locations/Logan_Square/Logan-Square-THUMBNAIL.jpg);background-repeat:no-repeat;background-size:cover;background-position:center middle;"></div>
  
                <div class="col-md-8 col-xl-5 mx-auto">
                  <form class="py-7">
                    <h3><strong>you apply  to become : <br/>Barista</strong></h3>
                    <p>this position will be in Mall Plaza Senayan</p>
                    <hr class="w-10 mt-2 mb-2">
                    <div class="form-group">
                      <input class="form-control" type="text" name="NAME" placeholder="Your Name">
                    </div>
  
                    <div class="form-group">
                      <input class="form-control" type="email" name="EMAIL" placeholder="Your Email">
                    </div>
  
                    <button class="btn btn-lg btn-block btn-primary">Apply thhis position</button>
                  </form>
  
                  <hr>
  
               
                  </div>
  
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
@endsection

@section('content')

<section class="py-10 text-white bg-white " data-overlay="3"
    style="background-image: url('https://bluebottlecoffee.com/assets/our_coffee/bg-img-pouring-1388916512f1d5ee59ed7f28d191201dbc10a757739465a18f6c250e2fd91f24.jpg');background-repeat:no-repeat;background-size:cover;background-position:center ;">

</section>
<section class="section pt-5" id="section-open-positions">
        <div class="container">
          <header class="section-header">
          
            <h2>Open Positions</h2>
            <hr>
            <p class="lead">Following list displays our current required positions. This list will update regularly.</p>
          </header>


          <div class="accordion accordion-connected shadow-5" id="accordion-job">

            <div class="card">
              <h6 class="card-title">
                <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-1">
                  <strong class="mr-auto">Senior Analyst, Data Analytics</strong>
                  <span class="small text-lighter">San Francisco <i class="fa fa-map-marker ml-2"></i></span>
                </a>
              </h6>

              <div id="collapse-job-1" class="collapse" data-parent="#accordion-job">
                <div class="card-body">
                  <p>Use your extensive knowledge of JavaScript, HTML, and CSS to improve our web client, a complex in-browser application relied upon by millions of users every day. You will work with real-time data streams, engineer for performance across browsers, and delight people by making the best software we can imagine. You will collaborate closely with Product, Design, Application Engineering, and QA to spec, build, test and deploy new features. This position reports directly to the Director of Front-end Engineering.</p>

                  <hr class="w-100px">

                  <p class="text-center"><button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal-subscribe-2">Apply Now</button></p>
                </div>
              </div>
            </div>


            <div class="card">
              <h6 class="card-title">
                <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-2">
                  <strong class="mr-auto">Senior Front-end Engineer</strong>
                  <span class="small text-lighter">Remotely <i class="fa fa-map-marker ml-2"></i></span>
                </a>
              </h6>

              <div id="collapse-job-2" class="collapse" data-parent="#accordion-job">
                <div class="card-body">
                  <p>Use your extensive knowledge of JavaScript, HTML, and CSS to improve our web client, a complex in-browser application relied upon by millions of users every day. You will work with real-time data streams, engineer for performance across browsers, and delight people by making the best software we can imagine. You will collaborate closely with Product, Design, Application Engineering, and QA to spec, build, test and deploy new features. This position reports directly to the Director of Front-end Engineering.</p>

                  <hr class="w-100px">

                  <p class="text-center"><button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal-subscribe-2">Apply Now</button></p>
                </div>
              </div>
            </div>


            <div class="card">
              <h6 class="card-title">
                <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-3" aria-expanded="false">
                  <strong class="mr-auto">Lead Product Designer</strong>
                  <span class="small text-lighter">New York City <i class="fa fa-map-marker ml-2"></i></span>
                </a>
              </h6>

              <div id="collapse-job-3" class="collapse" data-parent="#accordion-job" style="">
                <div class="card-body">
                  <p>Use your extensive knowledge of JavaScript, HTML, and CSS to improve our web client, a complex in-browser application relied upon by millions of users every day. You will work with real-time data streams, engineer for performance across browsers, and delight people by making the best software we can imagine. You will collaborate closely with Product, Design, Application Engineering, and QA to spec, build, test and deploy new features. This position reports directly to the Director of Front-end Engineering.</p>

                  <hr class="w-100px">

                  <p class="text-center"><button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal-subscribe-2">Apply Now</button></p>
                </div>
              </div>
            </div>


            <div class="card">
              <h6 class="card-title">
                <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-4">
                  <strong class="mr-auto">Online Advertising Manager</strong>
                  <span class="small text-lighter">Toronto, Canada <i class="fa fa-map-marker ml-2"></i></span>
                </a>
              </h6>

              <div id="collapse-job-4" class="collapse" data-parent="#accordion-job">
                <div class="card-body">
                  <p>Use your extensive knowledge of JavaScript, HTML, and CSS to improve our web client, a complex in-browser application relied upon by millions of users every day. You will work with real-time data streams, engineer for performance across browsers, and delight people by making the best software we can imagine. You will collaborate closely with Product, Design, Application Engineering, and QA to spec, build, test and deploy new features. This position reports directly to the Director of Front-end Engineering.</p>

                  <hr class="w-100px">

                  <p class="text-center"><button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal-subscribe-2">Apply Now</button></p>
                </div>
              </div>
            </div>


            <div class="card">
              <h6 class="card-title">
                <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-5">
                  <strong class="mr-auto">Customer Support Manager</strong>
                  <span class="small text-lighter">San Francisco <i class="fa fa-map-marker ml-2"></i></span>
                </a>
              </h6>

              <div id="collapse-job-5" class="collapse" data-parent="#accordion-job">
                <div class="card-body">
                  <p>Use your extensive knowledge of JavaScript, HTML, and CSS to improve our web client, a complex in-browser application relied upon by millions of users every day. You will work with real-time data streams, engineer for performance across browsers, and delight people by making the best software we can imagine. You will collaborate closely with Product, Design, Application Engineering, and QA to spec, build, test and deploy new features. This position reports directly to the Director of Front-end Engineering.</p>

                  <hr class="w-100px">

                  <p class="text-center"><button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal-subscribe-2">Apply Now</button></p>
                </div>
              </div>
            </div>

          </div>


        </div>
      </section>
@endsection
