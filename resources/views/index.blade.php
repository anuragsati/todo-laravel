<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Todo List</title>
    <style>
        section{
            background-image: url("/blob.svg");
            background-repeat: no-repeat;
            background-size : cover;
            background-attach: fixed;
        }

        #card{
            background-color : rgba(255, 255, 255, 0.8);
            border-radius : 10px;
        }
    </style>
</head>
<body>
    <section class="min-vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7" >
                    <div class="card" id="card">
                        <div class="card-body p-4">
                            <h2 class="text-center my-3 pb-3">To-Do List</h2>

                            <form action="save_new_list" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                                <div class="col-12">
                                    <div class="form-outline">
                                        <input type="text" name="name" class="form-control" placeholder="Enter a task here"/>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add">
                                </div>
                            </form>

                            <table class="text-center table mb-4">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tasks</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($todo_arr as $td)
                                        <tr>
                                            <th>{{$loop->index + 1}}</td>
                                            <td>{{$td->name}}</td>
                                            <td>
                                                <a class="btn btn-danger py-1 px-2" href="delete/{{$td->id}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>