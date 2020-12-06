<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "jet";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password,$db);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "select * from news";

// if($result = mysqli_query($conn,$sql))
// {
//   while ($row = mysqli_fetch_row($result)) {
//     printf ("%s (%s)\n", $row[0], $row[1]);
//   }
//   mysqli_free_result($result);
// }

// mysqli_close($conn);

echo '<section class="site-section" id="blog-section">';
echo '<div class="container">';
echo '<div class="row mb-5">';
echo '<div class="col-12 text-center" data-aos="fade">';
echo '<h2 class="section-title mb-3">Мэдээ мэдээлэл</h2>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="row">';
echo '<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">';
echo '<div class="h-entry">';
echo '<a href="single.html">';
echo '<img src="images/img_1.jpg" alt="Image" class="img-fluid">';
echo '</a>';
echo '<h2 class="font-size-regular"><a href="#" target="_blank">A Basic Guide to Starting a Franchise in the Philippines</a></h2>';
echo '';
echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>';
echo '<p><a href="#">Continue Reading...</a></p>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">';
echo '<div class="h-entry">';
echo '<a href="single.html">';
echo '<img src="images/img_4.jpg" alt="Image" class="img-fluid">';
echo '</a>';
echo '<h2 class="font-size-regular"><a href="#">A Basic Guide to Starting a Franchise in the Philippines</a></h2>';
echo '';
echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>';
echo '<p><a href="#">Continue Reading...</a></p>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">';
echo '<div class="h-entry">';
echo '<a href="single.html">';
echo '<img src="images/img_3.jpg" alt="Image" class="img-fluid">';
echo '</a>';
echo '<h2 class="font-size-regular"><a href="#">A Basic Guide to Starting a Franchise in the Philippines</a></h2>';
echo '';
echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>';
echo '<p><a href="#">Continue Reading...</a></p>';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '</section>';
?>