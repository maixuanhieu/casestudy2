<div class="container">
    <div class="row">
        <?php
        foreach ($products as $product) {
            echo "<div class='card col-3' style='border: none'>
            <div style='height: 240px; box-sizing: border-box; display: flex; justify-content: center; align-items: center'>
                <img style='object-fit: cover; height: 100%;' src='$product->image_url' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title' style='text-overflow: ellipsis; overflow: hidden; white-space: nowrap'>$product->name</h5>
                <p class='card-text'>$$product->sell_price</p>
                <form action='?controller=shop&id=$product->id&action=addToCart' method='POST'>
                    <button type='submit' class='btn btn-primary'>Add to Cart</button>
                </form>
            </div>
        </div>
        ";
        }
        ?>
    </div>
</div>