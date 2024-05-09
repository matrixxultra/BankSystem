<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Client Espace</title>
</head>
<nav class="container mt-5">

   <a class="btn btn-primary" href="/virements">Affciher mes Virement </a>
   <a class="btn btn-primary"href="/virements/ajouter">Effectuer Virement</a>
   <a class="btn btn-primary"href="/retrait">Effectuer Retrait</a>
   <a class="btn btn-primary"href="/don/create">Effectuer Un Don</a>
   <a class="btn btn-primary"href="/dons">Afficher Mes Dons</a>
   <form action="/deconnect" method="post">
    @csrf
    <button class="btn btn-danger" >Logout</button>
   </form>

</nav>
<body>
@yield('main')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
