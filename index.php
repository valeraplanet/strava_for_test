<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $athlete_id = 'YOUR_PROFILE_ID';
    // $access_token = 'YOUR_ACCESS_TOKEN';

    $athlete_id = '25571494';
    $access_token = 'a7fa5fc858655fe48b934a56fad708c02b040268';

            
    $strava_stats_api = 'https://www.strava.com/api/v3/athletes/' . $athlete_id . '/stats?access_token=' . $access_token;
    echo $strava_stats_api;
    ?>
    
</body>
</html>