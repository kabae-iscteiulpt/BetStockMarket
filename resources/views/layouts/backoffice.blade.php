<!doctype html>
<html lang="en">
  <head>
    <title>BackOffice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="jumbotron text-center">
      <h1>BackOffice for StockMarket</h1>
      <p>Use the BackOffice to insert or update the stock values!!</p> 
    </div>
      
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>Stock_ID</h3>
          <div class="form-group">
            <input type="number" class="form-control" id="stockID">
          </div>
          <button type="button" class="btn btn-primary" style= background-color:steelblue>Insert</button>
          <button type="button" class="btn btn-primary" style= background-color:steelblue>Update</button>
        </div>
        <div class="col-sm-4">
          <h3>Stock_Value</h3>
          <div class="form-group">
            <input type="number" class="form-control" id="stockValue">
          </div>
        </div>
      </div> 
    </div>
  </body>
</html>