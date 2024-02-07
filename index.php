<?php
require __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>PW Generator</title>
</head>
<body>
       <h1 class="py-5 text-center title">STRONG PASSWORD GENERATOR</h1>
         
       <div class="container flex-column py-5">
        
            <form action="password.php" method="GET">
       
                <div class="col">
                    <label for="bcharactersNumber" class="form-label subtitle">Inserisci lunghezza caratteri della password generata.</label>
                    <div class="input-group mb-3 w-50 m-auto">
                        <input type="number" id="charactersNumber" name="charactersNumber" class="form-control text-center"  placeholder="Inserisci un numero">
                    </div>
                </div>

                <div class="col d-flex justify-content-center py-3">
                    <button class="btn btn-info" type="submit">GENERA</button>
                </div>
            </form>
    
        </div>

</body>
</html>
