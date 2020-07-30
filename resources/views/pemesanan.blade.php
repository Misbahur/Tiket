@extends('layouts.front')
@section('frontcontent')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>

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
                <a href="#" class="director btn-skin btn-lg">Tiket Elektronik <i class="fa fa-angle-right"><i class="text-success"> Registrasi Pemesanan</i></i></a>
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
    <div id="app">
    <form method="POST" action="{{URL('/otransaksi')}}">
      @csrf
    <section id="#" class="home-section paddingtop-20">
      <div class="container">
        <?php
          if($_GET['kirim'])
          {
            $tanggal = $_GET['tanggal'];
          }
 	      ?>	
        <div class="row">
          <div class="col-md-12">
            <div class="koleksi bg-gray">
              <div class="row">
                  <div>
                      <span class="h-bold">
                        TANGGAL BERKUNJUNG
                      </span>
                  </div>
                  <div class="box-body wow fadeInRight" data-wow-delay="0.1s">
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Tanggal Berkunjung</label>
                      <div class="col-sm-4"><input name="tanggal" class="form-control valid" readonly="readonly" value="<?php echo $tanggal ?>"></div>
                    </div>
                      <div class="form-group"><div class="col-sm-offset-4 col-sm-8 cnt-label-days-count text-red">*Terhitung tiket masuk 1 hari dan <b>berlaku 24 jam</b></div></div>
                  </div>
                  <div>
                    <span class="h-bold">
                      KENDARAAN
                    </span>
                </div>
                <div class="box-body wow fadeInRight" data-wow-delay="0.1s">
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Jenis Kendaraan</label>
                          <div class="col-sm-8">
                            <select name="jenis" class="form-control" @change="Kendaraans($event)">
                                <option value="-" data-nama="Jenis Kendaraan" data-harga="0">--Pilih Jenis Kendaraan--</option>
                                @foreach ($kendaraan as $item)
                                  <option value="{{$item->id}}" data-nama="{{$item->nama}}" data-harga="{{$item->harga}}">{{$item->nama}} - Rp.<div id="harga_kendaraan" ref="harga_kendaraan">{{$item->harga}}</div></option>
                    
                                @endforeach
                            </select>
                        </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Jumlah Kendaraan</label>
                          <div class="col-sm-8">
                            <select name="Kendaraan" @change="jumKendaraan($event)"  class="form-control">
                                <!--  
                              <option value="">--Pilih Jumlah Kendaraan--</option>
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
                                -->
                                <option v-for="item in kendaraans" :value="item.object">
                                  << item.object >>
                                </option>
                              </select>
                        </div>
                  </div>
                </div>
                  <div>
                    <span class="h-bold">
                      BIODATA KETUA
                    </span>
                </div>
                <div class="box-body wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Nama Ketua Kelompok</label>
                      <div class="col-sm-8"><input name="nama_ketua" v-model="leader_name"  id="leader_name" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Kebangsaan</label>
                      <div class="col-sm-8">
                        <select name="country" class="form-control countries order-pop group-continents group-order-as" @change="Kebangsaan($event)" id="countryId">
                          <option value="">Pilih Kebangsaan</option>
                        </select>                  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Provinsi</label>
                      <div class="col-sm-8">
                        <select name="state" @input="selected()" class="form-control states order-alpha" id="stateId">
                          <option value="">Pilih Provinsi</option>
                          @foreach ($prov as $data)
                          <option value="{{$data->kode}}">{{$data->nama}}</option>
                          @endforeach
                        </select>
                        <span><< selected >></span>                  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Kabupaten/Kota</label>
                      <div class="col-sm-8">
                        <select name="city" class="form-control cities order-alpha" id="cityId">
                          <option value="">Pilih Kabupaten/Kota</option>
                        </select>                  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <select name="jk_ketua" class="form-control">
                        <option value="">-</option>
                        <option value="L">Laki Laki</option>
                        <option value="P">Perempuan</option>						
                      </select>
                    </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="date" name="tanggal_lahir_ketua" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Jenis Identitas</label>
                      <div class="col-sm-8">
                      <select name="jenis_identitas_ketua" class="form-control">
                        <option value="">-</option>
                        <option value="KTP">KTP</option>
                        <option value="KTM">KTM</option>
                        <option value="SIM">SIM</option>
                        <option value="Passport">Passport</option>
                        <option value="Lainnya">Lainnya</option>
                      </select></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">No Telp/HP</label>
                      <div class="col-sm-8"><input name="no_hp_ketua" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">E-Mail</label>
                      <div class="col-sm-8"><input name="email_ketua" placeholder="alternatif email gunakan user@gmail.com" class="form-control"></div>
                    </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Alamat Rumah</label>
                        <div class="col-sm-8"><input name="alamat_ketua" class="form-control"></div>
                      </div>
                      <div class="form-group cnt-indentity-no">
                        <label class="col-sm-4 control-label text-right">Nomor Kartu Identitas</label>
                        <div class="col-sm-8"><input name="no_identitas_ketua" class="form-control"></div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Pekerjaan</label>
                        <div class="col-sm-8">
                          <select name="pekerjaan_ketua" class="form-control">
                          <option value="">-</option>
                          <option value="pns">PNS</option>
                          <option value="swasta">Swasta</option>
                          <option value="pelajar">pelajar/Mahasiswa</option>
                          <option value="lainnya">Lainnya</option>
          							</select></div>
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
                      <div class="col-sm-8">
                        <select name="wni" id="wni" v-model="wni"  class="form-control" >
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
                          </select>
                        </div>
                  </div>
                  {{-- <div id="tampil"></div> --}}
                  <div id="formwni">
                    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Jumlah Anggota WNA</label>
                                <div class="col-sm-8">
                                  <select name="wna" id="wna" v-model="wna" class="form-control" onchange="myFunctionwna()">
                                    <option value="0">0</option>
                                    <option v-for="key in total_anggota" :value="key">
                                      << key >>
                                    </option>

                                  </select>
                                </div>
                  </div>
                  

                  <div id="tampilwna">
                    
                  </div>
              </div>
              {{-- form buat wni hiddep --}}
                
                {{-- form buat wna hidden --}}
                <div class="hidden" id="formwna">
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Nama Anggota WNA</label>
                    <div class="col-sm-8"><input name="nama_wna[]" class="form-control"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select name="jk_wna[]" class="form-control">
                      <option value="">-</option>
                      <option value="L">Laki Laki</option>
                      <option value="P">Perempuan</option>						
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-4 control-label text-right">Kebangsaan</label>
                  <div class="col-sm-8">
                  <select name="kebangsaan_wna[]" class="form-control">
                    <option value="">Popular Country</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote d' Ivoire">Cote d' Ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji Islands">Fiji Islands</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern territories">French Southern territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakstan">Kazakstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia">Micronesia</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="North Korea">North Korea</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="R???union">R???union</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thail">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkeyand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands">Virgin Islands</option>
                    <option value="Virgin Islands">Virgin Islands</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Yugoslavia">Yugoslavia</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>						
                  </select>
                  </div>
                  </div>
                </div>
                  <div>
                    <span class="h-bold">
                      KONFIRMASI PEMESANAN
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
                          <td>Wisatawan Nusantara</td>
                          <td>Rp. {{$nusantara['kerja']->harga+$nusantara['kerja']->asuransi}},-</td>
                          <td>Rp. {{$nusantara['libur']->harga+$nusantara['libur']->asuransi}},-</td>
                        </tr>
                        <tr>
                          <td>Wisatawan Mancanegara</td>
                          <td>Rp. {{$mancanegara['kerja']->harga+$mancanegara['kerja']->asuransi}},-</td>
                          <td>Rp. {{$mancanegara['libur']->harga+$mancanegara['libur']->asuransi}},-</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-6">
                    <div>
                      <label for="#" class="control-label">
                        Rincian Pemesanan Tiket Elektronik Anda terdiri dari :
                      </label>
                    </div>
                    <div>
                      <label for="#" class="control-label paddingtop-20 h-bold">
                        <?php echo $tanggal?>
                      </label>
                    </div>
                    <div class="paddingtop-10">
                      {{-- @foreach ($errors as $data)
                    <option value="{{$data->kode}}">{{$data->kode}}={{$data->harga+$data->harga_asuransi}}</option>
                      @endforeach --}}
                      <div id="app_wni">
                        <span id="jumlah_wni"> << totalwni >></span> WNI X Rp. <span id="harga_wni">{{$nusantara["$hari"]->harga+$nusantara["$hari"]->asuransi}}</span>,-   :
                        <span style="font-weight: 700; color: #337ab7;">
                          Rp. << price_for_wni >>
                        </span>
                      </div>
                      <div>
                        << totalwna >> WNA X Rp. <span id="harga_wna">{{$mancanegara["$hari"]->harga+$mancanegara["$hari"]->asuransi}} </span>,-  : <span style="font-weight: 700; color: #337ab7;"> Rp. << price_for_wna >></span>
                      </div>
                    <input type="hidden" id="totalwni" name="totalwni" value="">
                      <input type="hidden" name="totalwna" :value="totalwna">
                      <input type="hidden" name="hargawni" value="{{$nusantara["$hari"]->harga+$nusantara["$hari"]->asuransi}}">
                      <input type="hidden" name="hargawna" value="{{$mancanegara["$hari"]->harga+$mancanegara["$hari"]->asuransi}}">
                      <input type="hidden" name="totalkendaraan" :value="jumlah_kendaraan">
                      <input type="hidden" name="hargakendaraan" :value="harga_kendaraan">
                      <input type="hidden" name="id_tiket_wni" value="{{$nusantara["$hari"]->id}}">
                      <input type="hidden" name="id_tiket_wna" value="{{$mancanegara["$hari"]->id}}">
                      <div>
                        << jumlah_kendaraan >> << nama_kendaraan >> X Rp. << harga_kendaraan >>,- : <span style="font-weight: 700; color: #337ab7;"> Rp. << harga_total_kendaraan >> </span>
                      </div>
                    </div>
                    <div >
                      Total : <span style="font-weight: 700; color: #337ab7;"> << total_semua_harga >> </span>
                    </div>
                    <div style="padding: 15px 0 0 0;">
                      <input type="submit" name="btn-booking-submit" class="btn btn-primary" value="Kirim" style="width: 150px;">
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <input type="text" hidden name="jumlah_harga_wni" id="jumlah_harga_wni" value="jumlah_harga_wni">
      </div>
    </section>  
  </form>
  <span></span>
