<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $projects = [
            'estate' => [
                'title' => 'Real Estate Management System (University Project)',
                'description' => 'A Real Estate Management System (REMS) is a comprehensive software solution that centralizes and automates property and tenant management, including financial tracking, lease administration, maintenance requests, and reporting. By streamlining these processes into a single platform, it helps landlords, property managers, and real estate companies improve efficiency, reduce manual effort, enhance communication, and gain better insights into their property portfolios.

Key Functions and Features:
• Tenant Management – Store and manage tenant information, track applications, and handle communication.
• Lease Management – Automate renewals, manage contracts, and track lease terms and expiration dates.
• Financial Management – Track rental payments, manage expenses, generate reports, and integrate with accounting systems.
• Maintenance Requests – Receive and track service requests, schedule repairs, and manage vendors.
• Reporting & Analytics – Provide property owners and managers with data-driven insights.

Benefits:
• Increased efficiency and reduced manual workload.
• Centralized and accessible data management.
• Improved communication between managers and tenants.
• Data-driven decisions for better business performance.',
                'image' => 'Estate.png',
            ],

            'eye' => [
                'title' => 'Mayo Hospital Eye Department (My First Project)',
                'description' => 'Developed using Laravel and MySQL, this hospital project was built for an ophthalmology department to streamline patient data and improve management efficiency.

Key Features:
• Patient Record Management – Store and manage detailed patient information.
• Appointment Scheduling – Easy scheduling and doctor availability tracking.
• Reports & Analytics – Generate reports for treatments and visits.
• Secure Data Handling – Role-based authentication and access control.

The system enhances the workflow for doctors and administrators, reduces paperwork, and supports better patient care through digital record keeping.',
                'image' => 'Eye.png',
            ],

            'quicklink' => [
                'title' => 'Quicklink Payments',
                'description' => 'Quicklink Payments is a secure online payment and business management platform designed to simplify digital transactions for individuals and organizations. Built with Laravel, it combines clean UI, strong authentication, and efficient backend logic to ensure smooth and safe payments.

Key Features:
• Secure Payment Gateway – Encrypted payment processing with tokenization.
• User Dashboard – Manage transactions, invoices, and payment history.
• Admin Panel – Full control over user accounts, analytics, and payment records.
• Reporting & Insights – Real-time visual data for monitoring performance.
• Modern Design – Responsive and intuitive UI for all devices.

Tech Stack: Laravel, PHP, MySQL, Bootstrap, JavaScript.

Goal: To provide businesses with a fast, transparent, and reliable digital payment solution.',
                'image' => 'QLP.PNG',
            ],

            'mazar' => [
                'title' => 'Mazar Traders LLC',
                'description' => 'Mazar Traders LLC is an international trading company focused on importing, exporting, and distributing premium products across multiple industries. It emphasizes quality, trust, and global connectivity to ensure long-term client satisfaction.

Core Operations:
• Import & Export – Facilitating trade between global manufacturers and distributors.
• Wholesale Supply – Providing bulk trading and logistics solutions.
• Product Quality – Ensuring compliance with international standards.
• Global Partnerships – Building strong, sustainable relationships with clients and suppliers.

Core Values: Integrity, Quality, Reliability, and Global Reach.

Mission: To connect businesses worldwide through efficient trading, transparent communication, and innovative supply chain solutions.',
                'image' => 'MT.PNG',
            ],
        ];

        if (!isset($projects[$slug])) {
            abort(404);
        }

        return view('projects.show', ['project' => $projects[$slug]]);
    }
}
