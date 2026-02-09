@extends('layouts.app')

@section('title', 'Programs')

@section('content')
<section class="bg-blue-900 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold">Our Programs</h1>
        <p class="mt-4 text-lg">All vocational programs offered in Ontario are approved under the Ontario Career Colleges Act, 2005.</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <!-- Healthcare Programs -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-blue-900">Healthcare & Wellness Programs</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-600">
                    <h3 class="font-bold text-xl mb-2">Personal Support Worker (PSW)</h3>
                    <p class="text-sm text-yellow-600 mb-2">⏳ Pending MCU Approval</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-600">
                    <h3 class="font-bold text-xl mb-2">Mental Health & Healthcare Essentials</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-600">
                    <h3 class="font-bold text-xl mb-2">Applied Healthcare Support Skills</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-600">
                    <h3 class="font-bold text-xl mb-2">Home Care & Mobility Assistant</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-600">
                    <h3 class="font-bold text-xl mb-2">Telehealth Support & Virtual Intake Assistant</h3>
                </div>
            </div>
            <p class="text-sm text-gray-600 mt-4">⚠️ All regulated healthcare programs are delivered strictly in accordance with Ontario regulatory requirements.</p>
        </div>

        <!-- Business Programs -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-blue-900">Business & Office Administration Programs</h2>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-600">
                    <h3 class="font-bold text-xl mb-2">Accounting & Business Information Administration (ABIA)</h3>
                    <p class="text-sm text-green-600 mb-2">✓ MCU Approved</p>
                    <p class="text-gray-600"><strong>Career Outcomes:</strong> Accounting Clerk, Administrative Assistant, Business Support Officer</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-600">
                    <h3 class="font-bold text-xl mb-2">Accounting & Payroll Administration</h3>
                    <p class="text-sm text-green-600 mb-2">✓ MCU Approved</p>
                    <p class="text-gray-600"><strong>Career Outcomes:</strong> Payroll Administrator, Accounting Assistant, HR Support Officer</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-600">
                    <h3 class="font-bold text-xl mb-2">Travel Consultant Certification Program</h3>
                    <p class="text-sm text-green-600 mb-2">✓ MCU Approved</p>
                    <p class="text-gray-600"><strong>Career Outcomes:</strong> Travel Consultant, Tourism Sales Advisor</p>
                </div>
            </div>
            
            <h3 class="text-xl font-bold mt-8 mb-4">Additional Certificates</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Office Administration & Computer Skills</li>
                <li>Customer Service & Call Centre Operations</li>
                <li>Job-Ready Professional Skills Certificate</li>
            </ul>
        </div>

        <!-- Technology Programs -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-blue-900">Technology & Digital Innovation Programs</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-600">
                    <h3 class="font-bold text-xl mb-2">Data Science Foundations</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-600">
                    <h3 class="font-bold text-xl mb-2">AI Fundamentals & Business Applications</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-600">
                    <h3 class="font-bold text-xl mb-2">Applied AI & Machine Learning</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-600">
                    <h3 class="font-bold text-xl mb-2">Professional Diploma in AI Deployment</h3>
                </div>
            </div>
            <p class="text-sm text-gray-600 mt-4">⚠️ Certain technology and professional programs may be delivered as non-vocational or continuing education offerings.</p>
        </div>

    </div>
</section>

<!-- Global Online Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-3xl font-bold mb-6 text-center">Global Online & International Delivery</h2>
        <p class="text-xl text-center mb-8 font-semibold">Study from Your Home Country. Graduate Globally.</p>
        <p class="text-gray-700 mb-6">
            Oxbridge College delivers instructor-led online and blended programs via Oxbridge Global Services Ltd, 
            inspired by internationally recognized education models.
        </p>
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h3 class="font-bold text-xl mb-4">International Academic Pathways</h3>
            <p class="mb-4">Through structured academic partnerships, graduates may advance to:</p>
            <ul class="list-disc list-inside space-y-2 mb-6">
                <li>Bachelor's degree programs</li>
                <li>Postgraduate and MBA programs</li>
                <li>On-campus, online, or blended study in Europe, Asia, and other regions</li>
            </ul>
            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p class="text-sm">📌 Oxbridge College does NOT award degrees</p>
                <p class="text-sm">📌 Degrees are issued exclusively by partner universities outside Canada</p>
                <p class="text-sm">📌 Admission to pathways is subject to partner university criteria</p>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-6">
            ⚠️ Online programs delivered via Oxbridge Global Services Ltd are non-PCC professional programs and do not confer Canadian credentials or diplomas.
        </p>
    </div>
</section>
@endsection
