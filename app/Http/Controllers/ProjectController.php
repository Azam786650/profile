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
Key Functions and Features
A REMS typically offers tools for: 
Tenant Management:
Storing and managing tenant information, tracking applications, and handling communication. 
Lease Management:
Automating lease renewals, managing digital contracts, and tracking lease terms and expiration dates. 
Financial Management:
Tracking rental payments, managing expenses, generating financial reports, and integrating with accounting systems. 
Maintenance & Service Requests:
Receiving and tracking maintenance requests from tenants, scheduling repairs, and managing service providers. 
Lead & Sales Management:
Acquiring and managing qualified leads, tracking sales processes, and managing property inventory. 
Reporting & Analytics:
Providing powerful reporting and analytics to give property owners and managers insights into portfolio performance. 
Benefits of Using a REMS
Increased Efficiency:
Automates many manual tasks, freeing up property managers to focus on strategic tasks. 
Centralized Data:
Consolidates all property and tenant information into one place, eliminating the need for multiple spreadsheets and documents. 
Improved Communication:
Facilitates better communication between property managers and tenants through the platform. 
Enhanced Decision-Making:
Data-driven insights from comprehensive reporting help in making informed business decisions. 
Reduced Costs:
Optimizes operations and minimizes administrative overhead, leading to cost savings. ',
            'image' => 'storage/Estate.png',
        ],
        'eye' => [
            'title' => 'Mayo Hospital Eye Department (My First Project)',
            'description' => 'A hospital project developed with Laravel and MySQL.An eye department, also known as the Department of Ophthalmology, is a medical unit specializing in the care of eyes and vision, including the diagnosis, treatment, and surgery of various eye conditions. In Lahore, Pakistan, you can find eye departments and specialists at various institutions, including integrated hospitals like IMC Hospital, eye clinics like VisionX Laser and Eye Clinic, and public hospitals such as the one at King Edward Medical University.  
Services and Treatments
An eye department offers a range of services, including:
Diagnosis and treatment:
General and complex eye conditions are diagnosed and treated using medication, laser therapy, and surgical procedures. 
Eye surgery:
Ophthalmologists (eye specialists) perform surgery to address issues like cataracts, glaucoma, and other eye diseases. 
Vision correction:
Services may include prescriptions for glasses or contact lenses. 
Specialized care:
Some departments focus on specific areas of eye pathology, such as retina, glaucoma, or refractive surgery. 
Where to Find an Eye Department in Lahore
Hospital Eye Departments:
Look for comprehensive eye services at large hospitals. For example, Integrated Medical Care (IMC) Hospital is known for its ophthalmology services. 
Specialized Eye Clinics:
Clinics like VisionX Laser and Eye Clinic offer specialized eye care. 
Medical Universities and Public Hospitals:
Institutions such as King Edward Medical University and Azra Naheed Medical College house eye departments, often involved in both patient care and academic research. 
Online Doctor Directories:
Websites like Marham.pk allow you to find and book appointments with qualified eye specialists and visit specific hospitals listed on their platform. ',
            'image' => 'storage/Eye.png',
        ],
    ];

    if (!isset($projects[$slug])) {
        abort(404);
    }

    return view('projects.show', ['project' => $projects[$slug]]);
}

}
