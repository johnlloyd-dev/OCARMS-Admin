$(document).ready(function () {
    // /* -------------------------------------------Tooltip----------------------------------------------------- */
    $('[data-tooltip]').tooltip({
       trigger: 'hover'
    });

    $('#example2, #example1, #example3').DataTable({
        "order": [
           [0, "desc"]
        ],
        "dom": 'lfrtip',
        "oLanguage": {
           "oPaginate": {
              "sNext": '<i class="fa fa-chevron-right" ></i>',
              "sPrevious": '<i class="fa fa-chevron-left" ></i>'
           }
        }
     });

            // /* -------------------------------------------Input Name Focus----------------------------------------------------- */
   $("#addnew").on("shown.bs.modal", function (e) {
    $("#fullName").focus();
 });

});