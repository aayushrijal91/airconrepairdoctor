<header class="text-secondary py-lg-4 py-3">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <div class="col-auto">
                <a href="./"><?= renderImg("logo.png", "logo", "logo") ?></a>
            </div>
            <div class="col-auto right-header">
                <a class="btn bg-tertiary text-white px-3 py-2 px-lg-5 text-decoration-none rounded-pill" href="tel:<?= $phone_number ?>">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_35)">
                            <path d="M24.6619 20.6425L19.5729 18.3818C19.0442 18.1453 18.452 18.0905 17.8888 18.2261C17.3257 18.3616 16.8233 18.6798 16.46 19.131L14.9934 20.9646C12.589 19.4218 10.5423 17.3827 8.99042 14.9841L10.8241 13.5175C11.2748 13.1544 11.5928 12.6523 11.7283 12.0895C11.8638 11.5268 11.8093 10.935 11.5733 10.4065L9.32944 5.30439C9.07729 4.73627 8.63153 4.27618 8.07167 4.0062C7.5118 3.73622 6.87424 3.67389 6.27268 3.83033L1.96476 4.95414C1.33978 5.11585 0.796413 5.50242 0.438718 6.03983C0.0810226 6.57723 -0.0658616 7.2277 0.0261934 7.86667C0.828676 13.4385 3.4142 18.6005 7.39571 22.5799C11.3772 26.5594 16.5405 29.1423 22.1127 29.942C22.7513 30.0324 23.4008 29.8843 23.9371 29.5259C24.4734 29.1676 24.8588 28.6242 25.0196 27.9997L26.1435 23.6917C26.2998 23.0903 26.2364 22.4529 25.9649 21.894C25.6933 21.335 25.2313 20.8913 24.6619 20.6425Z" fill="white" />
                            <path d="M22.4761 1.49745e-05C21.214 -0.00228175 19.9718 0.314857 18.8653 0.921895C17.7588 1.52893 16.8238 2.40613 16.1476 3.47178C15.4714 4.53744 15.0759 5.75689 14.9978 7.01658C14.9198 8.27627 15.1618 9.53522 15.7014 10.6762L14.984 14.9841L19.2919 14.2667C20.3081 14.7466 21.4192 14.9917 22.5429 14.9839C23.6666 14.9761 24.7742 14.7157 25.7836 14.2218C26.7931 13.7279 27.6784 13.0133 28.3742 12.1309C29.07 11.2484 29.5584 10.2208 29.8032 9.124C30.048 8.02723 30.0429 6.88945 29.7883 5.7949C29.5338 4.70036 29.0363 3.6771 28.3326 2.80091C27.629 1.92471 26.7372 1.21803 25.7235 0.733184C24.7097 0.248344 23.5998 -0.00223164 22.4761 1.49745e-05Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1_35">
                                <rect width="29.9682" height="29.9682" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <?= $phone_number ?>
                </a>
            </div>
        </div>
    </div>
</header>

<section class="banner">
    <div class="container">
        <div class="banner-outer text-center bg-secondary radius">
            <article class="banner-top radius py-lg-6 px-2 py-3">
                <h1 class="text-uppercase">Your local Air con<br /> repair specialists</h1>
                <p class="pt-2 text-uppercase fw-800">Servicing all kinds of AIRCON REPAIRS</p>
            </article>
            <div class="banner py-3">
                <h3 class="text-uppercase fw-800">Servicing All of Sydney</h3>
            </div>
        </div>
    </div>
</section>

<section class="services mt-lg-5 mt-4">
    <div class="top-services1 radius">
        <div class="container">
            <div class="top-services radius row">
                <div class="row justify-content-between align-items-center services-1 bg-secondary">
                    <div class="col-lg-6 text-center servc-1-inner">
                        <h3 class="text-uppercase">We’re Open 24/7 </h3>
                    </div>
                    <div class="col-lg-6 text-center bg-lighter servc-2-inner">
                        <a class="text-white contactnumber text-decoration-none" href="tel:<?= $phone_number ?>"> <span><?= renderImg("phone-icon-white.png", "icons") ?></span> <?= $phone_number ?></a>
                    </div>
                </div>
                <div class="row title-row">
                    <h2 class="text-center text-uppercase">same day service</h2>
                </div>
                <div class="row title-row">
                    <div class="form_main" id="form">

                        <form action="./src/form" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                            
                            <div class="row no-gutters justify-content-between">
                                <div class="col-6 mt-3 col-lg-6">
                                    <div class="input-group">
                                        <input id="input_name" class="form-control fs-16 bg-dark text-white" type="text" placeholder="FULL NAME" name="name" required>
                                    </div>
                                </div>

                                <div class="col-6 mt-3 col-lg-6">
                                    <div class="input-group">
                                        <input id="input_email" class="form-control fs-16 bg-dark text-white" type="email" placeholder="EMAIL" name="email" required>
                                    </div>
                                </div>
                                <div class="col-6 mt-3 col-lg-6">
                                    <div class="input-group">
                                        <input id="input_phone" class="form-control fs-16 bg-dark text-white" type="tel" placeholder="PHONE" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-6 mt-3 col-lg-6">
                                    <div class="input-group">
                                        <input id="input_postcode" class="form-control fs-16 bg-dark text-white" type="text" placeholder="SUBURB" name="suburb" required>
                                    </div>
                                </div>

                                <div class="container">
                                    <button type="submit" class="btn bg-tertiary text-white fs-20 text-center px-lg-4 py-lg-4 px-3 py-3 w-100 mt-3"> <?= renderImg("enquire.png", "icons", "px-3") ?>Enquire Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>