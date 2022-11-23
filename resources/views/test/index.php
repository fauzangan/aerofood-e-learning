<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css"/>
    <title>Testing Page</title>
  </head>
  <body>
    <h1 class="text-center">Data Table CRUD</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table id="datatable" class="table">
                            <thead>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>City</th>
                                <th>Option</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ojan123</td>
                                    <td>123@gmail.com</td>
                                    <td>123123123</td>
                                    <td>Semarang</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>oddy123</td>
                                    <td>123@gmail.com</td>
                                    <td>123123123</td>
                                    <td>Semarang</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $('#datatable').DataTable({});
    </script>
  </body>
</html>
