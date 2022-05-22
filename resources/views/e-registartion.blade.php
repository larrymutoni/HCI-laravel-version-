<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/e-registration.css') }}">
</head>
<body>
<section class="h-100 bg-success">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="{{ asset('images/tutorials/fullsize/itaxlogo.jpeg') }}"
                                 alt="" class="img-fluid"
                                 style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Sign Up</h3>

                                <div class="row">
                                    <legend><span class="number">1</span>Your basic info</legend></br>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" id="firstName" class="form-control form-control-lg"/>
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" id="lastName" class="form-control form-control-lg" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating">
                                            <input type="email" id="email" class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating">
                                            <input type="password" id="password" class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="text" id="homeAddress" class="form-control form-control-lg" />
                                    <label class="form-label" for="homeAddress">Home Address</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-0 me-4">Citizenship</h6><br>
                                        <select class="select">
                                            <option value="kenyan resident">Kenyan Resident</option>
                                            <option value="non-kenyan resident">Non-Kenyan Resident</option>

                                        </select>

                                    </div>


                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4"> Application Type</h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="checkbox" name="applicationType" id="applicationType"
                                                   value="individual" />
                                            <label class="form-check-label" for="individuaal">Individual</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="checkbox" name="applicationType" id="applicationType"
                                                   value="non-individual" />
                                            <label class="form-check-label" for="non-individual">Non-Individual</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <legend><span class="number">2</span>Supporting Documents</legend></br>
                                    <div class="form-control form-control-lg">
                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                            <h6 class="mb-0 me-4">Attach identification:ID or Passport</h6>
                                            <input type="file" id="myfile" name="myfile">
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                            <h6 class="mb-0 me-4">Affix your passport photo</h6>
                                            <input type="file" id="myfile" name="myfile">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="button" class="btn btn-success btn-lg ms-2">Register</button>
                                </div>

                                <div class="d-flex justify-content-end pt-3">
                                    <p style="font-size:25px;">Already have an account? <a href="./index.html">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>