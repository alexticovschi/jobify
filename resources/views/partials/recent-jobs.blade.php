 <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Recent Jobs</h2>
            <div class="rounded border jobs-wrap">

              {{-- <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>Restaurant Crew</h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span> Resto Bar</div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> Florida</div>
                      <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info">Full Time</span>
                  </div>
                </div>  
              </a> --}}

              @foreach($jobs as $job)
                <a href="#" class="job-item d-block d-md-flex align-items-center freelance">
                  <div class="company-logo blank-logo text-center text-md-left pl-3">
                    <img src="images/logo_1.png" alt="Image" class="img-fluid mx-auto">
                  </div>
                  <div class="job-details h-100">
                    <div class="p-3 align-self-center">
                      <h3>{{$job->position}}</h3>
                      <div class="d-block d-lg-flex">
                        <div class="mr-3"><span class="icon-suitcase mr-1"></span> {{$job->company->cname}}</div>
                        <div class="mr-3"><span class="icon-room mr-1"></span> Anywhere</div>
                        <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                      </div>
                    </div>
                  </div>
                  <div class="job-category align-self-center">
                    <div class="p-3">
                      <span class="text-warning p-2 rounded border border-warning">{{$job->type}}</span>
                    </div>
                  </div>  
                </a>
              @endforeach

            </div>

            <div class="col-md-12 text-center mt-5">
              <a href="#" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Show More Jobs</a>
            </div>
          </div>
        </div>
      </div>
    </div>