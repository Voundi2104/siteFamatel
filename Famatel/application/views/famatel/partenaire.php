
<div id="qx-section-692536" class="qx-section ">

  <!-- Shape -->
    
    <div class="qx-container">
  
    <div id="qx-row-122537" class="qx-row ">

    <div id="qx-column-442550" class="qx-column  qx-col-lg-12 qx-col-md-12 qx-col-sm-12 qx-col-xs-12">
  <div id="qx-heading-922789" class="qx-element qx-element-heading ">
  <div class="section-title">

    
            <h2 class="qx-title"> 
          Our Partners 
        </h2>
    
          
  </div>
</div><div id="qx-carousel-792553" class="qx-element qx-element-carousel custom-client swiper-container swiper-container-horizontal" dir="ltr">

  <!-- Start Slider Wrapper -->
  <div class="swiper-wrapper" style="transform: translate3d(-292.5px, 0px, 0px); transition-duration: 0ms;">
  <?php
  $affiche=$this->Mindex->selectPartenaire(); 
  foreach($affiche as $i):
  ?>
                <div class="qx-carousel-item swiper-slide swiper-slide-prev" style="width: 262.5px; margin-right: 30px;">

                  <img class="square" src="<?= base_url().'../../../assets/Home_fichiers/'.$i->image.'';?>" alt="Client 1">
        
                

      </div>
      <?php endforeach;?>
  </div>
  <!-- End Slider Wrapper -->

  <!-- Start Pagination Control -->
    <!-- End Pagination Control -->

  <!-- Start Arrow control -->
      <div class="swiper-button-prev"></div>
    <div class="swiper-button-next swiper-button-disabled"></div>
    <!-- End Arrow Control -->
</div>
<!-- qx-element-carousel -->

</div>
<!-- qx-col -->
    
  </div>
  <!-- qx-row -->

    </div>
  
</div>

