<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{env("APP_NAME")}}</title>
    </head>
    <body>
        <p>Hello {{$sale->name}};</p>
        <p>Thank you for supporting Manzelah Group of Companies.</p>
        <p>Your copy of the baking book is  <a href="{{env('APP_URL')}}/your_file/{{$hexEmail}}">Here</a> </p>
        <p>Note: This book is subjected to Copy right and you shall not share or make duplicates of it.</p>
        <p><a href="{{env('APP_URL')}}/your_file/{{$hexEmail}}">Click on this Link to access the Baking book</a></p>
        <p>Thank you.</p>
        <hr>
        <p> 
            <b>Manzelah Group of Companies</b><br>
            Bugolobi Spring valley appartments<br>
            Telephone: 0701854289 | 0775664822<br>
            Email: mysticahope2013@gmail.com<br>
            <a href="https://manzelahcakes.com/">Visit our website</a> | <a href="http://www.tiktok.com/@maselahfoodsandevents">TikTok</a> | 
            <a href="http://instagram.com/maselah_foods_and_events_">Instagram</a> | <a href="https://www.facebook.com/profile.php?id=100064034141979">FaceBook</a>
        </p>
    </body>
</html>