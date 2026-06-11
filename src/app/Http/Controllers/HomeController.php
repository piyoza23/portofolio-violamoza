<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certification;
use App\Models\Testimonial;
use App\Models\SocialLink;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [

            'profile' => Profile::first(),

            'skills' => Skill::all(),

            'services' => Service::all(),

            'projects' => Project::latest()->get(),

            'experiences' => Experience::latest()->get(),

            'educations' => Education::latest()->get(),

            'certifications' => Certification::latest()->get(),

            'testimonials' => Testimonial::latest()->get(),

            'socialLinks' => SocialLink::all(),

        ]);
    }
}