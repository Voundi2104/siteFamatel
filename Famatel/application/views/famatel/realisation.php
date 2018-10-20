
    <div id="qx-row-99440" class="qx-row ">

    <div id="qx-column-77447" class="qx-column  qx-col-lg-12 qx-col-md-12 qx-col-sm-12 qx-col-xs-12">
  <div id="qx-text-93450" class="qx-element qx-element-text ">
  <div class="promotion-box">
  <?php 
  $affiche=$this->Mindex->selectRealisation();
  foreach($affiche as $i):
  ?>
<figure class="effect-layla"><img src="<?= base_url().'../../../assets/Home_fichiers/'.$i->image.'';?>" alt="img06">
<figcaption>
<h3 class="text-cap white-text"><?= $i->nom;?></h3>
<p><?= $i->commentaire;?></p></figcaption>
</figure>
<?php endforeach;?>
</div></div>
<!-- qx-element-text --></div>
<!-- qx-col -->
    
  </div>
  <!-- qx-row -->

  
</div>
<!-- qx-section -->

<div id="qx-section-1510" class="qx-section custom-icon">

