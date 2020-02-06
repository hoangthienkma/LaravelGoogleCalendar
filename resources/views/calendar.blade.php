<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

    <form action="{{route('googlecalendarCreate')}}" method="POST" role="form" class="form-control">
        <!-- <div class="form-control"> -->
            {{csrf_field()}}
            <legend>
                Create Event
            </legend>
            <div class="form-group">
                <label for="title">
                    Title
                </label>
                <input class="form-control" name="title" placeholder="Title" type="text">
            </div>
            <div class="form-group">
                <label for="description">
                    Description
                </label>
                <input class="form-control" name="description" placeholder="Description" type="text">
            </div>
            <div class="form-group">
                <label for="start_date">
                    Start Date
                </label>
                <input class="form-control" name="start_date" placeholder="Start Date" type="text">
            </div>
            <div class="form-group">
                <label for="end_date">
                    End Date
                </label>
                <input class="form-control" name="end_date" placeholder="End Date" type="text">
            </div>

            <div class="form-group">
                <label>
                    Attendees:
                </label>
                <input class="form-control" name="attendees" placeholder="Email Attendees" type="text">
          <!--       <input class="form-control" name="attendees" placeholder="Email Attendees" type="text">
                <input class="form-control" name="attendees" placeholder="Email Attendees" type="text"> -->
            </div>

            <button class="btn btn-primary" type="submit">
                Create
            </button>
        <!-- </div> -->
    </form>
</body>
</html>
    

