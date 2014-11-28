<h1>Inside muliple</h1>
<div class="block-header">
    <h1>Add Product
        <?php
        $message=$this->session->userdata('message');
        if(isset($message))
        {
            echo "--".$message;
            $this->session->unset_userdata('message');
        }
        ?>
    </h1>
    <span></span>
</div>

<form action="<?php echo base_url();?>super_admin/save_product" method="post">
  <p>
    <div>Product Code</div>
    <input name="product_code" type="text" >
  </p>
  <p>
    <div>Product Name</div>
    <input name="product_name" type="text">
  </p>
  <p>
    <div>Product Price</div>
    <input name="product_price" type="number" >
  </p>
  <p>
    <div>Unit Price</div>
    <input name="unit_price" type="number" >
  </p>
  <!-- <p>
    <div>Purchase Price</div>
    <input name="purchase_price" type="number">
  </p> -->
  <button type="submit">Save Product</button>
</form>