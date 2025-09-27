<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interests</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Select Your Interests</h2>
        @if ($errors->has('interests'))
            <div class="alert alert-danger">
                {{ $errors->first('interests') }}
            </div>
        @endif

        <form action="{{ route('admin.interests.submit') }}" method="POST">
            @csrf
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interests[]" value="Laravel" id="laravel">
                <label class="form-check-label" for="laravel">
                    Laravel
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interests[]" value="Vue.js" id="vuejs">
                <label class="form-check-label" for="vuejs">
                    Vue.js
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interests[]" value="React.js" id="reactjs">
                <label class="form-check-label" for="reactjs">
                    React.js
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interests[]" value="Angular.js" id="angularjs">
                <label class="form-check-label" for="angularjs">
                    Angular.js
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>