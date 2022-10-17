<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy: default-src 'self'" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1">
    <title>Ninja Heroes New Era - Payment Gateway</title>
    <link href="<?= base_url() ?>assets/images/layout/global/favicon.png" rel="shortcut icon" />

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
                        <li><a class="active" href="<?= base_url() ?>payment">PAYMENT</a></li>
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
                <li><a class="active" href="<?= base_url() ?>payment">PAYMENT</a></li>
                <li><a class="" href="<?= base_url() ?>event/event_anbu">ANBU MISSION</a></li>
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
                    <form method="post" action="<?= base_url() ?>authenticate_" autocomplete="off" name="topup-form" id="topup-form" data-parsley-validate>
                        <fieldset>
                            <div class="total">
                                <div class="form-group">
                                    <label>Choose your region</label>
                                    <span id="typeErr_region"></span>
                                    <ul class="region-list">
                                        <li><input class="form-check-input btn-input" type="radio" value="1" name="selregion" data-currency="IDR" id="rg1"><label class="form-check-label" for="rg1">
                                                <div class="flag-wrapper">
                                                    <div class="img-thumbnail flag flag-icon-background flag-icon-id">
                                                    </div>
                                                </div>
                                                <p>Indonesia</p>
                                            </label></li>
                                        <li><input class="form-check-input btn-input" type="radio" value="2" name="selregion" data-currency="MYR" id="rg2"><label class="form-check-label" for="rg2">
                                                <div class="flag-wrapper">
                                                    <div class="img-thumbnail flag flag-icon-background flag-icon-my">
                                                    </div>
                                                </div>
                                                <p>Malaysia</p>
                                            </label></li>
                                        <li><input class="form-check-input btn-input" type="radio" value="3" name="selregion" data-currency="PHP" id="rg3"><label class="form-check-label" for="rg3">
                                                <div class="flag-wrapper">
                                                    <div class="img-thumbnail flag flag-icon-background flag-icon-ph">
                                                    </div>
                                                </div>
                                                <p>Philippines</p>
                                            </label></li>
                                        <li><input class="form-check-input btn-input" type="radio" value="4" name="selregion" data-currency="THB" id="rg4"><label class="form-check-label" for="rg4">
                                                <div class="flag-wrapper">
                                                    <div class="img-thumbnail flag flag-icon-background flag-icon-th">
                                                    </div>
                                                </div>
                                                <p>Thailand</p>
                                            </label></li>
                                        <li><input class="form-check-input btn-input" type="radio" value="5" name="selregion" data-currency="USD" id="rg5"><label class="form-check-label" for="rg5"><img src="<?= base_url() ?>assets/images/global.png" width="70" style="cursor: pointer;">
                                                <p>Global</p>
                                            </label></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="txtplayerid">
                                        User ID
                                        <!-- <a class="a-tips">
									<img width="20" src="assets/images/layout/tips.png" />
									<div class="cs"> 
										<img width="700" src="assets/images/layout/tips-pic.jpg" />
									</div>
								</a> -->
                                    </label>
                                    <input type="text" class="form-control" placeholder="User ID (Contoh: 110000000xx) ..." value="<?= $account['email'] ?>" readonly required>
                                </div>
                                <div class="form-group">
                                    <label>Server</label>
                                    <select class="form-control" name="selserver">
                                        <option value="">Select ...</option>
                                        <option value="1">Server 1</option>
                                        <option value="2">Server 2</option>
                                        <option value="2">Server 3</option>
                                        <option value="2">Server 4</option>
                                        <option value="2">Server 5</option>
                                        <option value="2">Server 6</option>
                                        <option value="2">Server 7</option>
                                        <option value="2">Server 8</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="nominal">
                                        <label>Denomination</label>
                                        <div class="denom">
                                            <span id="typeErr_denom"></span>
                                            <ul class="listnominal">
                                                <li class="nominal">
                                                    <input id="g_radio1" type="radio" value="1" name="selproduct" style="display: none;" data-price="0,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,13000,15000,15000,15000,15000,34,34,0.99,34,34,34,34,34,4,4,49,49" data-method="46,1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,47,20,21,22,23,25,26,24,27,28,31,32,33,39,40,44,45" data-category="" data-region="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,5,4,4,4,4,4,4,4,2,2,3,3,1,1">
                                                    <label class="listharga" for="g_radio1">75 Gold + 6 Bonus
                                                        Gold</label>
                                                </li>
                                                <li class="nominal">
                                                    <input id="g_radio2" type="radio" value="2" name="selproduct" style="display: none;" data-price="0,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,65000,180,180,4.99,180,180,180,180,180,20.50,20.50,20.50,20.50,20.50,20.50,20.50,247,247,247,247" data-method="46,1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,47,20,22,25,26,24,27,28,31,32,33,34,35,36,37,38,39,40,42,43,44,45" data-category="" data-region="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,5,4,4,4,4,4,4,4,2,2,2,2,2,2,2,3,3,3,3,1,1">
                                                    <label class="listharga" for="g_radio2">375 Gold + 30 Bonus
                                                        Gold</label>
                                                </li>
                                                <li class="nominal">
                                                    <input id="g_radio3" type="radio" value="3" name="selproduct" style="display: none;" data-price="0,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,104000,100000,100000,100000,100000,270,270,7.99,270,270,270,270,270,33.50,33.50,33.50,33.50,33.50,33.50,33.50,395,395,395,395" data-method="46,1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,47,20,21,22,23,25,26,24,27,28,31,32,33,34,35,36,37,38,39,40,42,43,44,45" data-category="" data-region="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,5,4,4,4,4,4,4,4,2,2,2,2,2,2,2,3,3,3,3,1,1">
                                                    <label class="listharga" for="g_radio3">625 Gold + 55 Bonus
                                                        Gold</label>
                                                </li>
                                                <li class="nominal">
                                                    <input id="g_radio4" type="radio" value="4" name="selproduct" style="display: none;" data-price="0,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,195000,200000,200000,200000,200000,517,517,14.99,517,517,517,517,517,517,517,63,63,63,63,63,63,63,738,738,738,738" data-method="46,1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,47,20,21,22,23,25,26,24,27,28,29,30,31,32,33,34,35,36,37,38,39,40,42,43,44,45" data-category="" data-region="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,5,4,4,4,4,4,4,4,4,4,2,2,2,2,2,2,2,3,3,3,3,1,1">
                                                    <label class="listharga" for="g_radio4">1225 Gold + 113 Bonus
                                                        Gold</label>
                                                </li>
                                                <li class="nominal">
                                                    <input id="g_radio5" type="radio" value="5" name="selproduct" style="display: none;" data-price="0,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,390000,400000,400000,400000,400000,1035,1035,29.99,1035,1035,1035,1035,1035,1035,1035,126,126,126,126,126,126,126,1485,1485,1485,1485" data-method="46,1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,47,20,21,22,23,25,26,24,27,28,29,30,31,32,33,34,35,36,37,38,39,40,42,43,44,45" data-category="" data-region="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,5,4,4,4,4,4,4,4,4,4,2,2,2,2,2,2,2,3,3,3,3,1,1">
                                                    <label class="listharga" for="g_radio5">2475 Gold + 238 Bonus
                                                        Gold</label>
                                                </li>
                                                <li class="nominal">
                                                    <input id="g_radio6" type="radio" value="6" name="selproduct" style="display: none;" data-price="0,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,650000,49.99,1710,1710,1710,1710,1710,1710,1710,1710,1710,207,207,207,207,207,207,207,2475,2475,2475,2475" data-method="46,1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,47,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,42,43,44,45" data-category="" data-region="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,5,4,4,4,4,4,4,4,4,4,2,2,2,2,2,2,2,3,3,3,3,1,1">
                                                    <label class="listharga" for="g_radio6">4100 Gold + 420 Bonus
                                                        Gold</label>
                                                </li>
                                                <li class="nominal">
                                                    <input id="g_radio7" type="radio" value="7" name="selproduct" style="display: none;" data-price="0,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,1300000,99.99,3397,3397,3397,3397,3397,3397,3397,3397,3397,418,418,418,418,418,418,418,4950,4950,4950,4950" data-method="46,1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,47,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,42,43,44,45" data-category="" data-region="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,5,4,4,4,4,4,4,4,4,4,2,2,2,2,2,2,2,3,3,3,3,1,1">
                                                    <label class="listharga" for="g_radio7">8100 Gold + 875 Bonus
                                                        Gold</label>
                                                </li>
                                                <li class="nominal">
                                                    <input id="g_radio8" type="radio" value="8" name="selproduct" style="display: none;" data-price="52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,52000,50000,50000,50000,50000,135,135,3.99,135,135,135,135,135,17,17,197,197,197,197" data-method="1,2,3,4,5,6,7,8,9,10,13,14,15,16,17,18,19,47,20,21,22,23,25,26,24,27,28,31,32,33,39,40,42,43,44,45" data-category="" data-region="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,5,4,4,4,4,4,4,4,2,2,3,3,3,3,1">
                                                    <label class="listharga" for="g_radio8">Monthly Card (30
                                                        Days)</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="channel-list">
                                        <label>Choose Payment Method</label>
                                        <span id="typeErr_channel"></span>
                                        <ul class="listchannel">
                                            <li class="channel"><input id="46" type="radio" value="46" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="46" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/gameon.png">
                                                        </div>
                                                        <p class="txt-channel">Kartu Game-On</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"> <b id="finalprice-46"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="1" type="radio" value="1" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="1" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/gocpay.png">
                                                        </div>
                                                        <p class="txt-channel">GOC Wallet</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-1"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="2" type="radio" value="2" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="2" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/ovo.png">
                                                        </div>
                                                        <p class="txt-channel">OVO</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-2"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="3" type="radio" value="3" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="3" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/dana.png">
                                                        </div>
                                                        <p class="txt-channel">Dana</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-3"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="4" type="radio" value="4" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="4" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/ShopeePay.png">
                                                        </div>
                                                        <p class="txt-channel">ShopeePay (ID)</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-4"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="5" type="radio" value="5" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="5" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/bri.png">
                                                        </div>
                                                        <p class="txt-channel">BRI Virtual Account</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-5"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="6" type="radio" value="6" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="6" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/qris.png">
                                                        </div>
                                                        <p class="txt-channel">QRIS</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-6"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="7" type="radio" value="7" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="7" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/gopay.png">
                                                        </div>
                                                        <p class="txt-channel">GO-PAY</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-7"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="8" type="radio" value="8" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="8" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/linkaja.png">
                                                        </div>
                                                        <p class="txt-channel">LinkAja</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-8"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="9" type="radio" value="9" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="9" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/jenius.png">
                                                        </div>
                                                        <p class="txt-channel">Jenius</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-9"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="10" type="radio" value="10" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="10" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/virgo.png">
                                                        </div>
                                                        <p class="txt-channel">Virgo</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-10"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="13" type="radio" value="13" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="13" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/bcava.png">
                                                        </div>
                                                        <p class="txt-channel">BCA Virtual Account</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-13"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="14" type="radio" value="14" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="14" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/cimbclicks.png">
                                                        </div>
                                                        <p class="txt-channel">CIMB Clicks</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-14"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="15" type="radio" value="15" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="15" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/bniva.png">
                                                        </div>
                                                        <p class="txt-channel">BNI Virtual Account</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-15"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="16" type="radio" value="16" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="16" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/alfamart.png">
                                                        </div>
                                                        <p class="txt-channel">Alfamart</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-16"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="17" type="radio" value="17" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="17" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/permata.png">
                                                        </div>
                                                        <p class="txt-channel">Permata Virtual Account</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-17"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="18" type="radio" value="18" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="18" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/cimbva.png">
                                                        </div>
                                                        <p class="txt-channel">CIMB Virtual Account</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-18"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="19" type="radio" value="19" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="19" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/indomaret.png">
                                                        </div>
                                                        <p class="txt-channel">Indomaret</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-19"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="47" type="radio" value="47" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="47" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/kartukredit.jpg">
                                                        </div>
                                                        <p class="txt-channel">Kartu Kredit</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-47"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="20" type="radio" value="20" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="20" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/telkomsel.png">
                                                        </div>
                                                        <p class="txt-channel">Telkomsel</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-20"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="21" type="radio" value="21" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="21" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/xl.png">
                                                        </div>
                                                        <p class="txt-channel">XL</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-21"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="22" type="radio" value="22" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="22" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/indosat.png">
                                                        </div>
                                                        <p class="txt-channel">Indosat</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-22"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="23" type="radio" value="23" name="selchannel" data-region="1" data-currency="IDR" style="display: none;"><label for="23" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/three.png">
                                                        </div>
                                                        <p class="txt-channel">Three</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">IDR</b> <b id="finalprice-23"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="25" type="radio" value="25" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="25" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/KrungThai_Bank.png">
                                                        </div>
                                                        <p class="txt-channel">Krungthai Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-25"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="26" type="radio" value="26" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="26" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/Siam_Commercial_Bank.png">
                                                        </div>
                                                        <p class="txt-channel">Siam Commercial Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-26"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="24" type="radio" value="24" name="selchannel" data-region="5" data-currency="USD" style="display: none;"><label for="24" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/razergold.png">
                                                        </div>
                                                        <p class="txt-channel">Razer Gold</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">USD</b> <b id="finalprice-24"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="27" type="radio" value="27" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="27" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/uob.png">
                                                        </div>
                                                        <p class="txt-channel">UOB Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-27"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="28" type="radio" value="28" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="28" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/Krungsri_Bank%20OF%20Ayudhya.png">
                                                        </div>
                                                        <p class="txt-channel">Krungsri Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-28"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="29" type="radio" value="29" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="29" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/Kasikorn_bank.png">
                                                        </div>
                                                        <p class="txt-channel">Kasikorn Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-29"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="30" type="radio" value="30" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="30" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/Thai-QR.png">
                                                        </div>
                                                        <p class="txt-channel">Thai QR Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-30"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="31" type="radio" value="31" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="31" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/truemoney.png">
                                                        </div>
                                                        <p class="txt-channel">True Money</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-31"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="32" type="radio" value="32" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="32" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/linepay.png">
                                                        </div>
                                                        <p class="txt-channel">Line Pay</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-32"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="33" type="radio" value="33" name="selchannel" data-region="4" data-currency="THB" style="display: none;"><label for="33" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/ShopeePay.png">
                                                        </div>
                                                        <p class="txt-channel">ShopeePay (TH)</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">THB</b> <b id="finalprice-33"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="34" type="radio" value="34" name="selchannel" data-region="2" data-currency="MYR" style="display: none;"><label for="34" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/Maybank.png">
                                                        </div>
                                                        <p class="txt-channel">MayBank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">MYR</b> <b id="finalprice-34"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="35" type="radio" value="35" name="selchannel" data-region="2" data-currency="MYR" style="display: none;"><label for="35" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/CIMB.png">
                                                        </div>
                                                        <p class="txt-channel">CIMB (MY)</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">MYR</b> <b id="finalprice-35"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="36" type="radio" value="36" name="selchannel" data-region="2" data-currency="MYR" style="display: none;"><label for="36" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/Public%20Bank.png">
                                                        </div>
                                                        <p class="txt-channel">Public Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">MYR</b> <b id="finalprice-36"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="37" type="radio" value="37" name="selchannel" data-region="2" data-currency="MYR" style="display: none;"><label for="37" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/RHB.png">
                                                        </div>
                                                        <p class="txt-channel">RHB Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">MYR</b> <b id="finalprice-37"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="38" type="radio" value="38" name="selchannel" data-region="2" data-currency="MYR" style="display: none;"><label for="38" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/Alliance%20Bank.png">
                                                        </div>
                                                        <p class="txt-channel">Alliance Bank</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">MYR</b> <b id="finalprice-38"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="39" type="radio" value="39" name="selchannel" data-region="2" data-currency="MYR" style="display: none;"><label for="39" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/Boost.png">
                                                        </div>
                                                        <p class="txt-channel">Boost</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">MYR</b> <b id="finalprice-39"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="40" type="radio" value="40" name="selchannel" data-region="2" data-currency="MYR" style="display: none;"><label for="40" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/mcash.png">
                                                        </div>
                                                        <p class="txt-channel">MCash</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">MYR</b> <b id="finalprice-40"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="42" type="radio" value="42" name="selchannel" data-region="3" data-currency="PHP" style="display: none;"><label for="42" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/ECpay.png">
                                                        </div>
                                                        <p class="txt-channel">ECPay</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">PHP</b> <b id="finalprice-42"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="43" type="radio" value="43" name="selchannel" data-region="3" data-currency="PHP" style="display: none;"><label for="43" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/7-Eleven.png">
                                                        </div>
                                                        <p class="txt-channel">7 Eleven</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">PHP</b> <b id="finalprice-43"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="44" type="radio" value="44" name="selchannel" data-region="3" data-currency="PHP" style="display: none;"><label for="44" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/GrabPay.png">
                                                        </div>
                                                        <p class="txt-channel">GrabPay</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">PHP</b> <b id="finalprice-44"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                            <li class="channel"><input id="45" type="radio" value="45" name="selchannel" data-region="3" data-currency="PHP" style="display: none;"><label for="45" class="labelchannel">
                                                    <div class="detail-channel">
                                                        <div><img class="pull-left" src="<?= base_url() ?>assets/images/GCash.png">
                                                        </div>
                                                        <p class="txt-channel">GCash</p>
                                                        <div class="ket" style="display: none;">
                                                            <h3 class="finalprice"><b class="currency" style="display: none;">PHP</b> <b id="finalprice-45"></b></h3>
                                                        </div><span class="disable">Isn't available</span>
                                                    </div>
                                                </label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group btn-submit2" align="center">
                                    <a href="#" id="topup-form-btnSubmit" data-loading-text="Processing..." class="btn btn-lg btn-primary btn-block">PAY NOW</a>
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