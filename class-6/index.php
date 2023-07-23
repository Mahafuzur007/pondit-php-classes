<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Home Page</title>
</head>
<body>
  <div class="container my-5">
  <a href="./table.php" class="btn btn-primary mb-3">List</a>

  <form action="./store.php" method="post">
    <div class="mb-3">
      <label class="form-label">Student Name</label>
      <input type="text" class="form-control" placeholder="Enter Student Name" name="name">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Enter ID</label>
      <input type="text" class="form-control" placeholder="Enter Student ID" name="id">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Class</label>
      <input type="text" class="form-control" placeholder="" name="class">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Phone Number</label>
      <input type="text" class="form-control" placeholder="" name="number">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
</body>
</html>