<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy: default-src 'self'  *.kageherostudio.com" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1">
    <title>Ninja Heroes New Era - Event</title>
    <link href="<?= base_url() ?>assets/images/layout/global/favicon.png" rel="shortcut icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/global1.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/parsley.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slick-theme.css" type="text/css" media="screen" />

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/parsley.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/slick.min.js"></script>
</head>

<body>
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
                    <li><a href="<?= base_url() ?>/">HOME</a></li>
                    <li><a class="" href="<?= base_url() ?>/payment">PAYMENT</a></li>
                    <li><a class="active" href="<?= base_url() ?>?event=anbu">ANBU MISSION</a></li>
                    <li><a class="" href="<?= base_url() ?>?event=shinobi">SHINOBI PASS</a></li>
                    <li><a class="" href="<?= base_url() ?>?event=redeemcode">REDEEM CODE</a></li>
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
            <li><a href="<?= base_url() ?>/">HOME</a></li>
            <li><a class="" href="<?= base_url() ?>/payment">PAYMENT</a></li>
            <li><a class="active" href="<?= base_url() ?>?event=anbu">ANBU MISSION</a></li>
            <li><a class="" href="<?= base_url() ?>?event=shinobi">SHINOBI PASS</a></li>
            <li><a class="" href="<?= base_url() ?>?event=redeemcode">REDEEM CODE</a></li>
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

    <section class="event-content">
        <div class="container">
            <div class="wrap">
                <center><img src="<?= base_url() ?>assets/images/logo.png" class="logo">
                </center>
                <h1 align="center">GET REWARD EVERY MILESTONE</h1>
                <p align="center" class="desc">Anbu Mission is a secret system in Ninja Heroes that allows players to
                    unlock a variety of items according to the mission milestone.</p>
                <p align="center" class="desc">
                    Anbu Mission Rules<br>
                    1. Complete Anbu Missions for a guarantee to get your favorite Shinobi!<br>
                    2. Every transaction you accumulate will go towards completing your Anbu Mission. (Except Monthly
                    Card)<br>
                    3. Complete all steps of the Anbu Missions.<br>
                    4. Rewards will be reset monthly on the 1st date.<br>
                    5. During the item reset session, the system will change items every 1st Date each month from 24:00
                    to 01:00 PM (UTC +7 / GMT +7), please do not make transactions at that time because your Anbu
                    Mission will not count!<br>
                    6. Points from top-up via google play will be added after 3 hours.<br>
                    7. Unleash the might of Anbu Ninjas!<br>
                </p>


                <div align="center"><img src="<?= base_url() ?>assets/images/Anbu 1.png" class="anbu"></div>
                <!-- 					<p class="userid">User ID = Aaa06@gmail.com</p>
				 -->
                <div class="wrap-reward shinobi-pass">
                    <!-- <div class="wrap-reward anbu-pass"> -->
                    <h5>POINTS : 0.00 $</h5>

                    <p class="userid userid-anbu">User ID = Aaa06@gmail.com [<a href="logout.php" class="logout">Logout</a>]</p>

                    <div class="shinobi-slick">
                        <div class="reward-content anbuRedeem  " data-period="1" data-id="4" data-name="Stamina Bag x2" data-point="1">
                            <div class="reward-name">Stamina Bag x2</div>
                            <div class="reward-img"><img src="https://www.kageherostudio.com/assets/filemanager/source/event/Stamina%20Bag.png"></div>
                            <div class="reward-point">1 $</div>
                        </div>
                        <div class="reward-content anbuRedeem  " data-period="1" data-id="5" data-name="S Gear Box x1" data-point="5">
                            <div class="reward-name">S Gear Box x1</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png"></div>
                            <div class="reward-point">5 $</div>
                        </div>
                        <div class="reward-content anbuRedeem  " data-period="1" data-id="13" data-name="Class A Scroll x30" data-point="10">
                            <div class="reward-name">Class A Scroll x30</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Class-A Scroll.png"></div>
                            <div class="reward-point">10 $</div>
                        </div>
                        <div class="reward-content anbuRedeem  " data-period="1" data-id="14" data-name="Class S Scroll x10" data-point="15">
                            <div class="reward-name">Class S Scroll x10</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Class-S Scroll.png"></div>
                            <div class="reward-point">15 $</div>
                        </div>
                        <div class="reward-content anbuRedeem  " data-period="1" data-id="15" data-name="Secret of Heaven x50" data-point="20">
                            <div class="reward-name">Secret of Heaven x50</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/SECRET OF HEAVEN.png"></div>
                            <div class="reward-point">20 $</div>
                        </div>
                        <div class="reward-content anbuRedeem  " data-period="1" data-id="16" data-name="Beast Chakra Bag x70" data-point="25">
                            <div class="reward-name">Beast Chakra Bag x70</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Stamina Bag.png"></div>
                            <div class="reward-point">25 $</div>
                        </div>
                        <div class="reward-content anbuRedeem  " data-period="1" data-id="17" data-name="S Ninja Box x1" data-point="30">
                            <div class="reward-name">S Ninja Box x1</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png"></div>
                            <div class="reward-point">30 $</div>
                        </div>
                        <div class="reward-content anbuRedeem  " data-period="1" data-id="18" data-name="SS Gear Box x4" data-point="40">
                            <div class="reward-name">SS Gear Box x4</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png"></div>
                            <div class="reward-point">40 $</div>
                        </div>
                        <div class="reward-content anbuRedeem reward-star " data-period="1" data-id="19" data-name="SS Ninja Box x1" data-point="50"><i class="fa fa-star"></i>
                            <div class="reward-name">SS Ninja Box x1</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png"></div>
                            <div class="reward-point">50 $</div>
                        </div>
                        <div class="reward-content anbuRedeem reward-star " data-period="1" data-id="20" data-name="SSS Boruto Karma Mode Card x70" data-point="60"><i class="fa fa-star"></i>
                            <div class="reward-name">SSS Boruto Karma Mode Card x70</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png"></div>
                            <div class="reward-point">60 $</div>
                        </div>
                        <div class="reward-content anbuRedeem reward-star " data-period="1" data-id="21" data-name="Ninja SSS Boruto Karma Mode x1" data-point="70"><i class="fa fa-star"></i>
                            <div class="reward-name">Ninja SSS Boruto Karma Mode x1</div>
                            <div class="reward-img"><img src="https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png"></div>
                            <div class="reward-point">70 $</div>
                        </div>
                    </div>
                </div>

                <center><a href="/payment" class="btn btn-buy">TOP UP NOW</a></center>
                <h2 align="center">SEASON END</h2>
                <h2 align="center" class="timeend">23 DAYS 7 HOURS 22 MINUTES</h2>

                <script type="text/javascript">
                    $(function() {
                        $('.anbuRedeem').click(function(evr) {
                            if (!$(this).hasClass('grayscale')) {
                                evr.preventDefault();
                                periodId = $(this).data('period');
                                anbuId = $(this).data('id');
                                anbuName = $(this).data('name');
                                anbuPoint = $(this).data('point');
                                serverForm = $('#ServerForm');

                                $.ajax({
                                    url: 'index_.php?act=check_login',
                                    type: 'POST',
                                    dataType: 'json',
                                    success: function(response) {
                                        if (response.message == 'success') {
                                            /* Show Modal */
                                            serverForm.modal({
                                                show: true,
                                                backdrop: 'static',
                                                keyboard: false,
                                            });
                                            /* End Show Modal */

                                            $('#form-server')[0].reset(); //reset form

                                            /* Submit Button */
                                            // Set up your 'regular' button to act as a 'submit' button when it is clicked
                                            $('form#form-server button#form-server-btnSubmit').click(function(evb) {
                                                parsleyLoginForm(); // initiation parsley js on form input
                                                var form = $('form#form-server');
                                                if (form.parsley().validate()) { // Parsley validating
                                                    if (form.data('submitted') === true) { // Previously submitted - don't submit again
                                                        evb.preventDefault();
                                                    } else {
                                                        /* Avoid double click */
                                                        form.data('submitted', true);
                                                        var $this = $(this);
                                                        $this.button('loading');
                                                        setTimeout(function() {
                                                            $this.button('reset');
                                                        }, 5000);
                                                        /* End Avoid double click */

                                                        if (form.parsley().isValid()) { // Parsley validate has valid
                                                            confirmTrans = confirm('You will make a Claiming Reward with the following data: \n\nItem Name: ' + anbuName + ' \nItem Point: ' + anbuPoint + ' \nServer: ' + $('select[name=selserver] option:selected').data('server') + ' \n\nby clicking OK then you agree to the terms of kageherostudio.com');
                                                            if (confirmTrans != 0) {
                                                                serverForm.modal('toggle');
                                                                $.ajax({
                                                                    url: 'index_.php?act=anbu',
                                                                    type: 'POST',
                                                                    data: {
                                                                        itemId: anbuId,
                                                                        periodId: periodId,
                                                                        selserver: $selserver.val(),
                                                                    },
                                                                    dataType: 'json',
                                                                    success: function(response) {
                                                                        if (response.message == 'success') {
                                                                            alertMsg(response.data, 'success');
                                                                            setTimeout(function() {
                                                                                location.reload()
                                                                            }, 3000);
                                                                        } else {
                                                                            if (response.needLogin == 1) {
                                                                                $('.loginMethod').click();
                                                                            }
                                                                            alertMsg(response.data, 'danger');
                                                                            form.data('submitted', false); // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
                                                                        }
                                                                    },
                                                                    error: function(data) {
                                                                        alertMsg('Problem Connecting, Please Try Again', 'danger');
                                                                        form.data('submitted', false); // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
                                                                    }
                                                                });
                                                                return true;
                                                            } else {
                                                                evb.stopImmediatePropagation();
                                                                form.data('submitted', false); // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
                                                                return false;
                                                            }
                                                        } else {
                                                            // return false;
                                                            form.data('submitted', false); // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
                                                        }
                                                    }
                                                }
                                            });
                                            // Keep chainability
                                            return this;
                                            /* End Submit Button */
                                        } else {
                                            if (response.needLogin == 1) {
                                                $('.loginMethod').click();
                                            }
                                            alertMsg(response.data, 'danger');
                                        }
                                    },
                                    error: function(data) {
                                        alertMsg('Problem Connecting, Please Try Again', 'danger');
                                    }
                                });
                            }
                        });
                        $('.anbuRedeem').click(function(evr) {
                            if (!$(this).hasClass('grayscale')) {
                                evr.preventDefault();
                                periodId = $(this).data('period');
                                anbuId = $(this).data('id');
                                anbuName = $(this).data('name');
                                anbuPoint = $(this).data('point');
                                serverForm = $('#ServerForm');
                            }
                            alert($(this).data('point'));
                        });

                        $('.shinobi-slick').slick({
                            dots: false,
                            infinite: false,
                            slidesToShow: 6,
                            slidesToScroll: 3,
                            autoplay: true,
                            autoplaySpeed: 5000,
                            adaptiveHeight: true,
                            responsive: [{
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 4,
                                    slidesToScroll: 2,
                                }
                            }]
                        });
                    });
                </script>

            </div>
        </div>
    </section>

    <!-- MODAL -->
    <div id="ServerForm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-login-event">
                <div class="login-content">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 align="center">SERVER</h1>
                    <form id="form-server" method="post" autocomplete="off" data-parsley-validate>
                        <fieldset>
                            <div class="form-group">
                                <label>Server</label>
                                <select class="form-control" name="selserver">
                                    <option value="">Select ...</option>
                                    <option value="1" data-server="Server 1 - NINQA6 [Lv. 43]">Server 1 - NINQA6 [Lv.
                                        43]</option>
                                    <option value="2" data-server="Server 2 - RexBard6 [Lv. 41]">Server 2 - RexBard6
                                        [Lv. 41]</option>
                                </select>
                            </div>
                            <div class="form-group" align="center">
                                <button type="button" id="form-server-btnSubmit" data-loading-text="<i class='fa fa-circle-notch fa-spin'></i> Processing..." class="btn btn-submit">SUBMIT</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div id="LoginForm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-login-event">
                <div class="login-content">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 align="center">LOGIN</h1>
                    <form id="form-login" method="post" autocomplete="off" data-parsley-validate>
                        <fieldset>
                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="text" name="txtuserid" class="form-control" placeholder="Email ...">
                            </div>
                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input type="password" name="txtpassword" class="form-control" placeholder="Password ...">
                            </div>
                            <div class="form-group" align="center">
                                <button type="button" id="form-login-btnSubmit" data-loading-text="<i class='fa fa-circle-notch fa-spin'></i> Processing..." class="btn btn-submit">SUBMIT</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <script type="text/javascript">
        function alertMsg(varMsg, varClass, varDelay = 2500) {
            return $.notify({
                message: varMsg
            }, {
                spacing: 5,
                newest_on_top: true,
                delay: varDelay,
                mouse_over: 'pause',
                type: varClass,
                placement: {
                    from: 'top',
                    align: 'center'
                }
            });
        }
        var $txtuserid = $('form#form-login input[name=txtuserid]'),
            $txtpassword = $('form#form-login input[name=txtpassword]');
        $selserver = $('form#form-server select[name=selserver]');

        /* Parsley Function */
        function parsleyLoginForm() {
            $txtuserid.attr({
                'required': '',
                'data-parsley-required-message': 'Must be filled',
                'data-parsley-type': 'email',
                'data-parsley-type-message': 'Incorrect email format',
            });
            $txtpassword.attr({
                'required': '',
                'data-parsley-required-message': 'Must be filled',
            });
        }

        function parsleyServerForm() {
            $selserver.attr({
                'required': '',
                'data-parsley-required-message': 'Must be chosen',
            });
        }
        /* End Parsley Function */

        /* Document Ready */
        $(function() {
            parsleyLoginForm(); // initiation parsley js on form input
            parsleyServerForm(); // initiation parsley js on form input

            /* Add Method */
            $('.loginMethod').click(function(ev) {
                ev.preventDefault();

                /* Show Modal */
                $('#LoginForm').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false,
                });
                /* End Show Modal */

                $('#form-login')[0].reset(); //reset form

                /* Submit Button */
                // Set up your 'regular' button to act as a 'submit' button when it is clicked
                $('form#form-login button#form-login-btnSubmit').click(function(evb) {
                    parsleyLoginForm(); // initiation parsley js on form input
                    var form = $('form#form-login');
                    if (form.parsley().validate()) { // Parsley validating
                        if (form.data('submitted') === true) { // Previously submitted - don't submit again
                            evb.preventDefault();
                        } else {
                            /* Avoid double click */
                            form.data('submitted', true);
                            var $this = $(this);
                            $this.button('loading');
                            setTimeout(function() {
                                $this.button('reset');
                            }, 5000);
                            /* End Avoid double click */

                            if (form.parsley().isValid()) { // Parsley validate has valid
                                $.ajax({
                                    url: 'index_.php?act=login',
                                    type: 'POST',
                                    data: {
                                        txtuserid: $txtuserid.val(),
                                        txtpassword: $txtpassword.val(),
                                    },
                                    dataType: 'json',
                                    success: function(response) {
                                        if (response.message == 'success') {
                                            alertMsg(response.data, 'success');
                                            setTimeout(function() {
                                                location.reload()
                                            }, 3000);
                                        } else {
                                            alertMsg(response.data, 'danger');
                                            form.data('submitted', false); // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
                                        }
                                    },
                                    error: function(data) {
                                        alertMsg('Problem Connecting, Please Try Again', 'danger');
                                        form.data('submitted', false); // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
                                    }
                                });
                            } else {
                                form.data('submitted', false); // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
                            }
                        }
                    }
                });
                // Keep chainability
                return this;
                /* End Submit Button */

            });
            /* End Add Method */

        });
        /* End Document Ready */
    </script>


</body>

</html>