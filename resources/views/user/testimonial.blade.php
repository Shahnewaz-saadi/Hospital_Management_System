<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XYZ Hospital</title>

    <style>
        body {
  font-family: 'Roboto', sans-serif;
  color: #0c0c0c;
  background-color: #ffffff;
  overflow-x: hidden;
}

.layout_padding {
  padding: 90px 0;
}

.layout_padding2 {
  padding: 75px 0;
}

.layout_padding2-top {
  padding-top: 75px;
}

.layout_padding2-bottom {
  padding-bottom: 75px;
}

.layout_padding-top {
  padding-top: 90px;
}

.layout_padding-bottom {
  padding-bottom: 90px;
}

.heading_container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
}

.heading_container h2 {
  position: relative;
  font-weight: bold;
}

.heading_container h2 span {
  color: #04bd13;
}

.heading_container.heading_center {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
}

a,
a:hover,
a:focus {
  text-decoration: none;
}

a:hover,
a:focus {
  color: initial;
}

.btn,
.btn:focus {
  outline: none !important;
  -webkit-box-shadow: none;
  box-shadow: none;
}

/*header section*/
.hero_area {
  position: relative;
}

.sub_page .hero_area {
  height: auto;
}

.sub_page .header_section {
  margin-top: 5;
  
}

.header_section .header_top {
  padding: 10px 0;
}

.header_section .header_top .contact_nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.header_section .header_top .contact_nav a {
  margin-right: 25px;
  color: #555555;
}

.header_section .header_top .contact_nav a i {
  color: #00b20f;
}

.header_section .header_bottom {
  position: fixed;
  background-color: #ffffff;
  text-align: right;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
  z-index: 1;
  
}

.header_bottom {
  width: 100%;
  height: auto;
}

.header_section .header_bottom .container-fluid {
  padding-right: 20px;
  padding-left: 20px;
  
}

.navbar-brand {
  background-color: #ffffff;
  padding: 15px 35px;
  
}

.navbar-brand img {
  width: 55px;
}

.custom_nav-container {
  padding: 0;
  
}

.custom_nav-container .navbar-nav .nav-item .nav-link {
  padding: 3px 15px;
  margin: 10px 15px;
  color: #000;
  text-align: center;
  text-transform: uppercase;
}

.custom_nav-container .navbar-nav .nav-item {
  /* border:0px solid black; */
  background-color: #ffffff;
  margin-left: 5px;
  margin-right: 5px;
  height: 50px;
  border-radius: 15px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  
}

.custom_nav-container .navbar-nav 

:hover {
  cursor: pointer;
  background-color: #00b825; 
  
  
}

.custom_nav-container .navbar-nav .nav-item:hover .nav-link {
  color: #252525;
}

.custom_nav-container .nav_search-btn {
  width: 35px;
  height: 35px;
  padding: 0;
  border: none;
  color: #000000;
}

.custom_nav-container .nav_search-btn:hover {
  color: #009b12;
}

.custom_nav-container .navbar-toggler {
  outline: none;
}

.custom_nav-container .navbar-toggler {
  padding: 0;
  width: 37px;
  height: 42px;
  -webkit-transition: all .3s;
  transition: all .3s;
}

.custom_nav-container .navbar-toggler span {
  display: block;
  width: 35px;
  height: 4px;
  background-color: #ffffff;
  margin: 7px 0;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  position: relative;
  border-radius: 5px;
  -webkit-transition: all .3s;
  transition: all .3s;
}

.custom_nav-container .navbar-toggler span::before,
.custom_nav-container .navbar-toggler span::after {
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #ffffff;
  top: -10px;
  border-radius: 5px;
  -webkit-transition: all .3s;
  transition: all .3s;
}

.custom_nav-container .navbar-toggler span::after {
  top: 10px;
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] {
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span::before,
.custom_nav-container .navbar-toggler[aria-expanded="true"] span::after {
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
  top: 0;
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] .s-1 {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  margin: 0;
  margin-bottom: -4px;
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] .s-2 {
  display: none;
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] .s-3 {
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  margin: 0;
  margin-top: -4px;
}

.custom_nav-container .navbar-toggler[aria-expanded="false"] .s-1,
.custom_nav-container .navbar-toggler[aria-expanded="false"] .s-2,
.custom_nav-container .navbar-toggler[aria-expanded="false"] .s-3 {
  -webkit-transform: none;
  transform: none;
}

.quote_btn-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.quote_btn-container a {
  color: #000000;
  text-transform: uppercase;
  background-color: #00cb29;
  padding: 15px;
  margin-left: 5px;
  margin-right: 5px;
  height: 50px;
  border-radius: 15px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  
}

.quote_btn-container a span .nav-item {
  height: 50px;
  border-radius: 15px;
}

.quote_btn-container a:hover {
  padding: 15px;
  border-radius: 15px;
  background-color: rgba(0, 205, 215, 0.918);
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}

/*end header section*/
/* slider section */
.slider_section {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.1);
  padding-top: 45px;
  padding-bottom: 75px;
}

