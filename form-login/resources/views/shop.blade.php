<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <title>Product Card</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="shoeBackground">
                <div class="gradients">
                    <div class="gradient second" color="blue"></div>
                    <div class="gradient" color="red"></div>
                    <div class="gradient" color="green"></div>
                    <div class="gradient" color="orange"></div>
                    <div class="gradient" color="black"></div>
                </div>
                <h1 class="nike">nike</h1>
                <img src="{{asset('img/logo.png')}}" alt="" class="logo">
                <!-- <a href="#" class="share"><i class="fas fa-share-alt"></i></a> -->

                <img src="{{asset('img/blue.png')}}" alt="" class="shoe show" color="blue">
                <img src="{{asset('img/red.png')}}" alt="" class="shoe" color="red">
                <img src="{{asset('img/green.png')}}" alt="" class="shoe" color="green">
                <img src="{{asset('img/orange.png')}}" alt="" class="shoe" color="orange">
                <img src="{{asset('img/black.png')}}" alt="" class="shoe" color="black">

            </div>
            <div class="info">
                <div class="shoeName">
                    <div>
                        <h1 class="big">Nike Zoom Air 12</h1>
                        <span class="new">new</span>
                    </div>
                    <h3 class="small">Sepatu olahraga dan mendaki</h3>
                </div>
                <div class="description">
                    <h3 class="title">Info Produk</h3>
                    <p class="text"> Nike Air. Berbeda dengan saudaranya Nike Air, Nike Zoom Air memiliki serat untuk menopang Air Unit. Ketika Air Unit ini diberi penekanan maka serat di dalam Air Unit akan merenggang.</p>
                </div>
                <div class="color-container">
                    <h3 class="title">Coba Pilihan Warna</h3>
                    <div class="colors">
                        <span class="color active" primary="#2175f5" color="blue"></span>
                        <span class="color" primary="#f84848" color="red"></span>
                        <span class="color" primary="#29b864" color="green"></span>
                        <span class="color" primary="#ff5521" color="orange"></span>
                        <span class="color" primary="#444" color="black"></span>
                    </div>
                </div>
                <div class="size-container">
                    <h3 class="title">Ukuran</h3>
                    <div class="sizes">
                        <span class="size">39</span>
                        <span class="size">40</span>
                        <span class="size active">41</span>
                        <span class="size">42</span>
                        <span class="size">43</span>
                    </div>
                </div>
                <div class="buy-price">
                    <a href="{{ route('back') }}" class="buy"></i>Back</a>
                    <div class="price">
                        <!-- <i class="fas fa-dollar-sign"></i> -->
                        <h1>IDR. 2.799.999.000</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>