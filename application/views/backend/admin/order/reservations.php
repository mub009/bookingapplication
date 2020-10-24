<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="0">0</span>
                </div>
                <div class="desc"> Paid Orders </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="0">0</span></div>
                <div class="desc"> Rejected Orders </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="0">0</span>
                </div>
                <div class="desc"> Today Payments </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="0">0</span> </div>
                <div class="desc"> Today Partially Amount </div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Reservation Order</span>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <table id="js-exportable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>orderId</th>
                                <th>transactionId</th>
                                <th>reservationId</th>
                                <th>status</th>
                                <th>customerName</th>
                                <th>mobile</th>
                                <th>storeName</th>
                                <th>created_at</th>
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
                "url": "<?=base_url('admin/order/reservationsdatatable')?>"
            },
            "columnDefs": [
                {
                    "targets": [3],
                    "data": function (row, type, val, meta) {
                        return row[meta.col].translateOrderStatus(isRTL).orderIntoLabel(
                            row[meta.col]);
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