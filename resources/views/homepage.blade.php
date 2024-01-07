<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Portfolio</title>
</head>

<body>
    <div class="main-container">
        <header class="header">
            <a href="" class="logo">Dean Blok</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="#main">Home</a></li>
                <li><a href="#projects">Projecten</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#me">Over mij</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </header>
        <!-- Mainpage -->
        <div class="mainpage-container" id="main">
            <div class="main-left">
                <div class="main-left-container">
                    <h2 class="color-purple">Dean Blok.</h2>
                    <h2 class="color-purple">Webdevelopment.</h2>
                    <div class="animation-container">
                        <h2 data-text="Portfolio." class="h2-animate">Portfolio.</h2>
                    </div>
                </div>
            </div>
            <div class="main-right">
                <img class="main-right-img" src="{{ asset('img/browser-card.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="projects-container" id="projects">
        <div class="projects">
            @if ($projects->count() > 0)
            <div class="project-card-container">
                @foreach ($projects as $project)
                <div class="project-card">
                    <h2 class="project-cardtext-color">{{ $project->title }}</h2>
                    <p class="project-cardtext-color">{{ $project->short }}</p>
                    @if ($project->image)
                    <!-- <img src="{{ asset('storage/uploads/projects/' . $project->image) }}" alt="Project Image">  -->
                    <img class="project-image" src="https://placehold.co/400x500/png" alt="">
                    @endif
                    <a href="{{ route('project.detail', ['id' => $project->id]) }}"><button  class="project-details">Details</button></a>
                </div>
                @endforeach
            </div>
            @else
            <p>No projects available.</p>
            @endif

        </div>
    </div>
    <div class="skills-container" id="skills">
        <div class="left-skills">
            <div class="skill">
                <h2>HTML</h2>
            </div>
            <div class="skill">
                <h2>CSS 3</h2>
            </div>
            <div class="skill">
                <h2>Javascript</h2>
            </div>
        </div>
        <div class="projects-animation-container">
            <div class="screen-border">
                <div class="screen">
                    <h2>Skills</h2>
                </div>
            </div>
            <div class="screen-stand1"></div>
            <div class="screen-stand2"></div>
            <div class="screen-stand3"></div>
            <div class="computer">
                <div class="computer-left">
                    <div class="red-dot"></div>
                    <div class="computer-cd"></div>
                </div>
                <div class="computer-right">
                    <div class="computer-right-container">
                        <div class="computer-buttons"></div>
                        <div class="computer-buttons"></div>
                        <div class="computer-buttons-bottom computer-animation"></div>
                    </div>
                </div>
            </div>
            <div class="computer-stand"></div>
        </div>
        <div class="right-skills">
            <h2>PHP</h2>
            <h2>GIT</h2>
            <h2>Mysql</h2>
        </div>
    </div>
    <div class="aboutme-container" id="me">
        <div class="aboutme-left">
            <img src="https://placehold.co/400x500/png" alt="">
        </div>
        <div class="aboutme-right">
            <h2>Over mij</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="contact-container" id="contact">
    <i class='bx bxl-linkedin-square box-icons bx-lg'></i>
    <i class='bx bxs-envelope box-icons bx-lg'></i>
    <!-- <box-icon animation='tada-hover' color="white" type='logo' name='linkedin-square'></box-icon> -->
    </div>

    <script defer src="{{ asset('js/homepage.js') }}"></script>

</body>

</html>