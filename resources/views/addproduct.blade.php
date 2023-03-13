<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center my-5">Product</h1>
    <form  class="row g-3" method="post" action="">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Product</label>
          <input type="text" class="form-control" id="inputEmail4" name="p_name">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Categories</label>
          <input type="text" class="form-control" id="inputPassword4" name="p_cat">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Description</label>
          <textarea type="text" class="form-control" id="inputAddress" placeholder="Description" name="p_desc"></textarea>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Price</label>
            <input type="number" class="form-control" id="inputPassword4" name="price">
          </div>
          <input type="file" id="myFileInput" name="image">
          <!-- <img id="imgPreview" src="" alt="Preview"> -->
          <script>
              document.querySelector("#myFileInput").addEventListener("change", function() {
                  const reader = new FileReader();

                  reader.addEventListener("load", () => {
                      localStorage.setItem("recent-image", reader.result);
                  });
                  reader.readAsDataURL(this.files[0]);
              });

            //   document.addEventListener("DOMContentLoaded", () =>{
            //       const recentImageDataUrl = localStorage.getItem("recent-image");

            //       if(recentImageDataUrl) {
            //           document.querySelector("#imgPreview").setAttribute("Src", recentImageDataUrl);
            //       }
            //   })
          </script>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>