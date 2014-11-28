<div class="container_12">
   <p> <?php
    $exception=$this->session->userdata('exception');
    if(isset($exception))
    {
        echo $exception;
        $this->session->unset_userdata('exception');
    }
    ?> </p>

    <div class="grid_12">
        <h1>Welcome <?php echo $this->session->userdata('user_name');?></h1>
        

        
    </div>

    

</div>