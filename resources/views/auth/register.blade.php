
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5"style="width: 50%; margin-left:250px;">
            <div class="card-body p-0" >
                <!-- Nested Row within Card Body -->
                
                    {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                   
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><i class="fas fa-store-alt"></i>Buat Akun SiSapras</h1>
                            </div>
                            <form class="user" method="POST" action="/register">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name" id="InputName"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"name="email" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" id="exampleInputEmail"
                                        placeholder="password">
                                </div>
                                <div class="form-group row">
                                </div>
                                 <button type="submit" class="btn btn-success btn-user btn-block">
                                   Register
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login">Sudah Punya akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>