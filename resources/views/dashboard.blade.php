@extends('templates.template')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <x-menu>

        </x-menu>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <html>
                        <div><strong> Bem vindo!!!</strong></div>
                        <style>

                            html, body {
                              width: 100%;
                              height: 100%;
                            }

                            *, *:before, *:after {
                              box-sizing: border-box;
                              margin: 0;
                              padding: 0;
                            }

                            .strain {
                              width: 155px;
                              height: 1px;
                              background-color: #98FB98;
                              position: relative;
                              margin: 0px auto;
                              margin-top: 28px;
                              margin-bottom: 28px;
                              -webkit-animation-name: rotate-strain;
                                      animation-name: rotate-strain;
                              -webkit-animation-duration: 1.7s;
                                      animation-duration: 1.7s;
                              -webkit-animation-timing-function: linear;
                                      animation-timing-function: linear;
                              -webkit-animation-iteration-count: infinite;
                                      animation-iteration-count: infinite;
                              -webkit-animation-play-state: running;
                                      animation-play-state: running;
                            }
                            .strain:before {
                              content: "";
                              display: block;
                              position: absolute;
                              width: 18px;
                              height: 18px;
                              border-radius: 50%;
                              background-color: #13b6e2;
                              left: 0;
                              margin-top: -9px;
                              margin-left: -9px;
                              -webkit-animation-name: strain-size-left;
                                      animation-name: strain-size-left;
                              -webkit-animation-duration: 1.7s;
                                      animation-duration: 1.7s;
                              -webkit-animation-timing-function: linear;
                                      animation-timing-function: linear;
                              -webkit-animation-iteration-count: infinite;
                                      animation-iteration-count: infinite;
                              -webkit-animation-play-state: running;
                                      animation-play-state: running;
                            }
                            .strain:after {
                              content: "";
                              display: block;
                              position: absolute;
                              width: 18px;
                              height: 18px;
                              border-radius: 50%;
                              background-color: #13b6e2;
                              right: 0;
                              margin-top: -9px;
                              margin-right: -9px;
                              -webkit-animation-name: strain-size-right;
                                      animation-name: strain-size-right;
                              -webkit-animation-duration: 1.7s;
                                      animation-duration: 1.7s;
                              -webkit-animation-timing-function: linear;
                                      animation-timing-function: linear;
                              -webkit-animation-iteration-count: infinite;
                                      animation-iteration-count: infinite;
                              -webkit-animation-play-state: running;
                                      animation-play-state: running;
                            }
                            .strain:nth-child(1), .strain:nth-child(1):before, .strain:nth-child(1):after {
                              -webkit-animation-delay: 0.15s;
                                      animation-delay: 0.15s;
                            }
                            .strain:nth-child(2), .strain:nth-child(2):before, .strain:nth-child(2):after {
                              -webkit-animation-delay: 0.3s;
                                      animation-delay: 0.3s;
                            }
                            .strain:nth-child(3), .strain:nth-child(3):before, .strain:nth-child(3):after {
                              -webkit-animation-delay: 0.45s;
                                      animation-delay: 0.45s;
                            }
                            .strain:nth-child(4), .strain:nth-child(4):before, .strain:nth-child(4):after {
                              -webkit-animation-delay: 0.6s;
                                      animation-delay: 0.6s;
                            }
                            .strain:nth-child(5), .strain:nth-child(5):before, .strain:nth-child(5):after {
                              -webkit-animation-delay: 0.75s;
                                      animation-delay: 0.75s;
                            }
                            .strain:nth-child(6), .strain:nth-child(6):before, .strain:nth-child(6):after {
                              -webkit-animation-delay: 0.9s;
                                      animation-delay: 0.9s;
                            }
                            .strain:nth-child(7), .strain:nth-child(7):before, .strain:nth-child(7):after {
                              -webkit-animation-delay: 1.05s;
                                      animation-delay: 1.05s;
                            }
                            .strain:nth-child(8), .strain:nth-child(8):before, .strain:nth-child(8):after {
                              -webkit-animation-delay: 1.2s;
                                      animation-delay: 1.2s;
                            }
                            .strain:nth-child(9), .strain:nth-child(9):before, .strain:nth-child(9):after {
                              -webkit-animation-delay: 1.35s;
                                      animation-delay: 1.35s;
                            }
                            .strain:nth-child(10), .strain:nth-child(10):before, .strain:nth-child(10):after {
                              -webkit-animation-delay: 1.5s;
                                      animation-delay: 1.5s;
                            }
                            .strain:nth-child(11), .strain:nth-child(11):before, .strain:nth-child(11):after {
                              -webkit-animation-delay: 1.65s;
                                      animation-delay: 1.65s;
                            }
                            .strain:nth-child(12), .strain:nth-child(12):before, .strain:nth-child(12):after {
                              -webkit-animation-delay: 1.8s;
                                      animation-delay: 1.8s;
                            }

                            @-webkit-keyframes rotate-strain {
                              0% {
                                width: 155px;
                              }
                              25% {
                                width: 0;
                              }
                              50% {
                                width: 155px;
                              }
                              75% {
                                width: 0;
                              }
                              100% {
                                width: 155px;
                              }
                            }

                            @keyframes rotate-strain {
                              0% {
                                width: 155px;
                              }
                              25% {
                                width: 0;
                              }
                              50% {
                                width: 155px;
                              }
                              75% {
                                width: 0;
                              }
                              100% {
                                width: 155px;
                              }
                            }
                            @-webkit-keyframes strain-size-left {
                              0% {
                                transform: scale(1) translateX(0px);
                              }
                              25% {
                                transform: scale(0.5);
                              }
                              50% {
                                transform: scale(1) translateX(155px);
                              }
                              75% {
                                transform: scale(1.5);
                              }
                              100% {
                                transform: scale(1) translateX(0px);
                              }
                            }
                            @keyframes strain-size-left {
                              0% {
                                transform: scale(1) translateX(0px);
                              }
                              25% {
                                transform: scale(0.5);
                              }
                              50% {
                                transform: scale(1) translateX(155px);
                              }
                              75% {
                                transform: scale(1.5);
                              }
                              100% {
                                transform: scale(1) translateX(0px);
                              }
                            }
                            @-webkit-keyframes strain-size-right {
                              0% {
                                transform: scale(1) translateX(0px);
                              }
                              25% {
                                transform: scale(1.5);
                              }
                              50% {
                                transform: scale(1) translateX(-155px);
                              }
                              75% {
                                transform: scale(0.5);
                              }
                              100% {
                                transform: scale(1) translateX(0px);
                              }
                            }
                            @keyframes strain-size-right {
                              0% {
                                transform: scale(1) translateX(0px);
                              }
                              25% {
                                transform: scale(1.5);
                              }
                              50% {
                                transform: scale(1) translateX(-155px);
                              }
                              75% {
                                transform: scale(0.5);
                              }
                              100% {
                                transform: scale(1) translateX(0px);
                              }
                            }

                    </style>
                    <body>

                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>
                    <div class="strain"></div>


                    </body>

                    </x-app-layout>

