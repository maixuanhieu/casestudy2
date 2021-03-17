<?php 
if(isset($_SESSION['message'])){
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}
?>
<table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Trả về chuỗi HTML
    function makeProductRow($category, $no = null)
    {
      return '<tr class="">
      <th class="align-middle" scope="row">' . $no . '</th>
      <td class="align-middle">' . $category->name . '</td>
      </td>
    </tr> 
      ';
    }

    foreach ($categories as $key => $category) {
      echo makeProductRow($category, $key + 1);
    }
    ?>
  
    <!-- FAB CREATE CATEGORY LINK -->
    <a class="fab-button-mid-bot btn btn-primary btn-lg" type="button" href="?controller=categories&action=add">+ Add new Category</a>