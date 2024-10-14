$(document).ready(function () {
    // /* -------------------------------------------Tooltip----------------------------------------------------- */
    $('[data-tooltip]').tooltip({
       trigger: 'hover'
    });
 
// /* -------------------------------------------Add Fundraise Modal Form - Append----------------------------------------------------- */
        var i = 1;

        $('#add').click(function () {
           i++;
           $('#modal-field').append('' +
           '<div id="row' + i + '">'+
           '<hr>'+
           '<div class="row justify-content-center"> '+
           '<div class="col-lg-10 p-3 m-1 border border-left-primary border-bottom-primary rounded">'+
                    '<div class="row">'+
                             '<div class="col-md-4">'+
                               '<div class="form-group">'+
                                 '<label for="title">Title:</label>'+
                                 '<input type="text" name="title[]" id="title" class="form-control" required>'+
                               '</div>'+
                             '</div>'+
                             '<div class="col-md-4">'+
                               '<div class="form-group">'+
                                 '<label for="targetAmount">Target Amount:</label>'+
                                 '<input type="text" name="targetAmount[]" id="targetAmount" class="form-control" required>'+
                               '</div>'+
                             '</div>'+
                             '<div class="col-md-4">'+
                               '<div class="form-group">'+
                                 '<label for="targetDays">Target Days:</label>'+
                                 '<input type="text" name="targetDays[]" id="targetDays" class="form-control" required>'+
                               '</div>'+
                             '</div>'+
                           '</div>'+
                           '<div class="row">'+
                             '<div class="col-md-6">'+
                               '<div class="form-group">'+
                                 '<label for="fundraiseImage">Image:</label>'+
                                 '<input type="file" name="fundraiseImage[]" id="fundraiseImage" class="form-control" required>'+
                               '</div>'+
                             '</div>'+
                             '<div class="col-md-6">'+
                               '<div class="form-group">'+
                                 '<label for="supportedCauses">Supported Causes:</label>'+
                                 '<input type="text" name="supportedCauses[]" id="supportedCauses" class="form-control" required>'+
                               '</div>'+
                             '</div>'+
                           '</div>'+
                       '<div class="row mt-2">'+
                          '<div class="col-lg-4">'+
                             '<label class="text-dark">About Campaign'+
                             '</label>'+
                          '</div>'+
                          '<div class="col-1">:</div>'+
                          '<div class="col-lg-7">'+
                          '<textarea rows="4" type="text" name="about[]" class="form-control" required> </textarea>'+
                          '</div>'+
                       '</div>'+
                       '</div>'+
                    '<div class="col-lg-1 m-1">'+
                    '<td><button type="button" class="btn btn-circle btn-danger btn_remove" id="' + i + '">'+
                    '<i class="fa fa fa-trash-alt"></i></button></td> '+
                    '</div>'+
                 '</div>'+
                 '</div>'+
                 '</div>');
        });
        $(document).on('click', '.btn_remove', function () {
           var button_id = $(this).attr("id");

           $('#row' + button_id + '').remove();
        });

        // /* -------------------------------------------Input Name Focus----------------------------------------------------- */
   $("#addNewFundraise").on("shown.bs.modal", function (e) {
    $("#title").focus();
 });










}); 