<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
<div class="container">
    <div class="offset-3 col-md-4 mt-5">
        <form>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  id="admission_number" placeholder="Admission">
                    <div class="input-group-append">
                        <button class="input-group-text btn-primary submit-button" onclick="event.preventDefault();fetchUser()">autofill</button>
                    </div>
                </div>
            </div>
            <hr>
            <h5>Student Details</h5>
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" class="form-group">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input id="email" class="form-control" type="text" class="form-group">
            </div>
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </form>
    </div>
</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="index.js"></script>
</body>
</html>
