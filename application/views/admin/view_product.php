<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h1>View All Product Details</h1><span></span>
        </div>
        <div class="block-content">
            <table id="table-example" class="table">
                <thead>
                    <tr>
                        <th>product code</th>
                        <th>product name</th>
                        <th>product price</th>
                        <th>unit price</th>
                        <th>purchased price</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($all_product as $v_product )
                        {
                    ?>
                    <tr class="gradeX">
                        <td><?php echo $v_product->product_code?></td>
                        <td><?php echo $v_product->product_name?></td>
                        <td><?php echo $v_product->product_price?></td>
                        <td><?php echo $v_product->unit_price?></td>
                        <td><?php echo $v_product->purchase_price?></td>

                        <td class="center">
                            <a href="<?php echo base_url();?>super_admin/edit_product/<?php echo $v_product->created_at?>">Edit!</a>
                            <a href="<?php echo base_url();?>super_admin/delete_product/<?php echo $v_product->created_at?>" onclick=" return checkDelete();">Delete!</a>

                        </td>
                        
                    </tr> 
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>