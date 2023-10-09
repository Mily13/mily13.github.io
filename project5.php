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
                Qurridor AI - Java
            </div>
            <div class="card-body projectCard">
                <div class="row">
                    <div class="col-12 col-md-8 mb-5 pe-5">
                        <h3>Description:</h3>
                        <p class="card-text">
                            It was a university project to program AI to play the popular board game Quoridor. The game is
                            played on a board similar to a chess board, where the two players start from one side of the board
                            and the one who gets to the other side first wins. The player can choose to either move or build
                            a wall (to block the other). It is understood that the wall cannot be stepped over and cannot
                            completely block the path, i.e. it is not possible to build a wall that would make it impossible
                            to pass between the two sides of the board. I did my solution based on the A* search algorithm
                            in Java, which gave me a good result in the competition between students.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <p class="card-text">
                        <h3>Functions of the project:</h3>
                        <ul>
                            <li>AI chooses between building/moving</li>
                            <li>If moves it takes the shortest path</li>
                            <li>If builds where its the worst for the opponent</li>
                            <li>Decides not only on the consequence of the next step</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-12 col-md-8 mb-5">
                        <p class="card-text">
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> Java</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> AI</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> A* algorithm</button>
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
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Quoridor_1.jpg" alt="img">
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Quoridor_3.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
