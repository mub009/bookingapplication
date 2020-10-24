
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject font-green sbold uppercase"><?=$title_name?></span>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <table id="js-exportable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>reservationId</th>
                                <th>storeName</th>
                                <th>customerName</th>
                                <th>mobile</th>
                                <th>totalCost</th>
                                <th>status</th>
                                <th>source</th>
                                <th>appointmentDate</th>
                                <th>modified</th>
                                <th>paid</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
 var isRTL = false;
    $(function () {
        var table = $('#js-exportable').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "bProcessing": true,
            "serverSide": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "ajax": {
                "url": "<?=base_url('admin/reservations/alldatatable')?>"
            },
            "columnDefs": [
                {
                    "targets": [5],
                    "data": function (row, type, val, meta) {
                        return row[meta.col].translateStatus(isRTL).intoLabel(
                            row[meta.col]);
                    }
                },
                {
                    "targets": [6],
                    "data": function (row, type, val, meta) {
                        return row[meta.col].translateSource(isRTL);
                    }
                },
                {
                    "targets": [4],
                    "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                        $(nTd).addClass('phone');
                    }
                }
            ],
        });
    });
</script>
<?=$legancy?>