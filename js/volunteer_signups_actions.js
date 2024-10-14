$(document).ready(function () {
    // /* -------------------------------------------Tooltip----------------------------------------------------- */
    $('[data-tooltip]').tooltip({
       trigger: 'hover'
    });

    $('#example2, #example1').DataTable({
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

});