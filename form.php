<div class="container mt-4">
    <div class="row">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" class="form-group form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Province</label>
                            <input type="text" name="province" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="card">
                <div class="card-body">
                    <?php
                        
                        if(isset($_POST['btn-submit'])){
                            include_once "cal.php";
                        }else{
                            echo "<h4> Not yet to click button Submit </h4>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>