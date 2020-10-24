<?php

if(!empty($privilege_array))
{
?>


<!-- set privilege -->

<?php

if (in_array($privilege_value, $privilege_array) or in_array('admin', $privilege_array)) {

    ?>
<div class="btn-group">

    <?php

if(!empty($link_value))
{
    if ($link == 'link') {

        ?>
    <a href="<?=base_url() . $link_value?> " id="sample_edittable_1_new" class="btn blue-hoki"> Add &nbsp<i
            class="fa fa-plus"></i></a>

    <?php
}  else {
        ?>
    <a href="<?=base_url() . $link_value?> " id="sample_edittable_1_new" class="btn blue-hoki" data-target="#basic"
        data-toggle="modal"> Add &nbsp<i class="fa fa-plus"></i></a>


    <?php
}
   }
      ?>


</div>
<?php
}
?>


<div class="table-toolbar">
    <div class="row">

      
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">

<div class="form-group has-success">
    <label class="control-label col-md-3" for="inputError">Country Admin</label>
    <div class="col-md-9">




    <!-- onchange="Countryadmin(this.value);" -->
        <select name="countryadmin" id="countryadmin_id" class="form-control" required="required"
            >

            <option value="">
                                    <?='Select Country'?>
                                </option>
                                <?php

foreach ($country_details as $row) {

    ?>



                                <option value="<?=$row['Id']?>">
                                    <?=$row['CountryName']?>
                                </option>

                                <?php

}
?>
        </select>
    


        <br>
    </div>
</div>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">

<div class="form-group has-success">
    <label class="control-label col-md-3" for="inputError">Dealer</label>
    <div class="col-md-9">




    <select name="countryadmin" id="countryadmin_id" class="form-control" required="required"
            >

            <option value="">
                                    <?='Select Dealer'?>
                                </option>
                                <?php

foreach ($dealer_details as $row) {

    ?>



                                <option value="<?=$row['UserId']?>">
                                    <?=$row['DealerName']?>
                                </option>

                                <?php

}
?>
        </select>
    



        <br>
    </div>
</div>
</div>
</div>


        <div class="row">


            <div class="col-md-12">


                <?php

if ($tool) {
    ?>

                <div class="btn-group pull-right">
                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;" onclick="$('#design3').tableExport({type:'xml',escape:'false'});">
                                <i class="fa fa-print"></i> Print </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                        </li>
                    </ul>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>