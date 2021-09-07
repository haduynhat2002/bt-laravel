<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section class="h-100" style="background-color: #eae9e9">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img
                                    src=""
                                    alt="Sample photo"
                                    class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                                />
                            </div>

                            <div class="col-xl-6">
                                <form action="/user/update/{{$obj->id}}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-3 text-uppercase">Edit Form</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control border-success" name="firstName"
                                                           value="{{$obj->firstName}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label ">Last Name</label>
                                                    <input type="text" class="form-control border-success" name="lastName"
                                                           value="{{$obj->lastName}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label">Phone</label>
                                                    <input type="text" class="form-control border-success" name="phone"
                                                           value="{{$obj->phone}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control border-success" name="address"
                                                           value="{{$obj->address}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control border-success" name="email"  value="{{$obj->email}}">
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">User Name</label>
                                            <input type="text" class="form-control border-success" name="username"
                                                   value="{{$obj->username}}">
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control border-success" name="password"
                                                   value="{{$obj->password}}">
                                        </div>
                                        <div class=" d-flex justify-content-end pt-3">
                                            <button type="submit" class="btn btn-success btn-lg ms-2">Submit form</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
