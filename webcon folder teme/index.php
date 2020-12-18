<?php get_header(); ?>

    <!-- header-->
    <header class="mainHeader">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-white">
                    <i class="fas fa-laptop-code"></i>
                    <h1>Webcon radionice – kodirajte sa nama</h1>
                    <p class="lead py-3">Učite kroz konkretne, praktične primere kao i prave sajtove za klijente.
                        <br>
                        Pratite uživo, a posle možete da se podsetite kroz snimke koje dobijate posle radionice.
                    </p>
                    <a href="" class="button">Radionice&nbsp; &rarr;</a>
                </div>
            </div>
        </div>
    </header>

    <!-- uvod -->
    <section class="uvod container">
        <h2>Prve koderske radionice uživo u regionu </h2>
        <div class="underline">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <p class="text-center lead mb-5">Kodiramo zajedno projekte</p>
        <div class="row justify-content-between mb-5">
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <i class="fas fa-laptop-code"></i>
                    <h3>PRAKTIČNI PRIMERI </h3>
                    <p>Kodiramo sa vama zajedno uživo konkretne projekte </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <i class="fas fa-laptop-code"></i>
                    <h3> OBLASTI </h3>
                    <p>Teme su HTML, CSS, JS i PHP, pripadajući framework-ci i preprocesori. Spajamo tehnologije iz veb dizajna i programiranja </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <i class="fas fa-laptop-code"></i>
                    <h3>CILJEVI RADIONICA </h3>
                    <p>Samostalnost u kodiranju, bolje razumevanje samo tehnologije </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mb-5">
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <i class="fas fa-laptop-code"></i>
                    <h3>UŽIVO I ONLINE </h3>
                    <p>Pored kodiranja uživo sa predavačem, dobija se i snimak radionice </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <i class="fas fa-laptop-code"></i>
                    <h3>VREMENSKO TRAJANJE </h3>
                    <p>Jednodnevne, dvodnevne i jednomesečne </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <i class="fas fa-laptop-code"></i>
                    <h3>GODIŠNJA KARTE </h3>
                    <p>Oni koji kupe godišnji paket imaju mentorski program u toku cele godine. </p>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <a href="" class="button mr-3">Radionice</a>
            <a href="" class="button violetBtn ml-3">O nama</a>
        </div>
    </section>

    <!-- onama -->
    <section class="onama">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>NAJVAŽNIJA JE PRAKSA I ISKUSTVO </h3>
                    <p>Svako ko je učio da kodira, bilo samostalno ili u nekoj školi, zna da je jedno učenje a drugo praktično primeniti znanje na konkretnim primerima. <br><br>
                        Znanje postane upotrebljivo tek onda kad se primeni na realnim projektima. </p>
                    <h3>AKO SE PITATE ZAŠTO BAŠ DA SA NAMA UČITE I VEŽBATE</h3>
                    <p>Zato što se dugo za ovo spremamo. Sada znamo da možemo. <br><br>
                        Sve o nama možete pogledati OVDE.
                        <br><br>
                        I najvažnije, najsvežije utiske naših polaznika koji su sada na našim online kursevima OVDE .
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/onama.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- utisci -->
    <section class="utisci pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card emb-3">
                        <div class="card-header text-white text-center">Snimci radionica</div>
                        <div class="card-body">
                            <h5 class="card-title">Besplatan sadrzaj</h5>
                            <p class="card-text py-2">Za sve one koji zele da se oprobaju i uce sa nama, imate snimke radionica i promotivne periode placenih.</p>
                            <a href="" class="button">Posetite stranicu&nbsp; &rarr;</a>
                            <br><br>
                            <small>* Pridruzite nam se</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 d-flex align-items-center text-white">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aliquid quis, numquam fugiat totam illum at impedit beatae, officiis voluptatum itaque minus mollitia dolor non in sapiente iste architecto cum.</p>
                            <small>Andreja Markovic</small>
                        </div>
                        <div class="item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aliquid quis, numquam fugiat totam illum at impedit beatae, officiis voluptatum itaque minus mollitia dolor non in sapiente iste architecto cum.</p>
                            <small>Filip Jotic</small>
                        </div>
                        <div class="item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque aliquid quis, numquam fugiat totam illum at impedit beatae, officiis voluptatum itaque minus mollitia dolor non in sapiente iste architecto cum.</p>
                            <small>Dusica Antanasijevic Ilic</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- radioniceHome -->
    <section class="radioniceHome container py-5">
        <h2>Kalendar radionica </h2>
        <div class="underline">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/header.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="datum">20. januar 2021.</div>
                        <h3>Napredni WordPress</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <a href="">Vise o radionici&nbsp; &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/header.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="datum">20. januar 2021.</div>
                        <h3>Napredni WordPress</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <a href="">Vise o radionici&nbsp; &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/header.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="datum">20. januar 2021.</div>
                        <h3>Napredni WordPress</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <a href="">Vise o radionici&nbsp; &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/header.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="datum">20. januar 2021.</div>
                        <h3>Napredni WordPress</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <a href="">Vise o radionici&nbsp; &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>