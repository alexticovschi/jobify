import React, { useState, useEffect } from "react";
import axios from "axios";

function Home() {
    const [jobs, setJobs] = useState([]);
    const [companies, setCompanies] = useState([]);

    useEffect(() => {
        axios.get("/api/jobs-and-companies").then(resp => {
            setJobs(resp.data.jobs);
            setCompanies(resp.data.companies);
        });
    }, []);

    console.log(jobs);

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <h1>Recent Jobs</h1>
                    <table className="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Position</th>
                                <th>Address</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {jobs.map(job => (
                                <tr key={job.id}>
                                    <td>{job.position}</td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    );
}

export default Home;
