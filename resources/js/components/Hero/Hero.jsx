import React from "react";

const Hero = () => {
    return (
        <div
            className="site-blocks-cover overlay"
            style={{ backgroundImage: "url('external/images/hero_1.jpg')" }}
            data-aos="fade"
            data-stellar-background-ratio="0.5"
        >
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-12" data-aos="fade">
                        <h1>Find Job</h1>
                        <form action="#">
                            <div className="row mb-3">
                                <div className="col-md-9">
                                    <div className="row">
                                        <div className="col-md-6 mb-3 mb-md-0">
                                            <input
                                                type="text"
                                                className="mr-3 form-control border-0 px-4"
                                                placeholder="job title, keywords or company name "
                                            />
                                        </div>
                                        <div className="col-md-6 mb-3 mb-md-0">
                                            <div className="input-wrap">
                                                <span className="icon icon-room"></span>
                                                <input
                                                    type="text"
                                                    className="form-control form-control-block search-input  border-0 px-4"
                                                    id="autocomplete"
                                                    placeholder="city, province or region"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-md-3">
                                    <input
                                        type="submit"
                                        className="btn btn-search btn-primary btn-block"
                                        value="Search"
                                    />
                                </div>
                            </div>
                            <div className="row">
                                <div className="col-md-12">
                                    <p className="small">
                                        or browse by category:{" "}
                                        <a href="#" className="category">
                                            Category #1
                                        </a>{" "}
                                        <a href="#" className="category">
                                            Category #2
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Hero;
