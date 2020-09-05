import React from "react";
import { Route, Switch } from "react-router-dom";
import Home from "./components/Home/Home";
import Jobs from "./components/Jobs/Jobs";
import Layout from "./components/Layout/Layout";

const Main = props => (
    <Layout>
        <Switch>
            <Route exact path="/" component={Home} />
            <Route exact path="/jobs" component={Jobs} />
        </Switch>
    </Layout>
);
export default Main;
