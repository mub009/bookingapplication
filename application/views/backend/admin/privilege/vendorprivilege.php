<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light form-fit bordered">

            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Privilege Settings</span>
                </div>
                <div class="actions">

                </div>
            </div>
            <br>

            <div class="portlet-body form">
                <div class="row">


                </div>


                <br><br>


                <form action="<?=base_url('backend/admin/privilege/Vendorprivilege/update')?>" id="VendorPrivilege" method="post">

                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>User </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                                    title=""> </a>
                                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                            </div>
                        </div>

                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Privilege Name </th>
                                            <th> Add </th>
                                            <th> Edit</th>
                                            <th> Delete </th>
                                            <th> View </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td> 1 </td>
                                            <td> Delivery Boy </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="DeliveryBoyAdd" name="permission[]"
                                                        <?=(in_array('DeliveryBoyAdd', $this->data['VendorPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="DeliveryBoyEdit" name="permission[]"
                                                        <?=(in_array('DeliveryBoyEdit', $this->data['VendorPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="DeliveryBoyDelete" name="permission[]"
                                                        <?=(in_array('DeliveryBoyDelete', $this->data['VendorPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="DeliveryBoyView" name="permission[]"
                                                        <?=(in_array('DeliveryBoyView', $this->data['VendorPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>

                                        </tr>

                                        <tr>
                                            <td> 2 </td>
                                            <td> ThirdParty Delivery </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="ThirdPartyAdd" name="permission[]"
                                                        disabled>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="ThirdPartyEdit" name="permission[]"
                                                        disabled>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="ThirdPartyDelete" name="permission[]"
                                                        disabled>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="ThirdPartyView" name="permission[]"
                                                        <?=(in_array('ThirdPartyView', $this->data['VendorPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>

                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Product Manage </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Privilege Name </th>
                                    <th> Add </th>
                                    <th> Edit</th>
                                    <th> Delete </th>
                                    <th> View </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> 1 </td>
                                    <td> Product Manage </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductManageAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductManageEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductManageDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductManageView" name="permission[]" <?=(in_array('ProductManageView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Tax </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Privilege Name </th>
                                    <th> Add </th>
                                    <th> Edit</th>
                                    <th> Delete </th>
                                    <th> View </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> 1 </td>
                                    <td> Tax </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="TaxAdd" name="permission[]" <?=(in_array('TaxAdd',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="TaxEdit" name="permission[]" <?=(in_array('TaxEdit',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="TaxDelete" name="permission[]" <?=(in_array('TaxDelete',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="TaxView" name="permission[]" <?=(in_array('TaxView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i> Shipping Charge </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Privilege Name </th>
                                    <th> Add </th>
                                    <th> Edit</th>
                                    <th> Delete </th>
                                    <th> View </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> 1 </td>
                                    <td> ShippingCharge </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ShippingChargeAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ShippingChargedit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ShippingChargeDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ShippingChargeView" name="permission[]" <?=(in_array('ShippingChargeView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Order </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Privilege Name </th>
                                    <th> Add </th>
                                    <th> Edit</th>
                                    <th> Delete </th>
                                    <th> View </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> 1 </td>
                                    <td> Order List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderListAdd" name="permission[]" disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderListEdit" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderListDelete" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderListView" name="permission[]" <?=(in_array('OrderListView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Order Confirm List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderConfirmListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderConfirmListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderConfirmListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderConfirmListView" name="permission[]" <?=(in_array('OrderConfirmListView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> Order Cancelled List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderCancelledListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderCancelledListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderCancelledListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderCancelledListView" name="permission[]"
                                                <?=(in_array('OrderCancelledListView', $this->data['VendorPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                                <tr>
                                    <td> 4 </td>
                                    <td> Order Packed List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderPackedListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderPackedListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderPackedListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderPackedListView" name="permission[]" <?=(in_array('OrderPackedListView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td> Order Picked List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderPickedListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderPickedListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderPickedListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderPickedListView" name="permission[]" <?=(in_array('OrderPickedListView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                                <tr>
                                    <td> 6 </td>
                                    <td> Order Dispatched List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderDispatchedListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderDispatchedListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderDispatchedListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderDispatchedListView" name="permission[]"
                                                <?=(in_array('OrderDispatchedListView', $this->data['VendorPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                                <tr>
                                    <td> 7 </td>
                                    <td> Order Delivered List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderDeliveredListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderDeliveredListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderDeliveredListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderDeliveredListView" name="permission[]"
                                                <?=(in_array('OrderDeliveredListView', $this->data['VendorPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                                <tr>
                                    <td> 8 </td>
                                    <td> Order Returned List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderReturnedListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderReturnedListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderReturnedListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderReturnedListView" name="permission[]" <?=(in_array('OrderReturnedListView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                                <tr>
                                    <td> 9 </td>
                                    <td> Order Replaced List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderReplacedListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderReplacedListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderReplacedListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderReplacedListView" name="permission[]" <?=(in_array('OrderReplacedListView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                                <tr>
                                    <td> 10 </td>
                                    <td> Order Assigned List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderAssignedListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderAssignedListEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderAssignedListDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="OrderAssignedListView" name="permission[]" <?=(in_array('OrderAssignedListView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Product Request</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Privilege Name </th>
                                    <th> Add </th>
                                    <th> Status</th>
                                    <th> Tracking </th>
                                    <th> View </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> 1 </td>
                                    <td> Product Request Form</td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestFormAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestFormStatus" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestFormTracking" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestFormView" name="permission[]"
                                                <?=(in_array('ProductRequestFormView', $this->data['VendorPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Product Request List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestListAdd" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestListStatus" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestListTracking" name="permission[]"
                                                <?=(in_array('ProductRequestListTracking', $this->data['VendorPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestListView" name="permission[]"
                                                <?=(in_array('ProductRequestListView', $this->data['VendorPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>





                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Loyalty </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Privilege Name </th>
                                    <th> Add </th>
                                    <th> Edit</th>
                                    <th> Delete </th>
                                    <th> View </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> 1 </td>
                                    <td> Point Sale </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="PointSaleAdd" name="permission[]" disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="PointSaleEdit" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="PointSaleDelete" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="PointSaleView" name="permission[]" <?=(in_array('PointSaleView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Redeem Point</td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="RedeemPointAdd" name="permission[]" disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="RedeemPointEdit" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="RedeemPointDelete" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="RedeemPointView" name="permission[]" <?=(in_array('RedeemPointView',
                                                $this->data['VendorPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>


                </div>



            </div>

            <center>

                <input type="submit" class="btn green " id="template_update" value='update'>

            </center>


        </div>



    </div>






    </form>






</div>


<script>
					$('#NavMainPrivilege').addClass('open active');

					$('#ArrowMainPrivilege').addClass('open active');

					$('#NavVendorPrivilege').addClass('open active');

</script>


<script>
    $('#VendorPrivilege').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "<?=base_url('backend/admin/privilege/vendorprivilege/update')?>",
            data: $('#VendorPrivilege').serialize(),
            dataType: "json",
            success: function (response) {


                swal({
                    title: "Successfully Update Vendor Privilege ",
                    text: "",
                    type: "success",
                });

            }
        });

    });
</script>