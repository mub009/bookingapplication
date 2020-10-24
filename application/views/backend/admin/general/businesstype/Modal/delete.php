<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Business Delete</h4>
</div>


<form action="<?=base_url() . 'backend/admin/general/businesstype/businesstype/delete'?>" method="post">

    <input type="hidden" value="<?=$id?>" class="form-control" id="delete_business_name" name="delete_business_name"
        autocomplete="off">


    <div class="modal-footer">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger" name='delete' value="Delete">
    </div>