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
                '<div id="row' + i + '">' +
                '<hr>' +
                '<div class="row justify-content-center"> ' +
                '<div class="col-lg-10 p-3 m-1 border border-left-primary border-bottom-primary rounded">' +
                '<div class="row">' +
                '<div class="col-md-4">' +
                  '<div class="form-group">' +
                    '<label for="title">Title:</label>' +
                      '<input type="text" name="title[]" id="title" class="form-control" required>' +
                  '</div>' +
                '</div>' +
                '<div class="col-md-4">' +
                  '<div class="form-group">' +
                    '<label for="date">Date:</label>' +
                      '<input type="date" name="date[]" id="date" class="form-control" required>' +
                  '</div>' +
                '</div>' +
                '<div class="col-md-4">' +
                  '<div class="form-group">' +
                    '<label for="time">Time:</label>' +
                      '<input type="time" name="time[]" id="time" class="form-control" required>' +
                  '</div>' +
                '</div>' +
              '</div>' +

              '<div class="row">' +
                '<div class="col-md-6">' +
                  '<div class="form-group">' +
                    '<label for="aboutEvent">About Event:</label>' +
                    '<textarea rows="3" name="aboutEvent[]" id="aboutEvent" class="form-control" required></textarea>' +
                  '</div>' +
                '</div>' +
                '<div class="col-md-6">' +
                  '<div class="form-group">' +
                    '<label for="coverImage">Event Image:</label>' +
                    '<input type="file" name="coverImage[]" accept="image/*" id="coverImage" class="form-control" required>' +
                  '</div>' +
                '</div>' +
              '</div>' +

              '<hr>' +

              '<div class="row">' +
                '<div class="col-md-6">' +
                  '<div class="form-group">' +
                    '<label for="authorImage">Author Image:</label>' +
                    '<input type="file" name="authorImage[]" accept="image/*" id="authorImage" class="form-control" required>' +
                  '</div>' +
                '</div>' +
                '<div class="col-md-6">' +
                  '<div class="form-group">' +
                    '<label for="authorName">Author Name:</label>' +
                    '<input type="text" name="authorName[]" id="authorName" class="form-control" required>' +
                  '</div>' +
                '</div>' +
              '</div>' +

              '<div class="row">' +
                '<div class="col-md-6">' +
                  '<div class="form-group">' +
                    '<label for="aboutAuthor">About Author:</label>' +
                    '<textarea rows="3" name="aboutAuthor[]" id="aboutAuthor" class="form-control" required></textarea>' +
                  '</div>' +
                '</div>' +
              '</div>' +
                '</div>' +
                '<div class="col-lg-1 m-1">' +
                '<button type="button" class="btn btn-circle btn-danger btn_remove" id="' + i + '">' +
                '<i class="fa fa fa-trash-alt"></i>' +
                '</button>' +
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
   $("#addnew").on("shown.bs.modal", function (e) {
    $("#disasterName").focus();
 });










}); 