@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="bg-blue-900 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold">Contact Us</h1>
        <p class="mt-4 text-lg">We're here to help you start your educational journey</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold mb-6">Get In Touch</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="text-blue-600 text-2xl mr-4">📍</div>
                        <div>
                            <h3 class="font-bold mb-1">Address</h3>
                            <p class="text-gray-700">317A – 7300 Warden Ave<br>Markham, ON L3R 9Z6<br>Canada</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="text-blue-600 text-2xl mr-4">📞</div>
                        <div>
                            <h3 class="font-bold mb-1">Phone</h3>
                            <p class="text-gray-700">416-451-7778</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="text-blue-600 text-2xl mr-4">📧</div>
                        <div>
                            <h3 class="font-bold mb-1">Email</h3>
                            <p class="text-gray-700">info@oxbridgecollege.ca</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="text-blue-600 text-2xl mr-4">🌐</div>
                        <div>
                            <h3 class="font-bold mb-1">Follow Us</h3>
                            <p class="text-gray-700">Facebook | LinkedIn | Instagram</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold mb-6">Send Us a Message</h2>
                <form class="space-y-4">
                    <div>
                        <label class="block font-semibold mb-2">Full Name</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                    </div>
                    <div>
                        <label class="block font-semibold mb-2">Email</label>
                        <input type="email" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                    </div>
                    <div>
                        <label class="block font-semibold mb-2">Phone</label>
                        <input type="tel" class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    </div>
                    <div>
                        <label class="block font-semibold mb-2">Program of Interest</label>
                        <select class="w-full border border-gray-300 rounded-lg px-4 py-2">
                            <option>Select a program</option>
                            <option>Healthcare Programs</option>
                            <option>Business Programs</option>
                            <option>Technology Programs</option>
                            <option>General Inquiry</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-semibold mb-2">Message</label>
                        <textarea class="w-full border border-gray-300 rounded-lg px-4 py-2" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-700 w-full">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Policies Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-3xl font-bold mb-8 text-center">Policies & Student Protection</h2>
        <p class="text-center text-gray-700 mb-8">All policies comply with the Ontario Career Colleges Act, 2005.</p>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-lg mb-2">Student Complaint Resolution Policy</h3>
                <p class="text-sm text-gray-600">Fair and transparent process for addressing student concerns</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-lg mb-2">Sexual Violence & Harassment Policy</h3>
                <p class="text-sm text-gray-600">Zero tolerance policy ensuring safe learning environment</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-lg mb-2">Student Expulsion Policy</h3>
                <p class="text-sm text-gray-600">Clear guidelines for academic and conduct standards</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold text-lg mb-2">Privacy & Data Protection Policy</h3>
                <p class="text-sm text-gray-600">PIPEDA compliant data handling and protection</p>
            </div>
        </div>
    </div>
</section>

<!-- Regulatory Disclosure -->
<section class="py-16">
    <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-3xl font-bold mb-8 text-center">Regulatory Disclosure</h2>
        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-lg">
                <thead class="bg-blue-900 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Area</th>
                        <th class="px-6 py-3 text-left">Disclosure</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="px-6 py-4 font-semibold">Degrees</td>
                        <td class="px-6 py-4">Oxbridge College does not award degrees</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold">Online Programs</td>
                        <td class="px-6 py-4">Delivered via Oxbridge Global Services Ltd – non-PCC professional programs</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold">Pathways</td>
                        <td class="px-6 py-4">Offered via external partner universities</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold">Study Permits</td>
                        <td class="px-6 py-4">Only approved on-campus programs eligible</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold">Healthcare</td>
                        <td class="px-6 py-4">Delivered per Ontario regulatory requirements</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold">Certificates</td>
                        <td class="px-6 py-4">Career / vocational credentials only</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
