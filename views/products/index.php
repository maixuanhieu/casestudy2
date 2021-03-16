<table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Product</th>
      <th scope="col" class="text-right pr-5">Price (USD)</th>
      <th scope="col" class="text-right pr-5">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
    // Trả về chuỗi HTML
    function makeProductRow($product, $no = null){
      return '<tr class="">
      <th class="align-middle" scope="row">'.$no.'</th>
      <td class="align-middle">'.$product->name.'</td>
      <td class="align-middle text-right pr-5">'.number_format($product->price, 2).'</td>
      <td class="align-middle text-right pr-5">'.number_format($product->quantity, 2).'</td>
      <td class="align-middle">'.$product->category.'</td>
      <td class="align-middle text-center">
        <a type="submit" class="btn btn-link" href="?controller=products&action=edit&id='.$product->id.'">Change</a>
        <form class="d-inline" onsubmit="return confirm(\"Do you want to remove'.$product->name.'"\)" action="?controller=products&action=delete&id='.$product->id.'" method="POST">
          <button type="submit" class="btn btn-link">Remove</button>
        </form>
      </td>
    </tr> 
      ';
      
    }
    
    foreach($products as $key => $product){
      echo makeProductRow($product, $key + 1);
    }
  ?>

   
  </tbody>
</table>

<!-- FAB CREATE PRODUCT LINK -->
<a class="fab-button-mid-bot btn btn-primary btn-lg" type="button" href="?controller=products&action=create">+ Add new Product</a>
<!-- END FAB CREATE PRODUCT LINK -->