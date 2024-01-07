<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <link href="../../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    

    <title>Consultes</title>
</head>
<body style="background-color: #1a1a2e; color: white;">
    <div class="col-12">
    <a href="?r=" type="button" class="btn btn-secondary m-2">Torna Enrere</a>
    <h1 class="d-flex align-items-center justify-content-center mt-4 mb-4 text-warning">Consulta d’inscripcions</h1>
        <table id="myTable" class="table table-striped table-hover">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Cognoms</th>
                    <th scope="col">Data Naixament</th>
                    <th scope="col">Carrer</th>
                    <th scope="col">Ciutat</th>
                    <th scope="col">Codi Postal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $i => $userss) { ?>
                    <tr class="table-success">
                        <th scope="row"><?= $userss["id"] ?></th>
                        <td><?= $userss["nom"]; ?></td>
                        <td><?= $userss["cognom"]; ?></td>
                        <td><?= $userss["datanaix"]; ?></td>
                        <td><?= $userss["carrer"]; ?></td>
                        <td><?= $userss["ciutat"]; ?></td>
                        <td><?= $userss["codip"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            let table = new DataTable('#myTable');
        });
    </script>
</body>
</html>
