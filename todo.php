<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Lista de tareas</title>
</head>

<body>

    <div class="container">
        <header class="text-center text-light my-4">
            <h1 class="mb-4">Lista de tareas</h1>
            <form class="search">
                <input type="text" class="form-control m-auto" name="search" placeholder="busca tus tareas..">
            </form>
        </header>

        <ul class="list-group todos mx-auto text-light">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <input type="checkbox">
                <span>comprar leche</span>
                <i class="far fa-trash-alt delete"></i>
                
            </li>
            
            
        </ul>

        <form class="add text-center my-4">
            <label class="text-light">agregar nuevas tareas...</label>
            <input type="text" class="form-control m-auto" name="add" placeholder="" />
        </form>
    </div>
   
</body>

</html>