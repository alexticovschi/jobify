import React, { useState, useEffect } from "react";
import Hero from "../Hero/Hero";
import PopularCategories from "../PopularCategories/PopularCategories";
import RecentJobs from "../RecentJobs/RecentJobs";
import Banner from "../Banner/Banner";
import WhyUs from "../WhyUs/WhyUs";

function Home() {
    return (
        <>
            <Hero />
            <PopularCategories />
            <RecentJobs />
            <Banner />
            <WhyUs />
        </>
    );
}

export default Home;
