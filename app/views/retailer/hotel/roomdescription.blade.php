@extends('layouts.retailer')
@section('content')
<style>

.photo-gallery .flex-direction-nav, .image-carousel.style2 .flex-direction-nav {
  position: absolute;
  right: 0;
  top: -40px;
  width: 72px;
  height: 22px; }
  .photo-gallery .flex-direction-nav li a, .image-carousel.style2 .flex-direction-nav li a {
    width: 30px;
    height: 22px;
    background: #db8df6;
    color: #fff;
    text-indent: -9999px;
    text-align: left;
    position: static;
    float: left;
    margin: 0;
    filter: alpha(opacity=100) !important;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)" !important;
    -moz-opacity: 1 !important;
    -khtml-opacity: 1 !important;
    opacity: 1 !important;
    -moz-transition: none 1s ease-in-out;
    -o-transition: none 1s ease-in-out;
    -webkit-transition: none 1s ease-in-out;
    -ms-transition: none 1s ease-in-out;
    transition: none 1s ease-in-out; }
    .photo-gallery .flex-direction-nav li a:before, .image-carousel.style2 .flex-direction-nav li a:before {
      position: absolute;
      display: block;
      font-family: FontAwesome;
      text-indent: 0;
      font-size: 12px;
      line-height: 22px; }
    .photo-gallery .flex-direction-nav li a.flex-prev, .image-carousel.style2 .flex-direction-nav li a.flex-prev {
      margin-right: 10px; }
      .photo-gallery .flex-direction-nav li a.flex-prev:before, .image-carousel.style2 .flex-direction-nav li a.flex-prev:before {
        content: "\f177";
        left: 8px; }
    .photo-gallery .flex-direction-nav li a.flex-next:before, .image-carousel.style2 .flex-direction-nav li a.flex-next:before {
      content: "\f178";
      right: 9px; }
    .photo-gallery .flex-direction-nav li a.flex-disabled, .image-carousel.style2 .flex-direction-nav li a.flex-disabled {
      background: #d9d9d9; }

.travelo-box > .image-carousel.style2 .flex-direction-nav {
  top: -60px; }

.photo-gallery {
  background: #fff;
  box-shadow: none;
  border: none;
  margin: 0;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  -ms-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0; }
  .photo-gallery img {
    width: 100%; }
  .photo-gallery .slides > li {
    display: none;
    overflow: hidden;
    position: relative; }
  .photo-gallery .flex-control-nav {
    width: auto;
    position: absolute;
    right: 30px;
    bottom: 30px; }
    .photo-gallery .flex-control-nav > li {
      float: left;
      margin-left: 5px;
      margin-right: 0; }
      .photo-gallery .flex-control-nav > li a {
        background: none;
        display: block;
        width: 14px;
        height: 14px;
        -webkit-border-radius: 50% 50% 50% 50%;
        -moz-border-radius: 50% 50% 50% 50%;
        -ms-border-radius: 50% 50% 50% 50%;
        border-radius: 50% 50% 50% 50%;
        border: 1px solid #fff;
        text-indent: -9999px;
        cursor: pointer;
        background: rgba(255, 255, 255, 0);
        box-shadow: none; }
        .photo-gallery .flex-control-nav > li a.flex-active {
          background: #f5a77d;
          border-color: #f5a77d; }
  .photo-gallery.style1 .flex-control-nav {
    display: none; }
  .photo-gallery.style1 .flex-direction-nav {
    display: none; }
  .photo-gallery.style3 .flex-control-nav {
    display: none; }
  .photo-gallery.style3 .flex-direction-nav {
    right: 10px;
    bottom: 10px;
    top: auto; }
  .photo-gallery.style4 .flex-control-nav {
    right: 25px;
    bottom: 25px;
    top: auto; }
  .photo-gallery.style4 .flex-direction-nav {
    display: none; }

.image-carousel {
  position: relative;
  box-shadow: none;
  border: none;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  -ms-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
  background: none; }
  .image-carousel .slides > li {
    display: none; }
  .image-carousel img {
    max-width: 100%; }
  .image-carousel.style1 {
    padding: 10px 45px;
    background: #fff; }
    .image-carousel.style1 .slides > li {
      margin-right: 10px;
      height: 70px;
      cursor: pointer;
      overflow: hidden; }
      .image-carousel.style1 .slides > li:last-child {
        margin-right: 0; }
      .image-carousel.style1 .slides > li img {
        height: 100%;
        width: auto;
        max-width: none;
        filter: alpha(opacity=50);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
        -moz-opacity: 0.5;
        -khtml-opacity: 0.5;
        opacity: 0.5;
        -moz-transition: opacity 0.3s ease-in;
        -o-transition: opacity 0.3s ease-in;
        -webkit-transition: opacity 0.3s ease-in;
        -ms-transition: opacity 0.3s ease-in;
        transition: opacity 0.3s ease-in; }
      .image-carousel.style1 .slides > li.flex-active-slide img, .image-carousel.style1 .slides > li:hover img {
        filter: alpha(opacity=100);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        -moz-opacity: 1;
        -khtml-opacity: 1;
        opacity: 1; }
    .image-carousel.style1 .flex-control-nav {
      display: none; }
    .image-carousel.style1 .flex-direction-nav {
      position: static;
      width: 0;
      height: 0; }
      .image-carousel.style1 .flex-direction-nav li a {
        background: rgba(219, 141, 246, 0.7);
        float: none;
        width: 25px;
        height: auto;
        position: absolute;
        top: 10px;
        bottom: 10px;
        margin: 0;
        filter: alpha(opacity=100) !important;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)" !important;
        -moz-opacity: 1 !important;
        -khtml-opacity: 1 !important;
        opacity: 1 !important;
        text-indent: -9999px;
        text-align: left;
        color: #fff;
        -moz-transition: background 0.2s ease-in;
        -o-transition: background 0.2s ease-in;
        -webkit-transition: background 0.2s ease-in;
        -ms-transition: background 0.2s ease-in;
        transition: background 0.2s ease-in; }
        .image-carousel.style1 .flex-direction-nav li a:hover {
          background: #db8df6; }
        .image-carousel.style1 .flex-direction-nav li a:before {
          display: block;
          position: absolute;
          left: 9px;
          top: 50%;
          margin-top: -6px;
          text-indent: 0;
          font-family: FontAwesome;
          font-size: 12px;
          line-height: 1;
          text-shadow: none; }
        .image-carousel.style1 .flex-direction-nav li a.flex-prev {
          left: 10px; }
          .image-carousel.style1 .flex-direction-nav li a.flex-prev:before {
            content: "\f053"; }
        .image-carousel.style1 .flex-direction-nav li a.flex-next {
          right: 10px; }
          .image-carousel.style1 .flex-direction-nav li a.flex-next:before {
            content: "\f054"; }
        .image-carousel.style1 .flex-direction-nav li a.flex-disabled {
          background: #f5f5f5;
          color: #9e9e9e; }
  .image-carousel.style2 .slides > li {
    margin-right: 30px; }
    .image-carousel.style2 .slides > li:last-child {
      margin-right: 0; }
    .image-carousel.style2 .slides > li .hover-effect {
      z-index: 0; }
      .image-carousel.style2 .slides > li .hover-effect img {
        position: relative; }
      .image-carousel.style2 .slides > li .hover-effect .caption {
        filter: alpha(opacity=0);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        -moz-opacity: 0;
        -khtml-opacity: 0;
        opacity: 0;
        position: absolute;
        bottom: 0;
        left: 0;
        height: 33px;
        line-height: 33px;
        overflow: hidden;
        padding: 0;
        text-align: center;
        right: 0;
        z-index: 3;
        margin: 0;
        background: #2d3e52;
        color: #fff;
        font-size: 1.1667em;
        -webkit-transform: translate3d(0, 100%, 0);
        -moz-transform: translate3d(0, 100%, 0);
        -ms-transform: translate3d(0, 100%, 0);
        -o-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        -moz-transition: -moz-transform 0.35s;
        -o-transition: -o-transform 0.35s;
        -webkit-transition: -webkit-transform 0.35s;
        -ms-transition: -ms-transform 0.35s;
        transition: transform 0.35s; }
      .image-carousel.style2 .slides > li .hover-effect:hover .caption {
        filter: alpha(opacity=100);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        -moz-opacity: 1;
        -khtml-opacity: 1;
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0); }
      .image-carousel.style2 .slides > li .hover-effect:hover:after {
        /*margin-top: -20px;*/ }
  .image-carousel.style2 .flex-control-nav {
    display: none; }
  .image-carousel.style2.row-2 li > a:first-child {
    margin-bottom: 30px; }
  .image-carousel.style3 {
    margin-bottom: 30px; }
    .image-carousel.style3 .slides {
      margin-bottom: 0; }
      .image-carousel.style3 .slides > li {
        margin-right: 30px; }
        .image-carousel.style3 .slides > li:last-child {
          margin-right: 0; }
        .image-carousel.style3 .slides > li .box {
          margin-bottom: 0; }
    .image-carousel.style3 .flex-control-nav {
      display: none; }
    .image-carousel.style3 .flex-direction-nav {
      position: static;
      width: 0;
      height: 0; }
      .image-carousel.style3 .flex-direction-nav li a {
        width: 40px;
        height: 40px;
        border: 2px solid;
        -webkit-border-radius: 50% 50% 50% 50%;
        -moz-border-radius: 50% 50% 50% 50%;
        -ms-border-radius: 50% 50% 50% 50%;
        border-radius: 50% 50% 50% 50%;
        position: absolute;
        top: 50%;
        margin-top: -20px;
        background: none;
        color: #d9d9d9;
        filter: alpha(opacity=100);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        -moz-opacity: 1;
        -khtml-opacity: 1;
        opacity: 1;
        text-shadow: none;
        text-align: left !important;
        text-indent: -9999px; }
        .image-carousel.style3 .flex-direction-nav li a:before {
          position: absolute;
          display: block;
          top: 0;
          left: 0;
          right: 0;
          text-align: center;
          line-height: 36px;
          font-family: "soap-icons";
          text-indent: 0;
          font-size: 24px; }
        .image-carousel.style3 .flex-direction-nav li a.flex-prev {
          left: -80px; }
          .image-carousel.style3 .flex-direction-nav li a.flex-prev:before {
            content: "\e87b"; }
        .image-carousel.style3 .flex-direction-nav li a.flex-next {
          right: -80px; }
          .image-carousel.style3 .flex-direction-nav li a.flex-next:before {
            content: "\e887"; }
        .image-carousel.style3 .flex-direction-nav li a:hover {
          color: #fff; }
        .image-carousel.style3 .flex-direction-nav li a.flex-disabled {
          color: #838383; }

/* 2.12. Image Style ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
.image-style {
  padding: 0;
  position: relative;
  background: #fff;
  padding: 30px 0 30px 30px; }
  .image-style.large-font {
    font-size: 1.2307em; }
  .image-style.style1 {
    margin-right: 60px; }
    .image-style.style1 .image-block {
      margin-right: 25px; }
    .image-style.style1 .title {
      font-size: 1.875em;
      margin-bottom: 30px; }
    .image-style.style1 ul li {
      margin: 0 10px 10px 0;
      width: 80px;
      height: 80px; }
      .image-style.style1 ul li a {
        overflow: hidden;
        display: block; }
        .image-style.style1 ul li a img {
          max-width: none;
          height: 100%; }
    .image-style.style1:before {
      display: block;
      content: "";
      width: 60px;
      background-color: #fff;
      position: absolute;
      right: -60px;
      bottom: 60px;
      top: 0; }
    .image-style.style1:after {
      display: block;
      content: "";
      position: absolute;
      right: -60px;
      bottom: 0;
      border-top: 60px solid #d9d9d9;
      border-right: 60px solid transparent; }
  .image-style.style2 p {
    line-height: 1.5em; }
  .image-style.style2 .title {
    font-size: 1.25em;
    color: #db8df6;
    margin-top: 20px; }
  .image-style.style2 .image-block {
    padding-left: 50px;
    position: relative;
    min-height: 200px; }
    .image-style.style2 .image-block li {
      position: absolute;
      -webkit-border-radius: 50% 50% 50% 50%;
      -moz-border-radius: 50% 50% 50% 50%;
      -ms-border-radius: 50% 50% 50% 50%;
      border-radius: 50% 50% 50% 50%;
      padding: 5px;
      background: #fff;
      border: 1px solid #bfbfbf; }
      .image-style.style2 .image-block li a {
        display: block;
        -webkit-border-radius: 50% 50% 50% 50%;
        -moz-border-radius: 50% 50% 50% 50%;
        -ms-border-radius: 50% 50% 50% 50%;
        border-radius: 50% 50% 50% 50%;
        overflow: hidden;
        -webkit-transform: translateZ(0);
        -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
        -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC); }
        .image-style.style2 .image-block li a img {
          height: 100%;
          max-width: none; }

/* 2.13. Image Box Styles ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
.image-box .box, .image-box.box {
  text-align: left;
  /*background: #fff;*/
  margin-bottom: 30px; }
  .image-box .box img, .image-box.box img {
    width: 100%;
    height: auto; }
  .image-box .box > .details, .image-box.box > .details {
    padding: 12px 15px; }
    .image-box .box > .details > *:last-child, .image-box.box > .details > *:last-child {
      margin-bottom: 0; }
  .image-box .box .box-title, .image-box.box .box-title {
    margin-bottom: 10px;
    color: #2d3e52; }
.image-box.style1 .box-title, .image-box.style10 .box-title {
  margin-bottom: 0; }
.image-box.style7 .opacity-wrapper, .image-box.style8 .opacity-wrapper, .image-box.style12 .opacity-wrapper {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  background: #fdb714;
  filter: alpha(opacity=60);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
  -moz-opacity: 0.6;
  -khtml-opacity: 0.6;
  opacity: 0.6;
  width: 100%;
  height: 100%; }
.image-box.style2 figure {
  float: left;
  width: 250px; }
.image-box.style2 .details {
  padding: 20px 20px 10px 270px; }
  .image-box.style2 .details p {
    margin-bottom: 20px; }
.image-box.style2 .box:after, .image-box.style2.box:after {
  content: "";
  display: table;
  clear: both; }
.image-box.style3 .details {
  padding: 15px; }
  .image-box.style3 .details .box-title {
    margin-bottom: 0; }
  .image-box.style3 .details .offers-content {
    font-size: 0.8333em;
    text-transform: uppercase;
    margin-bottom: 0; }
  .image-box.style3 .details .description {
    border-top: 1px solid #f5f5f5;
    padding-top: 10px; }
.image-box.style4 .details .box-title {
  float: left;
  margin: 0; }
.image-box.style4 .details .goto-detail {
  float: right;
  color: #98ce44;
  font-weight: bold;
  font-size: 16px; }
.image-box.style4 .details:after {
  content: "";
  display: table;
  clear: both; }
.image-box.style5 .box, .image-box.style5.box, .image-box.style11 .box, .image-box.style11.box {
  position: relative; }
.image-box.style5 figure, .image-box.style11 figure {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  z-index: 0; }
  .image-box.style5 figure figcaption, .image-box.style11 figure figcaption {
    position: absolute;
    z-index: 3;
    left: 0;
    top: 10px;
    padding: 5px 20px 5px 20px;
    min-width: 130px;
    background: #2d3e52;
    -moz-transition: -moz-transform 0.35s;
    -o-transition: -o-transform 0.35s;
    -webkit-transition: -webkit-transform 0.35s;
    -ms-transition: -ms-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: translate3d(-100%, 0, 0);
    -moz-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    -o-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0); }
    .image-box.style5 figure figcaption .caption-title, .image-box.style11 figure figcaption .caption-title {
      margin: 0;
      color: #fff;
      line-height: 1.1em; }
    .image-box.style5 figure figcaption span, .image-box.style11 figure figcaption span {
      color: #fdb714;
      text-transform: uppercase;
      font-size: 0.8333em;
      letter-spacing: 0.04em; }
  .image-box.style5 figure:hover figcaption, .image-box.style11 figure:hover figcaption {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  .image-box.style5 figure:hover a:before, .image-box.style11 figure:hover a:before {
    filter: alpha(opacity=100);
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    -moz-opacity: 1;
    -khtml-opacity: 1;
    opacity: 1; }
  .image-box.style5 figure img, .image-box.style11 figure img {
    -webkit-backface-visibility: hidden; }
  .image-box.style5 figure a, .image-box.style11 figure a {
    display: block; }
  .image-box.style5 figure a:before, .image-box.style11 figure a:before {
    position: absolute;
    z-index: 2;
    display: block;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    right: 0;
    bottom: 0;
    height: 100%;
    background: rgba(245, 167, 125, 0.3);
    filter: alpha(opacity=0);
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    -moz-opacity: 0;
    -khtml-opacity: 0;
    opacity: 0;
    -moz-transition: all 0.4s ease-out;
    -o-transition: all 0.4s ease-out;
    -webkit-transition: all 0.4s ease-out;
    -ms-transition: all 0.4s ease-out;
    transition: all 0.4s ease-out; }
.image-box.style5 .details, .image-box.style11 .details {
  padding: 0; }
  .image-box.style5 .details .detail, .image-box.style11 .details .detail {
    margin: 0;
    border-top: 1px solid #f5f5f5;
    padding: 10px 20px; }
    .image-box.style5 .details .detail:first-child, .image-box.style11 .details .detail:first-child {
      border: none; }
    .image-box.style5 .details .detail .box-title, .image-box.style11 .details .detail .box-title {
      line-height: 40px;
      margin: 0; }
    .image-box.style5 .details .detail:after, .image-box.style11 .details .detail:after {
      display: table;
      content: "";
      clear: both; }
.image-box.style6 figure, .image-box.style14 figure {
  padding: 0; }
.image-box.style6 .details, .image-box.style14 .details {
  margin-bottom: 0 !important;
  padding: 20px 30px;
  line-height: 1.7em; }
.image-box.style6 .box:after, .image-box.style6.box:after, .image-box.style14 .box:after, .image-box.style14.box:after {
  display: table;
  content: "";
  clear: both; }
.image-box.style7 .box, .image-box.style7.box {
  background: #fff;
  margin-bottom: 30px; }
  .image-box.style7 .box figure, .image-box.style7.box figure {
    height: 72px; }
  .image-box.style7 .box .details, .image-box.style7.box .details {
    padding: 20px 20px 25px;
    font-size: 1.0833em; }
    .image-box.style7 .box .details p, .image-box.style7.box .details p {
      margin: 0; }
.image-box.style8 .box {
  background: none; }
.image-box.style8 figure {
  width: 25%;
  float: left;
  position: relative;
  overflow: hidden; }
  .image-box.style8 figure img {
    height: 100%;
    width: auto;
    max-width: none; }
.image-box.style8 .details {
  width: 75%;
  float: left;
  padding: 20px;
  background: #fff; }
.image-box.style8 .box:after, .image-box.style8.box:after {
  display: table;
  content: "";
  clear: both; }
.image-box.style9 figure a {
  position: relative;
  /*height: 160px; overflow: hidden;*/
  display: block;
  width: 100%; }
.image-box.style9 figure img {
  width: 100%;
  height: auto; }
.image-box.style9 .box-title {
  margin: 0; }
.image-box.style9 .button {
  margin-top: 20px; }
.image-box.style9 .details {
  background: #fff;
  padding: 15px;
  text-align: center; }
.image-box.style9 .description {
  margin-top: 20px; }
.image-box.style10 .details a.button {
  margin-top: 5px;
  float: right; }
.image-box.style11 .box > .details {
  padding: 15px; }
.image-box.style12 .box, .image-box.style12.box {
  display: table; }
.image-box.style12 figure, .image-box.style12 .details, .image-box.style12 .action {
  display: table-cell;
  vertical-align: top; }
.image-box.style12 figure {
  margin-right: 30px;
  max-width: 30%; }
  .image-box.style12 figure a {
    position: relative;
    display: inline-block;
    height: 100%; }
  .image-box.style12 figure img {
    width: auto;
    max-width: 150px; }
.image-box.style12 .details {
  border-right: 1px solid #f5f5f5;
  padding: 12px 20px 10px 25px;
  width: 100%; }
  .image-box.style12 .details > *:last-child {
    margin-bottom: 0; }
.image-box.style12 .action {
  padding: 15px; }
  .image-box.style12 .action .price {
    text-align: center;
    float: none;
    margin: 0 0 10px 0; }
  .image-box.style12 .action button, .image-box.style12 .action a.button {
    padding: 0 10px; }
.image-box.style12 .image-wrapper {
  position: relative;
  overflow: hidden;
  display: block; }
.image-box.style13 figure {
  float: left;
  margin-right: 15px; }
.image-box.style13 .details {
  padding: 0 15px; }
.image-box.style13 .action {
  float: right; }
  .image-box.style13 .action .button {
    padding: 0 10px; }
.image-box.style13 .price {
  float: none; }
.image-box.style13 .box, .image-box.style13.box {
  margin-bottom: 0; }
  .image-box.style13 .box:after, .image-box.style13.box:after {
    display: table;
    content: "";
    clear: both; }
.image-box.style14 figure {
  float: left;
  width: 63px; }
.image-box.style14 .details {
  margin-left: 63px;
  padding: 15px 15px 0; }
.image-box.style14 .price {
  float: none;
  text-align: left;
  display: inline;
  font-size: 1.4em; }
.image-box.style14 .box-title {
  margin-bottom: 0; }
  .image-box.style14 .box-title small {
    line-height: 1em; }
.image-box.style7 .opacity-wrapper, .image-box.style8 .opacity-wrapper, .image-box.style12 .opacity-wrapper {
  cursor: pointer;
  -moz-transition: opacity 0.3s ease-out;
  -o-transition: opacity 0.3s ease-out;
  -webkit-transition: opacity 0.3s ease-out;
  -ms-transition: opacity 0.3s ease-out;
  transition: opacity 0.3s ease-out; }
.image-box.style7 figure, .image-box.style8 figure, .image-box.style12 figure {
  overflow: hidden;
  z-index: 0; }
  .image-box.style7 figure img, .image-box.style8 figure img, .image-box.style12 figure img {
    -moz-transition: -moz-transform 0.35s;
    -o-transition: -o-transform 0.35s;
    -webkit-transition: -webkit-transform 0.35s;
    -ms-transition: -ms-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
    /*-webkit-backface-visibility: hidden;*/ }
.image-box.style7 figure:hover img, .image-box.style8 figure:hover img, .image-box.style12 figure:hover img {
  -webkit-transform: scale(1.07, 1.07);
  -moz-transform: scale(1.07, 1.07);
  -ms-transform: scale(1.07, 1.07);
  -o-transform: scale(1.07, 1.07);
  transform: scale(1.07, 1.07); }
.image-box.style7 figure:hover .opacity-wrapper, .image-box.style8 figure:hover .opacity-wrapper, .image-box.style12 figure:hover .opacity-wrapper {
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -moz-opacity: 0;
  -khtml-opacity: 0;
  opacity: 0; }

.sidebar .image-box.style14 {
  margin-bottom: 0; }
  .sidebar .image-box.style14 .box {
    padding-bottom: 15px;
    border-bottom: 1px solid #f5f5f5;
    margin-bottom: 15px; }
    .sidebar .image-box.style14 .box:last-child {
      border: none;
      margin-bottom: 0;
      padding-bottom: 0; }
	  .tab-wrapper {
  background: #fff; }
  .tab-wrapper .tab-container .tab-content .tab-pane {
    padding-left: 0;
    padding-right: 0; }


.tab-pane [class^="col-"], .tab-pane [class*=" col-"] {
  padding-left: 10px;
  padding-right: 10px; }
.tab-pane .row {
  margin-top: 0;
  margin-left: -10px;
  margin-right: -10px; }

.tab-container {
  /* 2.9.1. Style 1 */
  /* 2.9.2. Transparent Tab */
  /* 2.9.3. Full Width Tab */ }
  .tab-container ul.tabs {
    margin: 0;
    padding: 0; }
    .tab-container ul.tabs li {
      float: left;
      padding-right: 4px; }
      .tab-container ul.tabs li:last-child {
        padding-right: 0; }
      .tab-container ul.tabs li a {
        color: #fff;
        display: block;
        padding: 0 20px;
        background: #d9d9d9;
        font-size: 1em;
        font-weight: bold;
        height: 40px;
        line-height: 40px;
        text-decoration: none;
        text-transform: uppercase;
        white-space: nowrap; }
      .tab-container ul.tabs li.active > a, .tab-container ul.tabs li:hover > a {
        color: #db8df6;
        background: #fff; }
    .tab-container ul.tabs.full-width {
      display: block;
      /*margin-bottom: -4px;*/ }
      .tab-container ul.tabs.full-width li {
        float: none;
        display: table-cell;
        vertical-align: middle;
        width: 1%; }
        .tab-container ul.tabs.full-width li a {
          padding: 0;
          text-align: center; }
    .tab-container ul.tabs:after {
      display: table;
      content: "";
      clear: both; }
  
    .tab-container .tab-content .tab-pane {
      padding: 20px;
      line-height: 1.7em;
color:white;	  }
      .tab-container .tab-content .tab-pane .row {
        margin-bottom: 15px;
                     /*border-top: 1px solid #f5f5f5; padding: 20px 0;
&:first-child { border: none; padding-top: 0; }
&:last-child { padding-bottom: 0; }*/ }
      .tab-container .tab-content .tab-pane > img {
        margin: 0 15px 0 0; }
      .tab-container .tab-content .tab-pane:after {
        content: "";
        display: table;
        clear: both; }
      .tab-container .tab-content .tab-pane .image-box .details {
        padding-right: 0; }
  .tab-container.style1 ul.tabs {
    display: block;
    background: #fff;
    padding: 10px 0 10px 10px;
    border-bottom: 1px solid #f5f5f5; }
    .tab-container.style1 ul.tabs li {
      padding-right: 10px; }
      .tab-container.style1 ul.tabs li a {
        height: 30px;
        line-height: 30px;
        background: #f5f5f5;
        padding: 0 18px;
        color: #9e9e9e;
        font-weight: normal;
        font-size: 0.9167em;
        font-weight: bold; }
      .tab-container.style1 ul.tabs li.active > a, .tab-container.style1 ul.tabs li:hover > a {
        color: #fff;
        background: #db8df6;
        position: relative; }
        .tab-container.style1 ul.tabs li.active > a:after, .tab-container.style1 ul.tabs li:hover > a:after {
          position: absolute;
          bottom: -5px;
          left: 50%;
          margin-left: -10px;
          border-top: 5px solid #db8df6;
          border-left: 7px solid transparent;
          border-right: 7px solid transparent;
          content: ""; }
      .tab-container.style1 ul.tabs li:hover > a:after {
        display: none; }
      .tab-container.style1 ul.tabs li.active:hover > a:after {
        display: block; }
    .tab-container.style1 ul.tabs.full-width li a {
      padding: 0; }
  .tab-container.trans-style {
    position: relative;
    z-index: 1;
    margin-top: -40px; }
    .tab-container.trans-style ul.tabs {
      padding: 0 10px; }
      .tab-container.trans-style ul.tabs li a {
        filter: alpha(opacity=55.0);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=55.0)";
        -moz-opacity: 0.55;
        -khtml-opacity: 0.55;
        opacity: 0.55;
        background: #fff;
        color: #000;
        overflow: hidden; }
        .tab-container.trans-style ul.tabs li a i {
          font-size: 16px;
          vertical-align: middle;
          margin-right: 10px; }
          .tab-container.trans-style ul.tabs li a i[class^="soap-icon"] {
            font-size: 20px; }
      .tab-container.trans-style ul.tabs li a:hover {
        filter: alpha(opacity=80);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
        -moz-opacity: 0.8;
        -khtml-opacity: 0.8;
        opacity: 0.8;
        color: #db8df6; }
        .tab-container.trans-style ul.tabs li a:hover i {
          -webkit-animation: toTopFromBottom 0.3s forwards;
          -moz-animation: toTopFromBottom 0.3s forwards;
          animation: toTopFromBottom 0.3s forwards; }
      .tab-container.trans-style ul.tabs li.active a {
        filter: alpha(opacity=100);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        -moz-opacity: 1;
        -khtml-opacity: 1;
        opacity: 1;
        color: #db8df6; }
      .tab-container.trans-style ul.tabs li a:hover i, .tab-container.trans-style ul.tabs li.active a i {
        color: #f5a77d; }
  .tab-container.full-width-style ul.tabs {
    width: 14%;
    float: left; }
    .tab-container.full-width-style ul.tabs:after {
      display: none;
      clear: none; }
    .tab-container.full-width-style ul.tabs li {
      float: none;
      margin: 0;
      padding-right: 0; }
      .tab-container.full-width-style ul.tabs li a {
        height: 100px;
        display: block;
        border-bottom: 3px solid #f5f5f5;
        border-right: 3px solid #f5f5f5;
        background: #fff;
        color: inherit;
        font-size: 1.1667em;
        text-transform: none;
        font-weight: normal;
        text-align: center;
        padding-top: 20px;
        line-height: 2em; }
        .tab-container.full-width-style ul.tabs li a > i {
          color: #d9d9d9;
          display: block;
          font-size: 18px;
          margin: 0 auto;
          width: 1.6em;
          height: 1.6em;
          line-height: 1.5em;
          overflow: hidden; }
        .tab-container.full-width-style ul.tabs li a:hover i:before {
          -webkit-animation: toTopFromBottom 0.3s forwards;
          -moz-animation: toTopFromBottom 0.3s forwards;
          animation: toTopFromBottom 0.3s forwards; }
      .tab-container.full-width-style ul.tabs li.active a, .tab-container.full-width-style ul.tabs li a:hover {
        color: #2d3e52; }
      .tab-container.full-width-style ul.tabs li a:hover i, .tab-container.full-width-style ul.tabs li.active a i {
        color: #fdb714;
        border-color: #fdb714; }
      .tab-container.full-width-style ul.tabs li:last-child.active a {
        border-bottom: none; }
      .tab-container.full-width-style ul.tabs li.active a {
        border-right-color: transparent; }
  .tab-container.full-width-style.arrow-left ul.tabs li {
    margin-bottom: 4px; }
    .tab-container.full-width-style.arrow-left ul.tabs li a {
      border: none;
      margin-right: 4px; }
    .tab-container.full-width-style.arrow-left ul.tabs li.active a {
      margin-right: 0;
      border-left: 2px solid #fdb714;
      position: relative; }
      .tab-container.full-width-style.arrow-left ul.tabs li.active a:after {
        display: block;
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        margin-top: -5px;
        border-left: 3px solid #fdb714;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent; }
  .tab-container.full-width-style.arrow-left .tab-content .tab-pane {
    padding: 30px; }
  .tab-container.full-width-style .tab-content {
    float: left;
    width: 86%; }
    .tab-container.full-width-style .tab-content .tab-content-title {
      color: #db8df6; }
  .tab-container.full-width-style:after {
    display: table;
    content: "";
    clear: both; }
</style>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo url('assets/admin'); ?>/css/flexslider.css"  type="text/css" media="screen">
  <script type="text/javascript" src="<?php echo url('assets/admin'); ?>/js/jquery.flexslider.js"></script> 
<script>
  $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: $(".custom-controls-container"),
                customDirectionNav: $(".custom-navigation a")
              });
            });
</script>

  <div class="form-group" style="display:none;">
  <label class="col-sm-3 control-label">Fullscreen Textarea</label>
  <div class="col-sm-6">
    <textarea class="form-control fullscreen"></textarea>
  </div>
</div>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-md-9">
                        <div class="tab-container style1" id="hotel-main-content">
                            <ul class="tabs">
                                <li class="active"><a data-toggle="tab" href="#photos-tab">photos</a></li>
                             </ul>
					       <div class="tab-content">	

								<div class="flexslider">
								  <ul class="slides">
								  <?php /*echo "<pre>";print_r($roominfo); exit;*/foreach($hotelinfo as $information)
										{if($information->HotelDetails->Images){foreach($information->HotelDetails->Images as $image) {?>
                                           
									<li>
									  <img src="{{$image}}" />
									</li>
									<?php  } }} ?> 
								  </ul>
								</div>
								<div class="custom-navigation">
								  <a href="#" class="flex-prev" style="  position: relative;  text-decoration: none;  top: -48px;">Prev</a>
								  <div class="custom-controls-container"></div>
								  <a href="#" class="flex-next" style="  float: right;   text-decoration: none; position: relative;  top: -70px;">Next</a>
								</div>
						   
					      <!--div id="photos-tab" class="tab-pane fade in active">
                                    <div class="photo-gallery style1" data-animation="slide" data-sync="#photos-tab .image-carousel">
                                        <ul class="slides">
										<?php foreach($hotelinfo as $information)
										{if($information->HotelDetails->Images){foreach($information->HotelDetails->Images as $image) {?>
                                            <li><img src="{{$image}}" alt="" /></li>
                                           <?php  } }} ?> 
                                        </ul>
                                    </div>
                                    <div class="image-carousel style1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photos-tab .photo-gallery">
                                        <ul class="slides">
                                            <?php foreach($hotelinfo as $information)
										{if($information->HotelDetails->Images){foreach($information->HotelDetails->Images as $image) {?>
                                            <li><img src="{{$image}}" alt="" /></li>
                                           <?php  } }}?> 
                                        </ul>
                                    </div>
                                </div-->
                        </div>
                        </div>
						
                        
                        <div id="hotel-features" class="tab-container">
                            <ul class="tabs">
                                <li class="active"><a href="#hotel-description" data-toggle="tab">Description</a></li>
                                <li><a href="#hotel-availability" data-toggle="tab">Availability</a></li>
                                <li><a href="#hotel-amenities" data-toggle="tab">Amenities</a></li>
                                <li><a href="#hotel-things-todo" data-toggle="tab">Address</a></li>
                                </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="hotel-description">
                                    
                                    
                                    <div class="long-description">
                                        <h2>About {{$information->HotelDetails->HotelName}}</h2>
                                        <p>
                                            {{htmlspecialchars_decode($information->HotelDetails->Description)}}</p>
                                    </div>
									</div>
                                
                                <div class="tab-pane fade" id="hotel-availability">
                                    <h2>Available Rooms</h2>
                                    <div class="room-list listing-style3 hotel">
									
									<?php $count= count($roominfo->GetHotelRoomResult->HotelRoomsDetails);
									
									if($roominfo->GetHotelRoomResult->HotelRoomsDetails){for($i=0;$i<count($roominfo->GetHotelRoomResult->HotelRoomsDetails);$i++){if($roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->InfoSource=="FixedCombination"){if($i==0){
									?>
									<form action="{{url('retailer/hotel/blockroom')}}" method="get">
									<input type="hidden" name="ResultIndex" value="{{$input['resultindex']}}">
									<input type="hidden" name="HotelCode" value="{{$input['hotelcode']}}">
									<input type="hidden" name="traceid" value="{{$input['traceid']}}">
									<input type="hidden" name="noadult" value="{{$input['noadult']}}">
									<input type="hidden" name="nochild" value="{{$input['nochild']}}">
									<input type="hidden" name="age" value="{{$input['age']}}">
									<input type="hidden" name="HotelName" value="{{$information->HotelDetails->HotelName}}">
									<input type="hidden" name="noofrooms" value="{{$input['noofrooms']}}">
									<input type="hidden" name="CheckInDate" value="{{$input['CheckInDate']}}">
									<input type="hidden" name="CheckOutDate" value="{{$input['CheckOutDate']}}">
									<input type="hidden" name="guestnationality" value="{{$input['guestnationality']}}">
                                    <input type="hidden" name="CountryCode" value="{{$input['countrycode']}}">
                                                
									<article class="box">
                                            
                                            <div class="details col-xs-12 col-sm-8 col-md-9">
                                                <div>
                                                    <div>
													<input type="hidden" name="RoomIndex[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomIndex}}">
                                                    <input type="hidden" name="RoomTypeCode[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeCode}}">
                                                    <input type="hidden" name="RoomTypeName[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeName}}">
                                                    <input type="hidden" name="RatePlanCode[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RatePlanCode}}">
                                                   
                                                        <div class="box-title">
                                                            <h4 class="title">{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeName}}</h4>
                                                            
                                                        </div>
														<input type="hidden" name="CurrencyCode" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->CurrencyCode}}">
														
														<input type="hidden" name="RoomPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->RoomPrice}}">
														<input type="hidden" name="Tax[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->Tax}}">
														<input type="hidden" name="ExtraGuestCharge[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ExtraGuestCharge}}">
														<input type="hidden" name="ChildCharge[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ChildCharge}}">
														<input type="hidden" name="OtherCharges[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OtherCharges}}">
														<input type="hidden" name="Discount[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->Discount}}">
														<input type="hidden" name="PublishedPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->PublishedPrice}}">
														<input type="hidden" name="PublishedPriceRoundedOff[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->PublishedPriceRoundedOff}}">
														<input type="hidden" name="OfferedPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OfferedPrice}}">
														<input type="hidden" name="OfferedPriceRoundedOff[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OfferedPriceRoundedOff}}">
														<input type="hidden" name="AgentCommission[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->AgentCommission}}">
														<input type="hidden" name="AgentMarkUp[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->AgentMarkUp}}">
														<input type="hidden" name="ServiceTax[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ServiceTax}}">
														<input type="hidden" name="TDS[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->TDS}}">
														
                                                       <div class="amenities">
													   <label>amenities</label>
														<?php if($roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Amenities){foreach($roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Amenities as $amenties){?>
                                                            <i class="soap-icon-wifi circle">{{$amenties}}</i>
                                                            <?php }} ?>
														</div>
                                                    </div>
                                                    <div class="price-section">
                                                        <span class="price"><small>PER DAY-</small>{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->DayRates[0]->Amount}}</span>
                                                    </div>
													<div class="cancel-section">
                                                        <span class="price"><small>CancellationDate</small>{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->LastCancellationDate}}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p>{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->CancellationPolicy}}</p>
													
                                                    <div class="action-section">
                                                        <button  title="" class="button btn-small btn-success full-width text-center">BOOK NOW</button>
                                                    
													</div>
													
                                                </div>
                                            </div>
                                        </article>
									<?php }else{if($roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeName!=$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i-1]->RoomTypeName){?>
										
										<form action="{{url('retailer/hotel/blockroom')}}" method="get">
									<input type="hidden" name="ResultIndex" value="{{$input['resultindex']}}">
									<input type="hidden" name="HotelCode" value="{{$input['hotelcode']}}">
									<input type="hidden" name="traceid" value="{{$input['traceid']}}">
									<input type="hidden" name="noadult" value="{{$input['noadult']}}">
									<input type="hidden" name="nochild" value="{{$input['nochild']}}">
									<input type="hidden" name="age" value="{{$input['age']}}">
									<input type="hidden" name="HotelName" value="{{$information->HotelDetails->HotelName}}">
									<input type="hidden" name="noofrooms" value="{{$input['noofrooms']}}">
									<input type="hidden" name="CheckInDate" value="{{$input['CheckInDate']}}">
									<input type="hidden" name="CheckOutDate" value="{{$input['CheckOutDate']}}">
									<input type="hidden" name="guestnationality" value="{{$input['guestnationality']}}">
                                    <input type="hidden" name="CountryCode" value="{{$input['countrycode']}}">
                                    
									   <article class="box">
                                            
                                            <div class="details col-xs-12 col-sm-8 col-md-9">
                                                <div>
                                                    <div>
													<input type="hidden" name="RoomIndex[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomIndex}}">
                                                    <input type="hidden" name="RoomTypeCode[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeCode}}">
                                                    <input type="hidden" name="RoomTypeName[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeName}}">
                                                    <input type="hidden" name="RatePlanCode[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RatePlanCode}}">
                                                    
                                                        <div class="box-title">
                                                            <h4 class="title">{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeName}}</h4>
                                                            
                                                        </div>
														<input type="hidden" name="CurrencyCode" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->CurrencyCode}}">
														
														<input type="hidden" name="RoomPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->RoomPrice}}">
														<input type="hidden" name="Tax[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->Tax}}">
														<input type="hidden" name="ExtraGuestCharge[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ExtraGuestCharge}}">
														<input type="hidden" name="ChildCharge[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ChildCharge}}">
														<input type="hidden" name="OtherCharges[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OtherCharges}}">
														<input type="hidden" name="Discount[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->Discount}}">
														<input type="hidden" name="PublishedPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->PublishedPrice}}">
														<input type="hidden" name="PublishedPriceRoundedOff[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->PublishedPriceRoundedOff}}">
														<input type="hidden" name="OfferedPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OfferedPrice}}">
														<input type="hidden" name="OfferedPriceRoundedOff[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OfferedPriceRoundedOff}}">
														<input type="hidden" name="AgentCommission[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->AgentCommission}}">
														<input type="hidden" name="AgentMarkUp[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->AgentMarkUp}}">
														<input type="hidden" name="ServiceTax[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ServiceTax}}">
														<input type="hidden" name="TDS[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->TDS}}">
														
                                                        <div class="amenities">
														<label>amenities</label>
														<?php if($roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Amenities){foreach($roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Amenities as $amenties){?>
                                                            <i class="soap-icon-wifi circle">{{$amenties}}</i>
                                                            <?php }} ?>
														</div>
                                                    </div>
                                                    <div class="price-section">
                                                        <span class="price"><small>PER DAY-</small>{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->DayRates[0]->Amount}}</span>
                                                    </div>
													<div class="cancel-section">
                                                        <span class="price"><small>CancellationDate</small>{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->LastCancellationDate}}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p>{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->CancellationPolicy}}</p>
													
													<div class="action-section">
                                                       <button class="button btn-small btn-success full-width text-center" type="submit">BOOK NOW</a>
                                                    </div>
													
                                                </div>
                                            </div>
                                        </article>
										<?php }else{?>
										<article class="box">
                                            
                                            
													<input type="hidden" name="RoomIndex[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomIndex}}">
                                                    <input type="hidden" name="RoomTypeCode[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeCode}}">
                                                    <input type="hidden" name="RoomTypeName[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RoomTypeName}}">
                                                    <input type="hidden" name="RatePlanCode[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->RatePlanCode}}">
                                                    
                                                        
														<input type="hidden" name="CurrencyCode" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->CurrencyCode}}">
														
														<input type="hidden" name="RoomPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->RoomPrice}}">
														<input type="hidden" name="Tax[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->Tax}}">
														<input type="hidden" name="ExtraGuestCharge[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ExtraGuestCharge}}">
														<input type="hidden" name="ChildCharge[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ChildCharge}}">
														<input type="hidden" name="OtherCharges[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OtherCharges}}">
														<input type="hidden" name="Discount[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->Discount}}">
														<input type="hidden" name="PublishedPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->PublishedPrice}}">
														<input type="hidden" name="PublishedPriceRoundedOff[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->PublishedPriceRoundedOff}}">
														<input type="hidden" name="OfferedPrice[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OfferedPrice}}">
														<input type="hidden" name="OfferedPriceRoundedOff[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->OfferedPriceRoundedOff}}">
														<input type="hidden" name="AgentCommission[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->AgentCommission}}">
														<input type="hidden" name="AgentMarkUp[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->AgentMarkUp}}">
														<input type="hidden" name="ServiceTax[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->ServiceTax}}">
														<input type="hidden" name="TDS[]" value="{{$roominfo->GetHotelRoomResult->HotelRoomsDetails[$i]->Price->TDS}}">
														
                                                       <div class="action-section">
                                                        <button  style="margin-top:350px;"class="button btn-small btn-success full-width text-center" type="submit">BOOK NOW</a>
                                                    </div>
                                                
                                        </article>
										</form>
										<?php }}}}} ?>
                                        
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="hotel-amenities">
                                   <h2>Services Available</h2>
                                    
                                    <ul class="amenities clearfix style2">
										<?php foreach($information->HotelDetails->HotelFacilities as $facilities)
										{?>
                                        <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-wifi circle"></i>{{$facilities}}</div>
                                        </li>
										<?php } ?>
                                        
                                    </ul>
                                </div>
                                
                                
                                <div class="tab-pane fade" id="hotel-things-todo">
                                    <h2>Address</h2>
                                    <div class="activities image-box style2 innerstyle">
                                        <article class="box">
                                            
                                            <div class="details">
                                                
                                                <p>Address:{{$information->HotelDetails->Address}}</p>
                                                <p>Contact No:{{$information->HotelDetails->HotelContactNo}}</p>
                                                <p>Email:{{$information->HotelDetails->Email}}</p>
                                               </div>
                                        </article>
                                        
                                    </div>
                                </div>
                              </div>  
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
@stop