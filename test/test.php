<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col text-center mt-3 mb-3">
            <h2>Contact Me</h2>
          </div>
        </div>
        <!-- Form -->
        <div class="row justify-content-center">
          <div class="col-10">
            <form action="send.php" method="post" target="_blank">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingNama" name="name" placeholder="name@example.com" required>
                <label for="floatingNama">Nama Lengkap</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Email" required>
                <label for="floatingEmail">Email</label>
              </div>
              <div class="form-floating mb-3">
                <textarea type="text" class="form-control" id="floatingPesan" name="message" placeholder="Pesan" style="height: 200px;" required></textarea>
                <label for="floatingPesan">Pesan</label>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
</body>
</html>