<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>My Todo List</title>
        <style>
            .strike {
                text-decoration: line-through;
                text-decoration-color: #0066CC;
            }
        </style>
    </head>
    
    <body>
        <h1>My Todo List</h1>

        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url() ?>/TaskController">My Tasks</a>
            </div>
        </nav>

        <div class="container">        

            <br>
            <br>

            <h1>All Tasks</h1>

            <br>

            <!-- Button trigger modalAddNewTask -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddNewTask">
                Add Task
            </button>

            <!-- Modal modalAddNewTask -->
            <div class="modal fade" id="modalAddNewTask" tabindex="-1" role="dialog" aria-labelledby="modalAddNewTaskLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalAddNewTaskLabel">Add New Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?= site_url('TaskController/create') ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" required>
                                </div>

                                <div class="form-group">
                                    <label for="dateTask">Date</label>
                                    <input type="date" class="form-control" id="dateTask" name="dateTask" required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <br>
            <br>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created</th>
                        <th scope="col">Checked?</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                
                <tbody>
                        <?php foreach($result as $row) { ?>
                            <tr>
                                <th scope="row"><?= $row->id ?></th>
                                <td <?= ($row->checked == '1') ? 'class="strike"' : ''; ?>><?= $row->name ?></td>
                                <td <?= ($row->checked == '1') ? 'class="strike"' : ''; ?>><?= $row->description ?></td>
                                <td <?= ($row->checked == '1') ? 'class="strike"' : ''; ?>><?= $row->dateTask ?></td>
                                <td><?= $row->checked == 0 ? 'No' : 'Yes' ?></td>
                                <td><a href="<?= site_url('TaskController/edit') ?>/<?= $row->id ?>">Edit</a> | <a href="<?= site_url('TaskController/delete') ?>/<?= $row->id ?> ?> ?>">Delete</a></td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>

        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>