<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="/css/style.css">
        <title>Formulari</title>
    </head>

    <body class="bg-dark d-flex align-items-center">

        <div class="container-md text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-gold mt-5">Comprovació</h1>
                    <div class="container d-flex align-items-center justify-content-center mt-5">

    <div class="container" class="w-75">
        <div class="form-group row">
            <label for="newname1" class="col-sm-2 col-form-label text-white">ID</label>
            <div class="col-sm-10">
                <p class="text-gold">
                    <?=$lastInsertId;?>
                </p>
            </div>
        </div>
        <div class="form-group row">
            <label for="newname1" class="col-sm-2 col-form-label  text-white">Nom</label>
            <div class="col-sm-10">
            <p class="text-gold">
                    <?=$nom;?>
                </p>
            </div>
        </div>
        <div class="form-group row">
            <label for="newlastname" class="col-sm-2 col-form-label text-white">Cognom</label>
            <div class="col-sm-10">
            <p class="text-gold">
                    <?=$cognom;?>
                </p>
            </div>
        </div>
        <div class="form-group row">
            <label for="borndate" class="col-sm-2 col-form-label text-white">Data Naixament</label>
            <div class="col-sm-10">
            <p class="text-gold">
                    <?=$datanaix;?>
                </p>
            </div>
        </div>
        <div class="form-group row">
            <label for="adress" class="col-sm-2 col-form-label text-white">Ciutat</label>
            <div class="col-sm-10">
            <p class="text-gold">
                    <?=$ciutat;?>
                </p>
            </div>
        </div>
        <div class="form-group row">
            <label for="adress" class="col-sm-2 col-form-label text-white">Codi Postal</label>
            <div class="col-sm-10">
            <p class="text-gold">
                    <?=$codip;?>
                </p>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <a href="index.php?r=" class="btn btn-success">Continuar</a>
            </div>
        </div>

    </div>
</div>
                </div>
            </div>
        </div>
        <script src="/script/script.js"></script>
    </body>

    </html>