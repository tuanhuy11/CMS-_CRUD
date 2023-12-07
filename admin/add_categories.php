<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include './header.php'; ?>

    <section id="main mt-3">
        <div class="container">
            <div class="row">	
                <?php 
                    $_SESSION['active'] = 'categories';
                    include './slidebars.php';
                ?>
                
                <div class="col-md-9 bg-light">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add / Edit Category</h3>
                    </div>
                    <div class="panel-body">
                    
                        <form method="post" id="postForm">							
                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="categoryName" name="categoryName" value="" placeholder="Category name.." required>							
                            </div>				
                            
                            <input type="submit" name="categorySave" id="categorySave" class="btn btn-info" value="Save" />											
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