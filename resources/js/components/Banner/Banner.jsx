import React from "react";
import { Link } from "react-router-dom";

const Banner = () => {
    return (
        <div
            className="site-blocks-cover overlay inner-page"
            style={{ backgroundImage: 'url("external/images/hero_2.jpg")' }}
            data-aos="fade"
            data-stellar-background-ratio="0.5"
        >
            <div className="container">
                <div className="row align-items-center justify-content-center">
                    <div className="col-md-6 text-center" data-aos="fade">
                        <h1 className="h3 mb-0">Your Dream Job</h1>
                        <p className="h3 text-white mb-5">Is Waiting For You</p>
                        <p>
                            <Link
                                to="#"
                                className="btn btn-outline-warning py-3 px-4"
                            >
                                Find Jobs
                            </Link>{" "}
                            <Link
                                to="/jobs"
                                className="btn btn-warning py-3 px-4"
                            >
                                Apply For A Job
                            </Link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Banner;
