$(document).ready(function () {
    // /* -------------------------------------------Tooltip----------------------------------------------------- */
    $('[data-tooltip]').tooltip({
       trigger: 'hover'
    });
 
     var i = 1;
     $('#add').click(function () {
        i++;
        $('#modal-field').append('' +
           '<div id="row' + i + '">' +
           '<hr>' +
           '<div class="row justify-content-center"> ' +
           '<div class="col-lg-10 p-3 border border-left-primary border-bottom-primary m-1 rounded">' +
           '<div class="row">' +
           '<div class="col-md-4">' +
           '<div class="form-group">' +
           '<label for="date">Date:</label>' +
           '<input type="date" class="form-control" name="date[]" id="date">' +
           '</div>' +
           '</div>' +
           '<div class="col-md-4">' +
           '<div class="form-group">' +
           '<label for="full_name">Name:</label>' +
           '<input type="text" class="form-control" name="full_name[]" id="full_name">' +
           '</div>' +
           '</div>' +
           '<div class="col-md-4">' +
           '<div class="form-group">' +
           '<label for="contact_number">Contact Number:</label>' +
           '<input type="text" class="form-control" name="contact_number[]" id="contact_number">' +
           '</div>' +
           '</div>' +
           '</div>' +
  
           '<div class="row">' +
           '<div class="col-md-6">' +
           '<div class="form-group">' +
           '<label for="email">Email Address:</label>' +
           '<input type="email" class="form-control" name="email[]" id="email">' +
           '</div>' +
           '</div>' +
           '<div class="col-md-6">' +
           '<div class="form-group">' +
           '<label for="address">Address:</label>' +
           '<input type="text" class="form-control" name="address[]" id="address">' +
           '</div>' +
           '</div>' +
           '</div>' +
  
           '<div class="row">' +
           '<div class="col-md-6">' +
           '<div class="form-group">' +
           '<label for="d_class">Donor Classification:</label>' +
           '<select class="form-select form-control" required id="d_class" name="d_class[]">' +
           '<option selected disabled>Select One:</option>' +
           '<option value="Individual">Individual</option>' +
           '<option value="Organization">Organization</option>' +
           '</select>' +
           '</div>' +
           '</div>' +
           '<div class="col-md-6">' +
           '<div class="form-group">' +
           '<label for="d_image">Donor Photo:</label>' +
           '<input type="file" class="form-control" name="d_image[]" accept="image/*" id="d_image">' +
           '</div>' +
           '</div>' +
           '</div>' +
           '<hr>' +
           '<div class="row mt-2">'+
           '<div class="col-lg-4">'+
              '<label class="text-dark">Amount'+
              '</label>'+
           '</div>'+
           '<div class="col-lg-1">:</div>'+
           '<div class="col-lg-7">'+
              '<input type="text" name="amount[]" class="form-control" required>'+
           '</div>'+
        '</div>'+
        '<div class="row mt-2">'+
           '<div class="col-lg-4">'+
              '<label class="text-dark">Payment Method'+
              '</label>'+
           '</div>'+
           '<div class="col-lg-1">:</div>'+
           '<div class="col-lg-7">'+
           '<select required class="form-select form-control" name="paymentMethod[]">'+
           '<option selected disabled>Select One:</option>'+
              '<option value="GCash">GCash</option>'+
              '<option value="PayPal">PayPal</option>'+
              '<option value="Credit Card">Credit Card</option>'+
              '</select>'+
           '</div>'+
        '</div>'+
           '</div>' +
           '<div class="col-lg-1 m-1">' +
           '<td>' +
           '<button type="button" class="btn btn-circle btn-danger btn_remove" id="' + i + '">' +
           '<i class="fa fa fa-trash-alt"></i>' +
           '</button>' +
           '</td> ' +
           '</div>' +
           '</div>' +
           '</div>' +
           '</div>');
     });
     $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
  
        $('#row' + button_id + '').remove();
     });
     
      // /* -------------------------------------------Input Name Focus----------------------------------------------------- */
    $("#addNewFundraiseDonorModal").on("shown.bs.modal", function (e) {
      $("#full_name").focus();
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
         }
   });
    });