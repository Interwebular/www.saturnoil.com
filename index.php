<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Saturn Oil + Gas.</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,800" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body,html {
                background: #f9f9fc;
            }

            header {
                height: 95px;
            }

            .logo {
                position: absolute;
                top: 18px;
                right: 15px;
                width: 250px;
                height: 70px;
                background-image: url(branding/saturn_oil_logo.png);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                overflow: hidden;

                transition: all 250ms;
            }

            .company-details {
                font-family: 'Open Sans', sans-serif;
                font-weight: 800;
                text-transform: uppercase;
                color: #767171;
                margin-bottom: 5px;

                transition: all 250ms;
            }

            span {
                color: #52E2A0;
            }

            .hero {
                position: relative;
                height: 400px;
                width: 100%;
                background-image: url(background.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;

                transition: all 250ms;

                margin-bottom: 20px;
            }

            .hero__content {
                position: absolute;
                top: 50%;
                left: 50px;
                transform: translateY(-50%);
                font-family: 'Open Sans Condensed', sans-serif;
                font-weight: 700;
                text-transform: uppercase;
                color: #52E2A0;
                font-size: 6em;

                transition: all 250ms;
            }

            h1 {
                font-family: 'Open Sans Condensed', sans-serif;
                font-weight: 700;
                text-transform: uppercase;
                color: #767171;
            }

            .icon {
                font-size: 2.5em;
                line-height: 1;
                color: #767171;
            }

            .contact-info {
                color: #767171;
                font-family: 'Open Sans', sans-serif;
                font-size: 1.2em;

            }

            @media(max-width: 600px) {
                .company-details {
                    text-align: center;
                }

                .logo {
                    right: auto;
                    left: 50%;
                    transform: translateX(-50%);
                }

                .hero {
                    height: 280px;
                }

                .hero__content {
                    left: 10px;
                    font-size: 3em;
                }

                .contact-info {
                    font-size: 0.9em;
                    letter-spacing: 1px;
                }
            }
        </style>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header>
            <div class="logo"></div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 company-details">
                    Saturn Oil <span>+</span> Gas Inc. <span>|</span> TSX.v: SMI <span>|</span> FRA: Smk
                </div>
            </div>
        </div>

        <div class="hero">
            <div class="hero__content">Coming Soon.</div>
        </div>

        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-xs-12">
                    <h1 class="title">Contact Us.</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <p class="contact-info">
                                jjeffrey@saturnoil.com<br>
                                +1 587.222.3568
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <p class="contact-info">
                                snewman@saturnoil.com<br>
                                +1 306.291.2461
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
