@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4">Career-Focused Education. Global Access. Canadian Standards.</h1>
        <p class="text-xl mb-8">Empowering Global Talent in Business, Health & Technology</p>
        <p class="text-lg max-w-4xl mx-auto mb-8">
            Welcome to Oxbridge College, a registered Ontario Private Career College (PCC) delivering career-driven, 
            skills-based education in business, healthcare, and technology.
        </p>
        <a href="/programs" class="bg-white text-blue-900 px-8 py-3 rounded-lg font-bold hover:bg-blue-50 inline-block">
            Explore Programs
        </a>
    </div>
</section>

<!-- Intro Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-lg text-gray-700 mb-8">
                Oxbridge College combines Canadian regulatory standards, industry-aligned curriculum, and practical 
                learning pathways to equip students with job-ready skills for local and global careers.
            </p>
        </div>
    </div>
</section>

<!-- Flexible Learning Options -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Flexible Learning Options</h2>
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="text-center p-6 border rounded-lg">
                <h3 class="font-bold text-xl mb-4">On-Campus Programs</h3>
                <p class="text-gray-600">Ontario, Canada – PCC approved</p>
            </div>
            <div class="text-center p-6 border rounded-lg">
                <h3 class="font-bold text-xl mb-4">Online Programs</h3>
                <p class="text-gray-600">Instructor-led via Oxbridge Global Services</p>
            </div>
            <div class="text-center p-6 border rounded-lg">
                <h3 class="font-bold text-xl mb-4">Blended & Hybrid</h3>
                <p class="text-gray-600">Flexible delivery formats</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">👉 Train today. Work tomorrow. Progress globally.</h2>
        <a href="/admissions" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 inline-block mt-4">
            Apply Now
        </a>
    </div>
</section>

<!-- Disclaimer -->
<section class="py-8 bg-gray-100">
    <div class="container mx-auto px-4">
        <p class="text-sm text-gray-600 text-center max-w-4xl mx-auto">
            ⚠️ Programs delivered under Oxbridge College are governed by the Ontario Career Colleges Act, 2005. 
            Only on-campus PCC-approved programs are eligible for Canadian credentials and study permits.
        </p>
    </div>
</section>
@endsection
