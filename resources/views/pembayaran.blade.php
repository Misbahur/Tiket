@extends('layouts.front')
@section('frontcontent')
<style>
/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}
</style>
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
              <a href="#" class="director btn-skin btn-lg">Tiket Elektronik <i class="fa fa-angle-right"><i class="text-success">PANDUAN PEMBAYARAN</i></i></a>
            </p>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="callaction" class="home-section paddingtop-20">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                      <h2>Pembayaran Menggunakan Metode Transfer</h2>
                        <p>BANK : BRI</p>
                        <p>NO Rek : 219847189264</p>
                        <p>Atas Nama : Taman Nasional Baluran</p>
                    <button class="accordion">BRI</button>
                    <div class="panel">
                    <p>Lorem ipsum...</p>
                    </div>

                    <button class="accordion">BNI</button>
                    <div class="panel">
                    <p>Lorem ipsum...</p>
                    </div>

                    <button class="accordion">Mandiri</button>
                    <div class="panel">
                    <p>Lorem ipsum...</p>
                    </div>

                    <button class="accordion">BCA</button>
                    <div class="panel">
                    <p>Lorem ipsum...</p>
                    </div>

                    <button class="accordion">BTN</button>
                    <div class="panel">
                    <p>Lorem ipsum...</p>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
    </section>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        }
    </script>
<!-- /Section: boxes -->
@endsection