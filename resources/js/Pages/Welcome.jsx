import React from "react";

import { Head, Link } from "@inertiajs/react";

export default function Welcome({ auth }) {
    return (
        <>
            <Head title="Home" />

            <div className="bg-gradient-to-r from-purple-500 to-blue-900 min-h-screen flex flex-col justify-center items-center text-white"></div>
        </>
    );
}
