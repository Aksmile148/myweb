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

<!-- Quick Links -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <a href="/programs" class="text-center p-8 border rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">📚</div>
                <h3 class="font-bold text-xl mb-2">Programs</h3>
                <p class="text-gray-600">Explore our career-focused programs</p>
            </a>
            <a href="/admissions" class="text-center p-8 border rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">✍️</div>
                <h3 class="font-bold text-xl mb-2">Apply Now</h3>
                <p class="text-gray-600">Start your application today</p>
            </a>
            <a href="/contact" class="text-center p-8 border rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">📞</div>
                <h3 class="font-bold text-xl mb-2">Contact Us</h3>
                <p class="text-gray-600">Get in touch with our team</p>
            </a>
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
@endsection
