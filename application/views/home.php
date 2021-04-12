<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--    Document Title--><!-- =============================================-->
    <title>Ars</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicons/favicon.ico">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileImage" content="assets/images/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <link href="<?= base_url(); ?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/remodal/dist/remodal.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/remodal/dist/remodal-default-theme.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/lightbox2/dist/css/lightbox.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <style type="text/css">
        @media (min-width: 992px){
            .bahasa {
                display: none;
            }
        }
        .znav-container ul li {
            font-size: 0.9rem !important;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".inner-link" data-offset="60">
    <?php
            // if ($this->router->fetch_class() != 'home'){            
            //     $this->load->view($main); 
            // }
            // else {                  
            //     $this->load->view('home/index'); 
            // } 
    ?>

    <main>
      <div class="loading" id="preloader">
         <div class="loader h-100 d-flex align-items-center justify-content-center">
            <div class="line-scale">
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>
         </div>
      </div>
      <section class="py-3 d-none d-sm-block" style="background-color: #bc913a" id="home">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-auto d-none d-lg-block">
                  <span class="fa fa-envelope color-warning fw-800 icon-position-fix"></span>
                  <p class="ml-2 mb-0 fs--1 d-inline color-white fw-700">rizky.nugraha@ars.co.id</p>
               </div>
               <div class="col-auto ml-md-auto order-md-2 d-none d-sm-block">
                    <form name="langForm" id="langForm" action="<?php echo base_url().'home/switchLang';?>" method="post">
                        <input type="hidden" name="dlang" id="dlang"> 
                        <input type="hidden" name="current" id="current" value="<?php echo substr(uri_string(),1,strlen(uri_string()));?>">
                        <a href="javascript:void(0)" onClick="lanfTrans('id');" class="lang-select" data-lang="id" style="border-right: solid 1px #fff;padding-right: 5px;">
                            <img src="assets/images/id.png" width="30">
                        </a>
                        <a href="javascript:void(0)" onClick="lanfTrans('en');" data-lang="en" style="padding-left: 8px;">
                            <img src="assets/images/eng.png" width="30">
                        </a>
                        <input type="hidden" id="csrf_token_lang" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
                    </form>
               </div>
               <div class="col-auto">
                <span class="fa fa-phone color-warning fw-800 icon-position-fix"></span>
                <a class="ml-2 mb-0 fs--1 d-inline color-white fw-700" href="tel:2123865575">0859-3020-2403</a>
            </div>
            </div>
            <!--/.row-->
         </div>
      </section>
      <div class="znav-white znav-container sticky-top navbar-elixir" id="znav-container">
         <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand overflow-hidden pr-3" href="<?php echo base_url();?>">
                    <img src="assets/images/logo-dark.png" alt=""/>
                </a>
                <div class="navbar-brand bahasa" style="margin-left: 70px;padding-top: 0px;">
                    <a href="javascript:void(0)" onClick="lanfTrans('id');" class="lang-select" data-lang="id" style="border-right: solid 1px #000;padding-right: 5px;">
                        <img src="assets/images/id.png" width="30">
                    </a>
                    <a href="javascript:void(0)" onClick="lanfTrans('en');" data-lang="en" style="padding-left: 10px;">
                        <img src="assets/images/eng.png" width="30">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <div class="hamburger hamburger--emphatic">
                     <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                     </div>
                  </div>
                </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav fs-0 fw-700">
                     <li>
                        <a href="#home" class="d-block"><?= $this->lang->line('home') ?></a>
                     </li>
                     <li><a class="d-block" href="#visi"><?= $this->lang->line('visi') ?></a></li>
                     <li><a class="d-block" href="#products"><?= $this->lang->line('products') ?></a></li>
                     <li><a class="d-block" href="#whos"><?= $this->lang->line('aboutus') ?></a></li>
                     <li><a class="d-block" href="#tata"><?= $this->lang->line('tata') ?></a></li>
                     
                     <li><a class="d-block mr-md-9" href="#kontak"><?= $this->lang->line('contactus') ?></a></li>
                  </ul>
                  <ul class="navbar-nav ml-lg-auto">
                     
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div class="flexslider flexslider-simple" style="min-height: 517px;">
         <ul class="slides">
            <li data-zanim-timeline="{}">
               <section class="py-0">
                  <div class="background-holder" style="background-image:url(assets/images/header-6.jpg);"></div>
                  <!--/.background-holder-->
                  <div class="container">
                     <div class="row align-items-center py-8" data-inertia='{"weight":1.5}'>
                        <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                           <div class="overflow-hidden">
                              <h1 class="fs-4 fs-md-5 zopacity" data-zanim='{"delay":0}'><?= $this->lang->line('slider-1-title') ?></h1>
                           </div>
                           <div class="overflow-hidden">
                              <p class="color-primary mt-4 mb-5 lh-2 fs-1 fs-md-2 zopacity" data-zanim='{"delay":0.1}'><?= $this->lang->line('slider-1-content') ?></p>
                           </div>
                           <div class="overflow-hidden">
                              <div class="zopacity" data-zanim='{"delay":0.2}'>
                                <a class="btn btn-warning mt-3" href="#kontak"><?= $this->lang->line('contactus') ?><span class="fa fa-chevron-right ml-2"></span></a></div>
                           </div>
                        </div>
                     </div>
                     <!--/.row-->
                  </div>
                  <!--/.container-->
               </section>
            </li>
            <li data-zanim-timeline="{}">
               <section class="py-0">
                  <div class="background-holder" style="background-image:url(assets/images/header-5.jpg);"></div>
                  <!--/.background-holder-->
                  <div class="container">
                     <div class="row align-items-center py-8" data-inertia='{"weight":1.5}'>
                        <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                           <div class="overflow-hidden">
                              <h1 class="fs-4 fs-md-5 zopacity" data-zanim='{"delay":0}'><?= $this->lang->line('slider-2-title') ?></h1>
                           </div>
                           <div class="overflow-hidden">
                              <p class="color-primary mt-4 mb-5 lh-2 fs-1 fs-md-2 zopacity" data-zanim='{"delay":0.1}'><?= $this->lang->line('slider-2-content') ?></p>
                           </div>
                           <div class="overflow-hidden">
                                <div class="zopacity" data-zanim='{"delay":0.2}'>
                                    <a class="btn btn-warning mt-3" href="#kontak"><?= $this->lang->line('contactus') ?><span class="fa fa-chevron-right ml-2"></span></a>
                                </div>
                           </div>
                        </div>
                     </div>
                     <!--/.row-->
                  </div>
                  <!--/.container-->
               </section>
            </li>
            <!-- <li data-zanim-timeline="{}">
               <section class="py-0">
                  <div class="background-holder" style="background-image:url(assets/images/header-1.jpg);"></div>
                  <div class="container">
                     <div class="row align-items-center py-8" data-inertia='{"weight":1.5}'>
                        <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                           <div class="overflow-hidden">
                              <h1 class="fs-4 fs-md-5 zopacity" data-zanim='{"delay":0}'>Growth Partners</h1>
                           </div>
                           <div class="overflow-hidden">
                              <p class="color-primary mt-4 mb-5 lh-2 fs-1 fs-md-2 zopacity" data-zanim='{"delay":0.1}'>Connect with top consultants hand-picked by Elixir consulting and finance.               </p>
                           </div>
                          
                        </div>
                     </div>
                  </div>
               </section>
            </li> -->
         </ul>
      </div>
      <!-- <section class="background-white  text-center" style="padding: 4rem;">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-10 col-md-6">
                  <h3 class="color-primary fs-2 fs-lg-3">Arshaka Rizky Syidadan</h3>
                  <p class="px-lg-4 mt-3">IT Solution Modern</p>
                  <hr class="short" data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll"/>
               </div>
            </div> 
         </div>
      </section> -->

        <section class="background-11" id="whos" style="padding-top: 3rem;padding-bottom: 5rem;">
            <div class="container">
               <div class="row no-gutters">
                  <div class="col-lg-4 py-3 py-lg-0" style="min-height:400px; background-position: top">
                     <div class="background-holder radius-tl-secondary radius-bl-lg-secondary radius-tr-secondary radius-tr-lg-0" style="background-image:url(assets/images/11.jpg);"></div>
                     <!--/.background-holder-->
                  </div>
                  <div class="col-lg-8 px-5 py-6 my-lg-0 background-white radius-tr-lg-secondary radius-br-secondary radius-bl-secondary radius-bl-lg-0">
                     <div class="d-flex align-items-center h-100">
                        <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                           <h3 data-zanim='{"delay":0}' class="fs-2 fs-md-3"><?= $this->lang->line('who-title') ?></h3>
                            <?= $this->lang->line('who') ?>
                            
                            <?= $this->lang->line('who-content2') ?>
                            
                        </div>
                     </div>
                  </div>
               </div>
                
            </div>
            <!--/.container-->
        </section>
        <section class="pt-0" id="visi">
         <div class="container">
            <div class="row align-items-center justify-content-center text-center">
               <div class="col-11 col-md-12">
                  <div class="pos-relative mt-4 py-5 py-md-11">
                     <div class="background-holder radius-secondary" style="background-image:url(assets/images/background-14.jpg);"></div>
               
                  </div>
               </div>
            </div>
            <div class="row">
                  <div class="col-lg-12 ">
                    <div class="row mt-5" data-zanim-timeline="{}"   data-zanim-trigger="scroll">
                      <div class="col-lg-6 do " data-zanim='{"delay":0.2}'>
                        <?= $this->lang->line('visi-content') ?>
                        
                      </div>
                      <div class="col-lg-6 dont " data-zanim='{"delay":0.2}'>
                        
                        <?= $this->lang->line('misi-content') ?>
                      </div>
                    </div>
                  </div>
                </div>
         </div>
         <!--/.container-->
        </section>
        <section class="background-11 text-center pt-0 pb-5">
            <div class="container">
              <h3 class="text-center fs-2 fs-md-3 pt-5"><?= $this->lang->line('products') ?></h3>
              <hr class="short" data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll"/>
               <div class="row mt-5">
                  <div class="col-sm-6 col-lg-6">
                     <div class="background-white pb-4 h-100 radius-secondary">
                        <img class="mb-4 radius-tr-secondary radius-tl-secondary" style="height: 315px;" src="assets/images/Screenshot_3.png" alt="International Trade"/>
                        <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                           <div class="overflow-hidden">
                              <h5 data-zanim='{"delay":0}'>International Trade</h5>
                           </div>
                          
                           <div class="overflow-hidden">
                              <p class="py-3 mb-0" data-zanim='{"delay":0.2}'><?= $this->lang->line('product-1') ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-6 mt-4 mt-lg-0">
                     <div class="background-white pb-4 h-100 radius-secondary">
                        <img class="mb-4 radius-tr-secondary radius-tl-secondary" src="assets/images/Screenshot_1.png" alt="Export Import"/>
                        <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                           <div class="overflow-hidden">
                              <h5 data-zanim='{"delay":0}'>Export Import</h5>
                           </div>
                           
                           <div class="overflow-hidden">
                              <p class="py-3 mb-0" data-zanim='{"delay":0.2}'><?= $this->lang->line('product-2') ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-6 mt-4 mt-sm-0">
                     <div class="background-white pb-4 h-100 radius-secondary">
                        <img class="mb-4 radius-tr-secondary radius-tl-secondary" src="assets/images/trade-license-services-Dubai-700x400.jpg" alt="Trade License Service"/>
                        <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                           <div class="overflow-hidden">
                              <h5 data-zanim='{"delay":0}'>Trade License Service</h5>
                           </div>
                           
                           <div class="overflow-hidden">
                              <p class="py-3 mb-0" data-zanim='{"delay":0.2}'><?= $this->lang->line('product-3') ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-sm-6 col-lg-6 mt-4">
                     <div class="background-white pb-4 h-100 radius-secondary">
                        <img class="mb-4 radius-tr-secondary radius-tl-secondary" src="assets/images/Waitshoppers.com-Business-Consultant.jpg" alt="Business Consultant"/>
                        <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                           <div class="overflow-hidden">
                              <h5 data-zanim='{"delay":0}'>Business Consultant</h5>
                           </div>
                           
                           <div class="overflow-hidden">
                              <p class="py-3 mb-0" data-zanim='{"delay":0.2}'><?= $this->lang->line('product-4') ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </section>
        <section class="background-11" style="padding-top: 0;" id="tata">
         <div class="container">
            <h3 class="text-center fs-2 fs-md-3 pt-5"><?= $this->lang->line('tata') ?></h3>
            <hr class="short" data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll"/>
            <div class="row no-gutters pos-relative mt-6">
               <div class="elixir-caret d-none d-lg-block"></div>
               <div class="col-lg-6 py-3 py-lg-0 mb-0" style="min-height:400px;">
                  <div class="background-holder radius-tl-secondary radius-tr-secondary radius-tr-lg-0" style="background-image:url(assets/images/6.jpg);"></div>
                  <!--/.background-holder-->
               </div>
               <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary radius-br-lg-0 radius-tr-lg-secondary">
                  <div class="d-flex align-items-center h-100">
                     <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                           <h5 data-zanim='{"delay":0}'><?= $this->lang->line('sinergi-title') ?></h5>
                        </div>
                        <div class="overflow-hidden">
                           <p class="mt-3" data-zanim='{"delay":0.1}'><?= $this->lang->line('sinergi-content') ?></p>
                        </div>
                        <div class="overflow-hidden">
                           <div data-zanim='{"delay":0.2}'>
                              <a class="d-flex align-items-center" href="#">
                                 <?= $this->lang->line('learn-more') ?>
                                 <div class="overflow-hidden ml-2"><span class="d-inline-block" data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row no-gutters pos-relative mt-4 mt-lg-0">
               <div class="elixir-caret d-none d-lg-block"></div>
               <div class="col-lg-6 py-3 py-lg-0 mb-0 order-lg-2" style="min-height:400px;">
                  <div class="background-holder radius-tl-secondary radius-tl-lg-0 radius-tr-secondary radius-tr-lg-0" style="background-image:url(assets/images/7.jpg);"></div>
                  <!--/.background-holder-->
               </div>
               <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary radius-br-lg-0">
                  <div class="d-flex align-items-center h-100">
                     <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                           <h5 data-zanim='{"delay":0}'><?= $this->lang->line('focus-title') ?></h5>
                        </div>
                        <div class="overflow-hidden">
                           <p class="mt-3" data-zanim='{"delay":0.1}'><?= $this->lang->line('focus-content') ?></p>
                        </div>
                        <div class="overflow-hidden">
                           <div data-zanim='{"delay":0.2}'>
                              <a class="d-flex align-items-center" href="#">
                                 <?= $this->lang->line('learn-more') ?>
                                 <div class="overflow-hidden ml-2"><span class="d-inline-block" data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row no-gutters pos-relative mt-4 mt-lg-0">
               <div class="elixir-caret d-none d-lg-block"></div>
               <div class="col-lg-6 py-3 py-lg-0 mb-0" style="min-height:400px;">
                  <div class="background-holder radius-tl-secondary radius-tr-secondary radius-tr-lg-0 radius-tl-lg-0 radius-bl-0 radius-bl-lg-secondary" style="background-image:url(assets/images/10.jpg);"></div>
                  <!--/.background-holder-->
               </div>
               <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary">
                  <div class="d-flex align-items-center h-100">
                     <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                           <h5 data-zanim='{"delay":0}'><?= $this->lang->line('integrasi-title') ?></h5>
                        </div>
                        <div class="overflow-hidden">
                           <p class="mt-3" data-zanim='{"delay":0.1}'><?= $this->lang->line('integrasi-content') ?></p>
                        </div>
                        <div class="overflow-hidden">
                           <div data-zanim='{"delay":0.2}'>
                              <a class="d-flex align-items-center" href="#">
                                 <?= $this->lang->line('learn-more') ?>
                                 <div class="overflow-hidden ml-2"><span class="d-inline-block" data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row no-gutters pos-relative mt-4 mt-lg-0">
               <div class="elixir-caret d-none d-lg-block"></div>
               <div class="col-lg-6 py-3 py-lg-0 mb-0 order-lg-2" style="min-height:400px;">
                  <div class="background-holder radius-tl-secondary radius-tl-lg-0 radius-tr-secondary radius-tr-lg-0" style="background-image:url(assets/images/13.jpg);"></div>
                  <!--/.background-holder-->
               </div>
               <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary radius-br-lg-0">
                  <div class="d-flex align-items-center h-100">
                     <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                           <h5 data-zanim='{"delay":0}'><?= $this->lang->line('keunggulan-title') ?></h5>
                        </div>
                        <div class="overflow-hidden">
                           <p class="mt-3" data-zanim='{"delay":0.1}'><?= $this->lang->line('keunggulan-content') ?></p>
                        </div>
                        <div class="overflow-hidden">
                           <div data-zanim='{"delay":0.2}'>
                              <a class="d-flex align-items-center" href="#">
                                <?= $this->lang->line('learn-more') ?>
                                 <div class="overflow-hidden ml-2"><span class="d-inline-block" data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span></div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.container-->
        </section>

        <section class="background-10 py-6">
         <div class="container">
            <div class="row align-items-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
               <div class="col-4 col-md-2 my-3 overflow-hidden"><img src="assets/images/partner/logo2.png" alt="" data-zanim="{}"/></div>
               <div class="col-4 col-md-2 my-3 overflow-hidden"><img src="assets/images/partner/logo1.png" alt="" data-zanim="{}"/></div>
               <div class="col-4 col-md-2 my-3 overflow-hidden"><img src="assets/images/partner/logo6.png" alt="" data-zanim="{}"/></div>
               <div class="col-4 col-md-2 my-3 overflow-hidden"><img src="assets/images/partner/logo3.png" alt="" data-zanim="{}"/></div>
               <div class="col-4 col-md-2 my-3 overflow-hidden"><img src="assets/images/partner/logo5.png" alt="" data-zanim="{}"/></div>
               <div class="col-4 col-md-2 my-3 overflow-hidden"><img src="assets/images/partner/logo4.png" alt="" data-zanim="{}"/></div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
        </section>
        <section class="background-11 pt-6" id="kontak">
            <div class="container">
                <h3 class="text-center fs-2 fs-md-3"><?= $this->lang->line('contactus') ?></h3>
                <hr class="short" data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll"/>
               <div class="row align-items-stretch justify-content-center pt-1">
                  <!-- <div class="col-lg-12 mb-4 mb-lg-0">
                     <div class="h-100 px-5 py-4 background-white radius-secondary">
                        <h5 class="mb-3">Melbourne Office</h5>
                        121 King Street,<br>Melbourne 1200,<br>Australia
                     </div>
                  </div> -->
                  
                  <div class="col-12 mt-4">
                     <div class="background-white p-5 h-100 radius-secondary">
                        <h5><?= $this->lang->line('contact-email') ?></h5>
                        <form class="zform mt-3">
                           <div class="row">
                              <div class="col-12"><input class="form-control" type="hidden" name="to" value="user@domain.extension"><input class="form-control background-white" type="text" placeholder="Nama Anda" required></div>
                              <div class="col-12 mt-4"><input class="form-control background-white" type="email" placeholder="Email" required></div>
                              <div class="col-12 mt-4"><textarea class="form-control background-white" rows="11" placeholder="<?= $this->lang->line('placeholder-alasan') ?>" required></textarea></div>
                              <div class="col-12 mt-4">
                                 <div class="row">
                                    <div class="col-auto"><button class="btn btn-md-lg btn-primary" type="Submit"> <span class="color-white fw-600"><?= $this->lang->line('btn-send') ?></span></button></div>
                                    <div class="col">
                                       <div class="zform-feedback"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!--/.row-->
            </div>
        </section>
        <section class="background-primary text-center py-4">
         <div class="container">
            <div class="row align-items-center" style="opacity: 0.85">
               <div class="col-sm-3 text-sm-left"><a href="index.html"><img src="assets/images/logo-dark.png" alt=""/></a></div>
               <div class="col-sm-6 mt-3 mt-sm-0">
                  <p class="color-white lh-6 mb-0 fw-600">&copy; Copyright 2020 Ars Inc.</p>
               </div>
               <div class="col text-sm-right mt-3 mt-sm-0"><a class="color-white" href="https://themewagon.com/" target="_blank"> Designed by noushop</a></div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
        </section>

        
   </main>
   <script src="<?= base_url(); ?>assets/modernizr/2.8.3/modernizr.min.js"></script>
   <script src="<?= base_url(); ?>assets/lib/jquery/dist/jquery.min.js"></script>
   <script src="<?= base_url(); ?>assets/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="<?= base_url(); ?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
   <script src="<?= base_url(); ?>assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
   <script src="<?= base_url(); ?>assets/lib/gsap/src/minified/TweenMax.min.js"></script>
   <script src="<?= base_url(); ?>assets/lib/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
   <script src="<?= base_url(); ?>assets/lib/CustomEase.min.js"></script>
   <script src="<?= base_url(); ?>assets/js/config.js"></script>
   <script src="<?= base_url(); ?>assets/js/zanimation.js"></script>
   <script src="<?= base_url(); ?>assets/js/inertia.js"></script>

    <script src="<?= base_url(); ?>assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/remodal/dist/remodal.js"></script>
    <script src="<?= base_url(); ?>assets/lib/lightbox2/dist/js/lightbox.js"></script>
    <script src="<?= base_url(); ?>assets/lib/flexslider/jquery.flexslider-min.js"></script>
    <script src="<?= base_url(); ?>assets/js/core.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script src="<?= base_url(); ?>assets/js/slideNav.js" type="text/javascript"></script>
    <script>
        window.slide = new SlideNav();

    </script>
    <script language="javascript" type="text/javascript">
     function lanfTrans(lan)
     {
       switch(lan)
       {
            case 'id': document.getElementById('dlang').value='indonesia';document.langForm.submit(); break;
            case 'en': document.getElementById('dlang').value='english'; document.langForm.submit(); break;
       } 
     }
    </script>
</body>
</html>

<?php 
// $this->load->view($js);

?> 