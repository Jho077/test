    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
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
                    <h1 class="text-gold mt-5">Dades per participar</h1>
                    <form action="index.php" class="form" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="r" value="registre">
                        <div class="row mt-5">
                            <div class="col-md-6 mb-3">
                                <label for="nom1" class="form-label text-white">Nom</label>
                                <input type="text" class="form-control" id="nom1" name="nom">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cognom1" class="form-label text-white">Cognom</label>
                                <input type="text" class="form-control" id="cognom1" name="cognom">
                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <label for="datanaix1" class="form-label text-white">Data Naixament</label>
                            <input type="date" class="form-control" id="Datan" type="date" name="naix">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="carrer1" class="form-label text-white">Carrer</label>
                                <input type="text" class="form-control" id="Carrer" name="carrer">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telefon1" class="form-label text-white">Telefon</label>
                                <input type="number" class="form-control" id="telefon1" name="telefon">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="ciutat1" class="form-label text-white">Ciutat</label>
                                <input type="text" class="form-control" id="ciutat1" name="ciutat">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="codip" class="form-label text-white">Codi Postal</label>
                                <input type="number" class="form-control" id="codip" name="codip">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="grup1" class="form-label text-white">Grup</label>
                                <input type="text" class="form-control" id="grup1" name="grup">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="pujar" class="form-label text-white">Tarjeta</label>
                                <input type="file" class="form-control" id="pujar" name="pujar">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 mt-3">
                                <a href="?r=" type="button" class="btn btn-secondary">Torna Enrere</a>
                            </div>
                            <div class="col-md-6 mb-3 mt-3">
                            <button class="submit btn btn-success">Continuar</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <script src="/script/script.js"></script>
    </body>

    </html>