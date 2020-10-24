<table id="design1" class="table table-striped table-bordered table-hover table-checkable order-column" style="width:100%">
        <thead>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
       
    </table>

<script>


var datatableobj;

//ss sasamsmm


$(document).ready(function () {
   datatableobj=$('#design1').DataTable({
       "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
               buttons: [{
                   extend: 'excel',
                   text: 'Excel',
                   className: 'buttonsToHide',
                   filename: 'Test_Excel',
                   icon: 'fa-print',
                   exportOptions: { modifier: {  search: 'applied',
                   order: 'applied'}, columns: [ 0,1,2,3]  }
               },
               {
                   extend: 'csv',
                   text: 'CSV',
                   className: 'buttonsToHide',
                   filename: 'Test_Csv',
                   exportOptions: { modifier: { search: 'applied',
                   order: 'applied'}, columns: [0,1,2,3] }
               },
               {
                   extend: 'pdf',
                   text: 'PDF',
                   className: 'buttonsToHide',
                   filename: 'Test_Pdf',
                   exportOptions: { modifier: { search: 'applied',
                   order: 'applied'} , columns: [0,1,2,3]}
               },

               'colvis'
               ],
           "bProcessing": true,
           "serverSide": true,
           "ajax": {
               url: "http://localhost/git/markkito/backend/admin/user/admin/admin/datatable", // json datasource
               type: "post", // type of method  , by default would be get
               error: function () { // error handling code

                 // $("#design1").css("display", "none");



                 //alert("datatableobj");
               },
               columnDefs: [
                {
                className: 'dt-body-center'
               }
             ]
           }
       });


$("#csvExportReporttoExcel").on("click", function() {
   datatableobj.button( '.buttons-csv' ).trigger();
});

$("#pdfExportReporttoExcel").on("click", function() {
   datatableobj.button( '.buttons-pdf' ).trigger();
});

$("#excelExportReporttoExcel").on("click", function() {
   datatableobj.button( '.buttons-excel' ).trigger();
});

   });



</script>        

            </div>
        </div>
    </div>
</div>