<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Milan portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="projectBody">
<?php include_once 'navbar.php'; ?>

<div class="row justify-content-center my-5 mx-2 pt-5">
    <div class="col-12 col-md-10">
        <div class="card">
            <div class="card-header text-center projectHeader">
                Menetrendek Mobile application
            </div>
            <div class="card-body projectCard">
                <div class="row">
                    <div class="col-12 col-md-8 mb-5 pe-5">
                        <h3>Description:</h3>
                        <p class="card-text">
                            I created this mobile application for a university project. It can be used to view public transport
                            timetables. Through this project I learned how to use Intents, Activities, Views, Listeners,
                            the Firebase database and everything else needed to create a mobile app.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <p class="card-text">
                        <h3>Functions of the project:</h3>
                        <ul>
                            <li>Login & Signup</li>
                            <li>Google Auth for login</li>
                            <li>List timetables</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-12 col-md-8 mb-5">
                        <p class="card-text">
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> Java</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> Android Studio</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> Firebase</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> JavaScript</button>
                        </p>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-light btn-lg">GIT REPO</button>
                            <button type="button" class="btn btn-outline-light btn-lg">DEMO</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 mb-5">
                        <div class="card-img">
                            <img class="projectImages img-fluid mb-4" src="public/Menetrendek_4.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
