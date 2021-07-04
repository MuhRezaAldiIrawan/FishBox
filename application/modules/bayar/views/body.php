 <input class="input100" type="text" id="nama" name="nama" placeholder="Nama Lengkap"
     value="<?= set_value('nama'); ?>" />
 <span class="focus-input100"></span>
 <span class="symbol-input100">
     <img src="<?= base_url('assets_toko/images/person.svg'); ?>" alt="IMG" aria-hidden="true" />
 </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Alamat dibutuhkan">
     <input class="input100" type="text" id="alamat" name="alamat" placeholder="Alamat"
         value="<?= set_value('alamat'); ?>" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <img src="<?= base_url('assets_bayar/images/house.svg'); ?>" alt="IMG" aria-hidden="true" />
     </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Metode Pembayaran">
     <input class="input100" type="text" id="metode" name="metode" placeholder="Masukan Metode Bayar"
         value="<?= set_value('metode'); ?>" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <img src="<?= base_url('assets_bayar/images/card.svg'); ?>" alt="IMG" aria-hidden="true" />
     </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Jumlah Pembayaran">
     <input class="input100" type="text" id="jumlah" name="jumlah" placeholder="Jumlah Bayar" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <img src="<?= base_url('assets_bayar/images/cash.svg'); ?>" alt="IMG" aria-hidden="true" />
     </span>
 </div>

 <div class="container-login100-form-btn">
     <button type="submit" class="login100-form-btn">Bayar</button>
 </div>
 </form>
 </div>
 </div>
 </div>