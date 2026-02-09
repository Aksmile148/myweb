@extends('layouts.app')

@section('title', 'Admissions')

@section('content')
<section class="bg-blue-900 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold">Admissions</h1>
        <p class="mt-4 text-lg">Simple. Transparent. Supportive.</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="text-3xl font-bold mb-8 text-center">Application Process</h2>
        
        <div class="space-y-6">
            <div class="flex items-start">
                <div class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl mr-4 flex-shrink-0">1</div>
                <div>
                    <h3 class="font-bold text-xl mb-2">Submit an Online Application</h3>
                    <p class="text-gray-600">Complete our simple online application form with your personal and educational information.</p>
                </div>
            </div>
            
            <div class="flex items-start">
                <div class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl mr-4 flex-shrink-0">2</div>
                <div>
                    <h3 class="font-bold text-xl mb-2">Provide Required Documentation</h3>
                    <p class="text-gray-600">Submit your academic transcripts, identification, and any other required documents.</p>
                </div>
            </div>
            
            <div class="flex items-start">
                <div class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl mr-4 flex-shrink-0">3</div>
                <div>
                    <h3 class="font-bold text-xl mb-2">Receive Offer of Admission</h3>
                    <p class="text-gray-600">Our admissions team will review your application and send you an offer letter.</p>
                </div>
            </div>
            
            <div class="flex items-start">
                <div class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl mr-4 flex-shrink-0">4</div>
                <div>
                    <h3 class="font-bold text-xl mb-2">Confirm Enrollment</h3>
                    <p class="text-gray-600">Accept your offer and complete registration payment to secure your spot.</p>
                </div>
            </div>
            
            <div class="flex items-start">
                <div class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold text-xl mr-4 flex-shrink-0">5</div>
                <div>
                    <h3 class="font-bold text-xl mb-2">Begin Your Program</h3>
                    <p class="text-gray-600">Start your journey toward career success with Oxbridge College.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/contact" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-700 inline-block">
                Start Your Application
            </a>
        </div>
    </div>
</section>

<!-- International Students -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-3xl font-bold mb-8 text-center">International Students</h2>
        <p class="text-lg text-gray-700 mb-8 text-center">
            Oxbridge College welcomes students from Africa, Europe, Asia, and the Middle East.
        </p>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-xl mb-4">Student Support Services</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>✓ Study permit guidance (for approved PCC on-campus programs)</li>
                    <li>✓ Pre-arrival orientation</li>
                    <li>✓ Housing & settlement support</li>
                    <li>✓ Health insurance guidance</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-xl mb-4">Career Services</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>✓ Resume & cover letter development</li>
                    <li>✓ Interview preparation</li>
                    <li>✓ Job search coaching</li>
                    <li>✓ Employer referrals & networking</li>
                </ul>
            </div>
        </div>
        
        <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mt-8">
            <p class="text-sm">⚠️ Only approved on-campus vocational programs may be eligible for Canadian study permit purposes.</p>
        </div>
    </div>
</section>

<!-- Partnerships -->
<section class="py-16">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-3xl font-bold mb-8 text-center">Partnerships & Pathways</h2>
        <p class="text-gray-700 mb-8 text-center">Oxbridge College maintains partnerships with:</p>
        
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="text-center p-6 bg-blue-50 rounded-lg">
                <h3 class="font-bold mb-2">Employers</h3>
                <p class="text-sm text-gray-600">Aligned with industry needs</p>
            </div>
            <div class="text-center p-6 bg-blue-50 rounded-lg">
                <h3 class="font-bold mb-2">International Universities</h3>
                <p class="text-sm text-gray-600">For pathway progression</p>
            </div>
            <div class="text-center p-6 bg-blue-50 rounded-lg">
                <h3 class="font-bold mb-2">Training Providers</h3>
                <p class="text-sm text-gray-600">Professional development</p>
            </div>
        </div>
        
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h3 class="font-bold text-xl mb-4 text-center">Pathway Model</h3>
            <div class="flex flex-col items-center space-y-4">
                <div class="bg-blue-100 p-4 rounded-lg w-full max-w-md text-center">
                    Home Country Online Study – Oxbridge Global Services
                </div>
                <div class="text-2xl">↓</div>
                <div class="bg-blue-200 p-4 rounded-lg w-full max-w-md text-center">
                    Optional PCC On-Campus Programs – Canada
                </div>
                <div class="text-2xl">↓</div>
                <div class="bg-blue-300 p-4 rounded-lg w-full max-w-md text-center">
                    Partner Universities – Europe / Asia / Global
                </div>
                <div class="text-2xl">↓</div>
                <div class="bg-blue-400 text-white p-4 rounded-lg w-full max-w-md text-center">
                    International Degree Completion & Career Outcomes
                </div>
            </div>
        </div>
        
        <p class="text-sm text-gray-600 mt-6 text-center">
            📌 Pathway opportunities are subject to partner university and regulatory requirements
        </p>
    </div>
</section>
@endsection
