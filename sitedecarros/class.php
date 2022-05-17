<?php
    session_start();
?>
<html>
    <?php
        include 'includes/head.php';
        include 'includes/init.php';
    ?>
  <body style="background-image: url('fundo.jpg')"> 
  
  	<div class="conteudo">
  		<div class="classes">
          <div class="row">
            <div class="col s12 m3">
                <div class="card" >
                    <div class="card-image">
                    <img src="<?php echo $pecas['foto']; ?>" height="450">
                        <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                        <p><button>compre agora</button></p>
                    </div>
                    <div class="card-action">
                        <a href="#">link</a>
                    </div>
                </div>
            </div>    
  
            <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                <img src="<?php echo $pecas['foto']; ?>"height="450">
                <span class="card-title"></span>
                </div>
                <div class="card-content">
                <p><button>compre agora</button></p>
                </div>
                <div class="card-action">
                <a href="#">link</a>
                </div>
            </div>
            </div>
            <div class="col s12 m3">
            <div class="card" >
                <div class="card-image">
                <img src="<?php echo $pecas['foto']; ?>" height="450">
                <span class="card-title"></span>
                </div>
                <div class="card-content">
                <p><button>compre agora</button></p>
                </div>
                <div class="card-action">
                <a href="#">link</a>
                </div>
            </div>
            </div>
            <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                <img src="<?php echo $pecas['foto']; ?>" height="450">
                <span class="card-title"></span>
                </div>
                <div class="card-content">
                <p><button>compre agora</button></p>
                </div>
                <div class="card-action">
                <a href="#">link</a>
                </div>
            </div>
            </div>
 
                   
            
        </div>
    </div>
  </div>
        
        
        
        </div>
  	 </div> 








  
      <!-- Navbar -->
    
</body>
</html>