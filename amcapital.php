
<!DOCTYPE html>
<html>
<head>
    <title>AM | Capital</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="/sources/png-logos/icon.png" />
    <script type="text/javascript" src="script.js"></script>
    <!-- 	<script src="script.js" type='text/javascript'></script> -->
    <link rel="stylesheet" type="text/css" href="site.css" />
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled"> 
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">   
</head>

<style>
html {
    scroll-behavior: smooth;
}

body {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    background-color: #F4F4F4;
    box-sizing: border-box;
}

@font-face {
    font-family: 'Helvetica';
    src: url('sources/fonts/HelveticaNeueBold.ttf');
}

@font-face {
    font-family: 'MonMedium';
    src: url('sources/fonts/MonMedium.ttf');
}

/* SCROLL */
.scrolling-active {
    background-color: rgba(44, 41, 35, 0.88);
    height: auto;
}

/*
.scrolling-active-mobile {
    background-color: rgba(44, 41, 35, 0.88);
}
*/

.scrolling {
    display: block;
    z-index: 8000;
}

.scroll-fixed {
    position: fixed;
    color: black;
    transform: rotate(-90deg);
    font-size: 1.625rem;
    font-family: 'Montserrat';
    margin-left: 91%;
    top: 70%;
    display: inline-flex;
    width: 12%;
}

.scroll-scroll {
    position: absolute;
    color: white;
    transform: rotate(-90deg);
    font-size: 1.625rem;
    font-family: 'Montserrat';
    margin-left: 91%;
    top: 70%;
    display: inline-flex;
    width: 12%;
}

.arrow-left {
    transform: rotate(90deg);
    width: 2rem;
    margin-right: 5%;
}

.arrow-left-mobile, .arrow-left-mobile-2 {
	display: none;
}

/* MAIN PAGE */
.parallax-1 {
    background-image: url("/sources/pictures/am-capital-home.jpg");
    min-height: 99vh;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.parallax-1-mobile, .parallax-2-mobile, .parallax-3-mobile, .parallax-4-mobile {
	display: none;
	}

header {
    top: 0%;
    position: fixed;
    width: 100vw;
    z-index: 9999 !important;
    transition: background-color 0.7s ease;
    background-color: transparent;
}

.main {
	display: block;
}

.main img {
    margin-left: 3%;
    margin-top: 1.2%;
    margin-bottom: 1.2%;
    width: 10%;
}

.bothsubtitles {}

.subtitle {
    position: absolute;
    transform: translate(-50%, -50%);
    font-size: 4.625rem;
    color: white;
    text-align: center;
    font-weight: 500;
    top: 38%;
    width: 100%;
    left: 50%;
}

.subsubtitle {
    position: absolute;
    transform: translate(-50%, -50%);
    font-size: 2.8125rem;
    color: white;
    text-align: center;
    font-weight: 500;
    top: 52%;
    left: 50%;
    width: 100%;
}



.value {
    /*   font-size: 4.625rem; */
    font-size: 6vw;
    display: block;
    font-weight: 600;
    color: white;
}

.value2 {
    font-size: 1.25rem;
    display: block;
    color: white;
    font-family: 'MonMedium';
}

#value-middle {
    margin-right: 5%;
    margin-left: 0;
}

#plus {
    font-size: 6vw;
    display: block;
    font-weight: 600;
    color: white;
    float: right;
    right: 0;
    position: relative;
    margin-right: -18.9%;
}

.pluses {
    font-size: 4.625rem;
    display: block;
    font-weight: 600;
    color: white;
    float: right;
    right: 0;
    position: relative;
}

.content-numbers,
.content-numbers-2 {
    width: 76%;
    position: absolute;
    display: inline-flex;
    justify-content: space-around;
/*     align-items: center; */
}

.content-numbers {
    margin-left: 10vw;
    top: 69%;
}

.content-numbers-2 {
    margin-left: 11.5%;
    top: 79%;
    text-align: center;
}

.content-numbers-2 p {
    color: white;
    font-size: 1.25rem;
}

.animated-style {
    position: absolute;
    overflow: hidden;
    animation: animate 1s linear forwards;
}

@keyframes animate {
    0% {
        width: auto;
        height: 0px;
        opacity: 0;
    }

    40% {
        width: auto;
        height: 6vh;
    }

    100% {
        width: 100%;
        height: 12vh;
        opacity: 1;
    }
}

.btn,
.btn2 {
    text-align: center;
    margin-left: 46.5%;
    text-transform: uppercase;
    color: black;
    text-decoration: none;
    letter-spacing: 0.02rem;
    padding-left: 0.6%;
    padding-right: 0.6%;
    padding-top: 0.3%;
    padding-bottom: 0.3%;
    font-size: 0.875rem;
    border: 2px solid black;
    font-weight: 600;
    margin-top: 5%;
    z-index: 10 !important;
    position: relative;
}

.btn-mobile {
	display: none;
}

/* --SECTION WHY AM CAPITAL-- */
/* Create four equal columns that floats next to each other */
.parallax-4 {
    background-image: url("/sources/pictures/am-capital-why.jpg");
    min-height: 70vh;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 5%;
}

#arch {
    width: 76%;
    height: auto;
    display: block;
    margin-left: 12%;
    margin-top: 8%;
}

#arch-mobile {
	display: none;
}

#round-logo {
    width: 10%;
    height: auto;
    border-radius: 50%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: -17%;
}

.column {
    float: left;
    width: 42%;
    padding-right: 8%;
}

.row {
    display: inline-block;
    margin-top: -3vh;
    width: 110%;
}

/* Clear floats after the columns
.row:after {
  content: "";
  display: table;
  clear: both;
}*/

.columns-sectors {
    float: left;
    width: 18%;
    height: 11vw;
    text-align: center;
    border: 2px solid black;
    margin-right: 6%;
    margin-bottom: 6%;
    border-style: dotted;
}

.columns-sectors img {
    margin-top: 14%;
    width: 35%;
}

.rows-sectors {
    display: block;
    margin-top: 3%;
    margin-left: 7.5%;
}

.our-sectors {
    width: 106%;
    margin-left: -4%;
    height: 50%;
    background-color: #FFCE00;
    margin-top: 7%;
    margin-bottom: 3%;
    display: inline-block;
}

#our-sectors-title {
	margin-left: 4%; 
	margin-top: 4%; 
	margin-bottom: 4%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.row-why-1 {
	margin-top: 5%;
}

.row-why-1,
.row-why-2 {
    padding: 1px;
    text-align: center;
    width: 99.5%;
    display: inline-flex;
    margin-bottom: 2%;

}

/*
.row-why-2 {
	margin-bottom: 3%;
}
*/

.one,
.two,
.three,
.four,
.five,
.six {
    width: 33%;
}

.one,
.four {
    float: left;
    margin-left: 19%;
}

.two,
.five {
    display: inline-block;
}

.three,
.six {
    float: right;
    margin-right: 14%;
}

.why-description {
    font-size: 1.25vw;
    text-align: left;
    top: 33%;
    position: relative;
    left: 7%;
    font-weight: 600;
/*     width: 130%; */
}

/* --SECTION OUR REFERENCES-- */

.parallax-3 {
    background-image: url("/sources/pictures/am-capital-our-references.jpg");
    min-height: 70vh;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 5%;
}

/* ADD ITEM- */

.item-year,
.itemflags {
    padding-top: 10%;
}

.item-operation,
.item-state,
.item-logos {
    text-align: center;
}

.item-operation {
    text-transform: uppercase;
    font-size: 1rem;
    height: 22%;
    margin-top: 1%;
    color: #242424;
    display: flex;
    justify-content: center;
}

.item-state {
    font-size: 0.75rem;
    color: red;
    text-transform: uppercase;
    height: 10%;
    margin-top: 6%;
}

.item-logos {
    height: 38%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 14%;
}

.item-logos img {
    margin: 3%;
    width: 25%;
    height: auto;
}

/* ADD items and template */	

/* --SECTION WHAT WE DO-- */

.parallax-2 {
    background-image: url("/sources/pictures/am-capital-what-we-do.jpg");
    min-height: 70vh;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 5%;
}

.transactions,
.transactions-sectors {
    border: 2px solid;
    text-transform: uppercase;
    font-size: 0.875rem;
    display: inline-flex;
    margin-top: 4%;

}

.transactions {
    padding-top: 0.75%;
    padding-bottom: 0.5%;
    padding-left: 2%;
    padding-right: 2%;
    letter-spacing: 0.03rem;
}

.transactions-sectors {
    padding-top: 0.35%;
    padding-bottom: 0.2%;
    padding-left: 1%;
    padding-right: 0.8%;
    margin-bottom: 6%;
    margin-top: 0%;
    margin-left: 7.5%;
    letter-spacing: 0.03rem;
}

.arrow-transactions {
    margin-left: -0, 6%;
}

.transactions:hover {
/*     background-color: crimson; */
    transition: all .5s;
    transform: translateX(8%);
	-webkit-transform: translateX(8%);
	-moz-transform: translateX(8%);
}

.transactions-sectors:hover {
/*     background-color: crimson; */
    transition: all .5s;
    transform: translateX(8%);
	-webkit-transform: translateX(8%);
	-moz-transform: translateX(8%);
}

.arrow-transactions:hover {
/*     background-color: crimson; */
/*
    transition: all .5s;
    transform: translateX(30%);
	-webkit-transform: translateX(30%);
	-moz-transform: translateX(30%);
*/
}

p.transactions {
    line-height: 1;
}

.transactions>div {
    padding-right: 2%;
}

.triangle-down {
    color: #FF0000;
    display: inherit;
    position: absolute;
    right: 7%;
/*     top: 28%; */
    margin-top: 1.3%;
    font-size: 1.1rem;
/*     margin-right: 11%; */
}

/* ADD NOTFOUND */

/* DROPDOWN MENU */

.section-dropdown {
    margin-left: 16%;
    display: inline-flex;
    font-family: 'Montserrat';
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
    width: 75%;
    position: relative;
    z-index: 8002;
}

.section-dropdown p {
    font-weight: 600;
    text-transform: uppercase;
}

