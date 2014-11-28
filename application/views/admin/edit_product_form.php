<div class="block-border">
    <div class="block-header">
        <h1>Add Product items to sell
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

    <form action="<?php echo base_url();?>super_admin/update_product/<?php echo $product_info->created_at;?>" method="post">
        <p>
        <div>Product Code</div>
        <input name="product_code" type="text" value="<?php echo $product_info->product_code;?>">
        </p>
        <p>
        <div>Product Name</div>
        <input name="product_name" type="text"value="<?php echo $product_info->product_name;?>">
        </p>
        <p>
        <div>Product Price</div>
        <input name="product_price" type="number" value="<?php echo $product_info->product_price;?>">
        </p>
        <p>
        <div>Unit Price</div>
        <input name="unit_price" type="number" value="<?php echo $product_info->unit_price;?>">
        </p>
        <!-- <p>
          <div>Purchase Price</div>
          <input name="purchase_price" type="number">
        </p> -->

        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
            </ul>
            <ul class="actions-right">
                <li><input type="submit" class="button" value="Update Product"></li>
            </ul>
        </div>
    </form>
</div>