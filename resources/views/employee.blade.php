<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee managment system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

@include("navbar")

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("employeesList")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("employeesList")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="Employee.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of the new employee</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Employee Number</label>
                                <input name="emp_num" type="text" class="form-control"  placeholder="Enter Employee Number">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="FirstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>

                            
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="LastName" type="text" class="form-control"  placeholder="Enter last name">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <input name="department" type="text" class="form-control"  placeholder="Enter Department">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("employeesList")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("employeesList")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Update information of employee</h5>
                        <form action="{{ url('/update/'.$employee->id) }}" method="put">
                            @csrf
                            <div class="form-group">
                                <label>Employee Number</label>
                                <input value="{{ $employee->Emp_num }}" name="emp_num" type="text" class="form-control"  placeholder="Enter Employee Number">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{ $employee->FirstName }}" name="FirstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>last Name</label>
                                <input value="{{ $employee->LastName }}" name="LastName" type="text" class="form-control"  placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $employee->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <input value="{{ $employee->department }}" name="department" type="text" class="form-control"  placeholder="Enter Department">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>