.dropbtn {
    background-color: #F4F4F4;
    color: black;
    padding: 1%;
/*     font-size: 1rem; */
    font-size: 1rem;
    cursor: pointer;
/* 	font-size: 1rem; */
    width: 23.2vw;
    margin-right: 1vw;
    font-weight: 600;
    font-family: 'Montserrat';
    text-transform: uppercase;
    border: 2px solid black;
    padding-right: 6.6%;
}

/*
.dropbtn p {
	margin-right: 5%;
	}
*/
	
.dropdown {
    position: relative;
    display: inline-block;
    /*   margin-left: 8%; */
    font-family: 'Montserrat';
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    width: 95.6%;
    text-align: center;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #FFCE00
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {}

#sort-by {
	margin-left: 16%; 
	opacity: 0.5; 
	font-weight: 600; 
	margin-top: 4%;
}

#triangle {
    width: 0;
    height: 0;
    border-left: 0.625rem solid transparent;
    border-right: 0.625rem solid transparent;
    border-top: 0.625rem solid #f00;
}

#who-we-are,
#what-we-do,
#why-am-capital,
#our-references,
#contacts {
    margin-left: 3%;
}

#what-we-do, #why-am-capital, #our-references {
	margin-top: -1vh;
	}
	
.titles-box {
    background-color: #FFCE00;
    width: 100%;
}

/* --SECTION TEXT STYLE-- */
p {
    font-weight: 400;
    font-size: 1rem;
    color: #1F1F1F;
}

h2 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 2rem;
    color: black;
    padding-top: 0.5%;
    padding-bottom: 0.5%;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
}

h3 {
    font-size: 2.125rem;
    font-weight: 600;
}

h3,
p {
    color: #1F1F1F;
    font-family: 'Montserrat', sans-serif;
}

h5 {
    color: red;
    top: 5%;
}

h6 {
    font-weight: 600;
    font-size: 1.5rem;
    margin-bottom: 3%;
}

h7 {
    font-size: 15.2vw;
/*     font-size: 12.188rem; */
    color: #FFCE00;
    width: 31%;
    float: left;
    font-family: 'Helvetica';
    font-weight: 500;
    opacity: 0.7;
}

h9 {
    display: block;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 1.16vw;
    margin-top: 10%;
    color: #1F1F1F;
}

/* SECTION WHO WE ARE */

.overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
}

.overlay:target {
    visibility: visible;
    opacity: 1;
}

#history, #title-founding-partners {
	margin-left: -3.3%; 
	margin-top: 6%;		    
}

#history {
	margin-top: 6%;
}

#title-founding-partners {
	margin-top: 7%;
}

.founding-partners {
    width: 25%;
}

.partners {
    width: 100%;
    display: inline-flex;
    margin-top: 1%;
}

#geoarea,
#op,
#sector {
    background-color: transparent;
    border-color: transparent;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 0.875rem;
    text-align: center;
    text-transform: uppercase;
    border: 2px solid black;
    padding: 0.3%;    
/*     width: 30%; */
	}

select#op {
    width: 30%;
	}

select#sector {
    width: 19.5%;
	}

#op {
	margin-right: 1.75%;
	}

#sector {
	}

#geoarea {
	width: 17%;
	margin-left: 16%;
	margin-right: 1.75%;
	}

#selected {
	background-color: white;
	color: black;
}

#lightbox {
    margin-left: -4%;
    font-size: 1.1875rem;
    text-transform: uppercase;
    margin-top: -3%;
    font-weight: 550;
}

.arrow-down {
    width: 0.875rem;
    margin-left: 0.5%;
}

#see-more {
    border: 2px solid black;
    text-transform: uppercase;
    font-weight: 600;
    padding-top: 1.6%;
    padding-bottom: 1.6%;
    font-size: 0.875rem;
    letter-spacing: 0.02rem;
    font-family: 'Montserrat';
    background-color: transparent;
    text-decoration: none;
    color: black;
    display: inline-flex;
    align-items: center;
    cursor: pointer;
	}

#see-more:hover {
/*     background-color: crimson; */
    transition: all .5s;
    transform: translateX(12%);
	-webkit-transform: translateX(12%);
	-moz-transform: translateX(12%);
	}

/*
#see-more:hover .arrow-see-more {
    opacity: 1;
    margin-left: -0, 6%;
    display: inherit;
	}
	
#see-more:hover #mas {
	display: none;
	}
*/
		
.arrow-see-more {
	opacity: 0;
	display: none;
	}

#mas {
	display: inherit;
	}
	
/*
#see-more-1:hover .arrow-see-more {
    opacity: 1;
    margin-left: -0, 6%;
    display: inherit;
	}	
		
#see-more-1:hover #mas {
	display: none;
	}
*/

#see-more-1 {
    border: 2px solid black;
    text-transform: uppercase;
    font-weight: 600;
    padding-top: 1.3%;
    padding-bottom: 1.4%;
    font-size: 0.875rem;
    letter-spacing: 0.02rem;
    font-family: 'Montserrat';
    background-color: transparent;
    text-decoration: none;
    color: black;
    display: inline-flex;
    align-items: center;
    cursor: pointer;
}

#see-more-1:hover {
/*     background-color: crimson; */
    transition: all .5s;
    transform: translateX(12%);
	-webkit-transform: translateX(12%);
	-moz-transform: translateX(12%);
}

#div-to-toggle,
#div-to-toggle-1 {
    border: 1px #0000;
    padding: 5%;
    top: 18%;
    margin-left: 10%;
    margin-right: 21%;
    width: 43%;
    overflow-x: scroll;
    background: #FFCE00;
    box-shadow: 800px 20px 8px 1600px rgba(0, 0, 0, 0.77);
    position: fixed;
    z-index: 990;
    transition: 0.5s all ease;
    animation: hmenu 0.5s linear forwards;
    overflow: hidden;
}

#div-to-toggle p,
#div-to-toggle-1 p,
#div-to-toggle-2 p {
    font-size: 0.9375rem;
    margin-bottom: -3%;
    line-height: 1.3;
}

#div-to-toggle-1 {
    z-index: 9999 !important;
}

#div-to-toggle-2 {
    border: 1px #0000;
    padding: 5%;
    top: 18%;
    margin-left: 10%;
    margin-right: 21%;
    width: 43%;
    overflow-x: scroll;
    background: #FFCE00;
    /*  overflow: visible; */
    box-shadow: 800px 20px 8px 1600px rgba(0, 0, 0, 0.77);
    position: fixed;
    z-index: 9999 !important;
    transition: 0.5s all ease;
    animation: hmenu 0.5s linear forwards;
    
}

#close-btn {
    position: absolute;
    background: #FFCE00;
    border: 1px solid #fff0;
    color: black;
    top: 3%;
    right: 3%;
    cursor: pointer;
}

img#close-img,
img#close-img-1,
img#close-img-2 {
    width: 1.8rem;
    right: 2%;
}

#close-img,
#close-img-1,
#close-img-2 {
    position: absolute;
    background: #FFCE00;
    color: black;
    cursor: pointer;
}

.btn-container {
    width: auto;
    margin: 10px auto;
    text-align: center;
    clear: both;
/*     margin-left: 27%; */
}

.btn-container button {}

.box {
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.2);
    padding: 35px;
    border: 2px solid #fff;
    border-radius: 20px/50px;
    background-clip: padding-box;
    text-align: center;
}

.container p {
    line-height: 1.5;
}

/* SECTION CONTACTS */

.space-mobile {
/* 	display: none; */
width: 33%;
height: 80%;
display: inline-block;
position: relative;	
margin-left: 16%;	
margin-top: 6vh;
}

.space-mobile-2 {
/* 	display: none; */
	position: inherit;
    margin-top: 6vh;
    width: 38%;
    left: 56%;
    display: inline-block;
/*     top: 0; */
}

.contact-form {
    width: 86%;
    height: auto;
    margin-left: 0;
    position: absolute;
    top: 0;
    margin-top: 0;
}

#name {
    margin-top: 4%;
}

#name,
#email,
#title {
    border: 2px solid black;
    background-color: #FFCE00;
    margin-bottom: 1%;
    width: 50%;
    padding-top: 0.25%;
    padding-bottom: 0.25%;
    font-family: 'Montserrat';
    font-size: 0.875rem;
    color: rgba(0, 0, 0, 0.5);
    font-weight: 500;
    border-radius: 0px;
}

#message {
    border: 2px solid black;
    background-color: #FFCE00;
    width: 93%;
    border-radius: 0px;
    margin-top: 0.2%;
    height: 28.6vh;
    padding: 1.5%;
    margin-bottom: 0;
    font-family: 'Montserrat';
}

#send {
    border: 2px solid black;
    background-color: #FFCE00;
    font-family: 'Montserrat';
    color: black;
    font-weight: 600;
    font-size: 0.875rem;
    padding-top: 0.4%;
    padding-bottom: 0.4%;
    display: inline-flex;
    align-items: center;
}

#send:hover {
/*     background-color: crimson; */
    transition: all .5s;
    transform: translateX(20%);
	-webkit-transform: translateX(20%);
	-moz-transform: translateX(20%);
	cursor: pointer;

}

button#send {
}

.send-message {
    font-weight: 600;
}

input#title,
input#email,
input#name {
    padding-left: 1.5%;
}

input:focus {
    border: none;
    outline: 0px;
    border: 5px red;
    background-color: white;
}

input:active {
    border: none;
    background-color: white;
}

input {}

textarea:focus {
    border: none;
    outline: 0px;
    border: 5px red;
    background-color: white;
}

textarea:active {
    border: none;
    background-color: white;
}

textarea:focus-visible {
    border: none;
    background-color: red;
}

.logo-mobile {
    display: none;
}

.logo-mobile-2 {
    display: none;
}

#see-more-2 {
    display: none;
}

.mobile-header {
    display: none;
}

.iframe-google-maps {
	margin-top: 6.3%;
	    position: relative;
/*     top: 30vh; */
    width: 95%;
    height: 34.35vh;
    margin-bottom: 0;
    left: 0;
    margin-left: 0;
}

.iframe-google-maps iframe {
	width: 100%;
	height: 100%;
}

iframe {
/*     margin-left: 16%; */
}

#contacts {
    margin-top: 0;
}

form>div {
    margin-bottom: 0;
}

.elem-group {
	margin-bottom: 0.05%;
}

.contacts-box {
    width: 100%;
    background-color: #FFCE00;
    z-index: 1001;
    position: absolute;
    margin-top: 5%;
    height: 79%;
    display: inline-block;
}

