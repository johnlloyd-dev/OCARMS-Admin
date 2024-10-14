
$(document).ready(function () {
    // /* -------------------------------------------Tooltip----------------------------------------------------- */
    $('[data-tooltip]').tooltip({
       trigger: 'hover'
    });
 
    $('body').tooltip({
       selector: "button.update, button.delete",
       trigger: 'hover'
     });
 
 // /* -------------------------------------------Add Donor Modal Form - Append----------------------------------------------------- */

 // /* -------------------------------------------Input Name Focus----------------------------------------------------- */
    $("#addNewGD").on("shown.bs.modal", function (e) {
       $("#full_name").focus();
    });
 // /* -------------------------------------------Load General Donor Table----------------------------------------------------- */
 $("#example").DataTable({
    "columnDefs": [ {
       "target":  0,
       "orderable": false,
       "searchable": false,
     } ],
     "order": [
         [ 0, "desc" ]
     ],
 
 // /* -------------------------------------------DataTable Design----------------------------------------------------- */
       "dom": '<"main"lBf>rtip',
       stateSave: true,
       buttons: [{
             extend: 'print',
             text: '<i class="fa fa-print"></i>',
             title: '<div class="text-center text-primary">List of Goods Benefactor</div>',
             exportOptions: {
                columns: ':visible'
             },
          },
          {
             extend: 'copyHtml5',
             text: '<i class="fa fa-files-o"></i>',
             titleAttr: 'Copy',
             exportOptions: {
                columns: ':visible'
             }
          },
          {
             extend: 'excelHtml5',
             text: '<i class="fa fa-file-excel-o"></i>',
             titleAttr: 'Excel',
             exportOptions: {
                columns: ':visible'
             }
          },
          {
             extend: 'pdfHtml5',
             text: '<i class="fa fa-file-pdf-o"></i>',
             titleAttr: 'PDF',
             exportOptions: {
                columns: ':visible'
             }
          },
          {
             extend: 'colvis',
             columnText: function (dt, idx, title) {
                return title;
             }
          }
       ],
       // select: true,
       "oLanguage": {
          "oPaginate": {
             "sNext": '<i class="fa fa-chevron-right" ></i>',
             "sPrevious": '<i class="fa fa-chevron-left" ></i>'
          }
       }
 });
 
 });
 