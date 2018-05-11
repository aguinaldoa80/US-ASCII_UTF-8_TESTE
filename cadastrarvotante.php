<?php
session_start();
require_once './app/config.inc.php';
//
$request = filter_input_array(INPUT_GET, FILTER_DEFAULT);
$cpf = "";
if (isset($request['cpf'])) {
    $cpf = $request['cpf'];
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SVE</title>
        <link rel="stylesheet" type="text/css" href="./public/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="./public/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="./public/css/local.css" />
        <script type="text/javascript" src="./public/js/jquery.js"></script>
        <script type="text/javascript" src="./public/js/jquery.mask.js" ></script>
        <script type="text/javascript" src="./public/js/bootstrap.js" ></script>
        <script type="text/javascript" src="./public/js/funcoes.js"></script>
        <style>
            .nav-header-width{
                height: 70px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #FFF;">
            <section class="container-fluid">
                <section class="navbar-header" style="height: 80px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-expand">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img src="public/images/logoIFTMHorizontal.png " width="150"></a>
                </section>

            </section>
        </nav>
        <section class="container" style="margin-top: 70px;">
            <section class="text-center"><h2>SVE - Sistema de vota