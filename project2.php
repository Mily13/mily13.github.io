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
                Blog Laravel Website
            </div>
            <div class="card-body projectCard">
                <div class="row">
                    <div class="col-12 col-md-8 mb-5 pe-5">
                        <h3>Description:</h3>
                        <p class="card-text">
                            I learned how to use Laravel by creating this website. The website uses a SQLite database. All
                            basic database operations have been implemented, including creation, modification, deletion and
                            queries. Server side validation of all CRUD operations has been implemented. A basic frontend using
                            Bootstrap has been created. All the Blog entries created are listed on a single page, but each Blog
                            also has its own page where all the content can be read. Blog posts can be tagged with tags, which
                            can be used to filter the Blogs (sports, domestic, tech etc...). The creation of tags for Blogs
                            works dynamically with a Select2 implementation.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <p class="card-text">
                        <h3>Functions of the project:</h3>
                        <ul>
                            <li>CRUD & input validation</li>
                            <li>SQLite database</li>
                            <li>MVC pattern</li>
                            <li>Select2 dinamic tag creation</li>
                            <li>Filtering by tag</li>
                            <li>Listing blogs</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-12 col-md-8 mb-5">
                        <p class="card-text">
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> PHP</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> Laravel</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> SQLite</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> Select2</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> HTML</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> CSS</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> BootStrap5</button>
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
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Blog_Laravel_1.png" alt="img">
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Blog_Laravel_2.png" alt="img">
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Blog_Laravel_3.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
