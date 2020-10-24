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


                <form action="<?=base_url('backend/admin/privilege/Dealerprivilege/update')?>" id="DealPrivilege" method="post">

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
                                            <td> Vendor </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="VendorAdd" name="permission[]" <?=(in_array('VendorAdd',
                                                        $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="VendorEdit" name="permission[]" <?=(in_array('VendorEdit',
                                                        $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="VendorDelete" name="permission[]" <?=(in_array('VendorDelete',
                                                        $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="VendorView" name="permission[]" <?=(in_array('VendorView',
                                                        $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>

                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td> Customer </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="CustomerAdd" name="permission[]"
                                                        disabled>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="CustomerEdit" name="permission[]"
                                                        disabled>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="CustomerDelete" name="permission[]"
                                                        disabled>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="CustomerView" name="permission[]" <?=(in_array('CustomerView',
                                                        $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>

                                        </tr>


                                        <tr>
                                            <td> 3 </td>
                                            <td> Supervisor </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="SupervisorAdd" name="permission[]" <?=(in_array('SupervisorAdd',
                                                        $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="SupervisorEdit" name="permission[]"
                                                        <?=(in_array('SupervisorEdit', $this->data['DealerPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="SupervisorDelete" name="permission[]"
                                                        <?=(in_array('SupervisorDelete', $this->data['DealerPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="SupervisorView" name="permission[]"
                                                        <?=(in_array('SupervisorView', $this->data['DealerPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>

                                        </tr>

                                        <tr>
                                            <td> 4 </td>
                                            <td> ThirdParty Delivery </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="ThirdPartyAdd" name="permission[]" <?=(in_array('ThirdPartyAdd',
                                                        $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="ThirdPartyEdit" name="permission[]"
                                                        <?=(in_array('ThirdPartyEdit', $this->data['DealerPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="ThirdPartyDelete" name="permission[]"
                                                        <?=(in_array('ThirdPartyDelete', $this->data['DealerPrivilege']))
                                                    ? 'checked' : ''?>>
                                                    <span></span>
                                                </label> </td>
                                            <td> <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" value="ThirdPartyView" name="permission[]"
                                                        <?=(in_array('ThirdPartyView', $this->data['DealerPrivilege']))
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
                        <i class="fa fa-cogs"></i>General </div>
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
                                    <td> Country </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="CountryAdd" name="permission[]" disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="CountryEdit" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="CountryDelete" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="CountryView" name="permission[]" <?=(in_array('CountryView',
                                                $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>

                                <tr>
                                    <td> 2 </td>
                                    <td> State </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="StateAdd" name="permission[]" disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="StateEdit" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="StateDelete" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="StateView" name="permission[]" <?=(in_array('StateView',
                                                $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>


                                <tr>
                                    <td> 3 </td>
                                    <td> City </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="CityAdd" name="permission[]" disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="CityEdit" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="CityDelete" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="CityView" name="permission[]" <?=(in_array('CityView',
                                                $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>

                                <tr>
                                    <td> 4 </td>
                                    <td> Area </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="AreaAdd" name="permission[]" disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="AreaEdit" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="AreaDelete" name="permission[]" disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="AreaView" name="permission[]" <?=(in_array('AreaView',
                                                $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
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
                        <i class="fa fa-cogs"></i>Manage Product </div>
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
                                    <th> Generate Template </th>
                                    <th> Edit</th>
                                    <th> Copy To </th>
                                    <th> View </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> 1 </td>
                                    <td> Product Template</td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductTemplateGenerate" name="permission[]"
                                                <?=(in_array('ProductTemplateGenerate', $this->data['DealerPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductTemplateEdit" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductTemplateCopyTo" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductTemplateView" name="permission[]" <?=(in_array('ProductTemplateView',
                                                $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>

                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Vendor List </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="VendorListGenerate" name="permission[]"
                                                disabled>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="VendorListEdit" name="permission[]" <?=(in_array('VendorListEdit',
                                                $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="VendorListCopyTo" name="permission[]" <?=(in_array('VendorListCopyTo',
                                                $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="VendorListView" name="permission[]" <?=(in_array('VendorListView',
                                                $this->data['DealerPrivilege'])) ? 'checked' : ''?>>
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
                                                <?=(in_array('ProductRequestFormView', $this->data['DealerPrivilege']))
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
                                                <?=(in_array('ProductRequestListStatus', $this->data['DealerPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestListTracking" name="permission[]"
                                                <?=(in_array('ProductRequestListTracking', $this->data['DealerPrivilege']))
                                            ? 'checked' : ''?>>
                                            <span></span>
                                        </label> </td>
                                    <td> <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="ProductRequestListView" name="permission[]"
                                                <?=(in_array('ProductRequestListView', $this->data['DealerPrivilege']))
                                            ? 'checked' : ''?>>
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

					$('#NavDealerPrivilege').addClass('open active');

</script>

<script>
    $('#DealPrivilege').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "<?=base_url('backend/admin/privilege/dealerprivilege/update')?>",
            data: $('#DealPrivilege').serialize(),
            dataType: "json",
            success: function (response) {


                swal({
                    title: "Successfully Update Dealer Privilege ",
                    text: "",
                    type: "success",
                });

            }
        });

    });
</script>