#adress {
    font-size: 1rem;
    margin-left: 0;
	left: 0;
    font-family: 'MonMedium';
    position: relative;
    top: 0;
    margin-top: 0;
    margin-bottom: 0;
    text-decoration: none;
    color: black;
    pointer-events: none;
}

#adress > a { text-decoration:none; color:inherit; }

.page-bottom {
    width: 100%;
    position: absolute;
    bottom: 0;
    height: 8.5%;
    left: 0;
    background-color: #1F1F1F;
    display: -webkit-inline-box;
}

#design-by {
    color: white;
    right: 0;
    margin-right: 3%;
    margin-top: 1%;
    position: absolute;
    font-weight: 500;
}

#web-rights {
    color: white;
    margin-left: 3%;
    margin-top: 1%;
    font-weight: 500;
}

#send-us-a-message {
    margin-left: -4%;
    margin-top: 7%;
    text-transform: uppercase;
    font-weight: 600;
}


/* --DETAILS-- */

.header-menu {
    position: fixed;
    width: 71%;
    text-transform: uppercase;
    top: 0%;
    margin-top: 2.6%;
    overflow: hidden;
    margin-left: 10%;
    display: inline-flex;
    justify-content: space-between;
}

.header-menu a {
    float: left;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 0.875rem;
    font-weight: 500;
    letter-spacing: 0.03rem;
    transition: 0.7s all ease;
    animation: hmenu 1.2s linear forwards;
    overflow: hidden;
    font-weight: normal;
}

.header-menu a.active {
    font-weight: bold;
}

.header-menu a:hover {
    /* 	text-decoration: underline; */
    font-weight: 600;
}

@keyframes hmenu {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.container {
    margin-left: 16%;
    margin-right: 15%;
}

.red-square {
    height: 0.875rem;
    width: 0.875rem;
    background-color: #FF0000;
    display: inline-block;
    margin-right: 1.5%;
    margin-bottom: 0.65%;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
    transition-delay: 1s;
    /* Optional transition delay so the element appears after you have entered the section */
}

.rectangle {
    width: 8%;
    height: 1vh;
    background: #FF0000;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
    transition-delay: 1s;
    /* Optional transition delay so the element appears after you have entered the section */
}

.red-square.active,
.rectangle.active,
h2.active {
    opacity: 1;
}

#notfound {
    font-weight: 600;
    margin-left: 40%;
    text-transform: uppercase;
    color: #1F1F1F;
    opacity: 0.5;    
}

.items {
    margin-left: 16%;
    margin-top: 5%;
    font-weight: 600;
    margin-bottom: 4%;
    z-index: 2000;
    position: relative;
    display: block;
}

.items:after {
    content: "";
    display: table;
    clear: both;
}

.items-mobile {
	display: none;
}

#template {
    margin-left: 10vw;
}

#template-mobile {
	display: none;
}

.item {
    position: relative;
    overflow: hidden;
    float: left;
    grid-template-areas:
        'year year flags flags flags flags'
        'logos logos logos logos logos logos'
        'operation operation operation operation operation operation'
        'state state state state state state';
    margin-right: 2.5%;
    padding: 1vw;
    width: 24%;
    height: 18.5vw;
    border-radius: 20px;
    border: 2px solid black;
    margin-bottom: 3.3%;
    background-color: #E3E3E3;
}

.item .text-on-hover {
    opacity: 0;
    width: 90%;
    height: 100%;
    padding-top: 55%;
    padding-left: 20%;
    padding-right: 20%;
    color: #ffffff;
    background-color: #1F1F1F;
    text-decoration: none;
    text-align: center;
    -webkit-transition: opacity 500ms;
    -moz-transition: opacity 500ms;
    -o-transition: opacity 500ms;
    transition: opacity 500ms;
    display: block;
    border: 2px solid black;
    border-radius: 43px;
    font-size: 0.875rem;
    font-weight: 500;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.item:hover .text-on-hover {
    opacity: 1;
}

p.text-on-hover {
    padding-left: 5%;
    padding-right: 5%;
}

.item:hover .item-year {
    color: white;
    position: relative;
    z-index: 9000 !important;
}

.item:hover .item-flags {
    position: relative;
    z-index: 9000 !important;
}

.item-year {
    margin-top: -12%;
    font-size: 1.1875rem;
    padding-top: 10%;
    color: #242424;
}

.item-flags {
    text-align: right;
    margin-top: -7.5%;
}

.item-flags img {
    margin-left: 3%;
    width: 11.5%;
    height: 1.45vw;
}

.item:hover .item-flags-2 img {
    margin-left: 1.3%;
}

/*
.item-mobile {
	display: none;
}
*/

.gm-style .place-desc-medium {
	display: none;
}

@media screen and (max-width: 950px) {	
.main {
	display: none;
	}		
		
.mobile-header {
	display: block;	
}

.scrolling-active {
/*     background-color: rgba(44, 41, 35, 0.88); */
    height: 23vw;
}
	
#see-more-2 { 
		border: none; 
		text-transform: uppercase; 
		font-weight: 600; 
		margin-top: 9%;
		right: 6%;
		width: 12%;
		height: 4vh;
		position: absolute;
		font-size: 0.875rem; 
		letter-spacing: 0.02rem;
		font-family: 'Montserrat';
		background-color: transparent;	
		text-decoration: none;
/* 	z-index: 99999 !important; */
		display: block;
}	

img#toggle {
    width: 50vw;
}

.logo-mobile {
    width: 36%;
    position: fixed;
    top: 0;
    margin-top: 4%;
    left: 4%;
    display: block;
/*     z-index: 99999 !important; */
}

	    .row-why-1, .row-why-2 {
		  text-align: center;
		  width: 72%;
/* 		  height: 33vh;   */
		  margin-left: 18%;
		  display: inline-block;
		  margin-bottom: 0%;
		}
		
		.row-why-1 {
			margin-top: -3%;	
		}

h7 {
	font-size: 10rem;
	width: 35%;
	}	    
	    .one, .two, .three, .four, .five, .six {
		    display: inline-block;
		    width: 100%;
		    height: 23vh;
		    float: left;
	    }
	    
	    .one, .four {
		    margin-left: 0%;
	    }
	    
	    .three, .six {
			margin-right: 0%; 
	    }
	    
	    .six {
		    margin-bottom: 15%;
	    }
	    
	    .row-why-2 {
/* 		  margin-top: 85%; */
/* 		  margin-bottom: 90%; */
		}
		
		#arch {
			display: none;
	    }
	    
	    #arch-mobile {
		   display: block;
		   width: 80%;
		   margin-top: 20%; 
		   margin-left: 10%;  
	    }
	    
	    #round-logo {
		    width: 25%;
		    margin-top: -26%;
	    }	    

	    .why-description {
		   font-size: 0.9375rem;
		   top: 25%;
		   width: 106%;
	    }
			    
	    .section-dropdown {
		    display: grid;
		    margin-left: 10%;
	    }

	    .dropdown {
		    padding-bottom: 3%;
	    }
	    
	    .dropbtn {
		    width: 80vw;
		    font-size: 0.875rem;
	    }
	    	
	    .dropdown-content {
			width: 99.005%;
			font-size: 0.875rem;
			margin-top: 0;
		}
		
	    .triangle-down {
		    right: 4%;
	    }
	    
/*
	    .dropdown-content {
		    width: 97.6%;
	    }
*/
	    
	    #sort-by {
		    margin-left: 10%; 	
		    margin-top: 10%;	    
	    }
	    
	    #div-to-toggle-2  {
			top: 0;
			margin-left: -10%;
			height: 100%;
			padding: 10%;
			width: 90%;
			z-index: 999 !important;		
		}

		#div-to-toggle-2 p {
			margin-top: 10%;
		}
		
		#div-to-toggle p,
		#div-to-toggle-1 p,
		#div-to-toggle-2 p {
		font-size: 0.9375rem;
    	margin-bottom: -3%;
		height: webkit-fill-available;
}

		
		.container-mobile-menu {
   		display: grid;
   		line-height: 3;
   		text-align: center;		
   		font-weight: 600;
   		font-size: 1.25rem;
   		margin-top: 37%;
   		margin-left: 10%;
   		text-decoration: none;
   		}	
   		
   		a#close-text {
   			color: black;
   			text-decoration: none;
		}
}
	
@media screen and (max-width: 700px) {
.arrow-left {
	display: none;
	}

.arrow-left-mobile {
    filter: invert(1);	
	}

	.arrow-left-mobile, .arrow-left-mobile-2 {
    transform: rotate(90deg);
    width: 1rem;
    margin-right: 5%;
    display: inherit;
	}

.parallax-1, .parallax-2, .parallax-3, .parallax-4 {
	display: none;
	}
	
.parallax-1-mobile, .parallax-2-mobile, .parallax-3-mobile, .parallax-4-mobile {	
	display: inherit;
	width: 100%;
	}	

#what-we-do, #why-am-capital, #our-references {
	margin-top: 0;
	}
	
.item {
	padding: 1.2vw;
	width: 91%;
	height: 70vw;
	margin-left: -7%;
	margin-bottom: 7%;
	}

.references-web {
	left: 0;
	right: 0;
	position: absolute;
	text-align: center;
	position: inherit;
	margin-bottom: 9%;
	}
	
.items {
	margin-bottom: 8%;
	}
	
.btn {
	margin-left: 0;
	padding-left: 1.5%;
	padding-right: 1.5%;
	padding-top: 1%;
	padding-bottom: 1%;	
/*  	display: none;  */
	}
	  
#notfound {
	font-size: 0.875rem;
	margin-left: 0;
	left: 0;
	right: 0;
	text-align: center;
	position: absolute;	
/* 	display: none; */
}
	   	
.main {
		display: none;
	}		
		
.mobile-header {
		display: block;	
	}
   		
.column  {
	width: 80%;
}
		
/* ADD ITEM */	  	
	   		   	   	
