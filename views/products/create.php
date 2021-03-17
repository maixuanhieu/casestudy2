<script src="/assets/scripts/script.js"></script>

<form class="container" method="POST">
  <?php
  if (isset($_SESSION["message"])) {
    echo "<div class='alert alert-success' role='alert'>
      " . $_SESSION["message"] . "
    </div>";

    unset($_SESSION["message"]);
  }
  ?>

  <div class="row">
    <div id="left_form_col" class="col-md-7">
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name is required" required="" />
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Belong to category</label>
        <select class="form-control" name="category_id" id="exampleFormControlSelect1">

          <?php
          foreach ($categories as $category) {
            echo "<option value=$category->id>$category->name</option>";
          }
          ?>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input type="number" class="form-control" name="price" id="exampleFormControlInput1" placeholder="USD" />
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Quantity</label>
        <input type="number" class="form-control" name="quantity" id="exampleFormControlInput1" placeholder="" />
      </div>
    </div>
    <div class="col-md-5">
      <div id="choose-avatar" style="height: 344px">
        <button type="button" onclick="input_avatar.click()" class="btn btn-sm btn-light">
          Choose image
        </button>

        <input id="input_avatar" type="file" name="p_file" hidden="" />

        <!-- Thẻ để preview ảnh -->
        <input type="image" hidden="" id="avatar_preview" src="" />

        <!-- Thẻ input chứa nội dung của ảnh base64 -->
        <input id="avatar_url" name="image_url" type="text" hidden="" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>

    <textarea class="form-control" placeholder="Some information..." name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg btn-block">
      Store Product
    </button>
  </div>
</form>

<script>
  const leftFormCol = document.querySelector("#left_form_col");
  const avatarControl = document.querySelector("#choose-avatar");
  const avatarPreview = document.querySelector("#avatar_preview");
  const avatarUrl = document.querySelector("#avatar_url");

  const input_avatar = document.querySelector("#input_avatar");

  input_avatar.addEventListener("change", function() {
    readURL(this, avatarPreview, avatarUrl);
  });

  function refreshAvatarControlSize() {
    const height = leftFormCol.offsetHeight;
    // console.log(height);

    avatarControl.style.height = height + "px";
  }

  window.onload = () => {
    refreshAvatarControlSize();
  };

  window.onresize = () => {
    refreshAvatarControlSize();
  };
</script>