.slider_section .dot_design {
  position: absolute;
  width: 450px;
  right: 0;
  bottom: 0;
  -webkit-transform: translateY(50%);
  transform: translateY(50%);
  z-index: 1;
}

.slider_section .dot_design img {
  width: 100%;
}

.slider_section .row {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.slider_section #customCarousel1 {
  width: 100%;
  position: unset;
}

.slider_section .play_btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  border-radius: 100%;
  width: 65px;
  height: 65px;
  position: relative;
  z-index: 0;
  margin-top: 15px;
  margin-bottom: 45px;
}

.slider_section .play_btn button {
  background-color: #00c61a;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  border-radius: 100%;
  width: 100%;
  height: 100%;
  border: none;
  position: relative;
  z-index: 5;
  color: #ffffff;
  outline: none;
}

.slider_section .play_btn::before {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  background-color: #040404;
  opacity: 1;
  border-radius: 100%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.slider_section .play_btn::before {
  z-index: 2;
  -webkit-animation: before-animation 1500ms infinite;
  animation: before-animation 1500ms infinite;
}

@-webkit-keyframes before-animation {
  0% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1;
  }

  100% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.4);
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.4);
    opacity: 0;
  }
}

@keyframes before-animation {
  0% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1;
  }

  100% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.4);
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.4);
    opacity: 0;
  }
}

.slider_section .detail-box {
  color: #252525;
}

.slider_section .detail-box h1 {
  font-size: 3rem;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 25px;
}

.slider_section .detail-box h1 span {
  color: #00c607;
}

.slider_section .detail-box p {
  color: #4f4f4f;
}

.slider_section .detail-box a {
  display: inline-block;
  padding: 10px 45px;
  background-color: #009b05;
  color: #ffffff;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  border-radius: 5px;
  margin-top: 15px;
}

.slider_section .detail-box a:hover {
  background-color: #0c0c0c;
}

.slider_section .img-box img {
  width: 100%;
}

.slider_section .carousel_btn-box {
  position: absolute;
  bottom: 0;
  right: 10%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  width: 110px;
  height: 50px;
  -webkit-transform: translateY(50%);
  transform: translateY(50%);
  z-index: 3;
}

.slider_section .carousel_btn-box .carousel-control-prev,
.slider_section .carousel_btn-box .carousel-control-next {
  position: unset;
  width: 50px;
  height: 50px;
  background-color: #00c607;
  opacity: 1;
}

.slider_section .carousel_btn-box .carousel-control-prev img,
.slider_section .carousel_btn-box .carousel-control-next img {
  width: 10px;
}

.slider_section .carousel_btn-box .carousel-control-prev:hover,
.slider_section .carousel_btn-box .carousel-control-next:hover {
  background-color: #252525;
}

/* end of slider */
/* Book section start */
.book_section h4 {
  position: relative;
  padding-bottom: 5px;
  margin-bottom: 35px;
}

.book_section h4 span {
  color: #00c607;
}

.book_section h4::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 75px;
  height: 2px;
  background-color: #00c607;
}

.book_section form {
  padding: 35px 45px;
  -webkit-box-shadow: 0 0 15px 10px rgba(0, 0, 0, 0.07);
  box-shadow: 0 0 15px 10px rgba(0, 0, 0, 0.07);
}

.book_section form label {
  color: #000000;
}

.book_section form .form-control {
  width: 100%;
  background-color: transparent;
  border: 1px solid #00c607;
  height: 45px;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 5px;
  padding: 0 15px;
}

.book_section form .form-control::-webkit-input-placeholder {
  color: #00c607;
}

.book_section form .form-control:-ms-input-placeholder {
  color: #00c607;
}

.book_section form .form-control::-ms-input-placeholder {
  color: #00c607;
}

.book_section form .form-control::placeholder {
  color: #00c607;
}

.book_section form #inputDate {
  color: #00c607;
}

.book_section form #inputDate input {
  color: #00c607;
}

.book_section form button.btn {
  background-color: #009d05;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  color: #ffffff;
  padding: 10px 45px;
  border-radius: 5px;
  margin-top: 10px;
  text-transform: uppercase;
}
.book_section form button.btn:hover {
  background-color: #000;
  
}


