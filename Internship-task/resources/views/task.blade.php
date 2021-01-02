<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Internship Task</title>

    <!-- Included Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

</head>

<body class="bg-light">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto border mt-5 bg-white" style="border-radius: 50px;">

                <form method='post' action="/submit-task" class="my-5">
                    @csrf

                   
                    <div class="px-4 mb-3">
                        <label class="form-label">Name</label>
                        <select class="form-control" required name="name">
                            <option value="" hidden>Select user</option>
                            @foreach($user_data as $user)
                            <option value="{{ $user }}">{{ $user }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="px-4 mb-3">
                        <label class="form-label">Task Name</label>
                        <input type="text" name="task-name" class="form-control" required placeholder="Design UI">
                    </div>

                    <div class="px-4 mb-3">
                        <label class="form-label">Task Type</label>
                        <select class="form-control" name="task-type">
                            <option value="Pending">Pending</option>
                            <option value="Done">Done</option>
                        </select>
                    </div>
                    <div class="px-4 mb-3">
                        <button type="submit" class="btn btn-dark rounded-pill">Assign Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>