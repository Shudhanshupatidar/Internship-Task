<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Internship Task</title>

    <!-- Included Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

</head>

<body class="bg-light">

    <div class="container">
        <div class="row mt-3">

            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            <div class="col-lg-6 mx-auto border mt-5 bg-white" style="border-radius: 50px;">
                <a class="mt-3 px-2 mx-2 btn btn-outline-success rounded-pill" style="float:right" href="/export">Export All Data</a>
                <a class="mt-3 px-2 btn btn-outline-dark rounded-pill" style="float:right" href="/tasks">Assign Task</a> <br>

                <form method='post' action="/submit" class="my-5">
                    @csrf

                    <h3 class="text-center my-4">Add new user</h3>
                    <div class="mb-3 px-4">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Shudhanshu Patidar">
                    </div>

                    <div class="mb-3 px-4">
                        <label class="form-label">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="name@example.domain">
                        <label id="error_email" style="color: red;"></label>
                    </div>

                    <div class="mb-3 px-4">
                        <label class="form-label">Mobile Number</label>
                        <input type="number" min=1 name="mobile" id="mobile" class="form-control" placeholder="9871563215">
                        <label id="error_mobile" style="color: red;"></label>
                    </div>

                    <div class="mb-3 px-4">
                        <button type="submit" class="btn btn-dark rounded-pill" id="submit">Add User</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
<script>
    $("#email").keyup(function() {

        var email = $("#email").val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email)) {
            $("#error_email").text(email + " is not a valid email");
            email.focus;
        } else {
            $("#error_email").text("");
        }

    });

    $("#mobile").keyup(function() {

        var mobile = $("#mobile").val();
        var filter = /^\d{10}$/;

        if (!filter.test(mobile)) {
            $("#error_mobile").text(mobile + " is not a valid Mobile Number");
            email.focus;
        } else {
            $("#error_mobile").text("");
        }

    });

    $("#submit").click(function() {

        var email = $("#email").val();
        var filterEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        var mobile = $("#mobile").val();
        var filterMobile = /^\d{10}$/;

        if (!filterEmail.test(email)) {
            alert('The email address you provide is not valid');
            $("#email").focus();
            return false;

        } else if (!filterMobile.test(mobile)) {
            alert('The mobile number you provide is not valid');
            $("#mobile").focus();
            return false;
        } else {}

    });
</script>

</html>