.book_section .date_icon {
  right: 10px;
  height: 100%;
  position: absolute;
  background-color: transparent;
  border: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  color: #00c6a9;
}

.book_section .nice-select:after {
  content: "\f107";
  font-family: FontAwesome;
  border: none;
  width: auto;
  height: auto;
  -webkit-transform: none;
  transform: none;
  top: 7px;
  font-size: 20px;
  font-weight: bold;
  -webkit-transition: all .3s;
  transition: all .3s;
}

.book_section .nice-select.open:after {
  content: "\f106";
}

.about_section .row {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.about_section .img-box img {
  max-width: 100%;
}

.about_section .detail-box p {
  color: #616161;
  margin-top: 15px;
}

.about_section .detail-box a {
  display: inline-block;
  padding: 10px 45px;
  background-color: #009305;
  color: #ffffff;
  border-radius: 5px;
  margin-top: 15px;
}

.about_section .detail-box a:hover {
  background-color: #0c0c0c;
}
/* Treatment section start */
.treatment_section {
  position: relative;
}

.treatment_section .side_img {
  position: absolute;
  right: 15px;
  width: 175px;
  height: auto;
  bottom: 125px;
}

.treatment_section .side_img img {
  width: 100%;
}

.treatment_section .heading_container h2 {
  text-transform: none;
}

.treatment_section .box {
  margin-top: 45px;
}

.treatment_section .box .img-box {
  width: 65px;
}

.treatment_section .box .img-box img {
  width: 100%;
}

.treatment_section .box .detail-box {
  margin-top: 15px;
}

.treatment_section .box .detail-box h4 {
  font-weight: bold;
}

.treatment_section .box .detail-box a {
  text-transform: uppercase;
  color: #00c707;
}

.treatment_section .box .detail-box a:hover {
  color: #252525;
}

.team_section {
  background-color: #33ff00b3;
}

.team_section .heading_container {
  margin-bottom: 45px;
}

.team_section .heading_container h2 {
  color: #000000;
  text-transform: uppercase;
  margin: 0;
}

.team_section .heading_container h2 span {
  color: #ffffff;
}

.team_section .box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-align: center;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  padding: 0 10px;
  background: -webkit -gradient(linear, left top, left bottom, color-stop(10%, transparent), color-stop(10%, #ffffff));
  background: linear-gradient(to bottom, transparent 10%, #ffffff 10%);
}

.team_section .box .img-box img {
  width: 100%;
}

.team_section .box .detail-box {
  padding: 15px;
  border-radius: 10px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.team_section .box .detail-box h5 {
  font-weight: bold;
}

.team_section .box .detail-box h6 {
  color: #00c624;
}

.team_section .box .detail-box .social_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.team_section .box .detail-box .social_box a {
  width: 30px;
  height: 30px;
  border-radius: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  font-size: 18px;
  margin: 0 2.5px;
  color: #000000;
}

.team_section .team_carousel {
  margin-top: 45px;
  padding: 0 45px;
}

.team_section .team_carousel .owl-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  margin-top: 20px;
}

.team_section .team_carousel .owl-nav button {
  position: absolute;
  top: 50%;
  width: 50px;
  height: 50px;
  background-color: #ffffff;
  outline: none;
  color: #000000;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  font-size: 28px;
  font-weight: bold;
}

.team_section .team_carousel .owl-nav button:hover {
  background-color: #252525;
  color: #ffffff;
}

.team_section .team_carousel .owl-nav button.owl-prev {
  left: -25px;
}

.team_section .team_carousel .owl-nav button.owl-next {
  right: -25px;
} 

.client_section .heading_container {
  margin-bottom: 35px;
}

.client_section .heading_container h2 {
  text-transform: uppercase;
  margin: 0;
}

.client_section .box {
  margin: 15px 45px;
  -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
  padding: 25px;
}

.client_section .box .client_info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.client_section .box .client_info .client_name h5 {
  font-weight: 600;
  color: #00c62e;
}

.client_section .box .client_info .client_name h6 {
  margin-bottom: 0;
  color: #bfc0c0;
  font-weight: normal;
  font-size: 15px;
}

.client_section .box .client_info i {
  font-size: 24px;
}

.client_section .box p {
  margin-top: 15px;
}

.client_section .carousel-control-prev,
.client_section .carousel-control-next {
  width: 45px;
  height: 125px;
  background-color: #00c60d;
  opacity: 1;
  font-size: 28px;
  font-weight: bold;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

.client_section .carousel-control-prev {
  left: 0;
}

.client_section .carousel-control-next {
  right: 0;
} 

.contact_section {
  position: relative;
}

.contact_section .heading_container {
  margin-bottom: 25px;
}

.contact_section .heading_container h2 {
  text-transform: uppercase;
}

.contact_section .form_container {
  margin-right: 45px;
}

.contact_section .form_container input {
  width: 100%;
  border: 1px solid #00c61e;
  height: 50px;
  margin-bottom: 25px;
  padding-left: 15px;
  background-color: transparent;
  outline: none;
  color: #101010;
}

.contact_section .form_container input::-webkit-input-placeholder {
  color: #00c607;
}

.contact_section .form_container input:-ms-input-placeholder {
  color: #00c607;
}

.contact_section .form_container input::-ms-input-placeholder {
  color: #00c607;
}

.contact_section .form_container input::placeholder {
  color: #003b02;
}

.contact_section .form_container input.message-box {
  height: 120px;
}

.contact_section .form_container button {
  border: none;
  text-transform: uppercase;
  display: inline-block;
  padding: 15px 65px;
  background-color: #009726;
  color: #ffffff;
  border-radius: 0;
  font-weight: bold;
  border-radius: 10px;
  
}

.contact_section .form_container button:hover {
  background-color: #000000;
}

.contact_section .img-box img {
  width: 100%;
}

.info_section {
  background-color: #33ff00b3;
  color: #000000;
}

.info_section .info_top {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.info_section .info_top .info_logo {
  margin-right: 45px;
}

.info_section .info_top .info_logo a {
  display: block;
  background-color: transparent;
  padding: 20px 35px;
}

.info_section .info_top .info_logo a img {
  width: 55px;
}

.info_section .info_form {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  margin-top: 15px;
}

.info_section .info_form form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
  -ms-flex-align: end;
  align-items: flex-end;
}

.info_section .info_form form input {
  background-color: transparent;
  padding: 5px 0;
  outline: none;
  width: 100%;
  min-width: 100%;
  color: #0008ff;
  border: none;
  border-bottom: 1px solid #0062ff;
}

.info_section .info_form form input::-webkit-input-placeholder {
  color: #0044ff;
}

.info_section .info_form form input:-ms-input-placeholder {
  color: #3300ff;
}

.info_section .info_form form input::-ms-input-placeholder {
  color: #1100ff;
}

.info_section .info_form form input::placeholder {
  color: #0000ff;
}

.info_section .info_form form button {
  background-color: transparent;
  color: rgb(64, 0, 255);
  margin-top: 15px;
  text-transform: uppercase;
  font-size: 15px;
  outline: none;
  border: none;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}

.info_section h5 {
  text-transform: uppercase;
  position: relative;
  padding-left: 20px;
  margin-bottom: 25px;
}

.info_section h5:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 0;
  width: 15px;
  height: 15px;
  background-color: #2600ff;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

.info_section .info_links .info_links_menu {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}

.info_section .info_links .info_links_menu a {
  color: #000000;
}

.info_section .info_links .info_links_menu a:not(:nth-last-child(1)) {
  margin-bottom: 10px;
}

.info_section .info_links .info_links_menu a:hover,
.info_section .info_links .info_links_menu a.active {
  color: #001aff;
}

.info_section .info_post .post_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.info_section .info_post .post_box .img-box {
  width: 65px;
  min-width: 65px;
  height: 65px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  background-color: #fefefe;
  margin-right: 10px;
}

.info_section .info_post .post_box .img-box img {
  width: 55px;
}

.info_section .info_post .post_box p {
  margin: 0;
}

.info_section .info_post .post_box:not(:nth-last-child(1)) {
  margin-bottom: 15px;
}

.info_section .info_contact a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  color: #0008ff;
  margin-bottom: 10px;
}

.info_section .info_contact a i {
  margin-right: 5px;
  width: 25px;
}

.info_section .info_contact a:hover p {
  color: rgb(0, 21, 255);
}

.info_section .social_box {
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 25px;
}

.info_section .social_box a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  color: #000000;
  font-size: 24px;
  margin-right: 10px;
}

/* footer section*/
/* .footer_section {
  position: relative;
  background-color: #252525;
  text-align: center;
}
.footer_section p {
  color: #000000;
  padding: 25px 0;
  margin: 0;
}

.footer_section p a {
  color: inherit;
} */

/*# sourceMappingURL=style.css.map */
    </style>
</head>
<body>
    
<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>Testimonial</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Morijorch
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Rochak
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Brad Johns
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->


</body>
</html>

