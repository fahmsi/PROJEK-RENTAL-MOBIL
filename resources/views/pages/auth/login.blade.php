<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login RentalMobil App</title>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script
            src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div
                                    class="card shadow-lg border-0 rounded-lg mt-5"
                                >
                                    <div class="card-header">
                                        <h3
                                            class="text-center font-weight-light my-4"
                                        >
                                            RentalMobil App
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="/login/proses" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input
                                                    class="form-control"
                                                    id="inputEmail"
                                                    type="email"
                                                    placeholder="name@example.com"
                                                    name="email"
                                                />
                                                <label for="inputEmail"
                                                    >Email address</label
                                                >
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input
                                                    class="form-control"
                                                    id="inputPassword"
                                                    type="password"
                                                    placeholder="Password"
                                                    name="password"
                                                />
                                                <label for="inputPassword"
                                                    >Password</label
                                                >
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between mt-4 mb-0"
                                            >
                                                <button type="submit" class="btn btn-primary form-control">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            <a href="/register"
                                                >Buat akun baru</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>