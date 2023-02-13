<?php require_once("./components/header.php") ?>


<div class="container mt-4">
    <div class="row">
<!-- FORM TO ADD A NEW PRODUCT -->
<main class="form-signin col-4">
<form action="./traitementProducts.php" method="post" class="">
    <h1 class="h3 mb-3 fw-normal">Add new product</h1>

    <div class="form-floating">
      <input type="text" name="label" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Product label</label>
    </div>
    <div class="form-floating">
      <textarea type="text" name="description" class="form-control" id="floatingPassword" placeholder="description"></textarea>
      <label for="floatingPassword">description</label>
      
    </div>
    <div class="form-floating">
      <input type="text" name="price" class="form-control" id="floatingPassword" placeholder="price">
      <label for="floatingPassword">price</label>
    </div>
    <div class="form-floating">
      <input type="text" name="quantity" class="form-control" id="floatingPassword" placeholder="quantity">
      <label for="floatingPassword">quantity</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="newProduct">Add</button>
</form>
</main>


<!--  LIST OF THE NEW PRODUCT -->
<div class="table-responsive col-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Product ID</th>
              <th scope="col">Label</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Created By</th>
              <!-- <th scope="col">Modified By</th> -->
            </tr>
          </thead>
          <tbody>
            <!-- <tr>
              <td><?= $productID ?></td>
              <td><?= $label ?></td>
              <td><?= $description ?></td>
              <td><?= $price ?></td>
              <td><?= $quantity ?></td>
              <td><?= $userID ?></td>
            </tr> -->
          </tbody>
        </table>
      </div>

</div>
</div>
<?php require_once("./components/footer.php") ?>