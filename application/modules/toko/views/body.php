 <input class="input100" type="text" id="nama" name="nama" placeholder="nama toko" value="<?= set_value('nama'); ?>" />
 <span class="focus-input100"></span>
 <span class="symbol-input100">
     <img src="<?= base_url('assets_toko/images/person-fill.svg'); ?>" alt="IMG" aria-hidden="true" />
 </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Email Aktif dibutuhkan">
     <input class="input100" type="text" id="email" name="email" placeholder="email toko"
         value="<?= set_value('email'); ?>" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <img src="<?= base_url('assets_toko/images/email.svg'); ?>" alt="IMG" aria-hidden="true" />
     </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="nomor">
     <input class="input100" type="text" id="nomor" name="nomor" placeholder="Nomor Hp"
         value="<?= set_value('nomor'); ?>" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <img src="<?= base_url('assets_toko/images/hp.svg'); ?>" alt="IMG" aria-hidden="true" />
     </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="alamat">
     <input class="input100" type="text" id="alamat" name="alamat" placeholder="alamat" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <img src="<?= base_url('assets_toko/images/home.svg'); ?>" alt="IMG" aria-hidden="true" />
     </span>
 </div>

 <div class="container-login100-form-btn">
     <button type="submit" class="login100-form-btn">Buat Toko</button>
 </div>
 </form>
 </div>
 </div>
 </div>