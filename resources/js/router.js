import React from "react";
import { Route, Switch } from "react-router-dom";
import Home from "./components/Home/Home";
import Jobs from "./components/Jobs/Jobs";

const Main = props => (
    <Switch>
        <Route exact path="/" component={Home} />
        <Route exact path="/jobs" component={Jobs} />
    </Switch>
);
export default Main;
