<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1>IP-Info</h1>
        <div class="card">
            <div class="card-body">
                @if ($details)
                    <small>IP: {{ $details->ip }}</small><br>
                    <small>Hostname: {{ $details->hostname }}</small><br>
                    <small>Country: {{ $details->country }}</small><br>
                    <small>Country name: {{ $details->country_name }}</small><br>
                    <small>Location: {{ $details->loc }}</small><br>
                    <small>Organization: {{ $details->org }}</small><br>
                    <small>Region: {{ $details->region }}</small><br>
                    <small>City: {{ $details->city }}</small><br>
                    <small>Timezone: {{ $details->timezone }}</small><br>
                @endif
            </div>
        </div>
    </div>

</body>

</html>
