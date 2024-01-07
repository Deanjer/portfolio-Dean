<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/projectdetails.css') }}">
    <title>Project {{ $project->title}}</title>
</head>

<body>
    <div class="main-container">
        <div class="top-bar">
            <a href="/">
                <button class="back-button">Back</button>
            </a>
        </div>
        <!-- <div class="detail-container"> -->
            <div class="project-grid">
                <div class="project-title-container">
                <div class="project-title">
                    <h2 class="project-cardtext-color">{{ $project->title }}</h2>
                </div>
                </div>
                    @if ($project->image)
                    <!-- <img src="{{ asset('storage/uploads/projects/' . $project->image) }}" alt="Project Image"> -->
                    <img class="project-image" src="https://placehold.co/400x500/png" alt="">
                    @endif

                <div class="project-short">
                    <p class="project-cardtext-color">{{ $project->short }}</p>
                </div>
                <div class="project-text">
                    <p class="project-cardtext-color">{{ $project->text }}</p>
                </div>

            </div>


        <!-- </div> -->
    </div>
</body>

</html>