</div>
<script type="application/javascript"> 
  // your code
 var app_wni = new Vue({
  el: '#app',
  delimiters: ["<<",">>"], 
  data: {
    seen: false,
    wni:0,
    ketua_wni: 0,
    ketua_wna: 0,
    leader_name: "",
    total_kendaraan: 0,
    kendaraans : [{
      object: "-"
    }],
    harga_kendaraan: 0,
    nama_kendaraan: "Tipe Kendaraan",
    jumlah_kendaraan: 0,
    wna: 0,
    max_anggota:0,
    selected: '',

  },
  mounted() {
  },
  methods:{
        Kendaraans(event){
          this.kendaraans = [];
          if(event.target.value === "3"){
            for(var i=0; i<=5; i++){
              this.kendaraans.push(
                {
                  object : i,
                }
              )
            }
          }
          else if(event.target.value === "4"){
            for(var i=0; i<=3; i++){
              this.kendaraans.push(
                {
                  object : i,
                }
              )
            }
          }
          else if(event.target.value === "5"){
            for(var i=0; i<=1; i++){
              this.kendaraans.push(
                {
                  object : i,
                }
              )
            }
          }
          else if (event.target.value == "-") {
            
            this.kendaraans.push(
              {
                object: '-',
              }
            )
          }
          console.log(event.target.value);
          this.harga_kendaraan = event.target.options[event.target.selectedIndex].dataset.harga;
          this.nama_kendaraan = event.target.options[event.target.selectedIndex].dataset.nama;
      },
      jumKendaraan(event){
        this.jumlah_kendaraan = event.target.value;
      },
      Kebangsaan(event){

        if (event.target.value == "Indonesia"){
         this.ketua_wni = 1;
         this.ketua_wna = 0;
        }
        else{
         this.ketua_wna = 1;
         this.ketua_wni = 0; 
        }
      },
      provinsi(event){
        console.log(event.target);
      }
     
  },
  computed: {
    price_for_wni: function(){
      const harga = parseInt(document.getElementById('harga_wni').textContent);
      return this.totalwni * harga;
    },
    price_for_wna: function(){
      const harga = parseInt(document.getElementById('harga_wna').textContent);
      return this.totalwna * harga;
    },
    totalwni(){
       
        var value = parseInt(this.wni)+this.ketua_wni;
        document.getElementById('totalwni').value = value;
        return value;
      },
    totalwna(){
      const total = parseInt(this.wna) + this.ketua_wna;
      return total;
    },
    total_semua_harga(){
      return this.price_for_wna + this.price_for_wni + this.harga_total_kendaraan;
    },
    harga_total_kendaraan(){
     const harga_total_kendaraan = parseInt(this.harga_kendaraan) * parseInt(this.jumlah_kendaraan);

     return harga_total_kendaraan;
    },
    total_anggota(){
      const anggota = parseInt(this.wni);
      return 9-anggota;
    }
    
    
  },
 
})

  /* myFunctionwni() {
    var x = document.getElementById("wni").value;
    var form = document.getElementById("formwni").innerHTML ;
  var text = "";
  var i;
  for (i = 0; i < x; i++) {
    text +=  form + "<br>";    
   }
   document.getElementById("tampil").innerHTML = text;
  }*/

  function myFunctionwna() {
    var x = document.getElementById("wna").value;
    var form = document.getElementById("formwna").innerHTML ;
  var text = "";
  var i;
  for (i = 0; i < x; i++) {
    text +=  form + "<br>";    
   }
   document.getElementById("tampilwna").innerHTML = text;
  }
  $(document).ready(function(){
    document.getElementById('wni').addEventListener('change', function(){
    var named = {};
    var text = "";
    console.log(named);
    var $wni_value = this.value;
    document.getElementById('formwni').innerHTML = '';

    for(var i=0; i<$wni_value; i++){
      named['provinsi'+i] = "kota"+i;
     text += `<div class="form-group">
                    <label class="col-sm-4 control-label text-right">Nama Anggota</label>
                    <div class="col-sm-8"><input name="nama_wni[]" class="form-control"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select name="jk_wni[]" class="form-control">
                      <option value="">-</option>
                      <option value="L">Laki Laki</option>
                      <option value="P">Perempuan</option>						
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <input type="date" name="tanggal_lahir_wni[]" class="form-control"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Jenis Identitas</label>
                    <div class="col-sm-8">
                      <select name="jenis_identitas_wni[]" class="form-control">
                        <option value="">-</option>
                        <option value="KTP">KTP</option>
                        <option value="KTM">KTM</option>
                        <option value="SIM">SIM</option>
                        <option value="Passport">Passport</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Nomor Kartu Identitas</label>
                    <div class="col-sm-8"><input name="no_identitas_wni[]" class="form-control"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">No Telp/HP</label>
                    <div class="col-sm-8"><input name="nohp_wni[]" class="form-control"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">E-Mail</label>
                    <div class="col-sm-8"><input name="email_wni[]" placeholder="alternatif email gunakan user@gmail.com" class="form-control"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label text-right">Kebangsaan</label>
                    <div class="col-sm-8"><select name="kebangsaan_wni[]" class="form-control" disabled>
                      <option value="indonesia">Indonesia</option>
                    </select></div>
                  </div>
                  <div id="lokasi`+i+`">  
                  <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Propinsi</label>
                      <div class="col-sm-8">
                        <select name="provinsi[]" id="provinsi`+i+`"v-model="selected" class="form-control">
                        <option value="">Pilih Provinsi</option>
                        @foreach ($prov as $data)
                        <option value="{{$data->kode}}">{{$data->nama}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label text-right">Kabupaten/Kota</label>
                      <div class="col-sm-8">
                        <select name="kota[]" id="kota`+i+`" data-provinsi="provinsi`+i+`" class="form-control">
                        </select>
                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Pekerjaan</label>
                        <div class="col-sm-8">
                          <select name="pekerjaan_wni[]" class="form-control">
                          <option value="">-</option>
                          <option value="pns">PNS</option>
                          <option value="swasta">Swasta</option>
                          <option value="pelajar">pelajar/Mahasiswa</option>
                          <option value="lainnya">Lainnya</option>
          							</select></div>
                      </div>
                    <br>`
    
                    document.getElementById('formwni').innerHTML = text;
    /*  var $provinsi = document.getElementsByName('provinsi');
      var $kota = document.getElementsByName('kota');
      $provinsi[i].addEventListener('change', function(){
        var $provinsi_value = this.value;
        var text = [];  
        $.ajax({
          url: "{{ url('wilayah')}}" + "/" + $provinsi_value,
          type: "GET",
          dataType: "json",
          success:function(data) {
              $('select[name="kota"]').empty();
              $.each(data, function(key, value) {
                text.push('<option value="'+ key +'">'+ value +'</option>');
                
              });
          }
        })
        console.log(i);
      });
      
    }*/
   }

   for(var i=0; i<$wni_value; i++){
     
    document.getElementById('provinsi'+i).addEventListener('change', function() {
      var $kota = named[this.id];
      var $value = this.value;
      $.ajax({
          url: "{{ url('wilayah')}}" + "/" + this.value,
          type: "GET",
          dataType: "json",
          success:function(data) {
              $.each(data, function(key, value) {
                //console.log($kota);
                if(key !== $value){
                  $('select[id="'+$kota+'"]').append('<option data-provinsi="'+this.id+'" value="'+ key +'">'+ value +'</option>');
                }                
                
              });
          
            }
              
        })
        $('select[id="'+$kota+'"]').empty();
    })
   }
  })

  })
  
</script>



{{-- <script type="application/javascript">
   
   $(document).ready(function() {
          $('select[name="provinsi"]').on('change', function() {
              var stateID = $(this).val();
              if(stateID) {
                  $.ajax({
                      url:  '{{ url('wilayah') }}' + '/' + $(this).val(),
                      type: "GET",
                      dataType: "json",
                      success:function(data) {
                          $('select[name="kota"]').empty();
                          $.each(data, function(key, value) {
                              $('select[name="kota"]').append('<option value="'+ key +'">'+ value +'</option>');
                          });
                      }
                  });
              }else{
                  $('select[name="kota"]').empty();
              }
          });
      });

</script> --}}


    <!-- /Section: boxes -->
    @endsection