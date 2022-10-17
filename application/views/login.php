<?php
if ($this->session->userdata('id')) {
    redirect('payment');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy: default-src 'self'  *.kageherostudio.com" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1">
    <title>Ninja Heroes New Era - Payment Gateway</title>
    <link href="<?= base_url() ?>assets/images/favicon.png" rel="shortcut icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/global.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flag-icon.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/docs-flag-icon.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/parsley.css" type="text/css" media="screen" />

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/docs-flag-icon.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/parsley.min.js"></script>
</head>

<body>
    <div class="wrapper" id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nh-navbar-container container">
                <div class="navbar-header">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2">
                            <button type="button" class="navbar-toggle offcanvas navbar-left" data-toggle="offcanvas" onclick="openNav()">
                                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> -->
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-xs-8 col-sm-8" align="center">
                            <span class="nh-navbar-brand">NH NEW ERA</span>
                        </div>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="nh-navbar">
                        <li><a href="<?= base_url() ?>">HOME</a></li>
                        <li><a class="active" href="<?= base_url() ?>/payment">PAYMENT</a></li>
                        <li><a class="" href="<?= base_url() ?>event/event_anbu">ANBU MISSION</a></li>
                        <li><a class="" href="<?= base_url() ?>event/event_shinobi">SHINOBI PASS</a></li>
                        <li><a class="" href="<?= base_url() ?>event/event_redeemcode">REDEEM CODE</a></li>
                        <li><a href="https://www.ninjaheroesnewera.com/support.php" target="_blank">SUPPORT</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <div class="nh-nav-overlay" id="nh-nav-overlay" style="display: none;" onclick="closeNav()"></div>
        <div id="nh-nav-mySidenav" class="nh-nav-sidenav">
            <div id="judulmenu">
                <span>NH NEW ERA</span>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <ul class="nh-navbar-mobile">
                <li><a href="<?= base_url() ?>">HOME</a></li>
                <li><a class="active" href="<?= base_url() ?>/payment">PAYMENT</a></li>
                <li><a class="" href=" <?= base_url() ?>event/event_anbu">ANBU MISSION</a></li>
                <li><a class="" href="<?= base_url() ?>event/event_shinobi">SHINOBI PASS</a></li>
                <li><a class="" href="<?= base_url() ?>event/event_redeemcode">REDEEM CODE</a></li>
                <li><a href="https://www.ninjaheroesnewera.com/support.php" target="_blank">SUPPORT</a></li>
            </ul>
        </div>

        <script type="text/javascript">
            /*MOBILE NAV*/
            function openNav() {
                document.getElementById("nh-nav-mySidenav").style.width = "305px";
                document.getElementById('nh-nav-overlay').style.display = 'block';
                document.getElementById('body-overlay').style.overflow = 'hidden';
            }

            function closeNav() {
                document.getElementById("nh-nav-mySidenav").style.width = "0";
                document.getElementById('nh-nav-overlay').style.display = 'none';
                document.getElementById('body-overlay').style.overflow = 'visible';
            }
            /*END MOBILE NAV*/
        </script>
        <style type="text/css">
            .game-img {
                width: 700px;
                margin: 0 auto;
            }

            .game-img img {
                margin-top: 150px;
            }

            @media(max-width: 768px) {
                .game-img {
                    width: auto;
                    padding: 0 15px;
                }
            }
        </style>
        <div class="game-img" align="center">
            <img src="<?= base_url() ?>assets/images/banner.png" width="100%">
        </div>

        <div class="main content clearfix">
            <div class="clearfix">
                <div class="container">
                    <form method="post" action="<?= base_url() ?>payment/auth" autocomplete="off" data-parsley-validate>
                        <fieldset>
                            <div class="total">
                                <div class="form-group">
                                    <label>User ID (Email)</label>
                                    <input type="email" class="form-control" name="txtuserid" placeholder="User ID (Email) ..." required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="txtpassword" min="6" placeholder="Password ..." required>
                                </div>
                                <div class="form-group btn-submit2" align="center">
                                    <button type="submit" id="topup-form-btnSubmit" class="btn btn-lg btn-primary btn-block">LOGIN</button>
                                </div>

                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-footer-bar">
            <div class="footer content clearfix">
                <p style="margin: 0;"></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/pembelian.js"></script>
</body>

</html>