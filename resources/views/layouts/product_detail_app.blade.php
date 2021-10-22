<html lang="en">
    <head>
        <title>PRODUCT DETAILS</title>

      <script type="text/javascript" src="{{URL::asset('js/jqueryv3.min.js')}}"></script> 
        
      <script type="text/javascript" src="{{URL::asset('js/bootstrapv3.min.js')}}"></script>

      <script type="text/javascript" src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
        
      <link rel="stylesheet" href="{{URL::asset('css/bootstrapv3.min.css')}}" type="text/css"/>

      <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.min.css')}}" type="text/css"/>
        
      <link rel="stylesheet" href="{{URL::asset('css/webfonts.css')}}" type="text/css"/>          
        
        <!--  <link rel="stylesheet" href="{{URL::asset('css/select2.css')}}" type="text/css"/> -->


       <!-- CRUD JS -->
        <script type="text/javascript" src="{{URL::asset('js/forms/product_form.js')}}"></script> 

        <style>
          /* @import url("https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css");*/
          /* @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans');*/
              /* @import url("https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css");*/
          /* @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans');*/
            .glyphicon {
              position: relative;
              top: 1px;
              display: inline-block;
              font-family: 'Glyphicons Halflings';
              font-style: normal;
              font-weight: normal;
              line-height: 1;

              -webkit-font-smoothing: antialiased;
              -moz-osx-font-smoothing: grayscale;
            }
            .glyphicon-asterisk:before {
              content: "\2a";
            }

            body {
                font-family: 'Open Sans', sans-serif;
                font-family: 'Montserrat', sans-serif;
            }
            input[type="text"], input[type="email"] {
                font-size: 1.6rem;
                color: #010100;
                width: 100%;
                line-height: 65px;
                padding-left: 3rem;
            }
            select {
                width: 100%;
                height: 65px;
                color: #010100;
                padding-left: 3rem;
            }
            .h1, h1 {
                font-size: 36px;
            }
            .h1, .h2, .h3, h1, h2, h3 {
                margin-top: 20px;
                margin-bottom: 10px;
            }
            .text-white {
                color: #fff!important;
            }
            .font-w400 {
                font-weight: 400;
            }
            .padding-top-xl {
                padding-top: 5rem!important;
            }
            .padding-bottom-xl {
                padding-bottom: 5rem!important;
            }
            .margin-top-m {
                margin-top: 3rem!important;
            }
            .margin-bottom-m {
                margin-bottom: 3rem!important;
            }
            .section5 h2 {
                line-height: 35px;
            }
            .section5 p {
                font-size: 16px;
                line-height: 26px;
            }
            .has-error input[type="text"], .has-error input[type="email"], .has-error select {
                border: 1px solid #a94442;
            }

            .select2-selection__choice__remove {
              display: none !important;
            }

            .select2-container--focus .select2-autocomplete .select2-selection__choice {
              display: none;
            }

           p {
          font-size:16px;
          font-weight: bold;
          font-style: italic;
          color:#000000;
          
          }

                
          .control-label1 {
            padding-top: 7px;
            margin-bottom: 0;
            text-align: left; 
          }

         /*tbody scroll & fixed header*/
        .tableFixHead{ overflow-y: auto; height: 315px; }
        .tableFixHead thead th { position: sticky; top: 0; }

        /* Just common table stuff. Really. */
        table  { border-collapse: collapse; width: 100%; }
        th, td { padding: 8px 16px; }
        th     { background:#337ab7; }
         /*end tbody scroll & fixed header*/

         /*end tbody scroll & fixed header*/


         /* this is for product cart template design */

         body{margin-top:20px;
background:#ddd;
}


/*
* @subsection Shop
*/
.product {
  padding-top: 5px;
  padding-bottom: 5px;
  margin-left: auto;
  margin-right: auto;
}

.product .caption {
  margin-top: 15px;
}

.product .caption h6 {
  color: #455a64;
}

.product .caption .price + .price {
  margin-left: 15px;
}

.product.tumbnail {
  box-shadow: 0 5px 25px 0 transparent;
  transition: 0.3s linear;
  padding-top: 0;
}

.product.tumbnail img:hover {
  box-shadow: 0 5px 25px 0 rgba(0, 0, 0, 0.2);
}

.single-product span {
  display: inline-block;
}

.single-product .rating .fa-star, .single-product .rating .fa-star-o {
  font-size: 16px;
  color: #f7d4a0;
  margin-left: 2px;
}

.single-product .rating + * {
  margin-left: 15px;
}

.single-product h1.h1-variant-2 {
  margin-bottom: 20px;
}

.single-product .caption:before {
  content: '';
  height: 100%;
  display: inline-block;
  vertical-align: middle;
}

.single-product .caption span {
  display: inline-block;
  vertical-align: middle;
}

.single-product .caption .price {
  font-weight: 400;
}

.single-product .caption .price.sale {
  color: #e75854;
  font-size: 33px;
}

.single-product .caption * + .price {
  margin-left: 10.8%;
}

@media (max-width: 1199px) {
  .single-product .caption * + .price {
    margin-left: 7.8%;
  }
}

.single-product .caption * + .quantity {
  margin-left: 26px;
}

.single-product .caption .info-list {
  border-bottom: 1px solid #f3f3ed;
  border-top: 1px solid #f3f3ed;
  font-family: Montserrat, sans-serif;
  padding-top: 26px;
  padding-bottom: 26px;
  text-align: left;
}

.single-product .caption .info-list dt, .single-product .caption .info-list dd {
  display: inline-block;
  line-height: 25px;
  padding-top: 10px;
  padding-bottom: 10px;
}

.single-product .caption .info-list dt {
  letter-spacing: 0.08em;
  font-size: 12px;
  color: #a7b0b4;
  width: 35%;
  text-transform: uppercase;
}

.single-product .caption .info-list dd {
  font-size: 15px;
  color: #565452;
  width: 62.5%;
}

.single-product .caption .share span.small {
  margin-top: 9px;
}

@media (max-width: 991px) {
  .single-product .caption .share span.small {
    display: block;
    margin-bottom: 15px;
  }
}

@media (max-width: 767px) {
  .single-product .table-mobile tr {
    padding-top: 0;
  }
  .single-product .table-mobile tr:before {
    display: none;
  }
}

.price {
  display: inline-block;
  font-size: 15px;
  font-family: Montserrat, sans-serif;
  font-weight: 700;
  letter-spacing: 0.02em;
  color: #2b2f3e;
}

.price.sale {
  color: #e75854;
}

.price del {
  color: #b0bec5;
}

.quantity {
  text-align: center;
  font-family: Montserrat, sans-serif;
  font-size: 12px;
  background: #eceff1;
  padding-top: 5px;
  padding-bottom: 5px;
  width: 82px;
  height: auto;
  display: inline-block;
}

.quantity span {
  display: inline-block;
}

.quantity .num {
  width: 26px;
}

.quantity [class*='fa-'] {
  padding-top: 4px;
  width: 22px;
  padding-bottom: 4px;
  color: #b0bec5;
  cursor: pointer;
}

.quantity [class*='fa-']:hover {
  color: #455a64;
}
            
        </style>

            <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

   <body class="">
        <div class="container-fluid">
            
            <div class="row bg-danger">
                <div class="col-lg-12">
                   <!-- <div class="header"> -->
                        <div class="pull-left">
                             <h4>PRODUCT DETAILS</h4>
                        </div>
                        <div class="pull-right">
                           
                           <button type="button" class="close" data-dismiss="modal" id="start_cloes" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>


                        </div>
                   <!--  </div> -->
                </div>
            </div>           
            @yield('content')
        </div>
    </body>
</html>