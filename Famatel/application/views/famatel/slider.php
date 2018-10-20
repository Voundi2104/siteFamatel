<style>
@keyframes slider{
    0%{
        left:0%;
        }
    20%{
        left:0%;
        }
    25%{
        left:-100%;
        }
    45%{
        left:-100%;
        }
    50%{
        left:-200%;
        }
    70%{
        left:-200%;
        }
    75%{
        left:-300%;
        }
    95%{
        left:-300%;
        }
    100%{
        left:-400%;
        }
  }
    .slider{
        overflow:hidden;   
    }
    .slider figure img{
    width:10%;
    float:left;
    }
    .slider figure{
        position:relative;
        width:500%;
        margin-left:0;
        left:0;
        animation: 20% slider infinite;
    }
</style>
<div class="slider">
<figure>
<img src="<?= base_url().'../../../assets/Home_fichiers/1.jpg';?>">
<img src="<?= base_url().'../../../assets/Home_fichiers/2.jpg';?>">
<img src="<?= base_url().'../../../assets/Home_fichiers/3.jpg';?>">
</figure>
</div>
