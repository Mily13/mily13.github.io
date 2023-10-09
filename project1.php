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
                Alkatrész nyilvántartó weboldal
            </div>
            <div class="card-body projectCard">
                <div class="row">
                    <div class="col-12 col-md-8 mb-5 pe-5">
                        <h3>Description:</h3>
                        <p class="card-text">This project was my Thesis. My task was to invent and develop a system that can be used
                            to handle and manage thausands of electric components used to build mechatronical projects.
                            The website capable of adding new parts modifying and deleting them. It is possible to assign one or
                            more article numbers to a part from different companies that sell parts. The management of Companies
                            and Article numbers is also solved, they can also be deleted. The website also lists parts that are
                            not in stock or are currently on order. Students have the opportunity to apply for one component.
                            A complex filter has been created to find parts. Each part has its own page, where you can see all
                            the data related to it, as well as the corresponding request and article number. You can also upload
                            a picture and technical data sheet for a component.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <p class="card-text">
                        <h3>Functions of the project:</h3>
                        <ul>
                            <li>CRUD for 8 DB tables </li>
                            <li>MVC pattern</li>
                            <li>User Roles & Authentication</li>
                            <li>Login & Signup</li>
                            <li>Filtering queries</li>
                            <li>Upload Images & Files</li>
                            <li>SQL Inj, CSRF, XSS, protection, Encription</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-12 col-md-8 mb-5">
                        <p class="card-text">
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> PHP</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> CodeIgniter4</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> MySQL</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> JavaScript</button>
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
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/List_alk.jpg" alt="img">
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/szures.jpg" alt="img">
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Alk_details.jpg" alt="img">
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Add_alk.jpg" alt="img">
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Regisztracio.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
