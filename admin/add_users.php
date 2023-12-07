<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include './header.php'; ?>  
    
    <section id="main mt-3">
        <div class="container">
            <div class="row">	
                <?php 
                    $_SESSION['active'] = 'users';
                    include './slidebars.php';
                ?>   

                <div class="col-md-9 bg-light">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add / Edit User</h3>
                    </div>
                    <div class="panel-body">
                    
                        <form method="post" id="postForm">							
                            <div class="form-group mb-3">
                                <label for="title" class="form-label fw-bolder">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="" placeholder="First name.." required>							
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="title" class="form-label fw-bolder">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="" placeholder="Last name.." required>							
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="title" class="form-label fw-bolder">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="" placeholder="email.." required>							
                            </div>					
                            <div class="form-group mb-3">
                                <label for="title" class="form-label fw-bolder">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="password.." required>							
                            </div>						                 
                            <div class="form-group mb-3">
                                <label for="status" class="form-label fw-bolder">User Type </label>							
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                                    <label class="form-check-label" for="inlineRadio1">Administrator</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                                    <label class="form-check-label" for="inlineRadio2">Author</label>
                                </div>										
                            </div>		

                            <div class="form-group mb-3">
                                <label for="status" class="form-label fw-bolder">User Status </label>							
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>										
                            </div>
                            <input type="submit" name="saveUser" id="saveUser" class="btn btn-info" value="Add" />											
                        </form>				
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>
</html>