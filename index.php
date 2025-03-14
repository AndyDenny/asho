<?php
require_once "functions.php";
use classes\First;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkShorter</title>
    <link href="favicon.svg" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/myscript.js"></script>
</head>
<body>
<header>
    
</header>
<content>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class='text-center'>Link Shorter</h1> 
            </div>
        </div>         
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="ajax/example.php" class="input-link-shorter">
                    <div class="mb-3"> 
                        <input type="text" class="form-control" id="dataInput" name="dataInput" placeholder="put you link here"> 
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark output-link-data"></div>
                    <button type="submit" class="btn btn-light">Send</button>
                    <span class="spinner-border text-primary spinner-border-sm spinner-data-input d-none" role="status" aria-hidden="true"></span>
                </form>
            </div>
        </div>
    </div>
</content>        
    <footer>
    
</footer>
</body>
</html>
