@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="bg-blue-900 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold">About Oxbridge College</h1>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-3xl font-bold mb-6">Who We Are</h2>
        <p class="text-lg text-gray-700 mb-8">
            Oxbridge College of Business, Health & Technology is an Ontario-registered Private Career College, 
            governed by the Ontario Career Colleges Act, 2005. We specialize in applied, employment-focused education, 
            bridging the gap between academic knowledge and real-world workplace requirements.
        </p>

        <h2 class="text-3xl font-bold mb-6 mt-12">Educational Approach</h2>
        <ul class="list-disc list-inside text-lg text-gray-700 space-y-2 mb-8">
            <li>PCC regulatory compliance</li>
            <li>International best practices in online and blended learning</li>
            <li>Employer-informed, competency-based curriculum</li>
        </ul>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
            <div class="bg-blue-50 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Mission</h3>
                <p class="text-gray-700">
                    Deliver practical, career-focused education that prepares learners for employment success and 
                    long-term professional growth in high-demand industries.
                </p>
            </div>
            <div class="bg-blue-50 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Vision</h3>
                <p class="text-gray-700">
                    Become a globally recognized Canadian career college, known for accessible, flexible, and 
                    industry-relevant education pathways.
                </p>
            </div>
        </div>

        <h2 class="text-3xl font-bold mb-6 mt-12">Core Values</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="border-l-4 border-blue-600 pl-4">
                <h4 class="font-bold text-lg">Integrity & Regulatory Compliance</h4>
            </div>
            <div class="border-l-4 border-blue-600 pl-4">
                <h4 class="font-bold text-lg">Industry Relevance & Practical Learning</h4>
            </div>
            <div class="border-l-4 border-blue-600 pl-4">
                <h4 class="font-bold text-lg">Innovation in Education Delivery</h4>
            </div>
            <div class="border-l-4 border-blue-600 pl-4">
                <h4 class="font-bold text-lg">Inclusion & Accessibility</h4>
            </div>
            <div class="border-l-4 border-blue-600 pl-4">
                <h4 class="font-bold text-lg">Student Success & Employability</h4>
            </div>
        </div>
    </div>
</section>
@endsection
