@extends('layouts.front')
@section('frontcontent')
 <style>
    * {box-sizing: border-box;}
    ul {list-style-type: none;}
    body {font-family: Verdana, sans-serif;}
    
    .month {
      padding: 70px 10px;
      background: #1abc9c;
      text-align: center;
    }
    
    .month ul {
      margin: 0;
      padding: 0;
    }
    
    .month ul li {
      color: white;
      font-size: 20px;
      text-transform: uppercase;
      letter-spacing: 3px;
    }
    
    .month .prev {
      float: left;
      padding-top: 10px;
    }
    
    .month .next {
      float: right;
      padding-top: 10px;
    }
    
    .weekdays {
      margin: 0;
      padding: 10px 0;
      background-color: #ddd;
    }
    
    .weekdays li {
      display: inline-block;
      width: 13.6%;
      color: #666;
      text-align: center;
    }
    
    .days {
      padding: 10px 0;
      background: #eee;
      margin: 0;
    }
    
    .days li {
      list-style-type: none;
      display: inline-block;
      width: 13.6%;
      text-align: center;
      margin-bottom: 5px;
      font-size:12px;
      color: #777;
    }
    
    .days li .active {
      padding: 5px;
      background: #1abc9c;
      color: white !important
    }
    
    /* Add media queries for smaller screens */
    @media screen and (max-width:720px) {
      .weekdays li, .days li {width: 13.1%;}
    }
    
    @media screen and (max-width: 420px) {
      .weekdays li, .days li {width: 12.5%;}
      .days li .active {padding: 2px;}
    }
    
    @media screen and (max-width: 290px) {
      .weekdays li, .days li {width: 12.2%;}
    }
    </style>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker({                  
          minDate: moment().add('d', 0).toDate(),
          maxDate: moment().add('d', +60).toDate(),
        });
    } );
    </script>
    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="header-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h5 class="h-boldw">TIKET ELEKTRONIK</h5>
              </div>
              <p class="text-left wow bounceIn" data-wow-delay="0.4s">
                <a href="#" class="director btn-skin btn-lg">Tiket Elektronik <i class="fa fa-angle-right"><i class="text-success">PILIH TANGGAL</i></i></a>
              </p>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- /Section: boxes -->
    <section id="#" class="home-section paddingtop-10">
      <div class="row">
        <center>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form action="{{URL('/pemesanan')}}" method="GET">
            <div class="input-group">
              <label>Pilih tanggal</label>
              <br>
                <input type="text" id="datepicker" name="tanggal" autocomplete="off">
              <div class="validation"></div>
            </div>
            <div class="paddingtop-10">
              <button type="submit" class="btn btn-primary" name="kirim" value="kirim">Pilih Tanggal</button>
            </div>
          </form>
        </div>
      </center>
      </div>
      <div class="row paddingtop-10">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="body">
                  <div class="month">      
                    {{-- <ul>
                      <li class="prev">&#10094;</li>
                      <li class="next">&#10095;</li>
                      <li>
                        August<br>
                        <span style="font-size:18px">2017</span>
                      </li>
                    </ul> --}}
                  </div>
                  
                  {{-- <ul class="weekdays">
                    <li>Mo</li>
                    <li>Tu</li>
                    <li>We</li>
                    <li>Th</li>
                    <li>Fr</li>
                    <li>Sa</li>
                    <li>Su</li>
                  </ul>
                  
                  <ul class="days">  
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li><span class="active">10</span></li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li>30</li>
                    <li>31</li>
                  </ul> --}}
                  
                </div>
            </div>
        </div>
    </div>
    <!--#END# DateTime Picker -->
    </section>
    @endsection