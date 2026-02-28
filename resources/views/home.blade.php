@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="hero-section text-center text-white py-5 mb-5">
    <h1 class="fw-bold display-6">
        Senior PHP, Laravel, Codeigniter & WordPress Developer
    </h1>
    <p class="lead">
        18+ Years Experience | API & AI Integration Specialist
    </p>
</div>
<section class="mt-5">
    <h2 class="text-center mb-4">Technical Skills</h2>

    <div class="skills-container text-center">

        <span class="skill-badge">PHP</span>
        <span class="skill-badge">Laravel</span>
        <span class="skill-badge">CodeIgniter</span>
        <span class="skill-badge">WordPress</span>
        <span class="skill-badge">WooCommerce</span>
        <span class="skill-badge">Core PHP</span>

        <span class="skill-badge">MySQL</span>
        <span class="skill-badge">MS SQL Server</span>
        <span class="skill-badge">REST API</span>
        <span class="skill-badge">API Integration</span>
        <span class="skill-badge">Cron Jobs</span>

        <span class="skill-badge">Payment Gateway Integration</span>
        <span class="skill-badge">Authorize.Net SDK</span>
        <span class="skill-badge">WooCommerce Payment Customization</span>

        <span class="skill-badge">OpenAI Integration</span>
        <span class="skill-badge">Leonardo AI</span>
        <span class="skill-badge">jQuery</span>
        <span class="skill-badge">AJAX</span>

        <span class="skill-badge">Technical Project Leadership</span>

    </div>
</section>
<section id="projects">
<h2 class="mb-4 text-center fw-bold">My Projects</h2>

<div class="row">
@foreach($projects as $project)
    <div class="col-md-4 mb-4">
        <div class="card project-card h-100 border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                <p class="card-text text-muted">{{ $project->description }}</p>
                <p><strong>Tech:</strong> {{ $project->technologies }}</p>

                @if($project->link)
                <a href="{{ $project->link }}" target="_blank" 
                   class="btn btn-gradient mt-2">
                    View Project
                </a>
                @endif
            </div>
        </div>
    </div>
@endforeach
</div>
</section>
<hr class="my-5">

<!-- CONTACT SECTION -->
<div class="contact-box p-4 text-center">
    <h2 class="fw-bold mb-3">Contact Me</h2>
    <p>Email: <a href="mailto:pinki.ajay.y@gmail.com">pinki.ajay.y@gmail.com</a></p>
    <p>LinkedIn: <a href="https://www.linkedin.com/in/pinki-yadav-334068141" target="_blank">LinkedIn Profile</a></p>
    <p>GitHub: <a href="https://github.com/pinkiyadav/pinkiyadav.github.io" target="_blank">GitHub Profile</a></p>
</div>

@endsection