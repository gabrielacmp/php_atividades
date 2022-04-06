<?php include_once ('./php/proLP.crud.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Icon's Table System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet"/>
    </head>
    <body>
        <!-- Navigation-->
        <?php include ("./navbar.php")?>
        <!-- Register -->
        <section class="page-section" id="icons">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading mt-5">You're in Icon's Managment System</h2>
                    <h3 class="section-subheading text-muted">Use the table bellow to edit or delete elements from the Icon's database.</h3>
                </div>
                <table class="table table-stripped" style="color: black;">
                    <thead>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Gerir</th>
                    </thead>
                    <tbody>
                    <?php foreach(listIcons() as $icon): ?>
                        <tr>
                            <td><?= $icon["id"] ?></td>
                            <td><?= $icon["image"]?></td>
                            <td><?= $icon["title"] ?></td>
                            <td><?= $icon["descript"] ?></td>
                            <td>
                                <a href="./icon.form.edit.php?id=<?=$icon["id"]?>"><i class="bi bi-pencil-square"></i></a>&nbsp;
                                <a onclick="return confirm('Deseja realmente remover este item?')" href="./delete/icon.delete.php?id=<?=$icon["id"]?>"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <?php if($_GET) : ?>
                    <tfoot>
                        <tr>
                            <?php if(isset($_GET['error'])): ?>
                                <td colspan="4"><h3 class="text-danger"><strong>There was an error in the database updation/deleting, please try again.</strong></h3></td>
                            <?php elseif(isset($_GET['success'])): ?>
                                <td colspan="4"><h3 class="text-success"><strong>There was an sucess in the database updation/deleting.</strong></h3></td>
                            <?php endif; ?>
                        </tr>
                    </tfoot>
                    <?php endif; ?>
                </table>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>