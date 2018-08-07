<?php include_once 'inc/header.php';?>
        <div class="body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-default">
                            <div class="panel-heading">
                                <h2>User Login</h2>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" id="email" class="form-control"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control"/>
                                        </div>
                                        <button class="btn btn-success" name="login" type="button">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- end body -->
        <?php include_once 'inc/footer.php'; ?>

