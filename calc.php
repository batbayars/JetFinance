<?php
echo '<section  class="site-section bg-light">';
echo '<div class="container">';
echo '<div class="row mb-5">';
echo '<div class="col-12 text-center" data-aos="fade">';
echo '<h2 class="section-title mb-3">Зээлийн тооцоолол</h2>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="row">';
echo '<div class="col-md-6" data-aos="fade-up" data-aos-delay="">';
echo '<form class="pg-5 bg-light">';
echo '';
echo '<div class="row form-group">';
echo '<div class="col-md-12" data-aos="fade-up" data-aos-delay="100">';
echo '<label class="text-black" for="Хугацаа">Хэмжээ</label> :';
echo '<input  type="text" name="hemjee" id="hemjee" size="10" value="1000000" class="form-control">';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="row form-group">';
echo '<div class="col-md-12" data-aos="fade-up" data-aos-delay="200">';
echo '<label class="text-black" for="Хугацаа">Хугацаа:</label>';
echo '<input type="number" name="hugatsaa" id="hugatsaa" size="10" value="12" class="form-control">';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="row form-group">';
echo '<div class="col-md-12" data-aos="fade-up" data-aos-delay="300">';
echo '<label class="text-black" for="Хүү">Хүү/жилээр/:</label>';
echo '<input type="number" name="huu" id="huu" size="10" value="1" class="form-control">';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="row form-group">';
echo '<div class="col-md-12" data-aos="fade-up" data-aos-delay="400">';
echo '<input type="button" value="Тооцоолох" class="btn btn-primary btn-md text-white" onclick="getp()" >';
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '<div class="col-md-6 text-center"  data-aos="fade-up" data-aos-delay="100">';
echo '<div  class="row form-group">';
echo '<h2 class="form-urdun mt-3 ">Сарын эргэн төлөлт:</h2>';
echo '</div>';
echo '<div class="row form-group">';
echo '<span class="form-urdun1" name="res_tololt" id="res_tololt"></span>';
echo '</div>';
echo '</div>';
echo '';
echo '';
echo '</section>';
?>