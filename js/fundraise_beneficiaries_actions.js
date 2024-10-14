$(document).ready(function () {
    // /* -------------------------------------------Tooltip----------------------------------------------------- */
    $('[data-tooltip]').tooltip({
       trigger: 'hover'
    });
 
     var i = 1;
     $('#add').click(function () {
        i++;
        $('#modal-field').append('' +
        '<div id="row' + i + '">'+
        '<hr>'+
        '<div class="row justify-content-center">'+
                 '<div class="col-lg-10 p-3 m-1 border border-left-primary border-bottom-primary rounded">'+
                 '<div class="row">'+
                 '<div class="col-md-4">'+
                   '<div class="form-group">'+
                     '<label for="firstName">First Name:</label>'+
                     '<input type="text" name="firstName[]" id="firstName" class="form-control" required>'+
                   '</div>'+
                 '</div>'+
                 '<div class="col-md-4">'+
                   '<div class="form-group">'+
                     '<label for="middleName">Middle Name:</label>'+
                     '<input type="text" name="middleName[]" id="middleName" class="form-control" required>'+
                   '</div>'+
                 '</div>'+
                 '<div class="col-md-4">'+
                   '<div class="form-group">'+
                     '<label for="lastName">Last Name:</label>'+
                     '<input type="text" name="lastName[]" id="lastName" class="form-control" required>'+
                   '</div>'+
                 '</div>'+
               '</div>'+
               '<div class="row">'+
                 '<div class="col-md-6">'+
                   '<div class="form-group">'+
                     '<label for="address">Address:</label>'+
                     '<input type="text" name="address[]" id="address" class="form-control" required>'+
                   '</div>'+
                 '</div>'+
                 '<div class="col-md-6">'+
                   '<div class="form-group">'+
                     '<label for="contactNumber">Contact Number:</label>'+
                     '<input type="text" name="contactNumber[]" id="contactNumber" class="form-control" required>'+
                   '</div>'+
                 '</div>'+
               '</div>'+

           '<hr>'+
           '<div class="row mt-2">'+
              '<div class="col-lg-4">'+
                 '<label class="text-dark">Additional Information'+
                 '</label>'+
              '</div>'+
              '<div class="col-lg-1">:</div>'+
              '<div class="col-lg-7">'+
              '<textarea type="text" name="additionalInformation[]" class="form-control" required> </textarea>'+
              '</div>'+
           '</div>'+
                 '</div>'+
                 '<div class="col-lg-1 m-1">'+
                 '<td><button type="button" class="btn btn-circle btn-danger btn_remove" id="' + i + '">'+
                 '<i class="fa fa fa-trash-alt"></i></button></td> '+
                 '</div>'+
              '</div>');
     });
     $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
  
        $('#row' + button_id + '').remove();
     });
     
      // /* -------------------------------------------Input Name Focus----------------------------------------------------- */
    $("#addnew").on("shown.bs.modal", function (e) {
      $("#firstName").focus();
   });


   $("#example").DataTable({

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
                  return (idx + 0) + ': ' + title;
               }
            }
         ],
         // select: true,
         "oLanguage": {
            "oPaginate": {
               "sNext": '<i class="fa fa-chevron-right" ></i>',
               "sPrevious": '<i class="fa fa-chevron-left" ></i>'
            }
         },
   });
    });