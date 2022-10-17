<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy: default-src 'self'  *.kageherostudio.com" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1">
    <title>Ninja Heroes New Era - Event</title>
    <link href="<?= base_url() ?>/assets/images/favicon.png" rel="shortcut icon" />

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
                    <li><a class="" href="<?= base_url() ?>event/event_anbu">ANBU MISSION</a></li>
                    <li><a class="" href="<?= base_url() ?>event/event_shinobi">SHINOBI PASS</a></li>
                    <li><a class="active" href="<?= base_url() ?>event/event_redeemcode">REDEEM CODE</a></li>
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
            <ul class="nav navbar-nav" id="nh-navbar">
                <li><a href="<?= base_url() ?>/">HOME</a></li>
                <li><a class="" href="<?= base_url() ?>/payment">PAYMENT</a></li>
                <li><a class="" href="<?= base_url() ?>event/event_anbu">ANBU MISSION</a></li>
                <li><a class="" href="<?= base_url() ?>event/event_shinobi">SHINOBI PASS</a></li>
                <li><a class="active" href="<?= base_url() ?>event/event_redeemcode">REDEEM CODE</a></li>
                <li><a href="https://www.ninjaheroesnewera.com/support.php" target="_blank">SUPPORT</a></li>
            </ul>
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
                <center><img src="<?= base_url() ?>assets/images/logo.png" class="logo"></center>
                <h1 align="center">REDEEM CODE</h1>
                <div class="wrap-reward shinobi-pass">

                    <?php if (!$this->session->userdata('id')) { ?>
                        <a href="#" class="btn btn-login login-shinobi loginMethod">LOGIN</a>

                    <?php } else { ?>
                        <p class="userid userid-anbu">User ID = <?= $this->session->userdata('email'); ?> [<a href="<?= base_url('logout') ?>" class="logout">Logout</a>]</p>
                    <?php } ?>

                </div>

                <div class="redeemcode-content">
                    <form id="form-redeem" method="post" autocomplete="off" data-parsley-validate>
                        <fieldset>
                            <div class="form-group">
                                <label>Server</label>
                                <select class="form-control" name="selserver" required>
                                    <option data-server="" value="">Select ...</option>
                                    <option data-server="Server 1" value="1">Server 1</option>
                                    <option data-server="Server 2" value="2">Server 2</option>
                                    <option data-server="Server 3" value="3">Server 3</option>
                                    <option data-server="Server 4" value="4">Server 4</option>
                                    <option data-server="Server 5" value="5">Server 5</option>
                                    <option data-server="Server 6" value="6">Server 6</option>
                                    <option data-server="Server 7" value="7">Server 7</option>
                                    <option data-server="Server 8" value="8">Server 8</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Redeem Code</label>
                                <input type="text" name="txtcode" class="form-control" placeholder="Code ..." required>
                            </div>
                            <div class="form-group">
                                <label for="captcha" id="ccha">Captcha (4 + 6) = ?</label>
                                <input type="text" name="txtcaptcha" class="form-control" id="captcha" placeholder="Enter the results of the sum of the numbers above ..." required>
                            </div>
                            <div class="form-group" align="center">
                                <button type="submit" id="form-redeem-btnSubmit" data-loading-text="<i class='fa fa-circle-notch fa-spin'></i> Processing..." class="btn btn-submit">SUBMIT</button>
                            </div>
                        </fieldset>
                    </form>
                </div>


                <script type="text/javascript">
                    var $redeemServer = $('form#form-redeem select[name=selserver]'),
                        $redeemCode = $('form#form-redeem input[name=txtcode]'),
                        $redeemCaptcha = $('form#form-redeem input[name=txtcaptcha]');

                    /* Parsley Function */
                    function parsleyRedeemForm() {
                        $redeemServer.attr({
                            'required': '',
                            'data-parsley-required-message': 'Must be chosen',
                        });
                        $redeemCode.attr({
                            'required': '',
                            'data-parsley-required-message': 'Must be filled',
                        });
                        $redeemCaptcha.attr({
                            'required': '',
                            'data-parsley-required-message': 'Must be filled',
                        });
                    }
                    /* End Parsley Function */
                    var bil1 = Math.floor(Math.random() * 10) + 1;
                    var bil2 = Math.floor(Math.random() * 100) + 1;
                    var total = bil1 + bil2;
                    document.getElementById("ccha").innerHTML = 'Captcha (' + bil1 + ' +' + bil2 + ') = ?';
                    $(function() {
                        /* Submit Button */
                        // Set up your 'regular' button to act as a 'submit' button when it is clicked


                        $('form#form-redeem button#form-redeem-btnSubmit').click(function(evb) {
                            let dataIn = document.querySelector("#captcha").value;
                            var ubahint = parseInt(dataIn);
                            if (dataIn == total) {
                                alertMsg(`<ul>
                                        <li>Redeem Code: Invalid code</li>
                                        
                                        </ul>`,
                                    'danger');
                                setTimeout(function() {
                                    location.reload()
                                }, 5000);
                            } else {
                                alertMsg(`<ul>
                                        <li>Redeem Code: Invalid code</li>
                                        <li>Captcha: Error</li>
                                        </ul>`,
                                    'danger');
                                setTimeout(function() {
                                    location.reload()
                                }, 5000);
                            }
                            // if (1) {
                            //     if (response.message == 'success') {
                            //         alertMsg('Redeem Code: Invalid code \n Captcha: Error', 'danger');
                            //         setTimeout(function() {
                            //             location.reload()
                            //         }, 1000);
                            //     } else {
                            //         alert('gagal')
                            //     }
                            // }
                        })

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
                                    <option data-server="" value="">Select ...</option>
                                    <option data-server="Server 1" value="1">Server 1</option>
                                    <option data-server="Server 2" value="2">Server 2</option>
                                    <option data-server="Server 3" value="3">Server 3</option>
                                    <option data-server="Server 4" value="4">Server 4</option>
                                    <option data-server="Server 5" value="5">Server 5</option>
                                    <option data-server="Server 6" value="6">Server 6</option>
                                    <option data-server="Server 7" value="7">Server 7</option>
                                    <option data-server="Server 8" value="8">Server 8</option>
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
                                    url: '<?= base_url('payment/auth') ?>',
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
                                            }, 1500);
                                        } else {
                                            alertMsg(response.data, 'danger');
                                            form.data('submitted', false); // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
                                        }
                                    },
                                    error: function(data) {
                                        alertMsg('Login is successful', 'success');
                                        setTimeout(function() {
                                            location.reload()
                                        }, 3000);
                                        // Mark it so that the next submit cannot be ignored, if set true submit can be ignored
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