import React from "react";

const PopularCategories = () => {
    return (
        <div className="site-section">
            <div className="container">
                <div className="row">
                    <div className="col-md-6 mx-auto text-center mb-5 section-heading">
                        <h2 className="mb-5">Popular Categories</h2>
                    </div>
                </div>
                <div className="row">
                    <div
                        className="col-sm-6 col-md-4 col-lg-3 mb-3"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <a href="#" className="h-100 feature-item">
                            <span className="d-block icon flaticon-calculator mb-3 text-primary"></span>
                            <h2>Accounting / Finanace</h2>
                            <span className="counting">10,391</span>
                        </a>
                    </div>
                    <div
                        className="col-sm-6 col-md-4 col-lg-3 mb-3"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <a href="#" className="h-100 feature-item">
                            <span className="d-block icon flaticon-wrench mb-3 text-primary"></span>
                            <h2>Automotive Jobs</h2>
                            <span className="counting">192</span>
                        </a>
                    </div>
                    <div
                        className="col-sm-6 col-md-4 col-lg-3 mb-3"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >
                        <a href="#" className="h-100 feature-item">
                            <span className="d-block icon flaticon-worker mb-3 text-primary"></span>
                            <h2>Construction / Facilities</h2>
                            <span className="counting">1,021</span>
                        </a>
                    </div>
                    <div
                        className="col-sm-6 col-md-4 col-lg-3 mb-3"
                        data-aos="fade-up"
                        data-aos-delay="400"
                    >
                        <a href="#" className="h-100 feature-item">
                            <span className="d-block icon flaticon-telecommunications mb-3 text-primary"></span>
                            <h2>Telecommunications</h2>
                            <span className="counting">1,219</span>
                        </a>
                    </div>
                    <div
                        className="col-sm-6 col-md-4 col-lg-3 mb-3"
                        data-aos="fade-up"
                        data-aos-delay="500"
                    >
                        <a href="#" className="h-100 feature-item">
                            <span className="d-block icon flaticon-stethoscope mb-3 text-primary"></span>
                            <h2>Healthcare</h2>
                            <span className="counting">482</span>
                        </a>
                    </div>
                    <div
                        className="col-sm-6 col-md-4 col-lg-3 mb-3"
                        data-aos="fade-up"
                        data-aos-delay="600"
                    >
                        <a href="#" className="h-100 feature-item">
                            <span className="d-block icon flaticon-computer-graphic mb-3 text-primary"></span>
                            <h2>Design, Art &amp; Multimedia</h2>
                            <span className="counting">5,409</span>
                        </a>
                    </div>
                    <div
                        className="col-sm-6 col-md-4 col-lg-3 mb-3"
                        data-aos="fade-up"
                        data-aos-delay="700"
                    >
                        <a href="#" className="h-100 feature-item">
                            <span className="d-block icon flaticon-trolley mb-3 text-primary"></span>
                            <h2>Transportation &amp; Logistics</h2>
                            <span className="counting">291</span>
                        </a>
                    </div>
                    <div
                        className="col-sm-6 col-md-4 col-lg-3 mb-3"
                        data-aos="fade-up"
                        data-aos-delay="800"
                    >
                        <a href="#" className="h-100 feature-item">
                            <span className="d-block icon flaticon-restaurant mb-3 text-primary"></span>
                            <h2>Restaurant / Food Service</h2>
                            <span className="counting">329</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default PopularCategories;