/* ADD NOTFOUND */
	   	
	   	.logo-mobile {
	    width: 36%;
	    position: fixed;
	    top: 0;
	    margin-top: 4%;
	    left: 4%;
	    display: block;
/* 	    z-index: 99999 !important; */
	    }	    
	    
	    .logo-web {
		    display: none;
	    }
	    
	    .subtitle {
		    font-size: 2.125rem;
		    top: 23%;
	    }
	    
	    .subsubtitle {
		    font-size: 1.25rem;
		    top: 33%;
	    }
	    
	    .container {
		margin-left: 10%;
		margin-right: 10%;
		}
	    
	    .content-numbers, .content-numbers-2 {
		    display: inherit;
/* 		    width: auto; */
	    }
	    
	    .rectangle {
		    width: 11%;
		    height: 0.75vh;
	    }
	    
	    .content-numbers {
		    text-align: center;
		    top:40%;
		    width: 78%;
		    
	    }
	    
	    .content-numbers-2 {
		    top: 43%;
	    }
	    
	    .content-numbers-2 p {
		    font-size: 1.125rem;
	    }
	    
	    #plus {
		    font-size: 2.225rem;
/* 		    float: left; */
			position: absolute;
		    left: 0%;
		    right: 12.6vw;
		    text-align: center;
		    margin-left: 0;
			margin-right: 0;
			
	    }
	    
	    .value {
		    font-size: 2.225rem;
/* 		    margin-right: 7%; */
			height: 16vh;
	    }
	    
	    .value1, .value2, .value3 {
		    font-size: 1.125rem;
		    height: 13.8vh;
	    }
	    
	    #value-top, #value-middle {
		   	margin-right: 0;
/* 		    margin-left: 5%; */
			left: 3%;
			position: relative;
		}
	    
	    .scroll-fixed, .scroll-scroll {
		    margin-left: 89%;
		    font-size: 1.375rem;
		    top: 80%;
	    }
	    
	    p {
		    font-size: 0.875rem;
	    }
	    
	    h2 {
		    font-size: 1.375rem;
		    padding-top: 1%;
			padding-bottom: 1%;
	    }
	    
	    h3 {
		    font-size: 1.25rem;
	    }
	    
	    h6 {
			font-size: 1.125rem; 
	    }
	    
	    .mobile-reduce p {
		    line-height: 1.47;
	    }
	    
	    h1 {
		    font-size: 1rem;
		    font-weight: 600;
	    }
	    
	    #lightbox {
			margin-left: 0; 
			font-size: 1rem; 
			text-transform: uppercase; 
			margin-top: 25%;; 
			font-weight: 600;
	    }
	    
	    .partners {
		    display: block;
		    margin-top: 15%;
	    }
	    
	    #history, #title-founding-partners {
		    margin-left: -5%; 		    
	    }
	    
	    .founding-partners {
		    width: 60%;
		    margin-left: 20%;
		    margin-bottom: 10%;
		}
		
		#see-more-mobile {
			margin-bottom: 20%;
		}
		
		#name-founder {
			font-size: 1rem;
		}
	    
	    .our-sectors {
		    width: 125%;
		    margin-left: -12.5%;		    
/* 		    display: none; */
			margin-bottom: 0;
	    }
	    
	    #our-sectors-title {
		    margin-left: 6%;
	    }
	    
	    .rows-sectors {
		    margin-left: 10%;
	    }
	    .columns-sectors {
		    width: 40%;
		    height: 31vw;
	    }
	    
	    #our-sectors-margin {
		    margin-bottom: 15%;
	    }
	    
	    .rows-paragraph {
		    line-height: 1.3;
		}
	    
	    h9 {
		    font-size: 0.8125rem;
	    }
	    
	    .transactions {
		    padding-bottom: 0.75%;
	    }
	    
	    .transactions-sectors {
		    margin-left: 10%;
		    display: none;
	    }
	    
	    .parallax-4 {
		    margin-top: 0;
	    }	   
	   
		#div-to-toggle, #div-to-toggle-1 {
			top: 0;
			margin-left: -10%;
			height: -webkit-fill-available;
			padding: 10%;
			width: 80%;
			z-index: 9999 !important;
			overflow: scroll;
		}
				
		#see-more-1 {
			margin-bottom: 20%;
		}
		
		#see-more-2 { 
		border: none; 
		text-transform: uppercase; 
		font-weight: 600; 
		margin-top: 8.5%;
		right: 5%;
		width: 12%;
		height: 4vh;
		position: absolute;
		font-size: 0.875rem; 
		letter-spacing: 0.02rem;
		font-family: 'Montserrat';
		background-color: transparent;	
		text-decoration: none;
/* 	z-index: 99999 !important; */
		display: block;
		}
		
		.btn-container {
/* 			margin-left: 22%; */
			
		}
		
		img#toggle {
			width: 50vw;
		}		

	#toggle {
/* 		height: 4vh; */
/* 		width: 30%; */
	}
		
		.logo-mobile-2  {
	    width: 36%;
	    position: absolute;
	    top: 2.25%;
	    left: 4%;
	    display: block;
	    }
		
		.red-square {
			height: 0.438rem;
			width: 0.438rem;
			margin-bottom: 1%;
			margin-right: 2.5%;
		}
		
		.item-year {
/* 		margin-top: -13%; */
/* 		font-size: 1.125rem; */
		font-size: 1.2rem;
/* 		padding-top: 13%; */
		color: #242424;
		margin-left: 4%;
		top: 2.8%;
		position: relative;
		margin-left: 4%;	
		}
		
		.item-flags {
/* 			margin-top: -6.5%; */
/* 			margin-right: 3%; */
			margin-right: 4%;
			position: relative;
			top: 3.5%;
		}
		
		.item-flags img {
		    margin-left: 3%;
			width: 11.5%;
			height: 4.7vw;
		}
		
		.item-state {
			margin-top: 3%;
		}
		
/* ADD BTN	and referenc */			
		.arrow-down {
			margin-left: 1%;
		}
		
		#adress {
		font-size: 0.875rem; 
		margin-left: 10%; 
		font-family: 'MonMedium'; 
		position: relative; 
		top: 0; 
		margin-top: 0;	
		line-height: 1.5;
		}
		
		.iframe-google-maps iframe {
		margin-top: 0;
		width: 80vw !important;
		height: 28vh !important;	
		margin-bottom: 0;
		position: inherit;	
/* 		margin-left:  */
		}
		
		.iframe-google-maps {
			margin-top: 0;
			padding-top: 7.5%;
			padding-bottom: 6vh;
			height: auto;
			
		}
		iframe {
		margin-left: 10%; 			
		}
		
		.contacts-box {
			height: auto;
		}		
		
		.space-mobile {
			height: auto;
			display: inline-block;
			width: 100%;
			margin-top: 6%;		
			margin-left: 0;
		}
		
		.space-mobile-2 {
			position: relative;
			height: 46vh;
			width: 100%;
			padding-bottom: 12%;
			margin-left: 0;
			margin-top: 0;	
			left: 0;		
/* 			background-color: pink; */	
		}
	
		.contact-form {
		width: 83%;
		height: auto;
		margin-left: 10%;
		top: 0;
		margin-top: 0;
		} 
		
		#message {
		border: 2px solid black;
	    background-color: #FFCE00;
	    border-radius: 0px;
	    width: 91.5%;
	    margin-top: 0.75%; 
	    height: 22vh;
	    margin-bottom: 0;
	    font-family: 'Montserrat';
	    }
	    
	    #design-by {
	    color: white;
	    right: 0;
	    left: 0;
	    margin-left: 0;
	    margin-right: 0;
	    margin-top: 9.5%;
	    position: absolute;
	    text-align: center;
	    font-size: 0.875rem; 
	    }
	    
	    .page-bottom {
		    height: 11vh;
		    display: inherit;
		    position: relative;
	    }
	    
	    #web-rights {
		left: 0;
		right: 0;
/* 	    margin-left: 10%; */
	    font-size: 0.875rem;  
	    margin-top: 3.5%; 
	    margin-left: 0;
	    text-align: center;
	    position: absolute;
	    }
	    
	    #name, #email, #title {
		    font-size: 0.8125rem;
		    width: 65%;
	    }
	    
	    .rows-paragraph {
		    line-height: 1.5;
		    }
		    		    
		.column {
			width: 90%;
		}
		
		#contacts {
			margin-top: 0;
		}

button#send {
	position: absolute;
	left: 0;
	margin-left: 0;
}
		
#geoarea,
#op,
#sector {
    background-color: transparent;
    border-color: transparent;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 0.875rem;
    text-align: center;
    text-transform: uppercase;
    border: 2px solid black;
    padding: 0.3%;    
    width: 80%;
    margin-left: 10%;
    margin-bottom: 3%;

	}
	
select#op {
    width: 80%;
	}

select#sector {
    width: 80%;
	}

#op {
	margin-right: 0%;
	}

/*
#sector {
	}
*/

#geoarea {
	width: 80%;
	margin-left: 10%;
	margin-right: 0%;
	}
			
#send-us-a-message {
	margin-left: -6%;				
}
}

</style>
</head>

<body>

    <header>
        <div class="main">
            <a href="#"><img class="logo-web" src="/sources/png-logos/am-capital-logotype-négatif -500px.png"></a>
            <div class="header-menu">
                <a href="#" data-ref="home">HOME</a>
                <a href="#who-we-are" data-ref="who-we-are">WHO WE ARE</a>
                <a href="#what-we-do" data-ref="what-we-do">WHAT WE DO</a>
                <a href="#why-am-capital" data-ref="why-am-capital">WHY AM | CAPITAL</a>
                <a href="#our-references" data-ref="our-references">OUR REFERENCES</a>
                <a href="#contacts" data-ref="contacts">CONTACTS</a>
            </div>
        </div>

        <!-- MOBILE MENU -->

        <a href="#"><img class="logo-mobile" src="/sources/png-logos/am-capital-logotype-négatif -500px.png"></a>
        <button id="see-more-2"><img id="toggle" src="sources/icons/mobile-menu-icon.svg"></button>
        <div id="div-to-toggle-2" style="display: none">
	        <a href="#"><img class="logo-mobile-2" style="width: 33.5%; left: 12.5%; top: 2%;" src="/sources/png-logos/am-capital-logotype-positif-noir.svg"></a>
            <button id="close-btn"><img id="close-img-2" src="/sources/icons/am-capital-cross.svg"></button>
            <div class="container-mobile-menu">
                <a id="close-text" class="active" href="#">HOME</a>
                <a id="close-text" href="#who-we-are">WHO WE ARE</a>
                <a id="close-text" href="#what-we-do">WHAT WE DO</a>
                <a id="close-text" href="#why-am-capital">WHY AM | CAPITAL</a>
                <a id="close-text" href="#our-references">OUR REFERENCES</a>
                <a id="close-text" href="#contacts">CONTACTS</a>
            </div>
        </div>

    </header>

    <script>
    window.addEventListener('scroll', function() {
        let header = document.querySelector('header');
        let windowPosition = window.scrollY > 0;
        header.classList.toggle('scrolling-active', windowPosition);
    })
    
