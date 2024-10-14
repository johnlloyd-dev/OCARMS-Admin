<!-- Modal -->
<div class="modal fade" id="generalModal<?=$row['donation_id'];?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Monetary Donation Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Donation Date: <strong
                                class="text-primary"><?=$row['donation_date'];?></strong> </li>
                        <li class="list-group-item">Donation Amount: <strong
                                class="text-primary"><?=$row['donation_amount'];?></strong> </li>
                        <li class="list-group-item">Donation Method: <strong
                                class="text-primary"><?=$row['donation_method']; ?></strong> </li>
                        <li class="list-group-item">Donation Type: <strong
                                class="text-primary"><?=$row['donation_type']; ?></strong> </li>
                        <li class="list-group-item">Donation Status: <strong
                                class="text-primary"><?=$row['donation_status']; ?></strong> </li>
                        <?php if($fundraise_id!=null){
                        ?>
                        <li class="list-group-item">Fundraise Name: <strong
                                class="text-primary"><?=$row2['fundraise_title']; ?></strong> </li>
                        <?php } else {?>
                        <li class="list-group-item">Fundraise Name: <strong class="text-primary">None</strong> </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>