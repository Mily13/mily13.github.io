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
                Java 2D Raft game
            </div>
            <div class="card-body projectCard">
                <div class="row">
                    <div class="col-12 col-md-8 mb-5 pe-5">
                        <h3>Description:</h3>
                        <p class="card-text">
                            This is a 2D game in Java, inspired by the video game Raft. Our player tries to survive on a raft
                            in the middle of the sea by collecting resources from the sea. The materials can be used to build
                            tools needed to survive, such as a water purifier or an oven. All this is made difficult by a shark
                            hunting the player. The game can be started from a terminal and the keyboard can be used to move
                            the player.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <p class="card-text">
                        <h3>Functions of the game:</h3>
                        <ul>
                            <li>Move around</li>
                            <li>Collect resources</li>
                            <li>Build tools using resources</li>
                            <li>Refill your health (water & food)</li>
                            <li>Shark that hunts the player</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-12 col-md-8 mb-5">
                        <p class="card-text">
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> Java</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> OOP paradigm</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> JFrame</button>
                            <button type="button" class="btn btn-light mb-1"><i class="bi bi-tags-fill"></i> KeyListener</button>
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
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Raft_2.png" alt="img">
                            <img class="projectImages img-fluid mb-4 border border-white" src="public/Raft_1.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
