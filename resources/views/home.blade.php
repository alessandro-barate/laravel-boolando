<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolando</title>
</head>

<body>

    {{-- Including Header --}}
    @include('shared.header')
    {{-- END Including Header --}}

    <main>
        <div class="container">
            <div class="margin-top d-flex wrap">

                <!-- FIRST ARTICLE -->
                <div class="col-33-img">
                    <div class="content">
                        <img class="object" src="./img/1.webp" alt="">
                        <img class="object-hidden" src="./img/1b.webp" alt="">
                        <button class="heart bg-white top-position right-position">&hearts;</button>
                    </div>
                    <span class="positioned-boxes bg-red boldness">-50%</span>
                    <span class="positioned-boxes bg-green left-position boldness">Sostenibilità</span>
                    <div>Levi's</div>
                    <div class="item-name boldness">RELAXED FIT TEE UNISEX</div>
                    <span class="red-text boldness">14,99&euro;</span> <span class="text-line">29,99&euro;</span>

                </div>
                <!-- /FIRST ARTICLE -->

                <!-- SECOND ARTICLE -->
                <div class="col-33-img">
                    <div class="content">
                        <img class="object" src="./img/2.webp" alt="">
                        <img class="object-hidden" src="./img/2b.webp" alt="">
                        <button class="heart bg-white top-position right-position">&hearts;</button>
                    </div>
                    <span class="positioned-boxes bg-red boldness">-30%</span>
                    <div>Guess</div>
                    <div class="item-name boldness">ROSES TEE</div>
                    <span class="red-text boldness">20,99&euro;</span> <span class="text-line">29,99&euro;</span>
                </div>
                <!-- /SECOND ARTICLE -->

                <!-- THIRD ARTICLE -->
                <div class="col-33-img">
                    <div class="content">
                        <img class="object" src="./img/3.webp" alt="">
                        <img class="object-hidden" src="./img/3b.webp" alt="">
                        <button class="heart bg-white top-position right-position">&hearts;</button>
                    </div>
                    <span class="positioned-boxes bg-red boldness">-30%</span>
                    <div>Come Zucchero Filato</div>
                    <div class="item-name boldness">VOGLIA DI COLORI PASTELLO</div>
                    <span class="red-text boldness">129,99&euro;</span> <span class="text-line">184,99&euro;</span>
                </div>
                <!-- /THIRD ARTICLE -->

                <!-- FOURTH ARTICLE -->
                <div class="col-33-img">
                    <div class="content">
                        <img class="object" src="./img/4.webp" alt="">
                        <img class="object-hidden" src="./img/4b.webp" alt="">
                        <button class="heart bg-white top-position right-position">&hearts;</button>
                    </div>
                    <span class="positioned-boxes bg-red boldness">-50%</span>
                    <span class="positioned-boxes bg-green left-position boldness">Sostenibilità</span>
                    <div>Levi's</div>
                    <div class="item-name boldness">TEE UNISEX</div>
                    <span class="red-text boldness">14,99&euro;</span> <span class="text-line">29,99&euro;</span>
                </div>
                <!-- /FOURTH ARTICLE -->

                <!-- FIFTH ARTICLE -->
                <div class="col-33-img">
                    <div class="content">
                        <img class="object" src="./img/5.webp" alt="">
                        <img class="object-hidden" src="./img/5b.webp" alt="">
                        <button class="heart bg-white top-position right-position">&hearts;</button>
                    </div>

                    <div>Maya Deluxe</div>
                    <div class="item-name boldness">STRIPE BODICE</div>
                    <span class="red-text boldness">99,99&euro;</span>
                </div>
                <!-- /FIFTH ARTICLE -->

                <!-- SIXTH ARTICLE -->
                <div class="col-33-img">
                    <div class="content">
                        <img class="object" src="./img/6.webp" alt="">
                        <img class="object-hidden" src="./img/6b.webp" alt="">
                        <button class="heart bg-white top-position right-position">&hearts;</button>
                    </div>
                    <span class="positioned-boxes bg-green boldness">Sostenibilità</span>
                    <div>Esprit</div>
                    <div class="item-name boldness">MAGLIONE - BLACK</div>
                    <span class="red-text boldness">29,99&euro;</span>
                </div>
                <!-- /SIXTH ARTICLE -->

            </div>
        </div>
    </main>

    {{-- Including Footer --}}
    @include('shared.footer')
    {{-- END Including Footer --}}

</body>

</html>
