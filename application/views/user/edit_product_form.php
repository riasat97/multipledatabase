<div class="block-border">
    <div class="block-header">
        <h1>Purchase Product-
            <?php
            $exception=$this->session->userdata('exception');
            if(isset($exception))
            {
                echo $exception;
                $this->session->unset_userdata('exception');
            }
            ?>
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

    <form action="<?php echo base_url();?>super_user/update_product/<?php echo $product_info->created_at;?>" method="post">
        <p>
        <div>Product Code</div>
        <?php echo $product_info->product_code;?>
        </p>
        <p>
        <div>Product Name</div>
        <?php echo $product_info->product_name;?>
        </p>
        <p>
        <div>Product Price</div>
        <?php echo $product_info->product_price;?>
        </p>
        <p>
        <div>Unit Price</div>
        <?php echo $product_info->unit_price;?>
        </p>
        <input name="unit_price" class="required" type="hidden" value="<?php echo $product_info->unit_price;?>" >
         <p>
          <div>Purchase Price</div>

          <input name="purchase_price" type="number">
         </p>

        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
            </ul>
            <ul class="actions-right">
                <li><input type="submit" class="button" value="Purchase Product"></li>
            </ul>
        </div>
    </form>
</div>