<div id="qx-section-486" class="qx-section ">

  <!-- Shape -->
    
    <div class="qx-container">
  
    <div id="qx-row-47" class="qx-row ">
<?php
$affiche=$this->Mindex->selectService(); 
foreach($affiche as $i):
?>
    <div id="qx-column-5617" class="qx-column  qx-col-lg-3 qx-col-md-3 qx-col-sm-6 qx-col-xs-12">
  <div id="qx-text-8426" class="qx-element qx-element-text ">
  <div class="block-img-full"><a class="img-block" href="#"><img class="img-responsive" src="<?= base_url().'../../../assets/Home_fichiers/'.$i->image.'';?>" width="284px" height="177px" alt="Image"> </a>
<div class="text-box">
<h4 class="text-cap"><mark><?= $i->nom;?></mark></h4>
<p><?= $i->commentaire;?></p>
</div>
</div></div>
<!-- qx-element-text --></div>
<?php endforeach ;?>
<!-- qx-col -->  
  </div>
  <!-- qx-row -->

    </div>
  
</div>
