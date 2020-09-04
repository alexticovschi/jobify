import React, { useState, useEffect } from "react";

const index = () => {
    const [jobs, setJobs] = useState([]);

    useEffect(() => {
        axios.get("/api/jobs").then(resp => {
            setJobs(resp.data);
        });
    }, []);
    return <div>{JSON.stringify(jobs)}</div>;
};

export default index;
