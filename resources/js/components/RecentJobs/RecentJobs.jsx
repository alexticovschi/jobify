import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import axios from "axios";

const RecentJobs = () => {
    const [jobs, setJobs] = useState([]);

    useEffect(() => {
        axios.get("/api/jobs-and-companies").then(resp => {
            setJobs(resp.data.jobs);
        });
    }, []);

    console.log(jobs);
    return (
        <div className="site-section bg-light">
            <div className="container">
                <div className="row">
                    <div
                        className="col-md-12 mb-5 mb-md-0"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <h2 className="mb-5 h3">Recent Jobs</h2>
                        <div className="rounded border jobs-wrap">
                            {jobs.map(job => (
                                <Link
                                    to={`/jobs/${job.id}/${job.slug}`}
                                    key={job.id}
                                    className="job-item d-block d-md-flex align-items-center  border-bottom fulltime"
                                >
                                    <div className="company-logo blank-logo text-center text-md-left pl-3">
                                        <img
                                            src="external/images/company_logo_blank.png"
                                            alt="Image"
                                            className="img-fluid mx-auto"
                                        />
                                    </div>
                                    <div className="job-details h-100">
                                        <div className="p-3 align-self-center">
                                            <h3>{job.position}</h3>
                                            <div className="d-block d-lg-flex">
                                                <div className="mr-3">
                                                    <span className="icon-suitcase mr-1"></span>{" "}
                                                    Resto Bar
                                                </div>
                                                <div className="mr-3">
                                                    <span className="icon-room mr-1"></span>{" "}
                                                    Florida
                                                </div>
                                                <div>
                                                    <span className="icon-money mr-1"></span>{" "}
                                                    $55000 &mdash; 70000
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="job-category align-self-center">
                                        <div className="p-3">
                                            <span className="text-info p-2 rounded border border-info">
                                                Full Time
                                            </span>
                                        </div>
                                    </div>
                                </Link>
                            ))}

                            {/* <a
                                href="#"
                                className="job-item d-block d-md-flex align-items-center freelance"
                            >
                                <div className="company-logo blank-logo text-center text-md-left pl-3">
                                    <img
                                        src="external/images/logo_1.png"
                                        alt="Image"
                                        className="img-fluid mx-auto"
                                    />
                                </div>
                                <div className="job-details h-100">
                                    <div className="p-3 align-self-center">
                                        <h3>JavaScript Fullstack Developer</h3>
                                        <div className="d-block d-lg-flex">
                                            <div className="mr-3">
                                                <span className="icon-suitcase mr-1"></span>{" "}
                                                Cooper
                                            </div>
                                            <div className="mr-3">
                                                <span className="icon-room mr-1"></span>{" "}
                                                Anywhere
                                            </div>
                                            <div>
                                                <span className="icon-money mr-1"></span>{" "}
                                                $55000 &mdash; 70000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="job-category align-self-center">
                                    <div className="p-3">
                                        <span className="text-warning p-2 rounded border border-warning">
                                            Freelance
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a
                                href="#"
                                className="job-item d-block d-md-flex align-items-center freelance"
                            >
                                <div className="company-logo blank-logo text-center text-md-left pl-3">
                                    <img
                                        src="external/images/logo_1.png"
                                        alt="Image"
                                        className="img-fluid mx-auto"
                                    />
                                </div>
                                <div className="job-details h-100">
                                    <div className="p-3 align-self-center">
                                        <h3>ReactJS Fullstack Developer</h3>
                                        <div className="d-block d-lg-flex">
                                            <div className="mr-3">
                                                <span className="icon-suitcase mr-1"></span>{" "}
                                                Cooper
                                            </div>
                                            <div className="mr-3">
                                                <span className="icon-room mr-1"></span>{" "}
                                                Anywhere
                                            </div>
                                            <div>
                                                <span className="icon-money mr-1"></span>{" "}
                                                $55000 &mdash; 70000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="job-category align-self-center">
                                    <div className="p-3">
                                        <span className="text-warning p-2 rounded border border-warning">
                                            Freelance
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a
                                href="#"
                                className="job-item d-block d-md-flex align-items-center fulltime"
                            >
                                <div className="company-logo blank-logo text-center text-md-left pl-3">
                                    <img
                                        src="external/images/company_logo_blank.png"
                                        alt="Image"
                                        className="img-fluid mx-auto"
                                    />
                                </div>
                                <div className="job-details h-100">
                                    <div className="p-3 align-self-center">
                                        <h3>Assistant Brooker, Real Estate</h3>
                                        <div className="d-block d-lg-flex">
                                            <div className="mr-3">
                                                <span className="icon-suitcase mr-1"></span>{" "}
                                                RealState
                                            </div>
                                            <div className="mr-3">
                                                <span className="icon-room mr-1"></span>{" "}
                                                New York
                                            </div>
                                            <div>
                                                <span className="icon-money mr-1"></span>{" "}
                                                $55000 &mdash; 70000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="job-category align-self-center">
                                    <div className="p-3">
                                        <span className="text-info p-2 rounded border border-info">
                                            Full Time
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <a
                                href="#"
                                className="job-item d-block d-md-flex align-items-center partime"
                            >
                                <div className="company-logo blank-logo text-center text-md-left pl-3">
                                    <img
                                        src="external/images/logo_2.png"
                                        alt="Image"
                                        className="img-fluid mx-auto"
                                    />
                                </div>
                                <div className="job-details h-100">
                                    <div className="p-3 align-self-center">
                                        <h3>Telecommunication Manager</h3>
                                        <div className="d-block d-lg-flex">
                                            <div className="mr-3">
                                                <span className="icon-suitcase mr-1"></span>{" "}
                                                Think
                                            </div>
                                            <div className="mr-3">
                                                <span className="icon-room mr-1"></span>{" "}
                                                London
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="job-category align-self-center">
                                    <div className="p-3">
                                        <span className="text-danger p-2 rounded border border-danger">
                                            Par Time
                                        </span>
                                    </div>
                                </div>
                            </a> */}
                        </div>

                        <div className="col-md-12 text-center mt-5">
                            <Link
                                to="/jobs"
                                className="btn btn-primary rounded py-3 px-5"
                            >
                                <span className="icon-plus-circle"></span> Show
                                More Jobs
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default RecentJobs;
