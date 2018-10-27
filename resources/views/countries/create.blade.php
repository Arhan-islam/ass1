<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All student</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>

<br>
<div class="container">
        <h2>Country Insert form</h2>
        <form action="{{ route('countries.store') }}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Country Name</label>
                <input type="name" class="form-control" id="countryname" placeholder="Country name" name="country_name">
            </div>
            <div class="form-group">
                <label for="pwd">Country Code</label>
                <input type="number" class="form-control" id="countrycode" placeholder="country code" name="country_code">
            </div>
            <div class="form-group">
                <label for="pwd">Currency code</label>
                <input type="text" class="form-control" id="currencycode" placeholder="currency code" name="currency_code">
            </div>
            <div class="form-group">
                <label for="pwd">Currency syambol </label>
                <input type="text" class="form-control" id="Currencysyambol " placeholder="country code" name="currency_symbol">
            </div>

            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
</div>

</body>
</html>
