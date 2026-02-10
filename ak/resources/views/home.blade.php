@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="relative text-white py-20" style="background-image: url('{{ asset('images/school.jpg') }}'); background-size: cover; background-position: center; min-height: 500px;">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-5xl font-bold mb-4 drop-shadow-2xl">Career-Focused Education. Global Access. Canadian Standards.</h1>
        <p class="text-xl mb-8 drop-shadow-xl">Empowering Global Talent in Business, Health & Technology</p>
        <p class="text-lg max-w-4xl mx-auto mb-8 drop-shadow-xl">
            Welcome to Oxbridge College, a registered Ontario Private Career College (PCC) delivering career-driven, 
            skills-based education in business, healthcare, and technology.
        </p>
        <a href="/programs" class="bg-white text-blue-900 px-8 py-3 rounded-lg font-bold hover:bg-blue-50 inline-block shadow-2xl">
            Explore Programs
        </a>
    </div>
</section>

<!-- About Preview -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-3xl font-bold text-center mb-8">About Oxbridge College</h2>
        <p class="text-lg text-gray-700 text-center mb-6">
            Oxbridge College of Business, Health & Technology is an Ontario-registered Private Career College, 
            governed by the Ontario Career Colleges Act, 2005. We specialize in applied, employment-focused education.
        </p>
        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <div class="text-center">
                <h3 class="font-bold text-lg mb-2">Mission</h3>
                <p class="text-gray-600">Deliver practical, career-focused education for employment success</p>
            </div>
            <div class="text-center">
                <h3 class="font-bold text-lg mb-2">Vision</h3>
                <p class="text-gray-600">Become a globally recognized Canadian career college</p>
            </div>
            <div class="text-center">
                <h3 class="font-bold text-lg mb-2">Values</h3>
                <p class="text-gray-600">Integrity, Innovation, Inclusion & Student Success</p>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="/about" class="text-blue-600 font-semibold hover:underline">Learn More About Us →</a>
        </div>
    </div>
</section>

<!-- Featured Programs -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Programs</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="border rounded-lg p-6 hover:shadow-lg transition">
                <h3 class="font-bold text-xl mb-3 text-blue-900">Healthcare Programs</h3>
                <ul class="text-gray-700 space-y-2 mb-4">
                    <li>• Personal Support Worker (PSW)</li>
                    <li>• Mental Health & Healthcare Essentials</li>
                    <li>• Telehealth Support Assistant</li>
                </ul>
                <a href="/programs" class="text-blue-600 font-semibold hover:underline">View All Healthcare Programs →</a>
            </div>
            <div class="border rounded-lg p-6 hover:shadow-lg transition">
                <h3 class="font-bold text-xl mb-3 text-blue-900">Business Programs</h3>
                <ul class="text-gray-700 space-y-2 mb-4">
                    <li>• Accounting & Business Administration</li>
                    <li>• Accounting & Payroll Administration</li>
                    <li>• Travel Consultant Certification</li>
                </ul>
                <a href="/programs" class="text-blue-600 font-semibold hover:underline">View All Business Programs →</a>
            </div>
            <div class="border rounded-lg p-6 hover:shadow-lg transition">
                <h3 class="font-bold text-xl mb-3 text-blue-900">Technology Programs</h3>
                <ul class="text-gray-700 space-y-2 mb-4">
                    <li>• Data Science Foundations</li>
                    <li>• AI Fundamentals & Applications</li>
                    <li>• Applied AI & Machine Learning</li>
                </ul>
                <a href="/programs" class="text-blue-600 font-semibold hover:underline">View All Technology Programs →</a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Get Started Today</h2>
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <a href="/programs" class="text-center p-8 bg-white border rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">📚</div>
                <h3 class="font-bold text-xl mb-2">Programs</h3>
                <p class="text-gray-600">Explore our career-focused programs</p>
            </a>
            <a href="/admissions" class="text-center p-8 bg-white border rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">✍️</div>
                <h3 class="font-bold text-xl mb-2">Apply Now</h3>
                <p class="text-gray-600">Start your application today</p>
            </a>
            <a href="/contact" class="text-center p-8 bg-white border rounded-lg hover:shadow-lg transition">
                <div class="text-4xl mb-4">📞</div>
                <h3 class="font-bold text-xl mb-2">Contact Us</h3>
                <p class="text-gray-600">Get in touch with our team</p>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-3xl font-bold text-center mb-12">Why Choose Oxbridge College?</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="flex items-start">
                <div class="text-3xl mr-4">✓</div>
                <div>
                    <h3 class="font-bold text-lg mb-2">Ontario PCC Approved</h3>
                    <p class="text-gray-700">Registered and regulated under Ontario Career Colleges Act, 2005</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="text-3xl mr-4">✓</div>
                <div>
                    <h3 class="font-bold text-lg mb-2">Flexible Learning</h3>
                    <p class="text-gray-700">On-campus, online, and blended delivery options available</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="text-3xl mr-4">✓</div>
                <div>
                    <h3 class="font-bold text-lg mb-2">Career-Focused</h3>
                    <p class="text-gray-700">Industry-aligned curriculum designed for job-ready skills</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="text-3xl mr-4">✓</div>
                <div>
                    <h3 class="font-bold text-lg mb-2">Global Pathways</h3>
                    <p class="text-gray-700">International university partnerships for degree progression</p>
                </div>
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
@endsection
