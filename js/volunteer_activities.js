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
                             '<label for="eventDate">Event Date</label>'+
                             '<input type="date" name="eventDate[]" id="eventDate" class="form-control" required>'+
                           '</div>'+
                         '</div>'+
                         '<div class="col-md-4">'+
                           '<div class="form-group">'+
                             '<label for="eventTime">Event Time:</label>'+
                             '<input type="time" name="eventTime[]" id="eventTime" class="form-control" required>'+
                           '</div>'+
                         '</div>'+
                       '</div>'+

                       '<div class="row">'+
                         '<div class="col-md-6">'+
                           '<div class="form-group">'+
                             '<label for="aboutEvent">About Event:</label>'+
                             '<textarea rows="3" name="aboutEvent[]" id="aboutEvent" class="form-control text-justify" required></textarea>'+
                           '</div>'+
                         '</div>'+
                         '<div class="col-md-6">'+
                           '<div class="form-group">'+
                             '<label for="location">Location</label>'+
                             '<textarea rows="3" id="location" name="location[]" class="form-control text-justify" required> </textarea>'+
                           '</div>'+
                         '</div>'+
                       '</div>'+

                       '<div class="row">' +
                       '<div class="col-md-6">' +
                           '<div class="form-group">' +
                             '<label for="coverImage">Cover Image:</label>' +
                             '<input type="file" accept="image/*" name="coverImage[]" id="coverImage" class="form-control" required>' +
                           '</div>' +
                         '</div>' +
                         '</div>' +

                   '<hr>'+
                   '<div class="row mt-2">'+
                      '<div class="col-lg-4">'+
                         '<label class="text-dark">Suitable Volunteers'+
                         '</label>'+
                      '</div>'+
                      '<div class="col-lg-1">:</div>'+
                      '<div class="col-lg-7">'+
                      '<textarea type="text" name="suitableVolunteers[]" id="suitableVolunteers" class="form-control" required> </textarea>'+
                      '</div>'+
                   '</div>'+
                   '<div class="row mt-2">'+
                      '<div class="col-lg-4">'+
                         '<label class="text-dark">Target No. of Volunteers'+
                         '</label>'+
                      '</div>'+
                      '<div class="col-lg-1">:</div>'+
                      '<div class="col-lg-7">'+
                         '<input type="text" name="noOFVolunteer[]" id="noOFVolunteer" class="form-control" required>'+
                      '</div>'+
                  '</div>'+
                '</div>'+
                '<div class="col-lg-1 m-1">'+
                '<button type="button" class="btn btn-circle btn-danger btn_remove" id="' + i + '">'+
                '<i class="fa fa fa-trash-alt"></i></button> '+
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
   $("#addnew").on("shown.bs.modal", function (e) {
    $("#title").focus();
 });

});