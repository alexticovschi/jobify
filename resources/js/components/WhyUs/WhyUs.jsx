import React from "react";

const WhyUs = () => {
    return (
        <div className="site-section site-block-feature bg-light">
            <div className="container">
                <div className="text-center mb-5 section-heading">
                    <h2>Why Choose Us</h2>
                </div>

                <div className="d-block d-md-flex border-bottom">
                    <div
                        className="text-center p-4 item border-right"
                        data-aos="fade"
                    >
                        <span className="flaticon-worker display-3 mb-3 d-block text-primary"></span>
                        <h2 className="h4">More Jobs Every Day</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Obcaecati reprehenderit explicabo quos fugit
                            vitae dolorum.
                        </p>
                        <p>
                            <a href="#">
                                Read More{" "}
                                <span className="icon-arrow-right small"></span>
                            </a>
                        </p>
                    </div>
                    <div className="text-center p-4 item" data-aos="fade">
                        <span className="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
                        <h2 className="h4">Creative Jobs</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Obcaecati reprehenderit explicabo quos fugit
                            vitae dolorum.
                        </p>
                        <p>
                            <a href="#">
                                Read More{" "}
                                <span className="icon-arrow-right small"></span>
                            </a>
                        </p>
                    </div>
                </div>
                <div className="d-block d-md-flex">
                    <div
                        className="text-center p-4 item border-right"
                        data-aos="fade"
                    >
                        <span className="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
                        <h2 className="h4">Healthcare</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Obcaecati reprehenderit explicabo quos fugit
                            vitae dolorum.
                        </p>
                        <p>
                            <a href="#">
                                Read More{" "}
                                <span className="icon-arrow-right small"></span>
                            </a>
                        </p>
                    </div>
                    <div className="text-center p-4 item" data-aos="fade">
                        <span className="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
                        <h2 className="h4">Finance &amp; Accounting</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Obcaecati reprehenderit explicabo quos fugit
                            vitae dolorum.
                        </p>
                        <p>
                            <a href="#">
                                Read More{" "}
                                <span className="icon-arrow-right small"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default WhyUs;
