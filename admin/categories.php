<!DOCTYPE html>
<html lang="en">
<!-- Header files -->
<?php include "includes/admin_header.php"; ?>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
                        Categories
                        <small>User</small>
                    </h1>

                    <div class="col-xs-6">


                        <?php insert_categories(); ?>


                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Category Title:</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add category">
                            </div>
                        </form>


                        <?php //Update and Include categories
                        if (isset($_GET['update'])) {
                            $cat_id = $_GET['update'];
                            include "includes/update_categories.php";
                        }
                        ?>


                    </div>

                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php findAllCategories(); ?>


                            <?php deleteCategories(); ?>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php

include "includes/footer.php";

?>

</body>

</html>
