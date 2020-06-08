<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tiket Elektronik Taman Nasional Baluran</title>

  <!-- css -->
  <link href="front/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="front/fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="front/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="front/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="front/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="front/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="front/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="front/css/animate.css" rel="stylesheet" />
  <link href="front/css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="front/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="front/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left"></p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="front/img/logo.png" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="#service">Pembayaran</a></li>
            <li><a href="panduan">Panduan Pembelian</a></li>
            <li><a href="{{ route('login') }}">Admin</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="header-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h5 class="h-boldw">TIKET ONLINE</h5>
              </div>
              <p class="text-left wow bounceIn" data-wow-delay="0.4s">
                <a href="#" class="director btn-skin btn-lg">Tiket Online <i class="fa fa-angle-right"><i class="text-success"> Registrasi Pembelian</i></i></a>
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
    <section id="#" class="home-section paddingtop-20">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="koleksi bg-gray">
              <div class="row">
                  <div>
                      <span class="h-bold">
                        TANGGAL KUNJUNGAN
                      </span>
                  </div>
                  <div class="box-body wow fadeInRight" data-wow-delay="0.1s">
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Tanggal Berangkat</label>
                      <div class="col-sm-4"><input name="date_depart" class="form-control valid" readonly="readonly" value=""></div>
                    </div>
                      <div class="form-group"><div class="col-sm-offset-4 col-sm-8 cnt-label-days-count text-red">*Terhitung tiket masuk 1 hari dan <b>berlaku 24 jam</b></div></div>
                  </div>
                  <div>
                    <span class="h-bold">
                      BIODATA KETUA
                    </span>
                </div>
                <div class="box-body wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Nama Ketua Kelompok</label>
                      <div class="col-sm-8"><input name="leader_name" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Kebangsaan</label>
                      <div class="col-sm-8"><select name="leader_country_id" class="form-control">
                        <option value="">Popular Country</option>
                        <option value="99">Indonesia</option><option value="2">Afghanistan</option><option value="5">Albania</option><option value="62">Algeria</option><option value="11">American Samoa</option><option value="6">Andorra</option><option value="3">Angola</option><option value="4">Anguilla</option><option value="12">Antarctica</option><option value="14">Antigua and Barbuda</option><option value="9">Argentina</option><option value="10">Armenia</option><option value="1">Aruba</option><option value="15">Australia</option><option value="16">Austria</option><option value="17">Azerbaijan</option><option value="25">Bahamas</option><option value="24">Bahrain</option><option value="22">Bangladesh</option><option value="32">Barbados</option><option value="27">Belarus</option><option value="19">Belgium</option><option value="28">Belize</option><option value="20">Benin</option><option value="29">Bermuda</option><option value="34">Bhutan</option><option value="30">Bolivia</option><option value="26">Bosnia and Herzegovina</option><option value="36">Botswana</option><option value="35">Bouvet Island</option><option value="31">Brazil</option><option value="101">British Indian Ocean Territory</option><option value="33">Brunei</option><option value="23">Bulgaria</option><option value="21">Burkina Faso</option><option value="18">Burundi</option><option value="114">Cambodia</option><option value="44">Cameroon</option><option value="38">Canada</option><option value="50">Cape Verde</option><option value="54">Cayman Islands</option><option value="37">Central African Republic</option><option value="206">Chad</option><option value="41">Chile</option><option value="42">China</option><option value="53">Christmas Island</option><option value="39">Cocos (Keeling) Islands</option><option value="48">Colombia</option><option value="49">Comoros</option><option value="45">Congo</option><option value="46">Congo</option><option value="47">Cook Islands</option><option value="51">Costa Rica</option><option value="43">Cote d' Ivoire</option><option value="96">Croatia</option><option value="52">Cuba</option><option value="55">Cyprus</option><option value="56">Czech Republic</option><option value="60">Denmark</option><option value="58">Djibouti</option><option value="59">Dominica</option><option value="61">Dominican Republic</option><option value="212">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="193">El Salvador</option><option value="85">Equatorial Guinea</option><option value="65">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="72">Falkland Islands</option><option value="74">Faroe Islands</option><option value="71">Fiji Islands</option><option value="70">Finland</option><option value="73">France</option><option value="90">French Guiana</option><option value="178">French Polynesia</option><option value="13">French Southern territories</option><option value="76">Gabon</option><option value="83">Gambia</option><option value="78">Georgia</option><option value="57">Germany</option><option value="79">Ghana</option><option value="80">Gibraltar</option><option value="86">Greece</option><option value="88">Greenland</option><option value="87">Grenada</option><option value="82">Guadeloupe</option><option value="91">Guam</option><option value="89">Guatemala</option><option value="81">Guinea</option><option value="84">Guinea-Bissau</option><option value="92">Guyana</option><option value="97">Haiti</option><option value="94">Heard Island and McDonald Islands</option><option value="226">Holy See (Vatican City State)</option><option value="95">Honduras</option><option value="93">Hong Kong</option><option value="98">Hungary</option><option value="105">Iceland</option><option value="100">India</option><option value="103">Iran</option><option value="104">Iraq</option><option value="102">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="110">Japan</option><option value="109">Jordan</option><option value="111">Kazakstan</option><option value="112">Kenya</option><option value="115">Kiribati</option><option value="118">Kuwait</option><option value="113">Kyrgyzstan</option><option value="119">Laos</option><option value="129">Latvia</option><option value="120">Lebanon</option><option value="126">Lesotho</option><option value="121">Liberia</option><option value="122">Libyan Arab Jamahiriya</option><option value="124">Liechtenstein</option><option value="127">Lithuania</option><option value="128">Luxembourg</option><option value="130">Macao</option><option value="138">Macedonia</option><option value="134">Madagascar</option><option value="149">Malawi</option><option value="150">Malaysia</option><option value="135">Maldives</option><option value="139">Mali</option><option value="140">Malta</option><option value="137">Marshall Islands</option><option value="147">Martinique</option><option value="145">Mauritania</option><option value="148">Mauritius</option><option value="151">Mayotte</option><option value="136">Mexico</option><option value="75">Micronesia</option><option value="133">Moldova</option><option value="132">Monaco</option><option value="142">Mongolia</option><option value="146">Montserrat</option><option value="131">Morocco</option><option value="144">Mozambique</option><option value="141">Myanmar</option><option value="152">Namibia</option><option value="162">Nauru</option><option value="161">Nepal</option><option value="159">Netherlands</option><option value="7">Netherlands Antilles</option><option value="153">New Caledonia</option><option value="163">New Zealand</option><option value="157">Nicaragua</option><option value="154">Niger</option><option value="156">Nigeria</option><option value="158">Niue</option><option value="155">Norfolk Island</option><option value="174">North Korea</option><option value="143">Northern Mariana Islands</option><option value="160">Norway</option><option value="164">Oman</option><option value="165">Pakistan</option><option value="170">Palau</option><option value="177">Palestine</option><option value="166">Panama</option><option value="171">Papua New Guinea</option><option value="176">Paraguay</option><option value="168">Peru</option><option value="169">Philippines</option><option value="167">Pitcairn</option><option value="172">Poland</option><option value="175">Portugal</option><option value="173">Puerto Rico</option><option value="179">Qatar</option><option value="180">R???union</option><option value="181">Romania</option><option value="182">Russian Federation</option><option value="183">Rwanda</option><option value="189">Saint Helena</option><option value="116">Saint Kitts and Nevis</option><option value="123">Saint Lucia</option><option value="196">Saint Pierre and Miquelon</option><option value="227">Saint Vincent and the Grenadines</option><option value="234">Samoa</option><option value="194">San Marino</option><option value="197">Sao Tome and Principe</option><option value="184">Saudi Arabia</option><option value="186">Senegal</option><option value="203">Seychelles</option><option value="192">Sierra Leone</option><option value="187">Singapore</option><option value="199">Slovakia</option><option value="200">Slovenia</option><option value="191">Solomon Islands</option><option value="195">Somalia</option><option value="237">South Africa</option><option value="188">South Georgia and the South Sandwich Islands</option><option value="117">South Korea</option><option value="67">Spain</option><option value="125">Sri Lanka</option><option value="185">Sudan</option><option value="198">Suriname</option><option value="190">Svalbard and Jan Mayen</option><option value="202">Swaziland</option><option value="201">Sweden</option><option value="40">Switzerland</option><option value="204">Syria</option><option value="218">Taiwan</option><option value="209">Tajikistan</option><option value="219">Tanzania</option><option value="208">Thailand</option><option value="207">Togo</option><option value="210">Tokelau</option><option value="213">Tonga</option><option value="214">Trinidad and Tobago</option><option value="215">Tunisia</option><option value="216">Turkey</option><option value="211">Turkmenistan</option><option value="205">Turks and Caicos Islands</option><option value="217">Tuvalu</option><option value="220">Uganda</option><option value="221">Ukraine</option><option value="8">United Arab Emirates</option><option value="77">United Kingdom</option><option value="224">United States</option><option value="222">United States Minor Outlying Islands</option><option value="223">Uruguay</option><option value="225">Uzbekistan</option><option value="232">Vanuatu</option><option value="228">Venezuela</option><option value="231">Vietnam</option><option value="229">Virgin Islands</option><option value="230">Virgin Islands</option><option value="233">Wallis and Futuna</option><option value="66">Western Sahara</option><option value="235">Yemen</option><option value="236">Yugoslavia</option><option value="238">Zambia</option><option value="239">Zimbabwe</option>						</select></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Jenis Kelamin</label>
                      <div class="col-sm-8"><select name="leader_gender_id" class="form-control">
                        <option value="">-</option><option value="1">Laki Laki</option><option value="2">Perempuan</option>						</select></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Jenis Identitas</label>
                      <div class="col-sm-8"><select name="leader_identity_id" class="form-control">
                        <option value="">-</option><option value="4">KTM</option><option value="1">KTP</option><option value="5">Lainnya</option><option value="3">Passport</option><option value="2">SIM</option>						</select></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">No Telp/HP</label>
                      <div class="col-sm-8"><input name="leader_phone" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">E-Mail</label>
                      <div class="col-sm-8"><input name="leader_email" placeholder="alternatif email gunakan user@gmail.com" class="form-control"></div>
                    </div>
                    <div class="hide">
                      <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Alamat Rumah</label>
                        <div class="col-sm-8"><input name="leader_address" class="form-control"></div>
                      </div>
                      <div class="form-group cnt-province">
                        <label class="col-sm-4 control-label text-right">Propinsi</label>
                        <div class="col-sm-8"><select name="province" class="form-control">
                          <option value="">-</option><option value="11">ACEH</option><option value="51">BALI</option><option value="36">BANTEN</option><option value="17">BENGKULU</option><option value="34">DI YOGYAKARTA</option><option value="31">DKI JAKARTA</option><option value="75">GORONTALO</option><option value="15">JAMBI</option><option value="32">JAWA BARAT</option><option value="33">JAWA TENGAH</option><option value="35">JAWA TIMUR</option><option value="61">KALIMANTAN BARAT</option><option value="63">KALIMANTAN SELATAN</option><option value="62">KALIMANTAN TENGAH</option><option value="64">KALIMANTAN TIMUR</option><option value="65">KALIMANTAN UTARA</option><option value="19">KEPULAUAN BANGKA BELITUNG</option><option value="21">KEPULAUAN RIAU</option><option value="18">LAMPUNG</option><option value="81">MALUKU</option><option value="82">MALUKU UTARA</option><option value="52">NUSA TENGGARA BARAT</option><option value="53">NUSA TENGGARA TIMUR</option><option value="94">PAPUA</option><option value="91">PAPUA BARAT</option><option value="14">RIAU</option><option value="76">SULAWESI BARAT</option><option value="73">SULAWESI SELATAN</option><option value="72">SULAWESI TENGAH</option><option value="74">SULAWESI TENGGARA</option><option value="71">SULAWESI UTARA</option><option value="13">SUMATERA BARAT</option><option value="16">SUMATERA SELATAN</option><option value="12">SUMATERA UTARA</option>							</select></div>
                      </div>
                      <div class="form-group cnt-district">
                        <label class="col-sm-4 control-label text-right">Kota / Kabupaten</label>
                        <div class="col-sm-8"><select name="district" class="form-control"></select></div>
                      </div>
                      <div class="form-group cnt-indentity-no">
                        <label class="col-sm-4 control-label text-right">Nomor Kartu Identitas</label>
                        <div class="col-sm-8"><input name="leader_identity_no" class="form-control"></div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label text-right">No Telp/HP Keluarga</label>
                        <div class="col-sm-8"><input name="leader_hp_urgent" class="form-control"></div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Pekerjaan</label>
                        <div class="col-sm-8"><select name="leader_job_id" class="form-control">
                          <option value="">-</option><option value="3">Lainnya</option><option value="6">Mahasiswa</option><option value="5">Pelajar</option><option value="1">PNS</option><option value="2">Swasta</option>							</select></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <span class="h-bold">
                      BIODATA ANGGOTA
                    </span>
                  </div>
                  <div class="box-body wow fadeInRight" data-wow-delay="0.1s">
                    <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-4"><i>* Inputkan jumlah anggota, selain ketua</i></div>
                  </div>
                   
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Jumlah Anggota WNI</label>
                                <div class="col-sm-8"><select name="wni" class="form-control">
                                                  <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                                <option value="100">100</option>
                                                                <option value="101">101</option>
                                                                <option value="102">102</option>
                                                                <option value="103">103</option>
                                                                <option value="104">104</option>
                                                                <option value="105">105</option>
                                                                <option value="106">106</option>
                                                                <option value="107">107</option>
                                                                <option value="108">108</option>
                                                                <option value="109">109</option>
                                                                <option value="110">110</option>
                                                                <option value="111">111</option>
                                                                <option value="112">112</option>
                                                                <option value="113">113</option>
                                                                <option value="114">114</option>
                                                                <option value="115">115</option>
                                                                <option value="116">116</option>
                                                                <option value="117">117</option>
                                                                <option value="118">118</option>
                                                                <option value="119">119</option>
                                                                <option value="120">120</option>
                                                                <option value="121">121</option>
                                                                <option value="122">122</option>
                                                                <option value="123">123</option>
                                                                <option value="124">124</option>
                                                                <option value="125">125</option>
                                                                <option value="126">126</option>
                                                                <option value="127">127</option>
                                                                <option value="128">128</option>
                                                                <option value="129">129</option>
                                                                <option value="130">130</option>
                                                                <option value="131">131</option>
                                                                <option value="132">132</option>
                                                                <option value="133">133</option>
                                                                <option value="134">134</option>
                                                                <option value="135">135</option>
                                                                <option value="136">136</option>
                                                                <option value="137">137</option>
                                                                <option value="138">138</option>
                                                                <option value="139">139</option>
                                                                <option value="140">140</option>
                                                                <option value="141">141</option>
                                                                <option value="142">142</option>
                                                                <option value="143">143</option>
                                                                <option value="144">144</option>
                                                                <option value="145">145</option>
                                                                <option value="146">146</option>
                                                                <option value="147">147</option>
                                                                <option value="148">148</option>
                                                                <option value="149">149</option>
                                                                <option value="150">150</option>
                                                                <option value="151">151</option>
                                                                <option value="152">152</option>
                                                                <option value="153">153</option>
                                                                <option value="154">154</option>
                                                                <option value="155">155</option>
                                                                <option value="156">156</option>
                                                                <option value="157">157</option>
                                                                <option value="158">158</option>
                                                                <option value="159">159</option>
                                                                <option value="160">160</option>
                                                                <option value="161">161</option>
                                                                <option value="162">162</option>
                                                                <option value="163">163</option>
                                                                <option value="164">164</option>
                                                                <option value="165">165</option>
                                                                <option value="166">166</option>
                                                                <option value="167">167</option>
                                                                <option value="168">168</option>
                                                                <option value="169">169</option>
                                                                <option value="170">170</option>
                                                                <option value="171">171</option>
                                                                <option value="172">172</option>
                                                                <option value="173">173</option>
                                                                <option value="174">174</option>
                                                                <option value="175">175</option>
                                                                <option value="176">176</option>
                                                                <option value="177">177</option>
                                                                <option value="178">178</option>
                                                                <option value="179">179</option>
                                                                <option value="180">180</option>
                                                                <option value="181">181</option>
                                                                <option value="182">182</option>
                                                                <option value="183">183</option>
                                                                <option value="184">184</option>
                                                                <option value="185">185</option>
                                                                <option value="186">186</option>
                                                                <option value="187">187</option>
                                                                <option value="188">188</option>
                                                                <option value="189">189</option>
                                                                <option value="190">190</option>
                                                                <option value="191">191</option>
                                                                <option value="192">192</option>
                                                                <option value="193">193</option>
                                                                <option value="194">194</option>
                                                                <option value="195">195</option>
                                                                <option value="196">196</option>
                                                                <option value="197">197</option>
                                                                <option value="198">198</option>
                                                                <option value="199">199</option>
                                                                <option value="200">200</option>
                                                                <option value="201">201</option>
                                                                <option value="202">202</option>
                                                                <option value="203">203</option>
                                                                <option value="204">204</option>
                                                                <option value="205">205</option>
                                                                <option value="206">206</option>
                                                                <option value="207">207</option>
                                                                <option value="208">208</option>
                                                                <option value="209">209</option>
                                                                <option value="210">210</option>
                                                                <option value="211">211</option>
                                                                <option value="212">212</option>
                                                                <option value="213">213</option>
                                                                <option value="214">214</option>
                                                                <option value="215">215</option>
                                                                <option value="216">216</option>
                                                                <option value="217">217</option>
                                                                <option value="218">218</option>
                                                                <option value="219">219</option>
                                                                <option value="220">220</option>
                                                                <option value="221">221</option>
                                                                <option value="222">222</option>
                                                                <option value="223">223</option>
                                                                <option value="224">224</option>
                                                                <option value="225">225</option>
                                                                <option value="226">226</option>
                                                                <option value="227">227</option>
                                                                <option value="228">228</option>
                                                                <option value="229">229</option>
                                                                <option value="230">230</option>
                                                                <option value="231">231</option>
                                                                <option value="232">232</option>
                                                                <option value="233">233</option>
                                                                <option value="234">234</option>
                                                                <option value="235">235</option>
                                                                <option value="236">236</option>
                                                                <option value="237">237</option>
                                                                <option value="238">238</option>
                                                                <option value="239">239</option>
                                                                <option value="240">240</option>
                                                                <option value="241">241</option>
                                                                <option value="242">242</option>
                                                                <option value="243">243</option>
                                                                <option value="244">244</option>
                                                                <option value="245">245</option>
                                                                <option value="246">246</option>
                                                                <option value="247">247</option>
                                                                <option value="248">248</option>
                                                                <option value="249">249</option>
                                                                <option value="250">250</option>
                                                                <option value="251">251</option>
                                                                <option value="252">252</option>
                                                                <option value="253">253</option>
                                                                <option value="254">254</option>
                                                                <option value="255">255</option>
                                                                <option value="256">256</option>
                                                                <option value="257">257</option>
                                                                <option value="258">258</option>
                                                                <option value="259">259</option>
                                                                <option value="260">260</option>
                                                                <option value="261">261</option>
                                                                <option value="262">262</option>
                                                                <option value="263">263</option>
                                                                <option value="264">264</option>
                                                                <option value="265">265</option>
                                                                <option value="266">266</option>
                                                                <option value="267">267</option>
                                                                <option value="268">268</option>
                                                                <option value="269">269</option>
                                                                <option value="270">270</option>
                                                                <option value="271">271</option>
                                                                <option value="272">272</option>
                                                                <option value="273">273</option>
                                                                <option value="274">274</option>
                                                                <option value="275">275</option>
                                                                <option value="276">276</option>
                                                                <option value="277">277</option>
                                                                <option value="278">278</option>
                                                                <option value="279">279</option>
                                                                <option value="280">280</option>
                                                                <option value="281">281</option>
                                                                <option value="282">282</option>
                                                                <option value="283">283</option>
                                                                <option value="284">284</option>
                                                                <option value="285">285</option>
                                                                <option value="286">286</option>
                                                                <option value="287">287</option>
                                                                <option value="288">288</option>
                                                                <option value="289">289</option>
                                                                <option value="290">290</option>
                                                                <option value="291">291</option>
                                                                <option value="292">292</option>
                                                                <option value="293">293</option>
                                                                <option value="294">294</option>
                                                                <option value="295">295</option>
                                                                <option value="296">296</option>
                                                                <option value="297">297</option>
                                                                <option value="298">298</option>
                                                                <option value="299">299</option>
                                                </select></div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Jumlah Anggota WNA</label>
                                <div class="col-sm-6"><select name="wna" class="form-control" disabled="disabled">
                                                  <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
                                                                <option value="51">51</option>
                                                                <option value="52">52</option>
                                                                <option value="53">53</option>
                                                                <option value="54">54</option>
                                                                <option value="55">55</option>
                                                                <option value="56">56</option>
                                                                <option value="57">57</option>
                                                                <option value="58">58</option>
                                                                <option value="59">59</option>
                                                                <option value="60">60</option>
                                                                <option value="61">61</option>
                                                                <option value="62">62</option>
                                                                <option value="63">63</option>
                                                                <option value="64">64</option>
                                                                <option value="65">65</option>
                                                                <option value="66">66</option>
                                                                <option value="67">67</option>
                                                                <option value="68">68</option>
                                                                <option value="69">69</option>
                                                                <option value="70">70</option>
                                                                <option value="71">71</option>
                                                                <option value="72">72</option>
                                                                <option value="73">73</option>
                                                                <option value="74">74</option>
                                                                <option value="75">75</option>
                                                                <option value="76">76</option>
                                                                <option value="77">77</option>
                                                                <option value="78">78</option>
                                                                <option value="79">79</option>
                                                                <option value="80">80</option>
                                                                <option value="81">81</option>
                                                                <option value="82">82</option>
                                                                <option value="83">83</option>
                                                                <option value="84">84</option>
                                                                <option value="85">85</option>
                                                                <option value="86">86</option>
                                                                <option value="87">87</option>
                                                                <option value="88">88</option>
                                                                <option value="89">89</option>
                                                                <option value="90">90</option>
                                                                <option value="91">91</option>
                                                                <option value="92">92</option>
                                                                <option value="93">93</option>
                                                                <option value="94">94</option>
                                                                <option value="95">95</option>
                                                                <option value="96">96</option>
                                                                <option value="97">97</option>
                                                                <option value="98">98</option>
                                                                <option value="99">99</option>
                                                </select></div>
                    <div class="col-sm-2"><input type="button" class="btn btn-info btn-add-wna" value="Tambah"></div>
                  </div>
                  <div class="cnt-wna-country"></div>
                  <div class="text-center hide">
                    <input type="button" class="btn btn-info btn-member-add" value="Tambah Anggota">
                  </div>
                </div>
                  <div>
                    <span class="h-bold">
                      KONFIRMASI PEMBELIAN
                    </span>
                  </div>
                  <div class="col-md-xs-12">
                    <p>
                    Dengan menekan tombol Kirim dibawah ini, maka Anda menyetujui segala Persyaratan dan Kebijakan TN Baluran Situbondo Jawa Timur.
                    </p>
                  </div>
                  <div class="col-md-6">
                    <table>
                      <thead>
                        <th>Tarif Tiket Masuk TN Baluran</th>
                        <th>Hari Kerja</th>
                        <th>Hari Libur</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>as</td>
                          <td>asa</td>
                          <td>as</td>
                        </tr>
                        <tr>
                          <td>as</td>
                          <td>asa</td>
                          <td>as</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-6">
                    <div>
                      <label for="#" class="control-label">
                        Rincian Pembelian Tiket Online Anda terdiri dari :
                      </label>
                    </div>
                    <div class="paddingtop-10">
                      <div>
                        WNI : 0 Orang (anggota)
                      </div>
                      <div>
                        WNA : 0 Orang (anggota)
                      </div>
                    </div>
                    <div>
                      <label for="#" class="control-label paddingtop-20 h-bold">
                        7 Juni 2020
                      </label>
                    </div>
                    <div class="paddingtop-10">
                      <div>
                        0 WNI X Rp. 34.000
                      </div>
                      <div>
                        0 WNA X Rp. 320.000
                      </div>
                    </div>
                    <div style="font-weight: 700; color: #337ab7;">
                      Rp.
                    </div>
                    <div style="padding: 15px 0 0 0;">
                      <input type="submit" name="btn-booking-submit" class="btn btn-primary" value="Kirim" style="width: 150px;">
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: boxes -->

    <footer>
      <div class="sub-footer">
        <div class="container bg--dark">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <a>&copy;Copyright - OsingTech. All rights reserved.</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    Designed by <a href="https://bootstrap.com/">Bootstrap</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="front/js/jquery.min.js"></script>
  <script src="front/js/bootstrap.min.js"></script>
  <script src="front/js/jquery.easing.min.js"></script>
  <script src="front/js/wow.min.js"></script>
  <script src="front/js/jquery.scrollTo.js"></script>
  <script src="front/js/jquery.appear.js"></script>
  <script src="front/js/stellar.js"></script>
  <script src="front/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="front/js/owl.carousel.min.js"></script>
  <script src="front/js/nivo-lightbox.min.js"></script>
  <script src="front/js/custom.js"></script>

</body>

</html>
