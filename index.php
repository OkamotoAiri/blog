<?php
include('_header.php');
?>
  
<main>
    <h3>
    <span class="material-icons" id="photo">photo_camera</span>
    PHOTO
    </h3>

  <div id="app2">
   <carousel :per-page="1">
     <slide>
       <span class="label">
       <img src="images/IMG_4170.jpeg" alt="" width="450" height="300">
       </span>
     </slide>
     <slide>
       <span class="label">
       <img src="images/IMG_4802.jpeg" alt="" width="450" height="300">
       </span>
     </slide>
     <slide>
       <span class="label">
       <img src="images/IMG_2500.jpeg" alt="" width="450" height="300">
       </span>
     </slide>
     <slide>
       <span class="label">
       <img src="images/IMG_6523.jpeg" alt="" width="450" height="300">
       </span>
     </slide>
  </carousel>
</div>

    </main>
<?php
include('_footer.php');