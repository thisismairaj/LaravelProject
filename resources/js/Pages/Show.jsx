import React, { useState } from "react";

export default function Welcome({ name }) {
    return (
        <>
            <h1>Welcome</h1>
            <p>Hello {name}, welcome to your first Inertia app!</p>
        </>
    );
}
