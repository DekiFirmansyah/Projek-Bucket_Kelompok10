@extends('layouts.admin')

@section('content')

<div class="center_content">
    <div class="left_content">
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>About us</div>
      <br><br>
      <div class="prod_img"><a href="#">
            <img style="width:250px; overflow: hidden" class="img-thumbnail" 
            src="images/about.gif" alt="" border="0" /></a>
      </div>
      <br><br>
      <div class="prod_det_box">
      <p class="details">Toko  : D2 Bouquet </p>
      <p class="details">Alamat : Jl. Soekarno Hatta No. 12 Malang </p>
      <p class="details">Email : dilde@gmail.com </p>
      <p class="details">No Telepon : 081234098111</p>
      <p class="details">Online Shop adalah kegiatan pembelian barang dan jasa melalui media Internet. 
        Melalui belanja lewat Internet seorang pembeli bisa melihat terlebih dahulu barang dan jasa yang hendak ia belanjakan melalui web yang dipromosikan oleh penjual.
        Sedangkan D2 Bouquet ini merupakan  D2 BOUQUET adalah salah satu online shop berbasis website dimana disini menyediakan berbagai jenis bouquet yang tertera pada
         website serta dapat memesan buket sesuai request pembeli. 
      </p>
          </div>
      

      <div class="clear"></div>
    </div>

   
    <!--end of left content-->
    <div class="right_content">
      
      <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="images/about.gif" alt="" class="right" /> D2 BOUQUET adalah salah satu online shop berbasis website dimana disini menyediakan berbagai jenis bouquet yang tertera pada website serta dapat memesan buket sesuai request pembeli. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" /></span>Promotions</div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb1.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb2.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb3.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" /></span>Nama Produk</div>
        <ul class="list">
          <li><a href="#">Bucket Bunga</a></li>
          <li><a href="#">Bucket Boneka</a></li>
          <li><a href="#">Bucket snack</a></li>
          <li><a href="#">Bucket uang</a></li>
          <li><a href="#">Bucket jilbab atau barang lainnya</a></li>
        </ul>
      </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
  </div>
@endsection