/*
        window.addEventListener('scroll', function() {
        let header = document.querySelector('header');
        let windowPosition = window.scrollX > 0;
        header.classList.toggle('scrolling-active-mobile', windowPosition);
    })
*/
    
    </script>

    <div class="main-page">
        <div class="parallax-1"></div>
		<img class="parallax-1-mobile"src="/sources/pictures/am-capital-home-mobile-2.jpg">
		
        <div class="subtitle" data-ref="home">AM | CAPITAL</div>
        <div class="subsubtitle animated-style">YOUR TRUSTED PARTNER</div>

        <!-- 	<div class="pluses">+</div> -->

        <div class="content-numbers">
            <div id="plus">+</div>
            <div class="value" id="value-top" akhi="60">0</div>
            <div id="plus">+</div>
            <div class="value" id="value-middle" akhi="50">0</div>
            <div class="value" akhi="30">0</div>
        </div>

        <div class="content-numbers-2">
            <div class="value1">
                <p>Transactions</p>
            </div>
            <div class="value2">
                <p>Accumulated years<br>of experience</p>
            </div>
            <div class="value3">
                <p>Covered African<br>Countries</p>
            </div>
        </div>
    </div>

<script>
    const counters = document.querySelectorAll('.value');
    const speed = 2000;

    counters.forEach(counter => {
        const animate = () => {
            const value = +counter.getAttribute('akhi');
            const data = +counter.innerText;

            const time = value / speed;
            if (data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 10);
            } else {
                counter.innerText = value;
            }
        }
        animate();
    });
