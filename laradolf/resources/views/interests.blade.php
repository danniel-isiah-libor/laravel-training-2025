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
        <form action="{{ route('admin.interests.submit') }}" method="POST">
            @csrf
            @foreach ($interests as $interest)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interests[]" value="{{ $interest }}" id="{{ strtolower(str_replace(['.', ' '], '_', $interest)) }}">
                <label class="form-check-label" for="{{ strtolower(str_replace(['.', ' '], '_', $interest)) }}">
                    {{ $interest }}
                </label>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>