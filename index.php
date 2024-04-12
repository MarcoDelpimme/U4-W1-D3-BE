
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search" action="process_search.php" method="get">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_query">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    <form class="text-center" action="process_form.php" method="post">
        <h1>ADD USER TO LIST</h1>
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name </label>
            <input type="text" class="form-control" id="exampleInputName1" name="name" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputSurname1" class="form-label">Surname</label>
            <input type="text" class="form-control" id="exampleInputSurname1" name="surname">
        </div>
        <div class="mb-3">
            <label for="exampleInputAge1" class="form-label">Age</label>
            <input type="number" class="form-control" id="exampleInputAge1" name="age">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="mt-3">
        <a href="http://localhost/U4-W1-D3-BE/userlist.php" class="btn btn-info">Show user LIST</a>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>