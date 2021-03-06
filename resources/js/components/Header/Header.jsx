import React from "react";
import { Link } from "react-router-dom";

const Header = () => {
    return (
        <>
            <div className="site-mobile-menu">
                <div className="site-mobile-menu-header">
                    <div className="site-mobile-menu-close mt-3">
                        <span className="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div className="site-mobile-menu-body"></div>
            </div>
            <div className="site-navbar-wrap js-site-navbar bg-white">
                <div className="container">
                    <div className="site-navbar bg-light">
                        <div className="py-1">
                            <div className="row align-items-center">
                                <div className="col-2">
                                    <h2 className="mb-0 site-logo">
                                        <Link to="/">
                                            <strong className="font-weight-bold">
                                                Jobify
                                            </strong>{" "}
                                        </Link>
                                    </h2>
                                </div>
                                <div className="col-10">
                                    <nav
                                        className="site-navigation text-right"
                                        role="navigation"
                                    >
                                        <div className="container">
                                            <div className="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                                <a
                                                    href="#"
                                                    className="site-menu-toggle js-menu-toggle text-black"
                                                >
                                                    <span className="icon-menu h3"></span>
                                                </a>
                                            </div>

                                            <ul className="site-menu js-clone-nav d-none d-lg-block">
                                                <li>
                                                    <Link to="/user/register">
                                                        For Candidates
                                                    </Link>
                                                </li>
                                                <li className="has-children">
                                                    <a href="/employer/register">
                                                        For Employees
                                                    </a>
                                                    <ul className="dropdown arrow-top">
                                                        <li>
                                                            <a href="#">
                                                                Category
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                Browse
                                                                Candidates
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                Post a Job
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                Employeer
                                                                Profile
                                                            </a>
                                                        </li>
                                                        <li className="has-children">
                                                            <a href="#">
                                                                More Links
                                                            </a>
                                                            <ul className="dropdown">
                                                                <li>
                                                                    <a href="#">
                                                                        Browse
                                                                        Candidates
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        Post a
                                                                        Job
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        Employeer
                                                                        Profile
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <Link to="/jobs">Jobs</Link>
                                                </li>
                                                <li>
                                                    {/* <a href="#">
                                                        <span className="bg-primary text-white py-3 px-4 rounded">
                                                            <span className="icon-plus mr-3"></span>
                                                            Post New Job
                                                        </span>
                                                    </a> */}
                                                    {/*  Button trigger modal */}
                                                    <a href="#">
                                                        <span
                                                            data-toggle="modal"
                                                            data-target="#exampleModal"
                                                            className="bg-primary text-white py-3 px-4 rounded"
                                                        >
                                                            <span className="icon-user mr-3"></span>
                                                            Login
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {/* -- Modal --> */}
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Modal title
                            </h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">...</div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default Header;
