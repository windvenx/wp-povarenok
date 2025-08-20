<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
            rel="stylesheet">
</head>

<body>
<header class="site-header" role="banner">

    <!-- ОБЁРТКА #1: основная часть хедера -->
    <div class="header-main">            <!-- <- новая обёртка для "главного" хедера -->
        <div class="container">
            <div class="header-container">

                <!-- LEFT: logo + branch -->
                <div class="header-left">
                    <div class="site-logo" aria-hidden="false">
                        <svg version="1.1" id="logo_pt" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="222" height="69" viewBox="0 0 220 69" style="enable-background:new 0 0 220 69;" xml:space="preserve">
<style>
	.st0{fill:#19552B;}
    .st1{fill:#FFFFFF;}
    .st2{fill:#0E0D11;}
    .st3{fill:#FFF200;}
</style>
                            <g id="g10" transform="matrix(1.25,0,0,-1.25,0,22.5)">
	<g id="g12" transform="scale(0.1,0.1)">
		<path id="path14" class="st0" d="M130.8,180h1562.4c20.8,0,34-16.9,30.1-37l-84.9-425.7c-4-20.5-24.4-37-44.9-37H30.7
			c-20.5-0.3-34,16.5-30.1,37L85.9,143C89.9,163.1,110,180,130.8,180"></path>
        <path id="path16" class="st1" d="M577.4,134.1l-49.9-243.2H370l27.4,132.5H294l-61.4-297.4H75l83.6,408.2H577.4z M514-175.3
			l-20.1-98.8h-30.4l20.1,98.8H514z M366-274.1H336l20.5,98.8h30.1l-19.8-96.8C366.3-271.8,366-274.1,366-274.1z M507.1-153.1
			l4.6,22.1H376.6l-4.6-22.1h41.3l-2.6-13.2l-19.8-96.8H443l20.8,101.1l2,8.9H507.1"></path>
        <path id="path18" class="st2" d="M1739.8,130.8c14.2-4.6,22.8-18.8,19.5-35.4l-85.2-425.7c-4-20.5-24.4-37-44.9-37H66.8
			c-18.5,0-31,13.2-30.7,30.7c3.3-1,6.9-1.7,10.9-1.7h1562.4c20.5,0,41,16.9,44.9,37l85.2,425.7
			C1739.5,126.5,1739.8,128.8,1739.8,130.8"></path>
        <path id="path20" class="st1" d="M718.5-1.8l-24.4-119h-52.9l11.6,55.5h-1l-38-55.5h-57.1l24.4,119h52.9l-11.6-55.5h1l38.3,55.5
			H718.5"></path>
        <path id="path22" class="st1" d="M936.5-1.8L919-86.7h16.2l-13.9-67.1h-51.2l6.9,33H716.8l24.4,119h52.9l-17.5-84.9h18.5
			l17.5,84.9h52.9L848-86.7h18.5L884-1.8H936.5"></path>
        <path id="path24" class="st1" d="M1088.1-45.4c0-6.6-1-14.2-3-22.5l-1.7-6.9h-80.3c0-1-0.3-2-0.3-2.6c0-4.3,1.3-7.9,4.3-10.6
			c4-3.6,10.6-5.6,20.1-5.6c6.6,0,14.2,0.7,22.5,2.3c8.6,1.7,16.2,3.6,22.8,5.6l-6.3-30.7c-8.6-2.3-17.8-4-27.4-5
			c-9.6-1-18.5-1.7-26.8-1.7c-9.2,0-17.2,0.7-23.8,2c-9.9,2-18.2,5.9-24.8,11.2c-4.6,3.6-8.6,8.3-10.9,13.6c-3.3,6.3-5,13.2-5,21.5
			c0,17.8,5.9,34,17.8,48.6c15.2,18.5,36.7,28.1,64.4,28.1c17.5,0,31.4-3.6,41.6-11.2c6.6-5.3,11.6-11.6,14.2-18.8
			C1087.4-33.8,1088.1-39.4,1088.1-45.4z M1039.2-41.1c0,5.3-1.3,8.6-3.6,10.9c-2.3,2-5,3-8.3,3c-3.6,0-6.6-1-9.2-3
			c-4.6-3.6-7.9-9.6-9.6-18.2l-0.3-2.3h29.7l0.3,2.6L1039.2-41.1"></path>
        <path id="path26" class="st1" d="M1236.4-25.2c0-6.9-2.3-13.6-6.6-19.2c-5-6.6-12.6-10.9-22.5-13.6c6.9-1,12.6-3.6,16.8-7.9
			s6.3-9.6,6.3-16.2c0-9.9-4.3-18.8-12.6-26.1c-9.6-8.6-22.5-12.6-38.3-12.6h-88.9l24.4,119h87.2c11.2,0,19.8-2,25.4-5.9
			C1233.4-11.4,1236.4-17.3,1236.4-25.2z M1183.6-35.5c0,2.6-1,5-3.3,6.3c-2,1.3-5.6,2.3-10.2,2.3h-7.3l-4.3-20.8h7.3
			c6.9,0,11.9,1.7,14.9,4.6C1182.6-40.8,1183.6-38.5,1183.6-35.5z M1176.6-81.4c0,4.3-1.3,6.9-4.3,7.9c-3,1-6.3,1.7-10.2,1.7h-8.3
			l-5-23.5h8.3c6.9,0,12.2,1.7,15.5,4.6C1175.3-88.4,1176.6-85.1,1176.6-81.4"></path>
        <path id="path28" class="st1" d="M1473.6-1.8l-24.4-119h-57.8l24.4,119H1473.6z M1388.7-72.8c0-11.6-4-21.5-12.2-30.1
			c-10.9-11.9-27.7-17.8-49.9-17.8h-82.9l24.4,119h57.8l-7.9-38c2.6,0,6.9,0.3,12.6,0.7c5.9,0.3,9.2,0.7,10.9,0.7
			c18.5,0,31.4-4.3,39.3-13.2C1386-57.3,1388.7-64.2,1388.7-72.8z M1330.5-76.5c0,4.6-1.7,7.6-5.3,9.3c-2,1-5,1.7-8.6,1.7h-5
			l-5.6-26.8h5c6.3,0,10.9,1.7,14.2,4.6C1328.6-84.7,1330.5-81.1,1330.5-76.5"></path>
        <path id="path30" class="st1" d="M1617.3-45.4c0-6.6-1-14.2-3-22.5l-1.7-6.9h-80.3c0-1-0.3-2-0.3-2.6c0-4.3,1.3-7.9,4.3-10.6
			c4-3.6,10.6-5.6,20.1-5.6c6.6,0,14.2,0.7,22.5,2.3c8.6,1.7,16.2,3.6,22.8,5.6l-6.3-30.7c-8.6-2.3-17.8-4-27.4-5
			c-9.6-1-18.5-1.7-26.8-1.7c-9.2,0-17.2,0.7-23.8,2c-9.9,2-18.2,5.9-24.8,11.2c-4.6,3.6-8.3,8.3-10.9,13.6c-3.3,6.3-5,13.2-5,21.5
			c0,17.8,5.9,34,17.8,48.6c15.2,18.5,36.7,28.1,64.4,28.1c17.5,0,31.4-3.6,41.6-11.2c6.6-5.3,11.6-11.6,14.2-18.8
			C1616.3-33.8,1617.3-39.4,1617.3-45.4z M1568.4-41.1c0,5.3-1.3,8.6-3.6,10.9c-2.3,2-5,3-8.3,3c-3.6,0-6.6-1-9.2-3
			c-4.6-3.6-7.9-9.6-9.6-18.2l-0.3-2.3h29.7l0.3,2.6L1568.4-41.1"></path>
        <path id="path32" class="st3" d="M1580.6-183.5l-18.5-90.2h-40l8.6,42.3h-1l-28.7-42.3h-43.3l18.8,90.2h40l-8.6-42.3h1l29.1,42.3
			C1537.7-183.5,1580.6-183.5,1580.6-183.5z M1459-183.5l-18.5-90.2h-40l8.6,42.3h-1l-28.7-42.3h-43.3l18.5,90.2h40l-8.6-42.3h1
			l29.1,42.3C1416.1-183.5,1459-183.5,1459-183.5z M1341.4-183.5l-5.3-25.8h-32l-13.2-64.4H1247l18.5,90.2
			C1265.8-183.5,1341.4-183.5,1341.4-183.5z M1198.4-215.9c0,3-0.7,5.3-1.7,6.6c-1.3,1.3-3,2-5,2c-2.6,0-4.6-1-6.6-2.6
			c-1-1-2-2.3-3-4.6c-1.3-3-2.6-7.3-4-12.9c-1.3-5.6-2-10.6-2-14.2c0-3,0.7-5.3,2-6.6c1.3-1.3,2.6-2,4.6-2c2.3,0,4.3,0.7,6.3,2.3
			c2,1.3,3.6,4,4.6,7.6c1.3,3.6,2.3,7.6,3.3,12.2C1197.8-223.5,1198.4-219.2,1198.4-215.9z M1245-219.9c0-15.2-5.9-28.1-17.5-39
			c-12.6-11.2-28.7-17.2-49.2-17.2c-19.2,0-32.7,4.6-41,13.9c-5.3,6.3-8.3,13.9-8.3,23.1c0,15.5,5.6,28.4,16.8,39.3
			c12.6,11.9,29.4,18.2,50.5,18.2c16.8,0,29.4-4,37.7-11.9C1241.4-200.4,1245-209.3,1245-219.9z M1127.1-183.5l-18.5-90.2h-43.9
			l13.2,64.4H1063l-3-15.2c-2.3-11.6-4-19.2-5.3-23.1c-2.3-7.3-5.3-12.9-9.2-17.2c-4-4.3-8.6-7.3-13.9-8.9c-4-1.3-8.6-2-13.9-2
			c-4.3,0-8.3,0.3-11.9,0.7s-7.3,1.3-11.2,2.6l5.6,23.1c2-0.7,4.3-1.3,6.9-1.3c3.6,0,6.3,2,8.3,5.9c2,4,4.3,11.9,6.9,23.5l7.9,37.7
			C1029.6-183.5,1127.1-183.5,1127.1-183.5z M953.3-215.9c0,3-0.7,5.3-1.7,6.6c-1.3,1.3-3,2-5,2c-2.6,0-4.6-1-6.6-2.6
			c-1-1-2-2.3-3-4.6c-1.3-3-2.6-7.3-4-12.9c-1.3-5.6-2-10.6-2-14.2c0-3,0.7-5.3,2-6.6c1.3-1.3,2.6-2,4.6-2c2.3,0,4.3,0.7,6.3,2.3
			c2,1.3,3.6,4,4.6,7.6c1.3,3.6,2.3,7.6,3.3,12.2C952.7-223.5,953.3-219.2,953.3-215.9z M999.9-219.9c0-15.2-5.9-28.1-17.5-39
			c-12.6-11.2-28.7-17.2-49.2-17.2c-19.2,0-32.7,4.6-41,13.9c-5.3,6.3-8.3,13.9-8.3,23.1c0,15.5,5.6,28.4,16.8,39.3
			c12.6,11.9,29.4,18.2,50.5,18.2c16.8,0,29.4-4,37.7-11.9C996.3-200.4,999.9-209.3,999.9-219.9z M882-183.5l-18.5-90.2h-43.9
			l6.9,33.4H811l-6.9-33.4h-43.9l18.5,90.2h43.9l-6.3-31.1h15.5l6.3,31.1H882z M767.4-183.5l-34-41l20.1-49.2h-46.9l-7.9,30.4H698
			l-20.5-30.4h-44.9l40,48.6l-19.5,41.6h46.6l5.9-28.1h0.7l17.5,28.1C724.1-183.5,767.4-183.5,767.4-183.5z M604.2-213.6
			c0,4-1,6.6-2.6,8.3c-1.7,1.7-4,2.3-6.3,2.3c-2.6,0-5-0.7-6.9-2.3c-3.6-2.6-5.9-7.3-7.3-13.9l-0.3-1.7h22.5l0.3,2
			C603.5-218.9,604.2-213.6,604.2-213.6z M641.2-216.9c0-5-0.7-10.9-2.3-17.2l-1.3-5.3h-60.8c0-0.7-0.3-1.3-0.3-2c0-3.3,1-5.9,3-7.9
			c3-3,8.3-4.3,15.2-4.3c5,0,10.6,0.7,17.2,1.7c6.3,1.3,12.2,2.6,17.2,4.3l-5-23.5c-6.6-1.7-13.5-3-20.8-4s-14.2-1.3-20.5-1.3
			c-6.9,0-13.2,0.7-18.2,1.7c-7.6,1.7-13.9,4.3-18.8,8.6c-3.6,3-6.3,6.3-8.3,10.2c-2.3,4.6-3.6,10.2-3.6,16.2
			c0,13.6,4.6,25.8,13.5,37c11.6,14.2,27.7,21.2,48.9,21.2c13.2,0,23.8-3,31.4-8.6c5-4,8.6-8.6,10.9-14.2
			C640.5-208.3,641.2-212.3,641.2-216.9"></path>
        <path id="path34" class="st3" d="M525.2-120.1l-9.2-44h-41.6l-22.5-110.1h-74.7L399.7-164h-41.3l9.2,44H525.2"></path>
        <path id="path36" class="st3" d="M622.3,134.1h1013.1c8.9,0,14.9-7.3,13.2-15.9l-12.2-69.4c-1.7-8.9-9.9-15.9-18.8-15.9H604.5
			c-8.9,0-14.9,7.3-13.2,15.9l12.2,69.4C605.2,127.1,613.8,134.1,622.3,134.1"></path>
        <path id="path38" class="st0" d="M674.9,102.3h-23.5l-8.9-45.3h-11.6l10.9,55.5h35.3L674.9,102.3"></path>
        <path id="path40" class="st0" d="M692.4,89.1h-9.9c-1-4.3-2.3-8.6-3.3-12.6c-1.3-4-2.6-7.3-4.3-10.2c-1.7-3-3.6-5.3-5.9-6.9
			c-2.3-1.7-4.6-2.6-7.6-2.6c-3.3,0-5.6,0.3-6.9,1l3.6,9.9c1-0.3,1.7-0.3,2.3-0.3c1.3,0,2.3,0.3,3.6,1.3c1,1,2.3,2.6,3.3,5
			s2.3,5.6,3.3,9.6c1.3,4,2.6,9.3,4,15.5h30.7l-7.9-41.6h-11.2L692.4,89.1"></path>
        <path id="path42" class="st0" d="M716.2,96.1c2.6,1,5.6,2,9.2,2.6c3.6,0.7,7.3,1,10.9,1c3,0,5.3-0.3,7.3-1c2-0.7,3.3-1.7,4.3-3
			c1-1.3,1.3-3,1.7-4.6c0-2,0-4-0.3-5.9c-0.7-2.6-1-5.3-2-7.9c-0.7-2.6-1.3-5.3-2-8.3c-0.3-2-0.7-4-0.7-5.9c0-2,0-3.6,0.3-5.6h-9.2
			l-0.7,6.3h-1c-1.7-2-4-3.3-6.3-4.6c-2.3-1.3-5.3-2-8.6-2c-2,0-4,0.3-5.3,1c-1.7,0.7-3,1.3-4,2.6c-1,1-1.7,2.3-2,4
			c-0.3,1.3-0.3,3,0,5c1,4.6,3.3,8.3,6.9,10.6s8.6,3.6,15.2,3.6c1.7,0,3,0,4.3-0.3c1.3-0.3,2.3-0.3,3-0.7c0.3,1,0.7,2,0.7,3
			c0.3,2,0.3,3.6-0.7,4.3c-1,1-2.6,1.3-5.3,1.3c-2.6,0-5-0.3-7.6-1c-2.6-0.7-5-1.3-6.9-2.3C717.5,87.5,716.2,96.1,716.2,96.1z
			 M724.7,65.6c2.6,0,4.6,0.7,6.3,1.7c1.7,1.3,3,2.3,4,3.6l1,4.6c-0.3,0-0.7,0.3-1.3,0.3s-1,0.3-1.7,0.3c-0.7,0-1.3,0.3-2,0.3
			s-1.3,0-1.7,0c-3,0-5-0.7-6.6-1.7c-1.7-1-2.6-2.3-3-4c-0.3-2,0-3.3,0.7-4.3C721.4,66,723.1,65.6,724.7,65.6"></path>
        <path id="path44" class="st0" d="M763.4,98.7c2.3,0.3,5,0.3,7.9,0.3s6.3,0.3,9.6,0.3c6.6,0,11.2-1,13.5-2.6
			c2.3-1.7,3.3-4.3,2.6-7.6c-0.3-2-1.3-4-3-5.6c-1.7-1.7-3.6-3-6.6-4v-0.7c3.3-0.7,5.3-2,6.6-3.6c1.3-1.7,1.7-4,1-6.6
			c-0.7-4-3.3-7.3-6.9-9.3c-4-2-9.6-3-17.5-3c-2.6,0-5.3,0-7.9,0.3c-2.6,0-5.3,0.3-7.3,0.7C755.5,57.4,763.4,98.7,763.4,98.7z
			 M768,65.6c1-0.3,2-0.3,2.6-0.3c0.7,0,1.7,0,2.6,0c3.6,0,6.3,0.3,7.9,1.3c1.7,1,2.6,2,3,3.6c0.3,1.3,0,2.6-1,3.6s-3.3,1.3-6.6,1.3
			H770C769.7,75.2,768,65.6,768,65.6z M777.9,81.8c2,0,4,0.3,5.3,1.3c1.3,0.7,2.3,2,2.6,3.3s0,2.6-1,3.3s-3,1.3-5.9,1.3
			c-1,0-2,0-2.6,0c-0.7,0-1.3,0-2,0c-0.3,0-0.3,0-0.7,0c-0.3,0-0.7,0-0.7,0l-1.7-8.6L777.9,81.8"></path>
        <path id="path46" class="st0" d="M831.8,73.3h-15.9l-3-16.2h-11.2l7.9,41.6h11.2l-3-15.5h15.9l3,15.5H848L840,57.1h-11.2
			L831.8,73.3"></path>
        <path id="path48" class="st0" d="M864.1,66.6c1-0.3,2-0.3,3-0.3s2,0,2.6,0c3,0,5,0.3,6.3,1.3c1.3,1,2.3,2.3,2.6,4.3
			c0.3,1.7,0,3-1,4c-1,1-3,1.3-5.6,1.3c-2.3,0-4.3-0.3-6.3-0.7L864.1,66.6z M867.8,83.8c1.7,0.3,3.3,0.3,5,0.7c1.7,0,3,0.3,4.3,0.3
			c3,0,5.6-0.3,7.6-1c2-0.7,3.3-1.7,4.6-2.6c1-1.3,1.7-2.6,2-4c0.3-1.7,0.3-3.3,0-5c-0.3-2.6-1.3-4.6-2.3-6.6c-1-2-2.6-3.3-4.3-4.6
			c-2-1.3-4.3-2.3-6.9-3c-2.6-0.7-5.9-1-9.6-1s-6.6,0-8.9,0c-2.6,0-5,0.3-6.9,0.3l8.3,41.6h11.2C870.4,98.7,867.8,83.8,867.8,83.8z
			 M901.8,98.7H913l-7.9-41.6h-11.2L901.8,98.7"></path>
        <path id="path50" class="st0" d="M948,75.9l2,6.9l-6.3-6.9l-20.1-18.8H917l7.9,41.6h11.2l-4-19.5l-1.7-5.6h1c1,1,1.7,2,2.6,3
			c1,1,1.7,2,2.6,3L957.3,99h6.6L956,57.4h-11.2C944.4,57.4,948,75.9,948,75.9z M942.4,115.9c0-2.3,0.3-3.6,1.3-4.6
			c1-0.7,2.3-1.3,4-1.3c1.7,0,3.3,0.3,4.3,1.3c1.3,0.7,2.3,2.3,3,4.3l7.9-2.3c-1.3-3.6-3.6-5.9-6.6-7.9c-3-1.7-6.6-2.6-10.6-2.6
			c-2,0-3.6,0.3-5.3,0.7c-1.7,0.3-3,1-4.3,2s-2.3,2-3,3.3c-0.7,1.3-1,3-1,5L942.4,115.9"></path>
        <path id="path52" class="st0" d="M997.3,98.7h7.9l0.3-5.3h1c2,2,4.3,3.6,6.6,4.6c2.3,1,5,1.7,7.9,1.7c5.6,0,9.6-1.7,11.9-5
			c2.3-3.3,2.6-8.6,1-15.9c-0.7-3.6-1.7-6.6-3.3-9.6c-1.3-3-3.3-5.3-5.3-7.3c-2.3-2-4.6-3.6-7.6-4.6c-2.6-1-5.9-1.7-9.2-1.7
			c-1.7,0-3.3,0.3-4.6,0.7c-1.3,0.3-2.6,0.7-3.6,1.3l-3.3-16.5h-11.2C986,41.5,997.3,98.7,997.3,98.7z M1016.1,90.8
			c-2.6,0-4.6-0.7-6.3-1.7c-1.7-1-3-3-4.3-5.3l-3-16.2c0.7-0.7,1.7-1.3,2.6-1.7s2.3-0.7,4-0.7c3.6,0,6.6,1,8.6,3.3
			c2.3,2.3,3.6,5.9,4.6,10.6c0.7,3.6,0.7,6.3-0.3,8.3C1021.4,89.8,1019.1,90.8,1016.1,90.8"></path>
        <path id="path54" class="st0" d="M1075.5,61c-2-1.3-4.6-2.6-8.3-3.6c-3.3-1-6.6-1.3-10.2-1.3c-7.3,0-12.2,2-14.5,5.9
			c-2.6,4-3.3,9.3-2,16.2c1.3,7.3,4.3,12.6,8.9,16.5c4.6,3.6,10.2,5.6,17.2,5.6c2.3,0,4.3-0.3,6.6-1c2-0.7,4-1.3,5.3-2.6
			c1.3-1.3,2.6-3,3-5.3c0.7-2.3,0.7-5,0-8.3c-0.3-1-0.7-2.3-1-3.6c-0.3-1.3-1-2.6-1.3-4.3h-28.1c-0.3-3.6,0-6.3,1.7-7.9
			c1.7-1.7,4.3-2.6,8.6-2.6c2.6,0,5,0.3,6.9,1s4,1.3,5,2.3L1075.5,61z M1064.6,91.4c-3.3,0-5.9-1-7.9-2.6c-2-1.7-3.3-4-4-6.6h18.2
			c0.7,3,0.7,5.3-0.3,6.9C1069.6,90.4,1067.6,91.4,1064.6,91.4"></path>
        <path id="path56" class="st0" d="M1128.7,47.8h-7.9l0.3,9.6h-35L1094,99h11.2l-6.3-31.7h15.2l6.3,31.7h11.2l-6.3-31.7h6.6
			L1128.7,47.8"></path>
        <path id="path58" class="st0" d="M1174.6,61c-2-1.3-4.6-2.6-8.3-3.6c-3.3-1-6.6-1.3-10.2-1.3c-7.3,0-12.2,2-14.5,5.9
			c-2.6,4-3.3,9.3-2,16.2c1.3,7.3,4.3,12.6,8.9,16.5c4.6,3.6,10.2,5.6,17.2,5.6c2.3,0,4.3-0.3,6.6-1c2-0.7,4-1.3,5.3-2.6
			c1.3-1.3,2.6-3,3-5.3c0.7-2.3,0.7-5,0-8.3c-0.3-1-0.7-2.3-1-3.6c-0.3-1.3-1-2.6-1.3-4.3h-28.1c-0.3-3.6,0-6.3,1.7-7.9
			s4.3-2.6,8.6-2.6c2.6,0,5,0.3,6.9,1s4,1.3,5,2.3C1172.3,68,1174.6,61,1174.6,61z M1163.7,91.4c-3.3,0-5.9-1-7.9-2.6
			s-3.3-4-4.3-6.6h18.2c0.7,3,0.7,5.3-0.3,6.9C1168.7,90.4,1166.7,91.4,1163.7,91.4"></path>
        <path id="path60" class="st0" d="M1218.2,89.1h-15.5l-6.3-31.7h-11.2l7.9,41.6h38l-7.9-41.6h-10.9L1218.2,89.1"></path>
        <path id="path62" class="st0" d="M1273.7,89.1h-12.9l-6.3-31.7H1243l6.3,31.7h-12.9l2,9.9h37.7L1273.7,89.1"></path>
        <path id="path64" class="st0" d="M1306.8,90.1c2.3,2.3,4.6,4,7.3,5.3c2.6,1,5.6,1.7,8.9,1.7c5.6,0,9.6-1.3,12.2-4.3
			c2.6-3,3.3-7.6,2-13.9c-1.3-7.3-4.3-12.9-8.6-16.9c-4.3-4-9.9-5.6-16.5-5.6c-6.9,0-11.9,2-14.9,6.3c-3,4.3-3.3,10.9-1.7,19.8
			c1,4.6,2,8.9,3.3,12.2c1.3,3.3,2.6,5.9,4.3,8.3c1.7,2.3,3.3,4,5,5.3c1.7,1.3,3.6,2.3,5.6,3c2,0.7,4.3,1,6.3,1.3
			c2.3,0.3,4.6,0.3,6.9,0.7c3,0.3,5.6,0.7,7.9,1c2.3,0.3,4,1,5.3,1.7l-1.3-9.6c-1.3-1-3.3-1.3-5.6-1.7s-5.3-0.7-9.2-1
			c-2.3,0-4.6-0.3-6.3-0.7c-2-0.3-3.6-0.7-5-1.7c-1.7-0.7-3-2-4-3.6c-1-1.7-2.3-4-3.3-7.3h0.7C1306.4,90.1,1306.8,90.1,1306.8,90.1z
			 M1306.1,77.2c-0.3-1.7-0.3-3.3-0.3-4.6s0.3-2.6,1-3.6s1.3-2,2.6-2.6c1-0.7,2.6-1,4.3-1c3.6,0,6.3,1,8.3,3c2,2,3.3,5,4,8.6
			c0.7,3.6,0.3,6.3-0.7,7.9c-1,1.7-3.3,2.6-6.6,2.6c-3.6,0-6.3-1-8.3-2.6C1308.1,83.2,1306.8,80.5,1306.1,77.2"></path>
        <path id="path66" class="st0" d="M1373.8,75.9l2,6.9l-6.3-6.9l-20.1-18.8h-6.6l7.9,41.6h11.2l-4-19.5l-1.7-5.6h1
			c0.7,1,1.7,2,2.6,3c1,1,1.7,2,2.6,3l20.5,19.5h6.6l-7.9-41.6h-11.2L1373.8,75.9"></path>
        <path id="path68" class="st0" d="M1400.6,74.6l1.3,7.6h5.3c2.3,0,4.3,0.3,5.9,1c1.7,0.7,2.3,1.7,2.6,3c0.3,1.7,0,2.6-1.3,3.3
			c-1,0.7-3,1-5.6,1c-2.3,0-4.3-0.3-6.3-1s-3.6-1-5-1.7c-0.3,1.3-0.3,2.6-0.3,4s0,2.6-0.3,4c2,1,4.6,2,7.6,2.6c3,0.7,6.3,1,9.6,1
			c5.3,0,8.9-1,10.9-2.6c2.3-1.7,3-4.3,2.3-7.6c-0.3-1-0.7-2-1-3c-0.3-1-1-2-2-2.6c-0.7-1-1.7-1.7-2.6-2.3c-1-0.7-2.3-1.3-3.6-1.7
			v-0.7c3.3-0.7,5.3-2,6.3-3.6c1-1.7,1.3-4,0.7-6.6c-0.3-1.7-1-3.3-2-5c-1-1.7-2.6-3-4.3-4c-2-1.3-4-2-6.6-2.6c-2.6-0.7-5.6-1-8.9-1
			c-3.3,0-5.9,0.3-8.3,1s-4.3,1.3-5.6,2.3c0.7,1.3,1.3,3,2,4.3c0.7,1.3,1.3,3,2,4.3c1.3-0.7,3-1.3,5-2c2-0.7,4.3-0.7,6.6-0.7
			c5.6,0,8.9,1.7,9.6,5c0,0.7,0,1.3,0,2c-0.3,0.7-0.7,1-1.3,1.3c-0.7,0.3-1.7,0.7-3,0.7c-1.3,0-3,0.3-5,0.3H1400.6"></path>
        <path id="path70" class="st0" d="M1462,73.3h-15.9l-3-16.2H1432l7.9,41.6h11.2l-3-15.5h15.9l3,15.5h11.2l-7.9-41.6H1459L1462,73.3
			"></path>
        <path id="path72" class="st0" d="M1518.2,61c-2-1.3-4.6-2.6-7.9-3.6c-3.3-1-6.6-1.3-10.2-1.3c-7.3,0-12.2,2-14.5,5.9
			c-2.6,4-3.3,9.3-2,16.2c1.3,7.3,4.3,12.6,8.9,16.5c4.6,3.6,10.2,5.6,17.2,5.6c2.3,0,4.3-0.3,6.6-1s4-1.3,5.3-2.6
			c1.3-1.3,2.6-3,3-5.3c0.7-2.3,0.7-5,0-8.3c-0.3-1-0.7-2.3-1-3.6c-0.3-1.3-1-2.6-1.7-4.3h-28.1c-0.3-3.6,0-6.3,1.7-7.9
			s4.3-2.6,8.6-2.6c2.6,0,5,0.3,6.9,1s4,1.3,5,2.3C1515.5,68,1518.2,61,1518.2,61z M1507.3,91.4c-3.3,0-5.9-1-7.9-2.6
			s-3.3-4-4.3-6.6h18.2c0.7,3,0.7,5.3-0.3,6.9C1512.2,90.4,1510.2,91.4,1507.3,91.4"></path>
        <path id="path74" class="st0" d="M1560.8,59.7c-2-1.3-4.3-2-6.9-2.6c-2.6-0.7-5.3-1-7.9-1c-3.6,0-6.6,0.7-8.9,1.7s-4,2.6-5.3,4.6
			c-1.3,2-2,4.3-2,6.9c-0.3,2.6,0,5.6,0.7,8.9c1.3,6.9,4,12.2,8.3,16.2s9.6,5.9,16.2,5.9c3.3,0,5.9-0.3,7.6-0.7c2-0.7,3.6-1,5-2
			l-4.3-8.9c-1.3,0.7-2.6,1-4,1.3c-1.3,0.3-3,0.3-4.6,0.3c-3.3,0-6.3-1-8.3-3c-2.3-2-3.6-5-4.6-9.3c-0.3-1.7-0.3-3.3-0.3-4.6
			s0.7-2.6,1.3-4c0.7-1,1.7-2,3-2.6c1.3-0.7,3-1,4.6-1c2.3,0,4,0.3,5.3,0.7c1.3,0.3,2.6,1,4,1.7L1560.8,59.7"></path>
        <path id="path76" class="st0" d="M1575.6,96.1c2.6,1,5.6,2,9.2,2.6s7.3,1,10.9,1c3,0,5.3-0.3,7.3-1s3.3-1.7,4.3-3
			c1-1.3,1.3-3,1.7-4.6c0-2,0-4-0.3-5.9c-0.7-2.6-1-5.3-2-7.9c-0.7-2.6-1.3-5.3-2-8.3c-0.3-2-0.7-4-0.7-5.9c0-2,0-3.6,0.3-5.6h-9.2
			l-0.7,6.3h-1c-1.7-2-4-3.3-6.3-4.6c-2.3-1.3-5.3-2-8.6-2c-2,0-4,0.3-5.3,1c-1.7,0.7-3,1.3-4,2.6c-1,1-1.7,2.3-2,4
			c-0.3,1.3-0.3,3,0,5c1,4.6,3.3,8.3,6.9,10.6s8.6,3.6,15.2,3.6c1.7,0,3,0,4.3-0.3c1.3-0.3,2.3-0.3,3-0.7c0.3,1,0.7,2,0.7,3
			c0.3,2,0.3,3.6-0.7,4.3c-1,1-2.6,1.3-5.3,1.3c-2.6,0-5.3-0.3-7.6-1c-2.6-0.7-5-1.3-6.9-2.3C1577,87.5,1575.6,96.1,1575.6,96.1z
			 M1584.2,65.6c2.6,0,4.6,0.7,6.3,1.7c1.7,1.3,3,2.3,4,3.6l1,4.6c-0.3,0-0.7,0.3-1.3,0.3c-0.7,0-1,0.3-1.7,0.3s-1.3,0.3-2,0.3
			s-1.3,0-1.7,0c-3,0-5.3-0.7-6.6-1.7c-1.7-1-2.6-2.3-3-4c-0.3-2,0-3.3,0.7-4.3C1581.3,66,1582.6,65.6,1584.2,65.6"></path>
	</g>
</g>
</svg>
                    </div>
                    <div class="branch-select">
                        <div class="branch-current" title="Текущий филиал">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" aria-hidden>
                                <path d="M12 2v20M5 9l7 7 7-7" stroke="#333" stroke-width="1.6" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span>Бишкек</span>
                        </div>
                    </div>
                </div>

                <!-- CENTER: search -->
                <div class="header-center">
                    <form class="search-form" role="search" aria-label="Поиск по сайту">
                        <input class="search-input" type="search" name="q" placeholder="Поиск" aria-label="Поиск"/>
                        <button class="search-button" type="submit" aria-label="Поиск">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden>
                                <path d="M21 21l-4.35-4.35" stroke="#2a2a2a" stroke-width="1.6" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <circle cx="11" cy="11" r="6" stroke="#2a2a2a" stroke-width="1.6" fill="none"/>
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- RIGHT: phone + icons -->
                <div class="header-right">
                    <div class="contact-info">
                        <div class="contact-number">+996 (555) 44 99 77</div>
                    </div>

                    <div class="action-icons">
                        <button class="icon-btn" title="Избранное">♡</button>
                        <button class="icon-btn" title="Корзина">🛒</button>
                        <button class="icon-btn" title="Профиль">👤</button>
                    </div>
                </div>

            </div> <!-- /.header-container -->
        </div> <!-- /.container -->
    </div> <!-- /.header-main -->

    <!-- ОБЁРТКА #2: навигация (зелёная панель) -->
    <div class="header-nav">             <!-- <- новая обёртка для nav -->
        <nav class="site-nav" role="navigation" aria-label="Главное меню">
            <div class="container">
                <ul class="nav-list">
                    <li class="nav-item"><a class="nav-link" href="#">Оборудование</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Упаковка</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Посуда и инвентарь</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Мебель</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Проф. химия</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Автоматизация</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Запчасти</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Услуги</a></li>
                    <li class="nav-item"><a class="nav-link nav-link--active" href="#">Контакты</a></li>
                </ul>
            </div>
        </nav>
    </div> <!-- /.header-nav -->

</header>
<div class="layout">
    <aside class="sidebar sticky-sidebar">
        <div class="sticky-sidebar__inner">
            <div class="sidebar-menu">
                <div class="sidebar-menu__item">
                    <a href="/brands/">
                        <span class="sidebar-menu__title">Каталог по брендам</span><br>
                        <span class="sidebar-menu__desc">Более 200 брендов</span>
                    </a>
                </div>
                <div class="sidebar-menu__item">
                    <a href="/catalog/">
                        <span class="sidebar-menu__title">Каталог по видам</span><br>
                        <span class="sidebar-menu__desc">Более 15 000 товаров</span>
                    </a>
                </div>
            </div>
            <div class="sidebar-banner">
                <a
                        href="https://zavod-pt.ru/catalog/parokonvektomaty/filter/proizvoditel-is-5892120f-c3c2-11e3-93f0-101f742c074b/apply/">
                    <img data-lazyload=""
                         src="https://zavod-pt.kg/upload/iblock/ba0/p30euddqcmdtjnmbjtczc4pppj7rl89k.jpg"
                         data-src="/upload/iblock/ba0/p30euddqcmdtjnmbjtczc4pppj7rl89k.jpg" alt="Пароконвектоматы"
                         title="Пароконвектоматы" class="img-responsive ls-is-cached lazyloaded">
                </a>
            </div>

            <div class="sidebar-brand-block" style="padding-top:2px;">
                <div class="brand-list box-shadow">
                    <div class="brand-list__item clearfix rounded bordered center-block">
                        <a href="/brands/pishchevye_tekhnologii/" class="brand-link">
                            <img data-lazyload="" class="brand-logo ls-is-cached lazyloaded"
                                 src="./img/pishteh_logo.svg" data-src="/about/pishteh/pishteh_logo.svg" alt="ПищТех"
                                 style="width: 75%;">
                            <span class="brand-desc muted small">Собственное производство</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="sidebar-links">
                <div class="sidebar-links__item"><a href="/about/" class="dark_link font_sm">О нас</a></div>
                <div class="sidebar-links__item"><a href="/howto/dostavka-i-oplata/"
                                                    class="dark_link font_sm">Доставка
                    и оплата</a></div>
                <div class="sidebar-links__item"><a href="/feedback" class="dark_link font_sm">Обратная связь</a>
                </div>
            </div>
            <div class="sidebar-links">
                <div class="sidebar-links__item"><a href="/dealers/" class="dark_link font_sm">Стать дилером</a>
                </div>
            </div>
            <div class="sidebar-links">
                <div class="sidebar-links__item"><a href="/services/" class="dark_link font_sm">Услуги</a></div>
            </div>
            <div class="sidebar-links">
                <div class="sidebar-links__item"><a href="/master-class/"
                                                    class="dark_link font_sm">Мастер-классы</a>
                </div>
            </div>
            <div class="sidebar-links">
                <div class="sidebar-links__item"><a href="/information/stati/" class="dark_link font_sm">Статьи</a>
                </div>
            </div>
            <div class="sidebar-links">
                <div class="sidebar-links__item"><a href="/about/vakansii/" class="dark_link font_sm">Вакансии</a>
                </div>
            </div>
            <div class="sidebar-links">
                <div class="sidebar-links__item"><a href="/cert/" class="dark_link font_sm">Сертификаты</a></div>
            </div>
        </div>
    </aside>
    <main class="main-content">
        <section class="mt-20">
            <div class="slider" id="heroSlider" aria-label="Главный слайдер">
                <div class="slides" id="slides">
                    <!-- slide #1 -->
                    <div class="slide"
                         style="background-image: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('https://via.placeholder.com/1400x420?text=TERMObox+1');">
                        <div class="slide-inner">
                            <div class="text">
                                <div class="title">TERMOBOX</div>
                                <p class="subtitle">Профессиональные термоконтейнеры и аксессуары — производство в
                                    России</p>
                            </div>
                            <div
                                    style="width:300px;height:150px;background:transparent;display:flex;align-items:center;justify-content:center;">
                                <!-- optional image area -->
                                <img src="https://via.placeholder.com/300x150?text=Product" alt=""
                                     style="max-width:100%;height:auto;object-fit:contain">
                            </div>
                        </div>
                    </div>

                    <!-- slide #2 -->
                    <div class="slide"
                         style="background-image: linear-gradient(rgba(0,0,0,0.18), rgba(0,0,0,0.18)), url('https://via.placeholder.com/1400x420?text=TERMObox+2');">
                        <div class="slide-inner">
                            <div class="text">
                                <div class="title">Производство под заказ</div>
                                <p class="subtitle">Индивидуальные размеры, брендинг и комплектация - быстро и
                                    качественно</p>
                            </div>
                            <div>
                                <img src="https://via.placeholder.com/260x140?text=Box" alt=""
                                     style="max-width:100%;height:auto;object-fit:contain">
                            </div>
                        </div>
                    </div>

                    <!-- slide #3 -->
                    <div class="slide"
                         style="background-image: linear-gradient(rgba(0,0,0,0.18), rgba(0,0,0,0.18)), url('https://via.placeholder.com/1400x420?text=TERMObox+3');">
                        <div class="slide-inner">
                            <div class="text">
                                <div class="title">Тепло и холод — на ура</div>
                                <p class="subtitle">Сохраняем температуру при доставке: от мороза до жара</p>
                            </div>
                            <div>
                                <img src="https://via.placeholder.com/260x140?text=Icon" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- arrows -->
                <button class="arrow left" data-action="prev" aria-label="Предыдущий слайд">
                    <svg viewBox="0 0 24 24">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>
                <button class="arrow right" data-action="next" aria-label="Следующий слайд">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 6l6 6-6 6" />
                    </svg>
                </button>

                <!-- dots -->
                <div class="dots" id="dots" aria-hidden="false"></div>
            </div>
        </section>

        <!-- ===== PROMO CARDS ===== -->
        <section class="mt-20">
            <div class="promo-grid" role="list">
                <a class="promo" href="#" role="listitem"
                   style="background-image: url('https://via.placeholder.com/500x300?text=Video');">
                    <div class="corner">Видео</div>
                    <div class="overlay">
                        <div class="left">
                            <div class="category">Видео</div>
                            <div class="headline">Готовим чизбургер с яйцом на жарочной поверхности ПищТех</div>
                        </div>
                        <div class="play" aria-hidden="true">
                            <!-- play triangle -->
                            <svg width="22" height="22" viewBox="0 0 24 24">
                                <path d="M4 2l16 10-16 10z" fill="#111"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <a class="promo" href="#" role="listitem"
                   style="background-image: url('https://via.placeholder.com/500x300?text=Sale');">
                    <div class="corner">Горячие скидки</div>
                    <div class="overlay">
                        <div class="left">
                            <div class="category">ГОРЯЧИЕ СКИДКИ</div>
                            <div class="headline">Распродажа оборудования</div>
                        </div>
                        <div
                                style="width:56px;height:56px;border-radius:8px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700">
                            %</div>
                    </div>
                </a>

                <a class="promo" href="#" role="listitem"
                   style="background-image: url('https://via.placeholder.com/500x300?text=Tableware');">
                    <div class="corner">Посуда</div>
                    <div class="overlay">
                        <div class="left">
                            <div class="category">Посуда</div>
                            <div class="headline">Все для сервировки стола</div>
                        </div>
                        <div
                                style="width:56px;height:56px;border-radius:8px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700">
                            →</div>
                    </div>
                </a>

            </div>
        </section>
        <section class="features" aria-label="Преимущества">
            <div class="feature">
                <div class="feat-icon" aria-hidden="true">
                    <!-- simple svg icon -->
                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="6" width="18" height="12" rx="2" />
                        <path d="M7 6v-2h10v2" />
                    </svg>
                </div>
                <h5>Собственное производство</h5>
                <p>Современный российский завод пищевого оборудования</p>
            </div>

            <div class="feature">
                <div class="feat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <path d="M4 7h16v10H4z" />
                        <path d="M8 7v-3" />
                    </svg>
                </div>
                <h5>Проектирование и оснащение</h5>
                <p>Комплексное оснащение с нуля в соответствии с ГОСТ</p>
            </div>

            <div class="feature">
                <div class="feat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 21c7-5 11-9 11-9s4 4 11 9" />
                    </svg>
                </div>
                <h5>Сервисное обслуживание</h5>
                <p>Качественный монтаж, гарантийное и постгарантийное обслуживание</p>
            </div>

            <div class="feature">
                <div class="feat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="8" r="3" />
                    </svg>
                </div>
                <h5>Профессиональная экспертиза</h5>
                <p>Наличие в штате шеф-поваров и инженеров</p>
            </div>
        </section>

        <div class="catalog-header">
            <h2>Лучшие предложения</h2>
            <a href="#" aria-label="Весь каталог">ВЕСЬ КАТАЛОГ</a>
        </div>

        <section class="products" aria-label="Товары">
            <article class="card" aria-labelledby="p1-title">
                <div class="thumb">
                    <img src="https://via.placeholder.com/300x180?text=Product+1" alt="Сковорода электрическая">
                </div>
                <div class="card-body">
                    <div class="rating">
                        <div class="stars" aria-hidden="true">
                            <span class="star filled"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                    </div>

                    <h3 id="p1-title" class="title">Сковорода электрическая ПищТех СЭП-0,25</h3>

                    <div class="meta">
                        <div class="availability"><span class="dot"></span> В наличии</div>
                        <div class="country">Россия</div>
                    </div>

                    <div class="code">Код: H0000180343</div>

                    <div class="price-row">
                        <div class="price">158 452 сом</div>
                        <div style="min-width:60px" class="country"></div>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="card" aria-labelledby="p2-title">
                <div class="thumb">
                    <img src="https://via.placeholder.com/300x180?text=Product+2" alt="Машина тестомесильная">
                </div>
                <div class="card-body">
                    <div class="rating">
                        <div class="stars" aria-hidden="true">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span
                                class="star"></span><span class="star"></span>
                        </div>
                    </div>

                    <h3 id="p2-title" class="title">Машина тестомесильная ROAL HS20</h3>

                    <div class="meta">
                        <div class="availability"><span class="dot"></span> В наличии</div>
                        <div class="country">Китай</div>
                    </div>

                    <div class="code">Код: H0000202519</div>

                    <div class="price-row">
                        <div class="price">64 200 сом</div>
                        <div class="country"></div>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="card" aria-labelledby="p3-title">
                <div class="thumb">
                    <img src="https://via.placeholder.com/300x180?text=Product+3" alt="Аппарат фаршемесильный">
                </div>
                <div class="card-body">
                    <div class="rating">
                        <div class="stars" aria-hidden="true">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span
                                class="star"></span><span class="star"></span>
                        </div>
                    </div>

                    <h3 id="p3-title" class="title">Аппарат фаршемесильный ПищТех АФМ-35 НН</h3>

                    <div class="meta">
                        <div class="availability"><span class="dot"></span> В наличии</div>
                        <div class="country">Россия</div>
                    </div>

                    <div class="code">Код: H0000228005</div>

                    <div class="price-row">
                        <div class="price">182 548 сом</div>
                        <div class="country"></div>
                    </div>
                </div>
            </article>

            <article class="card" aria-labelledby="p4-title">
                <div class="thumb">
                    <img src="https://via.placeholder.com/300x180?text=Product+4" alt="Пароконвектомат">
                </div>
                <div class="card-body">
                    <div class="rating">
                        <div class="stars" aria-hidden="true">
                            <span class="star"></span><span class="star"></span><span class="star"></span><span
                                class="star"></span><span class="star"></span>
                        </div>
                    </div>

                    <h3 id="p4-title" class="title">Пароконвектомат ПищТех ПР-10М-Э</h3>

                    <div class="meta">
                        <div class="availability"><span class="dot"></span> В наличии</div>
                        <div class="country">Россия</div>
                    </div>

                    <div class="code">Код: H0000210178</div>

                    <div class="price-row">
                        <div class="price">321 868 сом</div>
                        <div class="country"></div>
                    </div>
                </div>
            </article>

        </section>
        <section class="hero-bleed" aria-label="Баннер — собственное производство">
            <div class="hero">
                <div class="hero-left">
                    <div class="eyebrow">Собственное производство</div>
                    <h1>Пищевые технологии</h1>
                    <p>Завод пищевого оборудования и комплексное оснащение объектов общественного питания.
                        Качественные линии, печи, холодильные решения и сервис под ключ.</p>
                </div>
                <div class="hero-right">
                    <div class="hero-image" role="img" aria-label="Изображение оборудования"></div>
                </div>
            </div>
        </section>

        <!-- ============= New: About section (две колонки) ============= -->
        <section class="about" aria-label="О компании">
            <div>
                <div class="meta">О компании</div>
                <h2>Пищевые технологии</h2>
                <p class="lead">Российский торгово-промышленный холдинг «Пищевые технологии» является одним из
                    признанных лидеров в области изготовления и реализации пищевого оборудования, упаковки, посуды и
                    инвентаря, мебели, а также продукции для столовых, кафе, ресторанов, баров, пиццерий и
                    хлебопекарных предприятий.</p>
                <p class="lead">Мы поставляем комплексные решения: от проектирования кухни до установки и
                    постгарантийного обслуживания.</p>
                <a class="btn" href="#">Подробности</a>
            </div>

            <div class="image-wrap" aria-hidden="true">
                <img src="https://via.placeholder.com/1000x600?text=Showroom+Image" alt="Зал с оборудованием">
            </div>
        </section>

    </main>

</div>
<footer class="site-footer" role="contentinfo" aria-label="Футер сайта">
    <div class="footer-inner">

        <!-- ЛЕВАЯ КОЛОНКА: логотип -->
        <div class="footer-col footer-col--logo" aria-hidden="true">
            <!-- Вставлен твой SVG-логотип (тот, что ты присылал ранее) -->
            <!-- Полный SVG вставлен — если нужно, можно заменить на <img src="..."> -->
        </div>

        <div class="col-block">
            <h4 class="footer-title">КАТАЛОГ</h4>
            <ul class="footer-list">
                <li><a href="#">Каталог</a></li>
                <li><a href="#">Бренды</a></li>
                <li><a href="#">Акции</a></li>
                <li><a href="#">Услуги</a></li>
            </ul>
        </div>
        <!-- СЕРЕДИНА: навигация (две колонки навигации) -->
        <div class="footer-col footer-col--nav">
            <div class="col-block">
                <h4 class="footer-title">КОМПАНИЯ</h4>
                <ul class="footer-list">
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Торговля</a></li>
                    <li><a href="#">Производство</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </div>

        <!-- СЕРЕДИНА-ПРАВО: информация -->
        <div class="footer-col footer-col--info">
            <h4 class="footer-title">ИНФОРМАЦИЯ</h4>
            <ul class="footer-list">
                <li><a href="#">Магазины</a></li>
                <li><a href="#">Мастер-классы</a></li>
                <li><a href="#">Готовые решения</a></li>
                <li><a href="#">Дилерам</a></li>
            </ul>
        </div>

        <!-- ПРАВАЯ КОЛОНКА: подписка + контакты -->
        <div class="footer-col footer-col--contacts">
            <h4 class="footer-title">ПОМОЩЬ</h4>

            <ul class="footer-list footer-list--help">
                <li><a href="#">Как заказать</a></li>
                <li><a href="#">Доставка и оплата</a></li>
                <li><a href="#">Поиск по каталогу</a></li>
            </ul>
        </div>
        <div class="footer-next-block">
            <form class="subscribe-form" action="#" method="post" novalidate>
                <input class="subscribe-input" type="email" name="email" placeholder="Подписаться на рассылку" aria-label="Email">
                <button class="subscribe-btn" type="submit" aria-label="Подписаться">
                    <svg width="16" height="16" viewBox="0 0 24 24" aria-hidden><path fill="#fff" d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg>
                </button>
            </form>

            <div class="footer-contacts">
                <div class="contact-item">
                    <svg class="icon" width="14" height="14" viewBox="0 0 24 24" aria-hidden><path fill="currentColor" d="M6.6 10.8a15.05 15.05 0 006.6 6.6l2.2-2.2a1 1 0 01.9-.3c1 .2 2 .3 2.9.3a1 1 0 011 1v3.7a1 1 0 01-1 1A19 19 0 013 5a1 1 0 011-1h3.7a1 1 0 011 1c0 1 .1 1.9 .3 2.9.1 .4-.1 .8-.3 .9L6.6 10.8z"/></svg>
                    <a href="tel:+996555449977">+996 (555) 44 99 77</a>
                </div>

                <div class="contact-item">
                    <svg class="icon" width="14" height="14" viewBox="0 0 24 24" aria-hidden><path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-1.2 4.1L12 13 5.2 8.1 6 7.4 12 11l6-3.6.8.1z"/></svg>
                    <div class="mail-list">
                        <a href="mailto:kg3@zavod-pt.ru">kg3@zavod-pt.ru</a><br>
                        <a href="mailto:kg6@zavod-pt.ru">kg6@zavod-pt.ru</a>
                    </div>
                </div>

                <div class="contact-item addr">
                    <svg class="icon" width="14" height="14" viewBox="0 0 24 24" aria-hidden><path fill="currentColor" d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zM12 11.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/></svg>
                    <div class="addr-text">
                        <strong>Офис:</strong> г. Бишкек, ул. Лермонтова 12<br>
                        <strong>Склад:</strong> г. Бишкек, ул. Лермонтова 12a
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /.footer-inner -->

    <!-- ===========================
   Footer: lower legal bar (logo | copy | socials/seal)
   =========================== -->
    <div class="footer-legal">
        <div class="container footer-legal__inner">
            <!-- Логотип слева: замените на свой реальный SVG или <img src="..."> -->
            <div class="footer-legal__logo" aria-hidden="true">
                <svg version="1.1" id="logo_pt" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="222" height="69" viewBox="0 0 220 69" style="enable-background:new 0 0 220 69;" xml:space="preserve">
<style>
	.st0{fill:#19552B;}
    .st1{fill:#FFFFFF;}
    .st2{fill:#0E0D11;}
    .st3{fill:#FFF200;}
</style>
                    <g id="g10" transform="matrix(1.25,0,0,-1.25,0,22.5)">
	<g id="g12" transform="scale(0.1,0.1)">
		<path id="path14" class="st0" d="M130.8,180h1562.4c20.8,0,34-16.9,30.1-37l-84.9-425.7c-4-20.5-24.4-37-44.9-37H30.7
			c-20.5-0.3-34,16.5-30.1,37L85.9,143C89.9,163.1,110,180,130.8,180"></path>
        <path id="path16" class="st1" d="M577.4,134.1l-49.9-243.2H370l27.4,132.5H294l-61.4-297.4H75l83.6,408.2H577.4z M514-175.3
			l-20.1-98.8h-30.4l20.1,98.8H514z M366-274.1H336l20.5,98.8h30.1l-19.8-96.8C366.3-271.8,366-274.1,366-274.1z M507.1-153.1
			l4.6,22.1H376.6l-4.6-22.1h41.3l-2.6-13.2l-19.8-96.8H443l20.8,101.1l2,8.9H507.1"></path>
        <path id="path18" class="st2" d="M1739.8,130.8c14.2-4.6,22.8-18.8,19.5-35.4l-85.2-425.7c-4-20.5-24.4-37-44.9-37H66.8
			c-18.5,0-31,13.2-30.7,30.7c3.3-1,6.9-1.7,10.9-1.7h1562.4c20.5,0,41,16.9,44.9,37l85.2,425.7
			C1739.5,126.5,1739.8,128.8,1739.8,130.8"></path>
        <path id="path20" class="st1" d="M718.5-1.8l-24.4-119h-52.9l11.6,55.5h-1l-38-55.5h-57.1l24.4,119h52.9l-11.6-55.5h1l38.3,55.5
			H718.5"></path>
        <path id="path22" class="st1" d="M936.5-1.8L919-86.7h16.2l-13.9-67.1h-51.2l6.9,33H716.8l24.4,119h52.9l-17.5-84.9h18.5
			l17.5,84.9h52.9L848-86.7h18.5L884-1.8H936.5"></path>
        <path id="path24" class="st1" d="M1088.1-45.4c0-6.6-1-14.2-3-22.5l-1.7-6.9h-80.3c0-1-0.3-2-0.3-2.6c0-4.3,1.3-7.9,4.3-10.6
			c4-3.6,10.6-5.6,20.1-5.6c6.6,0,14.2,0.7,22.5,2.3c8.6,1.7,16.2,3.6,22.8,5.6l-6.3-30.7c-8.6-2.3-17.8-4-27.4-5
			c-9.6-1-18.5-1.7-26.8-1.7c-9.2,0-17.2,0.7-23.8,2c-9.9,2-18.2,5.9-24.8,11.2c-4.6,3.6-8.6,8.3-10.9,13.6c-3.3,6.3-5,13.2-5,21.5
			c0,17.8,5.9,34,17.8,48.6c15.2,18.5,36.7,28.1,64.4,28.1c17.5,0,31.4-3.6,41.6-11.2c6.6-5.3,11.6-11.6,14.2-18.8
			C1087.4-33.8,1088.1-39.4,1088.1-45.4z M1039.2-41.1c0,5.3-1.3,8.6-3.6,10.9c-2.3,2-5,3-8.3,3c-3.6,0-6.6-1-9.2-3
			c-4.6-3.6-7.9-9.6-9.6-18.2l-0.3-2.3h29.7l0.3,2.6L1039.2-41.1"></path>
        <path id="path26" class="st1" d="M1236.4-25.2c0-6.9-2.3-13.6-6.6-19.2c-5-6.6-12.6-10.9-22.5-13.6c6.9-1,12.6-3.6,16.8-7.9
			s6.3-9.6,6.3-16.2c0-9.9-4.3-18.8-12.6-26.1c-9.6-8.6-22.5-12.6-38.3-12.6h-88.9l24.4,119h87.2c11.2,0,19.8-2,25.4-5.9
			C1233.4-11.4,1236.4-17.3,1236.4-25.2z M1183.6-35.5c0,2.6-1,5-3.3,6.3c-2,1.3-5.6,2.3-10.2,2.3h-7.3l-4.3-20.8h7.3
			c6.9,0,11.9,1.7,14.9,4.6C1182.6-40.8,1183.6-38.5,1183.6-35.5z M1176.6-81.4c0,4.3-1.3,6.9-4.3,7.9c-3,1-6.3,1.7-10.2,1.7h-8.3
			l-5-23.5h8.3c6.9,0,12.2,1.7,15.5,4.6C1175.3-88.4,1176.6-85.1,1176.6-81.4"></path>
        <path id="path28" class="st1" d="M1473.6-1.8l-24.4-119h-57.8l24.4,119H1473.6z M1388.7-72.8c0-11.6-4-21.5-12.2-30.1
			c-10.9-11.9-27.7-17.8-49.9-17.8h-82.9l24.4,119h57.8l-7.9-38c2.6,0,6.9,0.3,12.6,0.7c5.9,0.3,9.2,0.7,10.9,0.7
			c18.5,0,31.4-4.3,39.3-13.2C1386-57.3,1388.7-64.2,1388.7-72.8z M1330.5-76.5c0,4.6-1.7,7.6-5.3,9.3c-2,1-5,1.7-8.6,1.7h-5
			l-5.6-26.8h5c6.3,0,10.9,1.7,14.2,4.6C1328.6-84.7,1330.5-81.1,1330.5-76.5"></path>
        <path id="path30" class="st1" d="M1617.3-45.4c0-6.6-1-14.2-3-22.5l-1.7-6.9h-80.3c0-1-0.3-2-0.3-2.6c0-4.3,1.3-7.9,4.3-10.6
			c4-3.6,10.6-5.6,20.1-5.6c6.6,0,14.2,0.7,22.5,2.3c8.6,1.7,16.2,3.6,22.8,5.6l-6.3-30.7c-8.6-2.3-17.8-4-27.4-5
			c-9.6-1-18.5-1.7-26.8-1.7c-9.2,0-17.2,0.7-23.8,2c-9.9,2-18.2,5.9-24.8,11.2c-4.6,3.6-8.3,8.3-10.9,13.6c-3.3,6.3-5,13.2-5,21.5
			c0,17.8,5.9,34,17.8,48.6c15.2,18.5,36.7,28.1,64.4,28.1c17.5,0,31.4-3.6,41.6-11.2c6.6-5.3,11.6-11.6,14.2-18.8
			C1616.3-33.8,1617.3-39.4,1617.3-45.4z M1568.4-41.1c0,5.3-1.3,8.6-3.6,10.9c-2.3,2-5,3-8.3,3c-3.6,0-6.6-1-9.2-3
			c-4.6-3.6-7.9-9.6-9.6-18.2l-0.3-2.3h29.7l0.3,2.6L1568.4-41.1"></path>
        <path id="path32" class="st3" d="M1580.6-183.5l-18.5-90.2h-40l8.6,42.3h-1l-28.7-42.3h-43.3l18.8,90.2h40l-8.6-42.3h1l29.1,42.3
			C1537.7-183.5,1580.6-183.5,1580.6-183.5z M1459-183.5l-18.5-90.2h-40l8.6,42.3h-1l-28.7-42.3h-43.3l18.5,90.2h40l-8.6-42.3h1
			l29.1,42.3C1416.1-183.5,1459-183.5,1459-183.5z M1341.4-183.5l-5.3-25.8h-32l-13.2-64.4H1247l18.5,90.2
			C1265.8-183.5,1341.4-183.5,1341.4-183.5z M1198.4-215.9c0,3-0.7,5.3-1.7,6.6c-1.3,1.3-3,2-5,2c-2.6,0-4.6-1-6.6-2.6
			c-1-1-2-2.3-3-4.6c-1.3-3-2.6-7.3-4-12.9c-1.3-5.6-2-10.6-2-14.2c0-3,0.7-5.3,2-6.6c1.3-1.3,2.6-2,4.6-2c2.3,0,4.3,0.7,6.3,2.3
			c2,1.3,3.6,4,4.6,7.6c1.3,3.6,2.3,7.6,3.3,12.2C1197.8-223.5,1198.4-219.2,1198.4-215.9z M1245-219.9c0-15.2-5.9-28.1-17.5-39
			c-12.6-11.2-28.7-17.2-49.2-17.2c-19.2,0-32.7,4.6-41,13.9c-5.3,6.3-8.3,13.9-8.3,23.1c0,15.5,5.6,28.4,16.8,39.3
			c12.6,11.9,29.4,18.2,50.5,18.2c16.8,0,29.4-4,37.7-11.9C1241.4-200.4,1245-209.3,1245-219.9z M1127.1-183.5l-18.5-90.2h-43.9
			l13.2,64.4H1063l-3-15.2c-2.3-11.6-4-19.2-5.3-23.1c-2.3-7.3-5.3-12.9-9.2-17.2c-4-4.3-8.6-7.3-13.9-8.9c-4-1.3-8.6-2-13.9-2
			c-4.3,0-8.3,0.3-11.9,0.7s-7.3,1.3-11.2,2.6l5.6,23.1c2-0.7,4.3-1.3,6.9-1.3c3.6,0,6.3,2,8.3,5.9c2,4,4.3,11.9,6.9,23.5l7.9,37.7
			C1029.6-183.5,1127.1-183.5,1127.1-183.5z M953.3-215.9c0,3-0.7,5.3-1.7,6.6c-1.3,1.3-3,2-5,2c-2.6,0-4.6-1-6.6-2.6
			c-1-1-2-2.3-3-4.6c-1.3-3-2.6-7.3-4-12.9c-1.3-5.6-2-10.6-2-14.2c0-3,0.7-5.3,2-6.6c1.3-1.3,2.6-2,4.6-2c2.3,0,4.3,0.7,6.3,2.3
			c2,1.3,3.6,4,4.6,7.6c1.3,3.6,2.3,7.6,3.3,12.2C952.7-223.5,953.3-219.2,953.3-215.9z M999.9-219.9c0-15.2-5.9-28.1-17.5-39
			c-12.6-11.2-28.7-17.2-49.2-17.2c-19.2,0-32.7,4.6-41,13.9c-5.3,6.3-8.3,13.9-8.3,23.1c0,15.5,5.6,28.4,16.8,39.3
			c12.6,11.9,29.4,18.2,50.5,18.2c16.8,0,29.4-4,37.7-11.9C996.3-200.4,999.9-209.3,999.9-219.9z M882-183.5l-18.5-90.2h-43.9
			l6.9,33.4H811l-6.9-33.4h-43.9l18.5,90.2h43.9l-6.3-31.1h15.5l6.3,31.1H882z M767.4-183.5l-34-41l20.1-49.2h-46.9l-7.9,30.4H698
			l-20.5-30.4h-44.9l40,48.6l-19.5,41.6h46.6l5.9-28.1h0.7l17.5,28.1C724.1-183.5,767.4-183.5,767.4-183.5z M604.2-213.6
			c0,4-1,6.6-2.6,8.3c-1.7,1.7-4,2.3-6.3,2.3c-2.6,0-5-0.7-6.9-2.3c-3.6-2.6-5.9-7.3-7.3-13.9l-0.3-1.7h22.5l0.3,2
			C603.5-218.9,604.2-213.6,604.2-213.6z M641.2-216.9c0-5-0.7-10.9-2.3-17.2l-1.3-5.3h-60.8c0-0.7-0.3-1.3-0.3-2c0-3.3,1-5.9,3-7.9
			c3-3,8.3-4.3,15.2-4.3c5,0,10.6,0.7,17.2,1.7c6.3,1.3,12.2,2.6,17.2,4.3l-5-23.5c-6.6-1.7-13.5-3-20.8-4s-14.2-1.3-20.5-1.3
			c-6.9,0-13.2,0.7-18.2,1.7c-7.6,1.7-13.9,4.3-18.8,8.6c-3.6,3-6.3,6.3-8.3,10.2c-2.3,4.6-3.6,10.2-3.6,16.2
			c0,13.6,4.6,25.8,13.5,37c11.6,14.2,27.7,21.2,48.9,21.2c13.2,0,23.8-3,31.4-8.6c5-4,8.6-8.6,10.9-14.2
			C640.5-208.3,641.2-212.3,641.2-216.9"></path>
        <path id="path34" class="st3" d="M525.2-120.1l-9.2-44h-41.6l-22.5-110.1h-74.7L399.7-164h-41.3l9.2,44H525.2"></path>
        <path id="path36" class="st3" d="M622.3,134.1h1013.1c8.9,0,14.9-7.3,13.2-15.9l-12.2-69.4c-1.7-8.9-9.9-15.9-18.8-15.9H604.5
			c-8.9,0-14.9,7.3-13.2,15.9l12.2,69.4C605.2,127.1,613.8,134.1,622.3,134.1"></path>
        <path id="path38" class="st0" d="M674.9,102.3h-23.5l-8.9-45.3h-11.6l10.9,55.5h35.3L674.9,102.3"></path>
        <path id="path40" class="st0" d="M692.4,89.1h-9.9c-1-4.3-2.3-8.6-3.3-12.6c-1.3-4-2.6-7.3-4.3-10.2c-1.7-3-3.6-5.3-5.9-6.9
			c-2.3-1.7-4.6-2.6-7.6-2.6c-3.3,0-5.6,0.3-6.9,1l3.6,9.9c1-0.3,1.7-0.3,2.3-0.3c1.3,0,2.3,0.3,3.6,1.3c1,1,2.3,2.6,3.3,5
			s2.3,5.6,3.3,9.6c1.3,4,2.6,9.3,4,15.5h30.7l-7.9-41.6h-11.2L692.4,89.1"></path>
        <path id="path42" class="st0" d="M716.2,96.1c2.6,1,5.6,2,9.2,2.6c3.6,0.7,7.3,1,10.9,1c3,0,5.3-0.3,7.3-1c2-0.7,3.3-1.7,4.3-3
			c1-1.3,1.3-3,1.7-4.6c0-2,0-4-0.3-5.9c-0.7-2.6-1-5.3-2-7.9c-0.7-2.6-1.3-5.3-2-8.3c-0.3-2-0.7-4-0.7-5.9c0-2,0-3.6,0.3-5.6h-9.2
			l-0.7,6.3h-1c-1.7-2-4-3.3-6.3-4.6c-2.3-1.3-5.3-2-8.6-2c-2,0-4,0.3-5.3,1c-1.7,0.7-3,1.3-4,2.6c-1,1-1.7,2.3-2,4
			c-0.3,1.3-0.3,3,0,5c1,4.6,3.3,8.3,6.9,10.6s8.6,3.6,15.2,3.6c1.7,0,3,0,4.3-0.3c1.3-0.3,2.3-0.3,3-0.7c0.3,1,0.7,2,0.7,3
			c0.3,2,0.3,3.6-0.7,4.3c-1,1-2.6,1.3-5.3,1.3c-2.6,0-5-0.3-7.6-1c-2.6-0.7-5-1.3-6.9-2.3C717.5,87.5,716.2,96.1,716.2,96.1z
			 M724.7,65.6c2.6,0,4.6,0.7,6.3,1.7c1.7,1.3,3,2.3,4,3.6l1,4.6c-0.3,0-0.7,0.3-1.3,0.3s-1,0.3-1.7,0.3c-0.7,0-1.3,0.3-2,0.3
			s-1.3,0-1.7,0c-3,0-5-0.7-6.6-1.7c-1.7-1-2.6-2.3-3-4c-0.3-2,0-3.3,0.7-4.3C721.4,66,723.1,65.6,724.7,65.6"></path>
        <path id="path44" class="st0" d="M763.4,98.7c2.3,0.3,5,0.3,7.9,0.3s6.3,0.3,9.6,0.3c6.6,0,11.2-1,13.5-2.6
			c2.3-1.7,3.3-4.3,2.6-7.6c-0.3-2-1.3-4-3-5.6c-1.7-1.7-3.6-3-6.6-4v-0.7c3.3-0.7,5.3-2,6.6-3.6c1.3-1.7,1.7-4,1-6.6
			c-0.7-4-3.3-7.3-6.9-9.3c-4-2-9.6-3-17.5-3c-2.6,0-5.3,0-7.9,0.3c-2.6,0-5.3,0.3-7.3,0.7C755.5,57.4,763.4,98.7,763.4,98.7z
			 M768,65.6c1-0.3,2-0.3,2.6-0.3c0.7,0,1.7,0,2.6,0c3.6,0,6.3,0.3,7.9,1.3c1.7,1,2.6,2,3,3.6c0.3,1.3,0,2.6-1,3.6s-3.3,1.3-6.6,1.3
			H770C769.7,75.2,768,65.6,768,65.6z M777.9,81.8c2,0,4,0.3,5.3,1.3c1.3,0.7,2.3,2,2.6,3.3s0,2.6-1,3.3s-3,1.3-5.9,1.3
			c-1,0-2,0-2.6,0c-0.7,0-1.3,0-2,0c-0.3,0-0.3,0-0.7,0c-0.3,0-0.7,0-0.7,0l-1.7-8.6L777.9,81.8"></path>
        <path id="path46" class="st0" d="M831.8,73.3h-15.9l-3-16.2h-11.2l7.9,41.6h11.2l-3-15.5h15.9l3,15.5H848L840,57.1h-11.2
			L831.8,73.3"></path>
        <path id="path48" class="st0" d="M864.1,66.6c1-0.3,2-0.3,3-0.3s2,0,2.6,0c3,0,5,0.3,6.3,1.3c1.3,1,2.3,2.3,2.6,4.3
			c0.3,1.7,0,3-1,4c-1,1-3,1.3-5.6,1.3c-2.3,0-4.3-0.3-6.3-0.7L864.1,66.6z M867.8,83.8c1.7,0.3,3.3,0.3,5,0.7c1.7,0,3,0.3,4.3,0.3
			c3,0,5.6-0.3,7.6-1c2-0.7,3.3-1.7,4.6-2.6c1-1.3,1.7-2.6,2-4c0.3-1.7,0.3-3.3,0-5c-0.3-2.6-1.3-4.6-2.3-6.6c-1-2-2.6-3.3-4.3-4.6
			c-2-1.3-4.3-2.3-6.9-3c-2.6-0.7-5.9-1-9.6-1s-6.6,0-8.9,0c-2.6,0-5,0.3-6.9,0.3l8.3,41.6h11.2C870.4,98.7,867.8,83.8,867.8,83.8z
			 M901.8,98.7H913l-7.9-41.6h-11.2L901.8,98.7"></path>
        <path id="path50" class="st0" d="M948,75.9l2,6.9l-6.3-6.9l-20.1-18.8H917l7.9,41.6h11.2l-4-19.5l-1.7-5.6h1c1,1,1.7,2,2.6,3
			c1,1,1.7,2,2.6,3L957.3,99h6.6L956,57.4h-11.2C944.4,57.4,948,75.9,948,75.9z M942.4,115.9c0-2.3,0.3-3.6,1.3-4.6
			c1-0.7,2.3-1.3,4-1.3c1.7,0,3.3,0.3,4.3,1.3c1.3,0.7,2.3,2.3,3,4.3l7.9-2.3c-1.3-3.6-3.6-5.9-6.6-7.9c-3-1.7-6.6-2.6-10.6-2.6
			c-2,0-3.6,0.3-5.3,0.7c-1.7,0.3-3,1-4.3,2s-2.3,2-3,3.3c-0.7,1.3-1,3-1,5L942.4,115.9"></path>
        <path id="path52" class="st0" d="M997.3,98.7h7.9l0.3-5.3h1c2,2,4.3,3.6,6.6,4.6c2.3,1,5,1.7,7.9,1.7c5.6,0,9.6-1.7,11.9-5
			c2.3-3.3,2.6-8.6,1-15.9c-0.7-3.6-1.7-6.6-3.3-9.6c-1.3-3-3.3-5.3-5.3-7.3c-2.3-2-4.6-3.6-7.6-4.6c-2.6-1-5.9-1.7-9.2-1.7
			c-1.7,0-3.3,0.3-4.6,0.7c-1.3,0.3-2.6,0.7-3.6,1.3l-3.3-16.5h-11.2C986,41.5,997.3,98.7,997.3,98.7z M1016.1,90.8
			c-2.6,0-4.6-0.7-6.3-1.7c-1.7-1-3-3-4.3-5.3l-3-16.2c0.7-0.7,1.7-1.3,2.6-1.7s2.3-0.7,4-0.7c3.6,0,6.6,1,8.6,3.3
			c2.3,2.3,3.6,5.9,4.6,10.6c0.7,3.6,0.7,6.3-0.3,8.3C1021.4,89.8,1019.1,90.8,1016.1,90.8"></path>
        <path id="path54" class="st0" d="M1075.5,61c-2-1.3-4.6-2.6-8.3-3.6c-3.3-1-6.6-1.3-10.2-1.3c-7.3,0-12.2,2-14.5,5.9
			c-2.6,4-3.3,9.3-2,16.2c1.3,7.3,4.3,12.6,8.9,16.5c4.6,3.6,10.2,5.6,17.2,5.6c2.3,0,4.3-0.3,6.6-1c2-0.7,4-1.3,5.3-2.6
			c1.3-1.3,2.6-3,3-5.3c0.7-2.3,0.7-5,0-8.3c-0.3-1-0.7-2.3-1-3.6c-0.3-1.3-1-2.6-1.3-4.3h-28.1c-0.3-3.6,0-6.3,1.7-7.9
			c1.7-1.7,4.3-2.6,8.6-2.6c2.6,0,5,0.3,6.9,1s4,1.3,5,2.3L1075.5,61z M1064.6,91.4c-3.3,0-5.9-1-7.9-2.6c-2-1.7-3.3-4-4-6.6h18.2
			c0.7,3,0.7,5.3-0.3,6.9C1069.6,90.4,1067.6,91.4,1064.6,91.4"></path>
        <path id="path56" class="st0" d="M1128.7,47.8h-7.9l0.3,9.6h-35L1094,99h11.2l-6.3-31.7h15.2l6.3,31.7h11.2l-6.3-31.7h6.6
			L1128.7,47.8"></path>
        <path id="path58" class="st0" d="M1174.6,61c-2-1.3-4.6-2.6-8.3-3.6c-3.3-1-6.6-1.3-10.2-1.3c-7.3,0-12.2,2-14.5,5.9
			c-2.6,4-3.3,9.3-2,16.2c1.3,7.3,4.3,12.6,8.9,16.5c4.6,3.6,10.2,5.6,17.2,5.6c2.3,0,4.3-0.3,6.6-1c2-0.7,4-1.3,5.3-2.6
			c1.3-1.3,2.6-3,3-5.3c0.7-2.3,0.7-5,0-8.3c-0.3-1-0.7-2.3-1-3.6c-0.3-1.3-1-2.6-1.3-4.3h-28.1c-0.3-3.6,0-6.3,1.7-7.9
			s4.3-2.6,8.6-2.6c2.6,0,5,0.3,6.9,1s4,1.3,5,2.3C1172.3,68,1174.6,61,1174.6,61z M1163.7,91.4c-3.3,0-5.9-1-7.9-2.6
			s-3.3-4-4.3-6.6h18.2c0.7,3,0.7,5.3-0.3,6.9C1168.7,90.4,1166.7,91.4,1163.7,91.4"></path>
        <path id="path60" class="st0" d="M1218.2,89.1h-15.5l-6.3-31.7h-11.2l7.9,41.6h38l-7.9-41.6h-10.9L1218.2,89.1"></path>
        <path id="path62" class="st0" d="M1273.7,89.1h-12.9l-6.3-31.7H1243l6.3,31.7h-12.9l2,9.9h37.7L1273.7,89.1"></path>
        <path id="path64" class="st0" d="M1306.8,90.1c2.3,2.3,4.6,4,7.3,5.3c2.6,1,5.6,1.7,8.9,1.7c5.6,0,9.6-1.3,12.2-4.3
			c2.6-3,3.3-7.6,2-13.9c-1.3-7.3-4.3-12.9-8.6-16.9c-4.3-4-9.9-5.6-16.5-5.6c-6.9,0-11.9,2-14.9,6.3c-3,4.3-3.3,10.9-1.7,19.8
			c1,4.6,2,8.9,3.3,12.2c1.3,3.3,2.6,5.9,4.3,8.3c1.7,2.3,3.3,4,5,5.3c1.7,1.3,3.6,2.3,5.6,3c2,0.7,4.3,1,6.3,1.3
			c2.3,0.3,4.6,0.3,6.9,0.7c3,0.3,5.6,0.7,7.9,1c2.3,0.3,4,1,5.3,1.7l-1.3-9.6c-1.3-1-3.3-1.3-5.6-1.7s-5.3-0.7-9.2-1
			c-2.3,0-4.6-0.3-6.3-0.7c-2-0.3-3.6-0.7-5-1.7c-1.7-0.7-3-2-4-3.6c-1-1.7-2.3-4-3.3-7.3h0.7C1306.4,90.1,1306.8,90.1,1306.8,90.1z
			 M1306.1,77.2c-0.3-1.7-0.3-3.3-0.3-4.6s0.3-2.6,1-3.6s1.3-2,2.6-2.6c1-0.7,2.6-1,4.3-1c3.6,0,6.3,1,8.3,3c2,2,3.3,5,4,8.6
			c0.7,3.6,0.3,6.3-0.7,7.9c-1,1.7-3.3,2.6-6.6,2.6c-3.6,0-6.3-1-8.3-2.6C1308.1,83.2,1306.8,80.5,1306.1,77.2"></path>
        <path id="path66" class="st0" d="M1373.8,75.9l2,6.9l-6.3-6.9l-20.1-18.8h-6.6l7.9,41.6h11.2l-4-19.5l-1.7-5.6h1
			c0.7,1,1.7,2,2.6,3c1,1,1.7,2,2.6,3l20.5,19.5h6.6l-7.9-41.6h-11.2L1373.8,75.9"></path>
        <path id="path68" class="st0" d="M1400.6,74.6l1.3,7.6h5.3c2.3,0,4.3,0.3,5.9,1c1.7,0.7,2.3,1.7,2.6,3c0.3,1.7,0,2.6-1.3,3.3
			c-1,0.7-3,1-5.6,1c-2.3,0-4.3-0.3-6.3-1s-3.6-1-5-1.7c-0.3,1.3-0.3,2.6-0.3,4s0,2.6-0.3,4c2,1,4.6,2,7.6,2.6c3,0.7,6.3,1,9.6,1
			c5.3,0,8.9-1,10.9-2.6c2.3-1.7,3-4.3,2.3-7.6c-0.3-1-0.7-2-1-3c-0.3-1-1-2-2-2.6c-0.7-1-1.7-1.7-2.6-2.3c-1-0.7-2.3-1.3-3.6-1.7
			v-0.7c3.3-0.7,5.3-2,6.3-3.6c1-1.7,1.3-4,0.7-6.6c-0.3-1.7-1-3.3-2-5c-1-1.7-2.6-3-4.3-4c-2-1.3-4-2-6.6-2.6c-2.6-0.7-5.6-1-8.9-1
			c-3.3,0-5.9,0.3-8.3,1s-4.3,1.3-5.6,2.3c0.7,1.3,1.3,3,2,4.3c0.7,1.3,1.3,3,2,4.3c1.3-0.7,3-1.3,5-2c2-0.7,4.3-0.7,6.6-0.7
			c5.6,0,8.9,1.7,9.6,5c0,0.7,0,1.3,0,2c-0.3,0.7-0.7,1-1.3,1.3c-0.7,0.3-1.7,0.7-3,0.7c-1.3,0-3,0.3-5,0.3H1400.6"></path>
        <path id="path70" class="st0" d="M1462,73.3h-15.9l-3-16.2H1432l7.9,41.6h11.2l-3-15.5h15.9l3,15.5h11.2l-7.9-41.6H1459L1462,73.3
			"></path>
        <path id="path72" class="st0" d="M1518.2,61c-2-1.3-4.6-2.6-7.9-3.6c-3.3-1-6.6-1.3-10.2-1.3c-7.3,0-12.2,2-14.5,5.9
			c-2.6,4-3.3,9.3-2,16.2c1.3,7.3,4.3,12.6,8.9,16.5c4.6,3.6,10.2,5.6,17.2,5.6c2.3,0,4.3-0.3,6.6-1s4-1.3,5.3-2.6
			c1.3-1.3,2.6-3,3-5.3c0.7-2.3,0.7-5,0-8.3c-0.3-1-0.7-2.3-1-3.6c-0.3-1.3-1-2.6-1.7-4.3h-28.1c-0.3-3.6,0-6.3,1.7-7.9
			s4.3-2.6,8.6-2.6c2.6,0,5,0.3,6.9,1s4,1.3,5,2.3C1515.5,68,1518.2,61,1518.2,61z M1507.3,91.4c-3.3,0-5.9-1-7.9-2.6
			s-3.3-4-4.3-6.6h18.2c0.7,3,0.7,5.3-0.3,6.9C1512.2,90.4,1510.2,91.4,1507.3,91.4"></path>
        <path id="path74" class="st0" d="M1560.8,59.7c-2-1.3-4.3-2-6.9-2.6c-2.6-0.7-5.3-1-7.9-1c-3.6,0-6.6,0.7-8.9,1.7s-4,2.6-5.3,4.6
			c-1.3,2-2,4.3-2,6.9c-0.3,2.6,0,5.6,0.7,8.9c1.3,6.9,4,12.2,8.3,16.2s9.6,5.9,16.2,5.9c3.3,0,5.9-0.3,7.6-0.7c2-0.7,3.6-1,5-2
			l-4.3-8.9c-1.3,0.7-2.6,1-4,1.3c-1.3,0.3-3,0.3-4.6,0.3c-3.3,0-6.3-1-8.3-3c-2.3-2-3.6-5-4.6-9.3c-0.3-1.7-0.3-3.3-0.3-4.6
			s0.7-2.6,1.3-4c0.7-1,1.7-2,3-2.6c1.3-0.7,3-1,4.6-1c2.3,0,4,0.3,5.3,0.7c1.3,0.3,2.6,1,4,1.7L1560.8,59.7"></path>
        <path id="path76" class="st0" d="M1575.6,96.1c2.6,1,5.6,2,9.2,2.6s7.3,1,10.9,1c3,0,5.3-0.3,7.3-1s3.3-1.7,4.3-3
			c1-1.3,1.3-3,1.7-4.6c0-2,0-4-0.3-5.9c-0.7-2.6-1-5.3-2-7.9c-0.7-2.6-1.3-5.3-2-8.3c-0.3-2-0.7-4-0.7-5.9c0-2,0-3.6,0.3-5.6h-9.2
			l-0.7,6.3h-1c-1.7-2-4-3.3-6.3-4.6c-2.3-1.3-5.3-2-8.6-2c-2,0-4,0.3-5.3,1c-1.7,0.7-3,1.3-4,2.6c-1,1-1.7,2.3-2,4
			c-0.3,1.3-0.3,3,0,5c1,4.6,3.3,8.3,6.9,10.6s8.6,3.6,15.2,3.6c1.7,0,3,0,4.3-0.3c1.3-0.3,2.3-0.3,3-0.7c0.3,1,0.7,2,0.7,3
			c0.3,2,0.3,3.6-0.7,4.3c-1,1-2.6,1.3-5.3,1.3c-2.6,0-5.3-0.3-7.6-1c-2.6-0.7-5-1.3-6.9-2.3C1577,87.5,1575.6,96.1,1575.6,96.1z
			 M1584.2,65.6c2.6,0,4.6,0.7,6.3,1.7c1.7,1.3,3,2.3,4,3.6l1,4.6c-0.3,0-0.7,0.3-1.3,0.3c-0.7,0-1,0.3-1.7,0.3s-1.3,0.3-2,0.3
			s-1.3,0-1.7,0c-3,0-5.3-0.7-6.6-1.7c-1.7-1-2.6-2.3-3-4c-0.3-2,0-3.3,0.7-4.3C1581.3,66,1582.6,65.6,1584.2,65.6"></path>
	</g>
</g>
</svg>
            </div>
            <!-- Центральная колонка: короткая верхняя строка и длинный абзац ниже -->
            <div class="footer-legal__copy">
                <div class="footer-legal__copy-top">
                    © 2025 Пищевые технологии. Работаем для Вас с 1991 года.
                    <br>
                    Интернет-магазин оптовой и розничной продажи оборудования, посуды, инвентаря и мебели для баров, кафе, столовых и ресторанов.
                </div>

                <div class="footer-legal__copy-bottom">
                    В связи с изменением курса валют, размещенные на сайте предложения о продаже любого вида товара не являются публичной офертой. Информацию об актуальной цене товара, его наличии на складе и сроках поставки, пожалуйста, уточняйте у менеджера интернет-магазина. Производитель оставляет за собой право изменять характеристики товара, его внешний вид и комплектность без предварительного уведомления продавца.
                </div>
            </div>

            <!-- Правая колонка: соц.кнопки и печать/печать-значок -->
            <div class="footer-legal__right">
                <div class="footer-legal__socials" aria-label="Соцсети">
                    <!-- Замените <img> на свои SVG-иконки -->
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50"
                         style="fill:#4D4D4D;">
                        <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37.72,33l-3.73-0.01 c0,0-0.08,0.01-0.21,0.01c-0.3,0-0.92-0.08-1.65-0.58c-1.31-0.91-2.56-3.17-3.55-3.17c-0.07,0-0.13,0.01-0.19,0.03 c-0.86,0.27-1.12,1.13-1.12,2.18c0,0.37-0.26,0.54-0.96,0.54h-1.93c-2.16,0-4.25-0.05-6.6-2.62c-3.46-3.79-6.7-10.53-6.7-10.53 s-0.18-0.39,0.01-0.62c0.18-0.21,0.6-0.23,0.76-0.23c0.04,0,0.06,0,0.06,0h4c0,0,0.37,0.07,0.64,0.27c0.23,0.17,0.35,0.48,0.35,0.48 s0.68,1.32,1.53,2.81c1.43,2.46,2.2,3.28,2.75,3.28c0.09,0,0.18-0.02,0.27-0.07c0.82-0.45,0.58-4.09,0.58-4.09s0.01-1.32-0.42-1.9 c-0.33-0.46-0.96-0.59-1.24-0.63c-0.22-0.03,0.14-0.55,0.62-0.79c0.62-0.3,1.65-0.36,2.89-0.36h0.6c1.17,0.02,1.2,0.14,1.66,0.25 c1.38,0.33,0.91,1.62,0.91,4.71c0,0.99-0.18,2.38,0.53,2.85c0.05,0.03,0.12,0.05,0.21,0.05c0.46,0,1.45-0.59,3.03-3.26 c0.88-1.52,1.56-3.03,1.56-3.03s0.15-0.27,0.38-0.41c0.22-0.13,0.22-0.13,0.51-0.13h0.03c0.32,0,3.5-0.03,4.2-0.03h0.08 c0.67,0,1.28,0.01,1.39,0.42c0.16,0.62-0.49,1.73-2.2,4.03c-2.82,3.77-3.14,3.49-0.8,5.67c2.24,2.08,2.7,3.09,2.78,3.22 C39.68,32.88,37.72,33,37.72,33z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                         style="fill:#4D4D4D;">
                        <g fill="#4d4d4d" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M7.41406,3l1.77539,6.41211v3.07617h1.53711v-3.07617l1.79883,-6.41211h-1.54883l-0.64453,2.91797c-0.181,0.852 -0.29661,1.45736 -0.34961,1.81836h-0.04687c-0.075,-0.505 -0.19161,-1.11508 -0.34961,-1.83008l-0.62109,-2.90625zM14.31836,5.41992c-0.521,0 -0.94172,0.10255 -1.26172,0.31055c-0.321,0.207 -0.55603,0.53823 -0.70703,0.99023c-0.15,0.453 -0.22656,1.05088 -0.22656,1.79688v1.00586c0,0.738 0.06722,1.33039 0.19922,1.77539c0.132,0.445 0.35301,0.77337 0.66601,0.98438c0.313,0.211 0.74492,0.31736 1.29492,0.31836c0.535,0 0.96144,-0.1045 1.27344,-0.3125c0.312,-0.208 0.53873,-0.53342 0.67773,-0.98242c0.139,-0.449 0.20898,-1.04225 0.20898,-1.78125v-1.00781c0,0 -0.07184,-1.34202 -0.21484,-1.79102c-0.143,-0.448 -0.36773,-0.77923 -0.67773,-0.99023c-0.309,-0.211 -0.72042,-0.31641 -1.23242,-0.31641zM17.25195,5.55664v5.17773c0,0.641 0.11013,1.11306 0.32813,1.41406c0.219,0.301 0.55758,0.45117 1.01758,0.45117c0.663,0 1.16119,-0.31994 1.49219,-0.96094h0.0332l0.13672,0.84766h1.2207v-6.92969h-1.55859v5.50391c-0.06,0.129 -0.15234,0.23536 -0.27734,0.31836c-0.125,0.084 -0.25463,0.125 -0.39062,0.125c-0.159,0 -0.27184,-0.06722 -0.33984,-0.19922c-0.068,-0.132 -0.10156,-0.35016 -0.10156,-0.66016v-5.08789zM14.2832,6.49414c0.218,0 0.37298,0.1157 0.45899,0.3457c0.087,0.229 0.12891,0.59184 0.12891,1.08984v2.16016c0,0.513 -0.04291,0.88142 -0.12891,1.10742c-0.086,0.226 -0.24003,0.33884 -0.45703,0.33984c-0.218,0 -0.37012,-0.11384 -0.45312,-0.33984c-0.084,-0.226 -0.125,-0.59542 -0.125,-1.10742v-2.16016c0,-0.497 0.04486,-0.85984 0.13086,-1.08984c0.086,-0.229 0.23431,-0.3457 0.44531,-0.3457zM6.5,13.90039c-1.381,0 -2.5,1.119 -2.5,2.5v8c0,1.381 1.119,2.5 2.5,2.5h17c1.381,0 2.5,-1.119 2.5,-2.5v-8c0,-1.381 -1.119,-2.5 -2.5,-2.5zM15.05859,16.19922h1.26953v3.08398h0.00977c0.114,-0.223 0.27633,-0.40206 0.48633,-0.53906c0.21,-0.137 0.43769,-0.20508 0.67969,-0.20508c0.312,0 0.55542,0.08305 0.73242,0.24805c0.177,0.165 0.30772,0.43373 0.38672,0.80273c0.079,0.37 0.11914,0.88211 0.11914,1.53711v0.92383c0,0.872 -0.10445,1.51283 -0.31445,1.92383c-0.21,0.411 -0.53937,0.61719 -0.98437,0.61719c-0.248,0 -0.47373,-0.05787 -0.67773,-0.17187c-0.204,-0.114 -0.35503,-0.27075 -0.45703,-0.46875h-0.0293l-0.13281,0.55273h-1.08789zM7.18359,16.49609h3.9043v1.06055h-1.30859v6.94727h-1.28906v-6.94727h-1.30664zM21.11719,18.54297c0.451,0 0.79902,0.08109 1.04102,0.24609c0.241,0.166 0.41272,0.42444 0.51172,0.77344c0.098,0.35 0.14648,0.83417 0.14648,1.45117v1.00391h-2.20312v0.29688c0,0.376 0.0102,0.65675 0.0332,0.84375c0.023,0.187 0.06867,0.32516 0.13867,0.41016c0.07,0.086 0.17822,0.12891 0.32422,0.12891c0.197,0 0.33225,-0.07652 0.40625,-0.22852c0.073,-0.152 0.11314,-0.40767 0.11914,-0.76367l1.13477,0.06641c0.006,0.05 0.00977,0.12194 0.00977,0.21094c0,0.541 -0.14736,0.94494 -0.44336,1.21094c-0.296,0.268 -0.71486,0.40234 -1.25586,0.40234c-0.649,0 -1.10323,-0.20433 -1.36523,-0.61133c-0.262,-0.407 -0.39062,-1.03762 -0.39062,-1.89062v-1.02148c0,-0.878 0.13625,-1.51883 0.40625,-1.92383c0.27,-0.405 0.73172,-0.60547 1.38672,-0.60547zM12.94922,18.65039h1.31836v5.85156h-0.00391v0.00195h-1.03125l-0.11328,-0.7168h-0.0293c-0.28,0.542 -0.69977,0.8125 -1.25977,0.8125c-0.389,0 -0.67437,-0.12586 -0.85937,-0.38086c-0.185,-0.254 -0.27734,-0.65336 -0.27734,-1.19336v-4.37305h1.32031v4.29688c0,0.26 0.02894,0.44859 0.08594,0.55859c0.058,0.112 0.15211,0.16602 0.28711,0.16602c0.114,0 0.22313,-0.03447 0.32813,-0.10547c0.106,-0.07 0.18238,-0.15958 0.23438,-0.26758zM21.08984,19.43164c-0.14,0 -0.2455,0.04105 -0.3125,0.12305c-0.067,0.083 -0.11181,0.21825 -0.13281,0.40625c-0.023,0.187 -0.0332,0.47252 -0.0332,0.85352v0.41992h0.96289v-0.41992c0,-0.376 -0.01211,-0.65952 -0.03711,-0.85352c-0.025,-0.195 -0.06972,-0.33016 -0.13672,-0.41016c-0.067,-0.079 -0.16955,-0.11914 -0.31055,-0.11914zM16.91016,19.47461c-0.127,0 -0.24552,0.05034 -0.35352,0.15234c-0.108,0.102 -0.18452,0.23262 -0.22852,0.39063v3.32227c0.058,0.102 0.13261,0.17751 0.22461,0.22852c0.092,0.05 0.19178,0.07813 0.30078,0.07813c0.14,0 0.25098,-0.05034 0.33398,-0.15234c0.083,-0.102 0.14178,-0.27362 0.17578,-0.51562c0.035,-0.241 0.05273,-0.57595 0.05273,-1.00195v-0.75391c0,-0.458 -0.01397,-0.81155 -0.04297,-1.06055c-0.028,-0.248 -0.08034,-0.4253 -0.15234,-0.5293c-0.073,-0.104 -0.17555,-0.1582 -0.31055,-0.1582z"></path></g></g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                         style="fill:#4D4D4D;">
                        <g fill="#4d4d4d" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M9,4c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM25,9c4.42,0 8,3.58 8,8c0,4.42 -3.58,8 -8,8c-4.42,0 -8,-3.58 -8,-8c0,-4.42 3.58,-8 8,-8zM25,13c-2.20914,0 -4,1.79086 -4,4c0,2.20914 1.79086,4 4,4c2.20914,0 4,-1.79086 4,-4c0,-2.20914 -1.79086,-4 -4,-4zM33,26.49023c0.63,0 1.25062,0.29937 1.64063,0.85938c0.63,0.9 0.41,2.15125 -0.5,2.78125c-1.5,1.05 -3.15063,1.80906 -4.89062,2.28906l5.16016,5.16992c0.79,0.78 0.79,2.04031 0,2.82031c-0.39,0.39 -0.90016,0.58984 -1.41016,0.58984c-0.51,0 -1.02016,-0.19984 -1.41016,-0.58984l-6.58984,-6.58008l-6.58984,6.58008c-0.39,0.39 -0.90016,0.58984 -1.41016,0.58984c-0.51,0 -1.02016,-0.19984 -1.41016,-0.58984c-0.79,-0.78 -0.79,-2.04031 0,-2.82031l5.16016,-5.16992c-1.73,-0.48 -3.38086,-1.2293 -4.88086,-2.2793c-0.9,-0.63 -1.13,-1.87125 -0.5,-2.78125c0.39,-0.56 1.01039,-0.85937 1.65039,-0.85937c0.39,0 0.79062,0.11938 1.14063,0.35938c2.01,1.4 4.37984,2.14063 6.83984,2.14063c2.47,0 4.83938,-0.74039 6.85938,-2.15039c0.34,-0.24 0.74063,-0.35937 1.14063,-0.35937z"></path></g></g>
                    </svg>
                </div>

                <div class="footer-legal__seal" aria-hidden="true">
                    <!-- печать/печать-значок — можно заменить на PNG/SVG -->
                    <img src="https://zavod-pt.kg/bitrix/templates/aspro_max/images/footer/performance.png" alt="Печать" />
                </div>
            </div>
        </div> <!-- /.container -->
    </div>
    <!-- /Footer: lower legal bar -->


</footer>

</body>
<script>
    (function(){
        const slider = document.getElementById('heroSlider');
        const slidesWrap = document.getElementById('slides');
        const slides = Array.from(slidesWrap.children);
        const dotsWrap = document.getElementById('dots');

        let index = 0;
        const total = slides.length;
        let width = slider.clientWidth;
        let autoplay = true;
        let interval = null;
        let touchStartX = 0;
        let touchEndX = 0;

        for(let i=0;i<total;i++){
            const d = document.createElement('button');
            d.className = 'dot' + (i===0? ' active':'');
            d.dataset.index = i;
            d.setAttribute('aria-label', 'Перейти к слайду '+(i+1));
            dotsWrap.appendChild(d);
        }

        const dots = Array.from(dotsWrap.children);

        function goTo(i){
            index = (i + total) % total;
            const offset = -index * 100;
            slidesWrap.style.transform = `translateX(${offset}%)`;
            dots.forEach((dot,idx)=> dot.classList.toggle('active', idx===index));
        }

        function next(){
            goTo(index+1);
        }
        function prev(){
            goTo(index-1);
        }

        slider.querySelectorAll('[data-action]').forEach(btn=>{
            btn.addEventListener('click', (e)=>{
                const act = btn.dataset.action;
                if(act === 'next') next();
                else prev();
                restartAutoplay();
            });
        });

        dots.forEach(d=> d.addEventListener('click', (e)=>{
            goTo(Number(d.dataset.index));
            restartAutoplay();
        }));

        function startAutoplay(){
            if(!autoplay) return;
            stopAutoplay();
            interval = setInterval(()=> next(), 5000);
        }
        function stopAutoplay(){ if(interval){ clearInterval(interval); interval = null } }
        function restartAutoplay(){ stopAutoplay(); startAutoplay(); }

        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);
        slider.addEventListener('focusin', stopAutoplay);
        slider.addEventListener('focusout', startAutoplay);

        window.addEventListener('resize', ()=>{
            width = slider.clientWidth;
        });

        slidesWrap.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, {passive:true});
        slidesWrap.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            const diff = touchStartX - touchEndX;
            if(Math.abs(diff) > 40){
                if(diff > 0) next();
                else prev();
                restartAutoplay();
            }
        });

        document.addEventListener('keydown', (e)=>{
            if(e.key === 'ArrowLeft'){ prev(); restartAutoplay(); }
            if(e.key === 'ArrowRight'){ next(); restartAutoplay(); }
        });

        goTo(0);
        startAutoplay();
    })();
</script>

</html>