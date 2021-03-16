<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach(Cart::getItems() as $idx => $item) {
            $idx = $idx + 1;
            $name = $item->products->name;
            $price = $item->products->price;

            echo "<tr style='vertical-align: middle'>
                <th scope='row'>$idx</th>
                <td>$name</td>
                <td>$item->quantity</td>
                <td>$price</td>
                <td><a href='#'>Remove</a></td>
            </tr>";
        }
    ?>
  </tbody>
</table>