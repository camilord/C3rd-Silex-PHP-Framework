<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/27/2015
 * Time: 9:14 PM
 */

/**
 * @param null $appKey
 * @return string
 */
function loadTestView($appKey = null) {
    $html = '<!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                    <meta name="author" content="">
                    <title>Notes Locker</title>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
                    <style type="text/css">
                        input[type=number]::-webkit-inner-spin-button,
                        input[type=number]::-webkit-outer-spin-button {
                          -webkit-appearance: none;
                          margin: 0;
                        }
                        input[type=number] {
                            -webkit-text-security: disc;
                        }
                        input.ios-style{
                            padding: 10px;
                            border: 1px solid #ddd;
                            width: 50px;
                            height: 50px;
                            text-align: center;
                            font-size: 30px;
                        }
                    </style>
                    <script type="text/javascript">
                        moveOnMax = function (field, nextFieldID) {
                            if (field.value.length == 1) {
                                document.getElementById(nextFieldID).focus();
                            }
                        }
                        function validateAuth() {
                            if ($(\'#c\').val().length == 1) {
                                location.href="/hello";
                            }
                        }
                    </script>
                </head>
                <body>
                    <div style="word-wrap: break-word; width: 500px; margin: 0 auto;">
                        App Key: '.$appKey.'
                        <form class="form-horizontal">
                            <div class="form-group has-success has-feedback">
                                <input maxlength="1" id="1" onkeyup="moveOnMax(this,\'a\')" class="form-control input-lg ios-style" type="number" pattern="[0-9]*" placeholder="">
                                <input maxlength="1" id="a" onkeyup="moveOnMax(this,\'b\')" class="form-control input-lg ios-style" type="number" pattern="[0-9]*" placeholder="">
                                <input maxlength="1" id="b" onkeyup="moveOnMax(this,\'c\')" class="form-control input-lg ios-style" type="number" pattern="[0-9]*" placeholder="">
                                <input maxlength="1" id="c" onkeyup="validateAuth();" class="form-control input-lg ios-style" type="number" pattern="[0-9]*" placeholder="">
                            </div>
                        </form>
                    </div>
                </body>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            </html>';
    return $html;
}