import React from "react";
import ReactDOMClient from "react-dom/client";
import { HomeCompleta } from "./screens/HomeCompleta";

const app = document.getElementById("app");
const root = ReactDOMClient.createRoot(app);
root.render(<HomeCompleta />);
