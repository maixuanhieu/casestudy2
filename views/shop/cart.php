<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <body class="bg-light">

      <div class="container">
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="/Image/s1team-re.jpg" alt="" width="200px" height="200px">
          <h2><b>CHECKOUT FORM</b></h2>
        </div>
        <div>
          <?php
          // var_dump(Cart::getItems());
          $total_price = 0;
          foreach (Cart::getItems() as $idx => $item) {
            $idx = $idx + 1;
            $name = $item->name;
            $price = $item->price;
            $qty = $item->quantity;
            $total_price += $price*$qty;
           
            echo "<tr style='vertical-align: middle'>
                <th scope='row'>$idx</th>
                <td>$name</td>
                <td>$item->quantity</td>
                <td>$price$</td>
                <td><a action='?controller=shop&action=delete' href='?controller=shop&action=delete&id=$item->id'>Remove</a></td>
            </tr>
            
            ";
          }
         
          ?>
          <?php
          echo " <tr style='vertical-align: middle'>
          <th scope='row'></th>
          <td><b>Total</b></td>
          <td></td>
          <td>$total_price$</td>
      </tr>
      
      ;"
           ?>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Checkout</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" id="Name" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" href="/view/list.php">CHECKOUT</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2012-2021 S1TEAM</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
      </div>
  </tbody>
</table>