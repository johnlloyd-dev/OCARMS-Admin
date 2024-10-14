<div class="card-body text-center">
    <img class="rounded-circle mb-3" src="<?=$src; ?>" width="100rem" height="110rem" style="object-fit: cover;">
    <h6 class="font-weight-bold">First Name: <i class="text-primary"><?php if($client['client_fname']==""){echo "(Not Set)";}else{echo $client['client_fname'];}?></i></h6>
    <h6 class="font-weight-bold">Last Name: <i class="text-primary"><?php if($client['client_lname']==""){echo "(Not Set)";}else{echo $client['client_lname'];}?></i></h6>
    <h6 class="font-weight-bold">Email Address: <i class="text-primary"><?php if($client['client_email_address']==""){echo "(Not Set)";}else{echo $client['client_email_address'];}?></i></h6>
    <h6 class="font-weight-bold">Contact Number: <i class="text-primary"><?php if($client['client_contact_number']==""){echo "(Not Set)";}else{echo $client['client_contact_number'];}?></i></h6>
    <h6 class="font-weight-bold">Address: <i class="text-primary"><?php if($client['client_address']==""){echo "(Not Set)";}else{echo $client['client_address'];}?></i></h6>
</div>