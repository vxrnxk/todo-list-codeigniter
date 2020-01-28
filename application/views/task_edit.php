<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>My Todo List</title>
    </head>
    
    <body>
        <h1>My Todo List</h1>

        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url() ?>TaskController">My Tasks</a>
            </div>
        </nav>

        <div class="container">

            <br>
            <br>

            <h1>Edit Task</h1>

            <br>

            <form action="<?= site_url('TaskController/update') ?>/<?= $row->id ?>" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $row->name ?>">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?= $row->description ?>">
                </div>

                <div class="form-group">
                    <label for="dateTask">Date</label>
                    <input type="date" class="form-control" id="dateTask" name="dateTask" value="<?= $row->dateTask ?>">
                </div>

                <div class="form-group">
                    <label for="checked">Is Checked?</label>
                    <select class="form-control" type="text" id="checked" name="checked">  
                        <option <?= ($row->checked == '0') ? 'selected="selected"' : ''; ?> value="0">No</option>
                        <option <?= ($row->checked == '1') ? 'selected="selected"' : ''; ?> value="1">Yes</option>
                    </select>
                </div>

                <button type="button" class="btn btn-secondary" onclick="goPackPage()">Cancel</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            function goPackPage() {
                window.history.back();
            }
        </script>
    </body>
</html>