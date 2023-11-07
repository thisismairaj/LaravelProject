<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Import Excel File</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      

      <form method="post" action="/api/import" enctype="multipart/form-data">
        @csrf
        <label>Select file</label>
        <input type="file" name="file" class="form-control">
        <div class="mt-5">
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>