</script>

    <div class="scrolling">
        <h4 class="scroll-fixed"><img class="arrow-left" src="sources/icons/am-capital-arrow-3.svg"><img class="arrow-left-mobile" src="sources/icons/arrow-mobile-1.svg">Scroll</h4>
        <h4 class="scroll-scroll"><img class="arrow-left" src="sources/icons/am-capital-arrow-4.svg"><img class="arrow-left-mobile-2" src="sources/icons/arrow-mobile-1.svg">Scroll</h4>
    </div>

    <div class="titles-box" data-ref="who-we-are">
        <h2 id="who-we-are" style="margin-top: 0">WHO WE ARE ?</h2>
    </div>

    <div class="container">

        <h3 id="title-who-we-are" style="margin-top: 12%">We are an independent investment banking boutique dedicated to
            Africa and Middle-east</h3>
        <p>Based in Paris, AM | Capital is a premium independent and management-owned corporate finance firm fully
            dedicated to Africa & Middle East advising its clients on mergers and acquisitions, financing and strategic
            considerations. We are fully aligned with the success of our client. With unique transaction experience we
            promote absolute independence and strong client commitment supported by high-end advisory and execution
            capabilities.</p>
        <h3 id="history">
            <div class="red-square"></div>History
        </h3>
        <p style="margin-top: -2%; margin-bottom: 10%;">Since its inception in 2006, AM | Capital has closed more than
            60 transactions in most African geographies and industries. Joël Krief and AbdelNor Chehlaoui, its two
            founding partners, have completed more than 250 transactions through their combined carriers.</p>
        <h3 id="title-founding-partners">
            <div class="red-square"></div>Founding Partners
        </h3>

        <div class="partners">
            <div class="founding-partners" style="margin-right: 12%">
                <img src="/sources/pictures/am-capital-joel-krief.jpg"
                    class="founder" style="width: 100%; height: auto; border-radius: 50%;">
                <p id="name-founder" style="text-align: center; font-weight: 500;">Joël Krief<br>Manager Partner</p>

                <div class="btn-container" id="see-more-mobile" style="text-align: center">
                    <button id="see-more">See more&nbsp;<div id="mas">+</div><img class="arrow-see-more" src="/sources/icons/am-capital-arrow-1.svg"></button>
                </div>
            </div>

            <div class="founding-partners">
                <img src="/sources/pictures/am-capital-AbdelNor-Chehlaoui.jpg"
                    class="founder" style="width: 100%; height: auto; border-radius: 50%;">
                <p id="name-founder" style="text-align: center; font-weight: 500;">AbdelNor Chehlaoui<br>Manager Partner</p>
                <div class="btn-container" style="text-align: center">
                    <button id="see-more-1">See more&nbsp;<div id="mas">+</div><img class="arrow-see-more" src="/sources/icons/am-capital-arrow-1.svg"></button>
                </div>
            </div>
            
        </div>

        <div id="div-to-toggle" style="display: none">
            <button id="close-btn"><img id="close-img" src="/sources/icons/am-capital-cross.svg"></button>
            <h1 id="lightbox">
	            <a href="#"><img class="logo-mobile-2" src="/sources/png-logos/am-capital-logotype-positif-noir.svg"></a>
                <div class="red-square" style="margin-bottom: 0%; "></div>Joël Krief is co-founder of AM | Capital
            </h1>
            <p>Joël has over <span style="font-weight: bold;"> 35 years of investment banking experience</span>,
                building and managing investment banking franchises and advising clients on a wide range of strategic
                merger, acquisition and financing solutions, including >20 years focused on Africa.<br><br>Previously,
                Joël served as Head of Middle East and Africa Corporate and Investment Banking within FORTIS Group
                (1998-2006), as a co-founder of the «Africa Merchant Bank» brand.<br><br>Before starting AMB, Joël had
                held several senior management positions at ING Barings, including Head of M & A & Privatization
                Advisory Emerging Markets. Before joining ING Barings in 1986, Joël had started as a financial analyst
                in Paribas Group.<br><br>Joël graduated from <span style="font-weight: bold;">HEC Paris</span> with an
                MBA in Finance. He is a Senior Independent Director of BGFIBANK DRC.<br><br><br><br><a href="mailto:jkr@amcapital.fr" style="font-weight: 500; text-decoration: underline; color: black;">JKR@AMCAPITAL.FR</a> | <a href="https://www.linkedin.com/in/joel-krief-87629613" style="font-weight: 500; text-decoration: underline; color: black;">LINKEDIN</a></p>
        </div>

        <div id="div-to-toggle-1" style="display: none">
            <button id="close-btn"><img id="close-img-1" src="/sources/icons/am-capital-cross.svg"></button>
            <h1 id="lightbox">
	            <a href="#"><img class="logo-mobile-2" src="/sources/png-logos/am-capital-logotype-positif-noir.svg"></a>
                <div class="red-square" style="margin-bottom: 0%; "></div>AbdelNor Chehlaoui</h1>
            <p>Abdel has over <span style="font-weight: bold;"> 35 years of investment banking experience</span>,
                building and managing investment banking franchises and advising clients on a wide range of strategic
                merger, acquisition and financing solutions, including >20 years focused on Africa.<br><br>Previously,
                Joël served as Head of Middle East and Africa Corporate and Investment Banking within FORTIS Group
                (1998-2006), as a co-founder of the «Africa Merchant Bank» brand.<br><br>Before starting AMB, Joël had
                held several senior management positions at ING Barings, including Head of M & A & Privatization
                Advisory Emerging Markets. Before joining ING Barings in 1986, Joël had started as a financial analyst
                in Paribas Group.<br><br>Joël graduated from <span style="font-weight: bold;">HEC Paris</span> with an
                MBA in Finance. He is a Senior Independent Director of BGFIBANK DRC.<br><br><br><br><a
                    href="mailto:jkr@amcapital.fr"
                    style="font-weight: 500; text-decoration: underline; color: black;">MAIL</a> | <a
                    href="https://www.linkedin.com/in/abdelnor-chehlaoui-0a792177/"
                    style="font-weight: 500; text-decoration: underline; color: black;">LINKEDIN</a></p>
        </div>
    </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $('#see-more, #div-to-toggle').click(function(e) {
        if ($(e.target).attr('id') != 'close-img') {
            $('#div-to-toggle').show();
            event.stopPropagation();
        }
    });
    
    $('body, #close-img').click(function() {
        $('#div-to-toggle').hide();
        event.stopPropagation();
    })

    $('#see-more-1, #div-to-toggle-1').click(function(e) {
        if ($(e.target).attr('id') != 'close-img-1') {
            $('#div-to-toggle-1').show();
            event.stopPropagation();
        }
    });
    
    $('body, #close-img-1').click(function() {
        $('#div-to-toggle-1').hide();
        event.stopPropagation();
    })

    $('#see-more-2, #div-to-toggle-2').click(function(e) {
        if ($(e.target).attr('id') != 'close-img-2, close-text') {
            $('#div-to-toggle-2').show();
            event.stopPropagation();
        }
        
    });
    $('body, #close-img-2, #close-text').click(function() {
        $('#div-to-toggle-2').hide();
        event.stopPropagation();
    })
    </script>

    <div class="parallax-2"></div>
	<img class="parallax-2-mobile"src="sources/pictures/am-capital-what-we-do-mobile-2.jpg">
	
    <div class="titles-box" data-ref="what-we-do">
        <h2 id="what-we-do">WHAT WE DO</h2>
    </div>

    <div class="container mobile-reduce">
        <h3 style="margin-top: 10%; margin-bottom: 2%;">Tailored advisory</h3>
        <p>AM | Capital provides highly valuable strategic financial advisory services in conducting cross border
            mergers
            and acquisitions, and corporate finance transactions such as private placement, equity and debt engineering.
        </p>

        <div class="row">
            <div class="column">
                <h6>MERGERS &<br> ACQUISITIONS</h6>
                <div class="rectangle"></div>
                <p class="rows-paragraph">AM | Capital advises on all aspects of M&A (buy-side / sell-side / merger). We
                    ensure a careful management of due diligence (whether on buy or sell side) and provide independent,
                    tailor-made and conflict-free approach. </p>
                <p class="transactions"><b><a
                            style="width: auto; text-decoration: none; color: #1F1F1F; font-weight: 600; display: inline-flex;"
                            href="#our-references" target="_self" onClick="setOp('Mergers & Acquisitions')">See our
                            transactions&nbsp;&nbsp;<img class="arrow-transactions"
                                src="/sources/icons/am-capital-arrow-1.svg"></a></b></p>
            </div>

            <div class="column">
                <h6>CORPORATE FINANCE & STRATEGIC ADVISORY</h6>
                <div class="rectangle"></div>
                <p class="rows-paragraph">We provide advisory to help companies to define their corporate strategy and
                    asset allocation. Our teams provide Fairness Opinions and Valuations with creativeness and a solid
                    expertise in structuring ad hoc corporate finance transactions also in the context of complex
                    shareholding governance issues and pre-IPO situations.</p>
                <p class="transactions"><b><a
                            style="width: auto; text-decoration: none; color: #1F1F1F; font-weight: 600; display: inline-flex;"
                            href="#our-references" target="_self"
                            onClick="setOp('Corporate Finance &')">See our
                            transactions&nbsp;&nbsp;<img class="arrow-transactions"
                                src="/sources/icons/am-capital-arrow-1.svg"></a></b></p>
            </div>

            <div class="column">
                <h6>FINANCING SOLUTIONS</h6>
                <div class="rectangle"></div>
                <p class="rows-paragraph">AM | Capital supports and advises companies for capital structuring, share
                    issues, borrowings and company rating. Our team has structured and financed 30+ projects using
                    bonds, private placements and structured finance instruments.</p>
                <p class="transactions"><b><a
                            style="width: auto; text-decoration: none; color: #1F1F1F; font-weight: 600; display: inline-flex;"
                            href="#our-references" target="_self" onClick="setOp('Financing Solutions')">See our
                            transactions&nbsp;&nbsp;<img class="arrow-transactions"
                                src="/sources/icons/am-capital-arrow-1.svg" style=""></a></b></p>
            </div>

            <div class="column">
                <h6>SOVEREIGN ADVISORY</h6>
                <div class="rectangle"></div>
                <p class="rows-paragraph">We provide sovereign entities with tailored and innovative guidance on
                    different aspects of public sector related financial issues. Our ambition is to assist sovereign
                    entities in optimizing their strategic and financial interests in relation to the private sector, in
                    particular in the context of private partnerships international companies.</p>
                <p class="transactions"><b><a
                            style="width: auto; text-decoration: none; color: #1F1F1F; font-weight: 600; display: inline-flex;"
                            href="#our-references" target="_self" onClick="setOp('Sovereign Advisory')">See our
                            transactions&nbsp;&nbsp;<img class="arrow-transactions"
                                src="/sources/icons/am-capital-arrow-1.svg" style=""></a></b></p>
            </div>
        </div>

        <div class="our-sectors">
            <h3 id="our-sectors-title">
                <div class="red-square"></div>Our sectors</h3>

            <div class="rows-sectors">

                <div class="columns-sectors">
                    <img src="/sources/icons/am-capital-icon-agroindustry.svg" style="width: 37%;">
                    <h9 style="margin-top: 6%;">Agroindustry</h9>
                </div>

                <div class="columns-sectors">
                    <img src="/sources/icons/am-capital-icon-financal-services.svg" style="width: 26%;">
                    <h9 style="margin-top: 4%;">Financial<br>services</h9>
                </div>

                <div class="columns-sectors">
                    <img src="/sources/icons/am-capital-icon-services.svg" style="margin-top: 16%;">
                    <h9 style="margin-top: 4%;">Services &<br>distribution</h9>
                </div>

                <div class="columns-sectors">
                    <img src="/sources/icons/am-capital-icon-tmt.svg">
                    <h9>TMT</h9>
                </div>

                <div class="columns-sectors">
                    <img src="/sources/icons/am-capital-icon-utilities.svg" style="width: 23%;">
                    <h9 style="margin-top: 1%;">Utilities &<br>infrasrtucture</h9>
                </div>

                <div class="columns-sectors">
                    <img src="/sources/icons/am-capital-icon-natural-resources.svg" style="margin-top: 10%;">
                    <h9 style="margin-top: 0;">Natural<br>resources</h9>
                </div>

                <div class="columns-sectors" id="our-sectors-margin">
                    <img src="/sources/icons/am-capital-icon-logistics.svg" style="width: 59%; margin-top: 12%;">
                    <h9 style="margin-top: 1%;">Logistics</h9>
                </div>

                <div class="columns-sectors">
                    <img src="/sources/icons/am-capital-icon-oil.svg" style="width: 29%; margin-right: 8%;">
                    <h9 style="margin-top: 9%;">Oils & gas</h9>
                </div>
            </div>
            <p class="transactions-sectors"><b><a
                        style="width: auto; text-decoration: none; color: #1F1F1F; font-weight: 600; display: inline-flex;"
                        href="#our-references" target="_self">See our transactions&nbsp;<img class="arrow-transactions"
                            src="/sources/icons/am-capital-arrow-1.svg" style=""></a></b></p>
        </div>
    </div>
    
        <div class="parallax-4"></div>
		<img class="parallax-4-mobile" src="/sources/pictures/am-capital-why-mobile-2.jpg">

    <!-- --SECTION WHY AM CAPITAL-- -->
    <div class="titles-box" data-ref="why-am-capital">
        <h2 id="why-am-capital">WHY AM | CAPITAL ?</h2>
    </div>

    <img id="arch" src="sources/icons/arch.svg">
    <img id="arch-mobile" src="sources/icons/am-capital-arch-mobile.svg">
    <img id="round-logo" src="sources/pictures/am-capital-logo-round.svg">

    <div class='row-why-1'>
        <div class='one'>
            <h7>1</h7>
            <p class="why-description">Confidentiality,<br>Independence &<br> Conflict-free</p>
        </div>
        <div class='two'>
            <h7>2</h7>
            <p class="why-description">+50 year<br>experience of deal<br>making in Africa</p>
        </div>
        <div class='three'>
            <h7>3</h7>
            <p class="why-description">Unique business<br>network in Africa</p>
        </div>
    </div>

    <div class='row-why-2'>
        <div class='four'>
            <h7>4</h7>
            <p class="why-description" style="">Challenging<br>transaction<br>specialists</p>
        </div>
        <div class='five'>
            <h7>5</h7>
            <p class="why-description">Multi-industry<br>expertise</p>
        </div>
        <div class='six'>
            <h7>6</h7>
            <p class="why-description">Make-it-happen<br>culture</p>
        </div>
    </div>

    <div class="parallax-3"></div>
    <img class="parallax-3-mobile" src="/sources/pictures/am-capital-our-references-mobile-2.jpg">

    <div class="titles-box" data-ref="our-references">
        <h2 id="our-references">OUR REFERENCES</h2>
    </div>
    <p id="sort-by">SORT BY :</p>


    <div class="section-dropdown">

        <div class="dropdown">
            <button class="dropbtn" id="drop_geoarea">Geographic Area<img class="triangle-down" src="sources/icons/red-triangle-down.svg">
            </button>
            <div class="dropdown-content">
                <a onClick="setArea('Geographic Area')">ALL AREAS</a>
                <a onClick="setArea('North Africa')">NORTH AFRICA</a>
                <a onClick="setArea('West Africa')">WEST AFRICA</a>
                <a onClick="setArea('East Africa')">EAST AFRICA</a>
                <a onClick="setArea('Central Africa')">CENTRAL AFRICA</a>
                <a onClick="setArea('Pan-Africa')">PAN-AFRICA</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn" id="drop_op">Operation<img class="triangle-down" src="sources/icons/red-triangle-down.svg"></button>
            <div class="dropdown-content">
                <a onClick="setOp('Operation')">ALL OPERATIONS</a>
                <a onClick="setOp('Mergers & Acquisitions')">Mergers & Acquisitions</a>
                <a onClick="setOp('Corporate Finance &')">Corporate Finance & Strategic Advisory</a>
                <a onClick="setOp('Financing Solutions')">Financing Solutions</a>
                <a onClick="setOp('Sovereign Advisory')">Sovereign Advisory</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn" id="drop_sector">Sector<img class="triangle-down" src="sources/icons/red-triangle-down.svg"></button>
            <div class="dropdown-content">
                <a onClick="setSector('Sector')">ALL SECTORS</a>
                <a onClick="setSector('Agroindustry')">Agroindustry</a>
                <a onClick="setSector('Financial Services')">Financial Services</a>
                <a onClick="setSector('Services & Distribution')">Services & Distribution</a>
                <a onClick="setSector('Logistics')">Logistics</a>
                <a onClick="setSector('TMT')">TMT</a>
                <a onClick="setSector('Utilities & Infrastructures')">Utilities & Infrastructures</a>
                <a onClick="setSector('Natural Resources')">Natural Resources</a>
                <a onClick="setSector('Oil & Gas')">Oil & Gas</a>
            </div>
        </div>
    </div>

<!--     OPCION CON SELECT  -->
<!--
		<select id="geoarea" onchange="setArea()">
			<option value="none">Geographical Area</option>
			<option value="North Africa">North Africa</option>
			<option value="West Africa">West Africa</option>
			<option value="East Africa">East Africa</option>
			<option value="Central Africa">Central Africa</option>
			<option value="Pan-Africa">Pan-Africa</option>
		</select>
	 
		<select id="op" onchange="setOp()">
			<option value="none">Operation</option>
			<option value="Mergers & Acquisitions">Mergers & Acquisitions</option>
			<option value="Corporate Finance & Strategic Advisory">Corporate Finance & Strategic Advisory</option>
			<option value="Financing Solutions">Financing Solutions</option>
			<option value="Sovereign Advisory">Sovereign Advisory</option>
		</select>
		
		<select id="sector" onchange="setSector()">
			<option value="none">Sector</option>
			<option value="Agroindustry">Agroindustry</option>
			<option value="Financial Services">Financial Services</option>
			<option value="Services & Distribution">Services & Distribution</option>
			<option value="Logistics">Logistics</option>
			<option value="TMT">TMT</option>
			<option value="Utilities & Infrastructures">Utilities & Infrastructures</option>
			<option value="Natural Resources">Natural Resources</option>
			<option value="Oil & Gas">Oil & Gas</option>
		</select>
