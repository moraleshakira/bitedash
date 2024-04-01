<?php
                    $sql = "SELECT * FROM `sitedetail`";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    $systemName = $row['systemName'];
                    $address = $row['address'];
                    $email = $row['email'];
                    $contact = $row['contact'];

echo '<div class="container-fluid" style="margin-top: 98px;">
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header" style="background-color: rgb(172 125 152);">
                <h2 class="text-center m-0">' .$systemName. '</h2>
            </div>
            <div class="card-body">
                <form action="partials/_siteManage.php" method="post">
                    <div class="form-group">
                        <label for="name" class="control-label">System Name</label>
                        <input type="text" class="form-control" id="name" name="name" value='.$systemName. ' required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value='.$email.' required>
                    </div>
                    <div class="form-group">
                        <label for="contact1" class="control-label">Contact</label>
                        <input type="tel" class="form-control" id="contact1" name="contact1" value='.$contact.' required>
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value='.$address.' required>
                    </div>
                    <div class="text-center">
                        <button name="updateDetail" class="btn btn-info btn-primary btn-block col-md-4">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>';
    
?>