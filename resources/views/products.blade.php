<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">Coalition Products Test</h1>
        <div class="card mt-3" style="width: 50%; margin: 0 auto">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="productName">Product name</label>
                        <input type="text" class="form-control" id="productName">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity in stock</label>
                        <input type="number" class="form-control" id="quantity">
                    </div>
                    <div class="form-group">
                        <label for="price">Price per item</label>
                        <input type="number" class="form-control" id="price">
                    </div>
                    <button type="submit" class="btn btn-success ml-auto mt-3">Save</button>
                </form>
            </div>
        </div>

        <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price per item</th>
                <th scope="col">Datetime</th>
                <th scope="col">Total Value</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Test</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Otto</td>
                <td>Edit</td>
            </tr>
            <tr>
                <td>Test 2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Otto</td>
                <td>Edit</td>
            </tr>
            <tr>
                <td>Test 3</td>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>Edit</td>
            </tr>
        </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
