<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Web project proto</title>
    
    <style type="text/css"> 
      .red{
        color: white;
        background-color:rgb(0,255,0,0.2); text-align: center;padding-bottom: 7px;
      }
     .menu{
        color: white;
        background-color:rgb(0,255,0,0.2); text-align: center;padding-bottom: 5px;padding-top: 5px;
      }
      .blue{
        color: white;
        background-color:rgb(0,50,255,0.2); text-align: left;border-color: black; border-bottom-width: 5px;
        padding-bottom: 10px;
         padding-top: 10px;

      }
      .white{
        color: red;
        background-color: white; text-align: left;align-items: center;
      }
      .lightgrey{
        color: lightgrey;
        background-color: lightgrey; text-align: left; padding-top: 2%; padding-bottom:  28%; 
      }
      .demo{
        color: white;
        background-color: grey; text-align: center;
        border-color: black; border-width: 5px;
        height: 150; width: 100;
      }

    .nav-link {color: black;border-color: black;
		border-bottom-width: 5px;text-align: left;align-items: center;}
	
	.nav-link:hover {color: blue;}
	.dropdown-item:hover {background-color: blue; color: red;}
	.flex-column{
		
		margin-left: -37px;
	}
    </style>
    
  </head>
  <body style="background:url(https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.15752-9/59178090_446544552767463_574694408348237824_n.png?_nc_cat=110&_nc_oc=AQn-96yNefjkXcSCAwgAIfFthNG_LlAeEs58AINq-dDRVWEw0H5UbMbcJ7ZQ_QqCtTc&_nc_ht=scontent.fsgn5-3.fna&oh=b7ff2d1c4e781782e263a0ffa660d56e&oe=5D657526); width: : 100%">
    
    <div class="container">
      
        <div class="col-md-12 blue">
          <div class="row">
            <div class="col-md-4 blue">
            <div>            

                <?php
                session_start();
                if (!isset($_SESSION["name"])) 
                {
                    header("location: TestWebProj.php");
                }
                echo "Hello " . $_SESSION['name'];
                ?>

                <button class="logout" onClick="window.location = 'logout.php'">Logout</button>
                <br>                <br>
                <br>
                <br>
                

            </div>
            
            </div>

            


            <div class="col-md-8 blue">
             
  <div class="col-md menu">
  Title

  </div>

            </div>
          </div>
        </div>
        
      
      <!-- A vertical navbar -->

<div style="padding-left: 15px;padding-right:  15px;  padding-top: 25px" class="row">
  
<nav class="col-md-2 lightgrey">

  <!-- Links -->

  <ul class="flex-column">
      <li class="nav-item">
              <a href="#" class="nav-link active" >Home</a>
            </li>
            <hr>
            <li class="nav-item dropdown" >
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expand="false">Units</a>
              <div class="dropdown-menu">
                <div class="dropdown-item" id="1star">Rank 1</div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item" id="2star">Rank 2</div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item" id="3star">Rank 3</div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item" id="4star">Rank 4</div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item" id="5star">Rank 5</div>
                <div class="dropdown-divider"></div>
              </div>
            
            </li>
            <hr>
            <li class="nav-item">
            	
              	<a href="#" class="nav-link" role="button" id="runeAl">Runes</a>
            </li>
           
  </ul>

</nav>

 <div class="col-md-10 red">
   <div style="margin: 1.25% 2.5% 5% 0px;padding:10px 10px 10px 10px;height: 95%;" class="col-md-12 white"> 
    	 <script>
    	 	$(document).ready(function(){
    	 		$("#runeAl").click(function(e){
    	 			$.ajax({
    	 				type:"POST",
    	 				url:"sauceEx.php",
    	 				success:function(result,status,xhr){
    	 					$("#runephp").html(result);
    	 				},
    	 				error:function(xhr,status,error){
    	 					$("#runephp").html(error);
    	 				}
    	 			})
    	 		});
    	 	});

    	 </script>
    	 <p id="runephp"></p>
    	
    	

    	  <script>
    	 	$(document).ready(function(){
    	 		$("#5star").click(function(e){
    	 			$.ajax({
    	 				type:"POST",
    	 				url:"units.php",
    	 				data:{rank: '5'},
    	 				success:function(result,status,xhr){
    	 					$("#runephp").html(result);
    	 				},
    	 				error:function(xhr,status,error){
    	 					$("#runephp").html(error);
    	 				}
    	 			})
    	 		});
    	 	});

    	 </script>
    	 <script>
    	 	$(document).ready(function(){
    	 		$("#4star").click(function(e){
    	 			$.ajax({
    	 				type:"POST",
    	 				url:"units.php",
    	 				data:{rank: '4'},
    	 				success:function(result,status,xhr){
    	 					$("#runephp").html(result);
    	 				},
    	 				error:function(xhr,status,error){
    	 					$("#runephp").html(error);
    	 				}
    	 			})
    	 		});
    	 	});

    	 </script>
    	 <script>
    	 	$(document).ready(function(){
    	 		$("#3star").click(function(e){
    	 			$.ajax({
    	 				type:"POST",
    	 				url:"units.php",
    	 				data:{rank: '3'},
    	 				success:function(result,status,xhr){
    	 					$("#runephp").html(result);
    	 				},
    	 				error:function(xhr,status,error){
    	 					$("#runephp").html(error);
    	 				}
    	 			})
    	 		});
    	 	});

    	 </script>
    	 <script>
    	 	$(document).ready(function(){
    	 		$("#2star").click(function(e){
    	 			$.ajax({
    	 				type:"POST",
    	 				url:"units.php",
    	 				data:{rank: '2'},
    	 				success:function(result,status,xhr){
    	 					$("#runephp").html(result);
    	 				},
    	 				error:function(xhr,status,error){
    	 					$("#runephp").html(error);
    	 				}
    	 			})
    	 		});
    	 	});

    	 </script>
    	 <script>
    	 	$(document).ready(function(){
    	 		$("#1star").click(function(e){
    	 			$.ajax({
    	 				type:"POST",
    	 				url:"units.php",
    	 				data:{rank: '1'},
    	 				success:function(result,status,xhr){
    	 					$("#runephp").html(result);
    	 				},
    	 				error:function(xhr,status,error){
    	 					$("#runephp").html(error);
    	 				}
    	 			})
    	 		});
    	 	});

    	 </script>
    	 


   </div>
 </div>

</div>

        <div class="col-md-12 blue">
          sth here later
      </div>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>