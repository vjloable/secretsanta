<!DOCTYPE html>
<html style="height: 100%;">
<head>
  <title>Signup Form 📝</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/5d09c7d46f.js" crossorigin="anonymous"></script>
</head>
<body style="height: 100%;">
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">secretsanta🤫</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
            aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarID">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                
            </div>
        </div>
    </div>
  </nav>
  <i class="fa fa-arrow-left fa-2x p-3" aria-hidden="true"></i>
  <div class="container" style="min-height: 60%;display: flex;align-items: center;">
    <div class="card mx-auto" style="max-width: 600px; padding: 20px;">
      <div class="row no-gutters">
        <div class="col-md-4" style="min-height: 100%;display: flex;align-items: center;">
          <h2 class="card-title text-center">Signup Form</h2>
        </div>
        <div class="col-md-8">
          <form>
            <div class="form-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw pr-2"></i></span><label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
              
              <span class="input-group-addon"> <i class="fa fa-user pr-1" aria-hidden="true"></i></span><label for="name">Name:</label>
              <input type="text" class="form-control" id="text" name="text" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Confirm</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
