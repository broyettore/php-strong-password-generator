<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- my css  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP Password</title>
</head>
<body>
    <!-- header  -->
    <header>
        <div class="container d-flex justify-content-between align-items-center py-3">
            <h1 class="fs-3">Php Pass</h1>
            <nav>
                <ul class="d-flex">
                    <li class="p-2 m-2">Services</li>
                    <li class="p-2 m-2">FAQ</li>
                    <li class="p-2 m-2 pe-0 me-0">Contact</li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header  -->
    
    <!-- main -->
    <main>
        <div class="container d-flex flex-column justify-content-center align-items-center p-4">
            <h2 class="fs-4 mb-3">Password Generator</h2>
            <fieldset class="mb-3">
                <form method="GET">
                    <select class="form-select ms-select mb-3" aria-label="Default select example" name="passWordType">
                        <option selected>Choose Password Strenght</option>
                        <option value="1">Weak</option>
                        <option value="2">Medium</option>
                        <option value="3">Strong</option>
                    </select>
                    <button type="submit" class="btn btn-primary ms-btn">Submit</button>
                </form>
            </fieldset>
            <div class="result">
                <h3 class="fs-5 mb-3">Password Generated</h3>
                <p></p>
            </div>
        </div>
    </main>
    <!-- /main -->
</body>
</html>