-->
     
    <div id="items" class="items"></div>
 
     <div class="references-web"><a href="javascript:void(0)" id="btnid" class="btn" onclick="loadData()">Load more<img
                class="arrow-down" src="sources/icons/am-capital-arrow-3.svg"></a></div>
    <div><a id="notfound" class="text">No reference match the filters</a></div>

    <template id="template">
        <div class="item-year">{{year}}</div>
        <div class="item-flags">{{flags}}</div>
        <div class="item-logos">{{logos}}</div>
        <div class="item-state">{{state}}</div>
        <div class="item-operation">{{operation}}</div>
        <div class="border-text-on-hover">
            <div class="text-on-hover">{{description}}</div>
        </div>
    </template>
    </div>

    <div class="contacts-box" data-ref="contacts">
<!-- 	    <div class="contacts-height"> -->

	        <h2 id="contacts" style="padding-bottom: 0; margin-bottom: 0;">CONTACTS</h2>
	        		<div class="space-mobile">
	        <p id="adress">AM | Capital<br>5 Square de l’Opéra Louis Jouvet<br>75009 Paris | France<br><br>+33 (0) 1 40 98 08 27</p>
	        <div class="iframe-google-maps">
	            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2981785213638!2d2.32693981522888!3d48.87159200773177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3154b89131%3A0x73d5cd7e6203ab27!2s5%20Sq.%20de%20l&#39;Op%C3%A9ra-Louis%20Jouvet%2C%2075009%20Paris%2C%20France!5e0!3m2!1sen!2sar!4v1636478293138!5m2!1sen!2sar" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	        </div>
	    </div>

		<div class="space-mobile-2">

        	<div class="contact-form">

            <h10 id="send-us-a-message"><div class="red-square" style="margin-bottom: 0; height: 0.75rem; width: 0.75rem"></div>SEND US A MESSAGE</h10>
            <div class="send-message"></div>

            <form action="contact.php" method="post">
                <div class="elem-group">
                    <input type="text" id="name" name="visitor_name" placeholder="FULL NAME" pattern=[A-Z\sa-z]{3,20}
                        required>
                </div>
                <div class="elem-group">
                    <input type="email" id="email" name="visitor_email" placeholder="EMAIL" required>
                </div>
                <div class="elem-group">
                    <input type="text" id="title" name="email_title" required placeholder="SUBJECT">
                </div>
                <div class="elem-group">
                    <textarea id="message" name="visitor_message" required></textarea>
                </div>
                <button id="send" type="submit">SEND&nbsp;&nbsp;<img class="arrow-transactions" src="/sources/icons/am-capital-arrow-1.svg"></button>
            </form>
        	</div>
	</div>  
	      
	<!--         <div class="space-mobile"></div> -->
<!--     </div> -->
    <!--  </section>  -->
        <div class="page-bottom">
            <p id="web-rights">AM | Capital — All Rights Reserved 2021</p>
            <p id="design-by">Design by <a href="https://inthepool.fr" style="color: white;">In the Pool Studio</a></p>
        </div>
</body>


<script>
	
var timesLoadedMore = 0,
    paises, logos, aux1, aux2, limit, sector, op, geoarea, fs = 0,
    fo = 0,
    fg = 0,
    r = 1,
    squares=9;

function setArea(input) {
    //geoarea=document.getElementById('geoarea').value;
    document.getElementById('drop_geoarea').firstChild.data=input;
    geoarea = input;
    if (geoarea == "Geographic Area") fg = 0;
    else fg = 1;
    timesLoadedMore = 0;
    r = 1;
    k = 0;
    document.getElementById('items').innerHTML = "";
    loadData();
}

function setOp(input) {
    //op = document.getElementById('op').value;
    document.getElementById('drop_op').firstChild.data=input;
    op = input;
    if (op == "Operation") fo = 0;
    else fo = 1;
    timesLoadedMore = 0;
    r = 1;
    k = 0;
    document.getElementById('items').innerHTML = "";
    loadData();
}

function setSector(input) {
    //sector = document.getElementById('sector').value;
    document.getElementById('drop_sector').firstChild.data=input;
    sector = input;
    if (sector == "Sector") fs = 0;
    else fs = 1;
    timesLoadedMore = 0;
    r = 1;
    k = 0;
    document.getElementById('items').innerHTML = "";
    loadData();
}

function detectMob() {
    const toMatch = [
        /Android/i,
        /webOS/i,
        /iPhone/i,
        /iPad/i,
        /iPod/i,
        /BlackBerry/i,
        /Windows Phone/i
    ];
    
    return toMatch.some((toMatchItem) => {
        return navigator.userAgent.match(toMatchItem);
    });
}

loadData();

