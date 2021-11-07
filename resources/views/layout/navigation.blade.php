<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="p-3 warna_bg_nav">
            <ul class="nav nav-pills text-white">
                <li class="nav-item"><a class="nav-link {{($title == 'Home')? 'active':""}}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{($title == 'Lessee')? 'active':""}}" href="/lessee">Lessee</a></li>
                <li class="nav-item"><a class="nav-link {{($title == 'House')? 'active':""}}" href="/house">House</a></li>
            </ul>
    </div>
    <footer class="text-white text-center text-lg-start fixed-bottom">
        <div class="text-center p-3 warna_bg_nav">    
            Copyright @2021. Made with LOVE
        </div>
    </footer>
</body>
</html>