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
                                                    <Link to="/jobs">
                                                        For Candidates
                                                    </Link>
                                                </li>
                                                <li className="has-children">
                                                    <a href="#">
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
                                                    <a href="#">
                                                        <span className="bg-primary text-white py-3 px-4 rounded">
                                                            <span className="icon-plus mr-3"></span>
                                                            Post New Job
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
        </>
    );
};

export default Header;