function loadData() {

    document.getElementById('btnid').setAttribute("style", "visibility:visible");
    document.getElementById('notfound').setAttribute("style", "visibility:hidden");

    var js_array = [["Year","Countries","Operation","State","Logos","Geographic Area","Op","Sectors","Description"],[2019,"ci;sn;fr","Acquisition","","vibe-radio;lagarde\u0300re","West Africa","Mergers & Acquisitions","TMT","Sole Financial Advisor to COSMOS for the acquisition of VIBE C\u00d4TE d'Ivoire and VIBE S\u00c9N\u00c9GAL from LAGARD\u00c8RE"],[2019,"us","Sale of a majority stake","","abacus;carlyle-group","East Africa","Mergers & Acquisitions","Services & Distribution","Sole Financial Advisor to ABACUS, the leading East Africa based Pharmaceutical Group, for the sale of a 65% equity stake to CARLYLE PRIVATE EQUITY"],[2018,"tn;it","Sale of a majority stake","","comete;rina-group","Central Africa","Mergers & Acquisitions","Services & Distribution","Sole Financial Advisor to COMETE Engineering for the sale of a controlling stake to RINA, the world leading Italian engineering group "],[2018,"ci;fr","Sale of a minority stake","","live-tv;sky;m6-group","West Africa","Mergers & Acquisitions","TMT","Sole Financial Advisor to SKY HOLDING for the sale of a 34% Equity Stake of LIFE TV to M6 GROUP \/ RTL Group"],[2018,"cd;ch","Capital restructuring","USD 5.6 bn","glencore;gecamines","Central Africa","Sovereign Advisory","Natural Resources","Financial Advisor to G\u00c9CAMINES for the Settlement Agreement entered into by GLENCORE for the resolution of the capital restructuring, including a debt-to-equity swap for\u00a0KATANGA MINING LTD"],[2017,"fr","Sale of a minority stake","","erys-group;guards","West Africa","Mergers & Acquisitions","Services & Distribution","Sole Financial Advisor to the African security GUARDS GROUP for the sale of a 49% Equity Stake to ERYS GROUP"],[2017,"ga;fr","Sale of a minority stake","\u20ac 85 m","necotrans;bollore;gecamines","Central Africa","Mergers & Acquisitions","Logistics","Sole Financial Advisor to NECOTRANS for the sale to BOLLORE of its 49% Equity Stake in the Gabon based port handling company STCG"],[2017,"cd;us;cn","Defense of interests","USD 2.6 bn","tenke-fungurume;gecamines;cmoc","Central Africa","Sovereign Advisory","Natural Resources","Sole Financial Advisor to G\u00c9CAMINES in the context of the sale of TENKE FUNGUREME MINING to CHINA MOLYBDENUM"],[2017,"fr;id","Sale of a minority stake","USD 895 m","maurel-prom-2;pertamina","Pan-Africa","Mergers & Acquisitions","Oil & Gas","Sole Financial Advisor to PACIFICO for the sale of its stake in MAUREL & PROM to the Indonesian national Oil&Gas company PERTAMINA"],[2016,"cd;kz","Sale of a minority stake","USD 200 m","metalkol;gecamines","Central Africa","Sovereign Advisory","Natural Resources","Sole Financial Advisor to GECAMINES for the sale to EURASIAN Resources of its 25% Equity Stake in the mining company METALKOL"],[2016,"fr;cd","Acquisition of a minority stake","USD 140 m","necotrans;mck-mining","Central Africa","Mergers & Acquisitions","Logistics","Sole Financial advisor to NECOTRANS for the acquisition of a majority stake in MCK, the leading contract mining company in DR Congo"],[2015,"ga","Sale of a minority stake","","cdc;siat-group","Central Africa","Sovereign Advisory","Natural Resources","Sole Financial advisor to CDC  Gabon for the sale of a minority stake in the listed company SIAT Gabon (palm-oil and rubber plantations) "],[2014,"ga;za;sg;us","Sale of a minority stake","","san-gel;oppenheimer;tana","Central Africa","Mergers & Acquisitions","Agroindustry","Sole financial advisor to SAN GROUP for the Private Placement and Acquisition by TANA (JV of Oppenheimer & Temasek Fund) of a 33,33% equity stake in SAN AFRICA, the leading distribution specialist of frozen products in West and Central Africa "],[2013,"fr","Joint venture settlement","\u20ac 1 bn (commitment)","cfao;carrefour","Central Africa","Corporate Finance &","Services & Distribution","Sole financial advisor to CFAO GROUP for its Equity Joint Venture with CARREFOUR for the development of retail distribution in West and Central Africa"],[2013,"ga","Acquisition of a minority stake","","cdc;pfm","Central Africa","Sovereign Advisory","Natural Resources","Financial advisor to CDC Gabon for a 35% stake acquisition in the company PLANTATIONS FORESTI\u00c8RES DE LA MVOUM"],["2012-2013","za;cn","Defense of interests","USD 1.2 bn","metorex;gecamines","Central Africa","Sovereign Advisory","Natural Resources","Defense of GECAMINES\u2019 strategic financial interests as a minority shareholder in the context of VALE and JINCHUAN\u2019s take-over on METOREX LTD."],[2013,"fr","Financial valuation and strategic advisory","","accor","Pan-Africa","Corporate Finance &","Services & Distribution","Strategic and financial advisor to ACCOR Group for the financial valuation of its African portfolio and a potential MBO structuring"],["2012-2013","za;cn;ca","Defense of interests","USD 1.1 bn","minmetals;gecamines","Central Africa","Sovereign Advisory","Natural Resources","Defense of GECAMINES\u2019 strategic financial interests as a minority shareholder in the context of the Take-over of MINMETALS on ANVIL Mining (listed in Johannesburg \/ Toronto)"],[2011,"fr;ca","Merger","USD 260 m","tuscany;caroil","Pan-Africa","Mergers & Acquisitions","Oil & Gas","Financial advisor to the French listed oil & gas company Maurel&Prom for the merger of its French oil & gas drilling subsidiary CAROIL with the listed company, TUSCANY INTERNATIONAL DRILLING"],[2011,"ga;fr","Fairness opinion","","accor","West Africa","Corporate Finance &","Services & Distribution","Financial advisor to ACCOR and to the board of its Guinean subsidiary SGHI for the execution of a Fairness Opinion on the evaluation of the hotel complex"],[2010,"ga;fr","Capital increase","\u20ac 435 m","gabon-government;comilog;eramet","Central Africa","Sovereign Advisory","Natural Resources","Strategic and financial advisor to the GOVERNMENT OF GABON for the increase of its share capital in COMILOG SA from 25% to 35%"],[2010,"ga;fr","Acquisition of a minority stake","","cdc-2;rougier","Central Africa","Mergers & Acquisitions","Natural Resources","Financial advisor to CDC Gabon for a 35% shareholding acquisition in ROUGIER AFRIQUE INTERNATIONAL (Gabon, Cameroun & Congo)"],[2010,"gb-eng;no","Merger","","ige;pangea-mines","Pan-Africa","Mergers & Acquisitions","Natural Resources","Financial advisor for the merger of IGE AB and PANGEA DIAMOND FIELDS, two mining companies listed respectively on the London and Oslo Stock Exchanges with assets in several African countries"],[2010,"cd;fr","Fairness opinion","","cfao;heineken","Central Africa","Corporate Finance &","Agroindustry","Financial advisor to CFAO GROUP for a fairness opinion on HEINEKEN\u2019s  Congo-based breweries company"],["2008-2010","se","Capital structuring","USD 240 m","pa-ressources","Pan-Africa","Financing Solutions","Oil & Gas","Financial advisor to the Sweden listed PA RESOURCES Group for its capital structuring (shares issue and convertible bonds)"],[2009,"us;ci;sn","Acquisition of a minority stake","","ecp;eranove","West Africa","Mergers & Acquisitions","Utilities & Infrastructures","Financial advisor to ECP for the purchase of BOUYGUES GROUP\u2019s majority stake in FINAGESTION, the French company holding utility companies (electricity, water) in Ivory Coast and Senegal"],[2009,"se;ke","Sale of a majority stake","","ige","East Africa","Corporate Finance &","Natural Resources","Financial advisor to the Swedish listed mining company IGE for the sale of a 50% equity stake in its Kenya gold exploration and production company: KILIMAPESA GOLD LTD."],[2009,"ma;fr;de","Acquisition","","optorg;al-mada","North Africa","Mergers & Acquisitions","Services & Distribution","Financial advisor to OPTORG \/ ONA Group for the acquisition of distribution rights of MERCEDES-BENZ \/ CHRYSLER in 13 sub-Saharan countries"],[2008,"it;ci","Sale of a majority stake","","bolton-group;scodi;saupiquet","West Africa","Mergers & Acquisitions","Agroindustry","Financial advisor to BOLTON GROUP for the sale of its subsidiary SCODI to OMKA in Ivory Coast"],[2008,"ci;ke","Fairness opinion","","ips","West Africa","Corporate Finance &","Agroindustry","Strategic advisor to AGA KHAN Group and Financial Advisor to IPS for a fairness opinion (cotton and sugar sectors)"],[2008,"fr","Corporative finance advisory","","maurel-prom-1","Pan-Africa","Corporate Finance &","Oil & Gas","Financial advisor to Mr. Jean-Fran\u00e7ois H\u00e9nin \/ AEROPAGE and to the company MAUREL&PROM for the allocation to Mr. H\u00e9nin of a shareholding up to c.25% in MAUREL&PROM in exchange of his renunciation to the status of \u201cGeneral Partner\u201c (\u201cAssoci\u00e9 Commandit\u00e9\")"],[2008,"us;fr;ci","Sale of a majority stake","","ecp;thunnus-overseas-group","West Africa","Corporate Finance &","Agroindustry","Financial advisor to THUNNUS OVERSEAS GROUP, French leading canned tuna producer with producing assets in Ivory Coast & Madagascar, for its capital structuring and funds raising from the PE funds ECP & KINGDOM ZEPHYR"],[2008,"us","Fairness opinion","","ips;filtisac","West Africa","Corporate Finance &","Agroindustry","Financial advisor to IPS \/ FILTISAC for a fairness opinion on COSMIVOIRE in the context of its sale to SIFCA"],[2008,"ci;us","Sale of a majority stake","","siph;ecp","West Africa","Mergers & Acquisitions","Natural Resources","Financial advisor to ECP for the sale of its shareholding in SIPH, a leading West African rubber plantation group listed on the NYSE-Euronext"],[2007,"ca","Sale of a minority stake","CAD 75 m","siph","Pan-Africa","Financing Solutions","Natural Resources","Financial advisor to PACIFICO MINING for the shares placement to US and Canadian Stock Exchange investors"],[2006,"ng;ci;fr","Sale of a minority stake","","michelin;siph","West Africa","Mergers & Acquisitions","Natural Resources","Financial advisor to the Euronext-listed company SIPH for the contribution of Michelin\u2019s rubber plantations in Nigeria to SIPH giving Michelin a 20% equiuty stake"],["Not completted","gh;fr","Advisor to CASTEL GROUP for the acquisition of FANMILK","","castel-group;fanmilk","West Africa","Mergers & Acquisitions","Agroindustry","Advisor to CASTEL GROUP for the acquisition of FANMILK"]]
    var dataset = new Array();
    
    if (detectMob()==true) {
    	squares=3;
    } else {
    	squares=9;
    }

    limit = squares + timesLoadedMore * squares;

    if (limit > js_array.length) {
        limit = js_array.length;
    }

    function fillDataset() {
        dataset[k] = {
            year: js_array[r][0],
            flags: js_array[r][1],
            operation: js_array[r][2],
            state: js_array[r][3],
            logos: js_array[r][4],
            geoarea: js_array[r][5],
            op: js_array[r][6],
            sector: js_array[r][7],
            description: js_array[r][8]
        };
    }

    for (k = timesLoadedMore * squares; k < limit && r < js_array.length; r++) {

        if ((fg == 0 && fo == 0 && fs == 0) ||
            (fg == 1 && fo == 0 && fs == 0 && js_array[r][5] == geoarea) ||
            (fg == 0 && fo == 1 && fs == 0 && js_array[r][6] == op) ||
            (fg == 0 && fo == 0 && fs == 1 && js_array[r][7] == sector) ||
            (fg == 1 && fo == 1 && fs == 0 && js_array[r][6] == op && js_array[r][5] == geoarea) ||
            (fg == 1 && fo == 0 && fs == 1 && js_array[r][7] == sector && js_array[r][5] == geoarea) ||
            (fg == 0 && fo == 1 && fs == 1 && js_array[r][6] == op && js_array[r][7] == sector) ||
            (fg == 1 && fo == 1 && fs == 1 && js_array[r][6] == op && js_array[r][7] == sector && js_array[r][5] ==
                geoarea)
        ) {
            fillDataset();
            k++;
        }
    }

    if (r == js_array.length) {
        document.getElementById('btnid').setAttribute("style", "visibility:hidden");
    }

    if (k == 0) {
        document.getElementById('notfound').setAttribute("style", "visibility:visible");
    }

    timesLoadedMore++;

    let template = document.getElementById('template');

    dataset.forEach(function(item) {

        let div = document.createElement('div');
        div.className = 'item';

        paises = item.flags.split(";");
        aux1 = "";
        for (j = 0; j < paises.length; j++) {
            aux1 += "<img src='/sources/flags/" + paises[j] + ".png'>";
        }

        aux2 = "";
        logos = item.logos.split(";");
        for (j = 0; j < logos.length; j++) {
            aux2 += "<img src='/logos/" + logos[j] + ".png'>";
        }

        div.innerHTML = template.innerHTML
            .replace('{{year}}', item.year)
            .replace('{{flags}}', aux1)
            .replace('{{operation}}', item.operation)
            .replace('{{state}}', item.state)
            .replace('{{logos}}', aux2)
            .replace('{{description}}', item.description);

        document.getElementById('items').appendChild(div);
    });
}


// =-=-=-=-=-=-=-=-=-=-=
// Intersection Observer for the header
// =-=-=-=-=-=-=-=-=-=-=
let updateSectionAndHeader = (entries, observer) => {
    entries.forEach(entry => {
        let title = entry.target;

        if (entry.isIntersecting) {
            // console.log(`${title.innerText} is in view`);
            // enter all changes to the section here
            // reset the previous section
            const allRectanglesAndSquares = document.querySelectorAll('div.red-square, div.rectangle');
            allRectanglesAndSquares.forEach(element => {
                element.classList.remove('active');
            })
            const allH2titles = document.querySelectorAll('h2');
            allH2titles.forEach(element => {
                element.classList.remove('active');
            })

            const sectionContainer = title.dataset.ref === 'contacts' ? title :
                title.nextElementSibling;
            const rectanglesAndSquares = sectionContainer.querySelectorAll('div.red-square, div.rectangle');
            rectanglesAndSquares.forEach(element => {
                element.classList.add('active');
            })

            if (title.children[0]) {
                title.children[0].classList.add('active');
            }
            // header changes
            const header = document.querySelector('.header-menu');
            const headerItems = Array.from(header.querySelectorAll('a'));
            headerItems.forEach(headerItem => {
                headerItem.classList.remove('active');
            })

            const sectionId = title.dataset.ref;
            const currentMenuItem = headerItems.filter(headerItem => {
                return headerItem.dataset.ref === sectionId
            });
            if (currentMenuItem) {
                currentMenuItem[0].classList.add('active')
            } else {
                header.children[0].classList.add('active');
            };

        }
    });
};

let titles = document.querySelectorAll('div.subtitle, div.titles-box, div.contacts-box');

let options = {
    root: null,
    rootMargin: "0px 0px -20% 0px",
    threshold: 0
};
let observer = new IntersectionObserver(updateSectionAndHeader, options);

titles.forEach(title => {
    observer.observe(title);
});
</script>

</html>
	