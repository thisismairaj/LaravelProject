import React, { useState } from "react";

export default function Welcome({
    name,
    employee,
    attendances,
    people,
    totalWorkingHours,
}) {
    return (
        <div className="container">
            <h1 className="heading">
                {people.name} worked {totalWorkingHours} hrs total
            </h1>
            <div className="table-container">
                <table className="table">
                    <thead>
                        <th>Name</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Working Hours</th>
                    </thead>
                    <tbody>
                        {attendances.map((item, index) => (
                            <tr key={index}>
                                <td>{people.name}</td>
                                <td>{item.check_in}</td>
                                <td>{item.check_out}</td>
                                <td>{item.working_hours}</td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </div>
    );
}
