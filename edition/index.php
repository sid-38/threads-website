<?php


include '../common/con.php';
  
$id=$_GET['id'];
$sql="SELECT * FROM edition where visible=1 order by id desc";
$edit=$conn->query($sql);  


$sql="SELECT * FROM edition where id=$id";
$curedit=$conn->query($sql);
$cureditrow=$curedit->fetch_assoc();



  
?>

	<html>


	<head>
		<title>Threads</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
	<link href="/styles/post.css" rel="stylesheet"> 
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	
		<body>
		<!-- <div class="header">-->

	<div class="col l12">
 
										<img class="l12 threads-ribbon" src="/styles/topbar.png"/> 
			
		<img class="responsive-img threads-logo" src="/styles/threads-logo.png">
		</div>
			
 
<div class="row">
	
		<div class="col s2 offset-s1">
									<div class="row">
									
										<div id="article-nav">
															
																<div class="editiontitle" id="editiontitle">ARTICLES </div>
                                  
										</div>

	

											</div>
									<div class="row">

									<div id="edition-nav">
								      <!-- Dropdown Trigger -->
  <a class='dropdown-trigger btn editiontitle grey darken-2' href='#' data-target='dropdown1'>Editions</a>
                     <!-- Dropdown Structure -->
                     
  <ul id="dropdown1" class="dropdown-content">
																<?php 
    $i=0;
																while($w=$edit->fetch_assoc())
																{
                                  
                                  if($i==0)
                                  {
                                    $curname=substr($w["name"],0,3);
                                    $curyear=$w["year"];
                                    $i=1;
                                  }
                                  $curid=$w["id"];
                                  $cname=$w["name"];
                                  $cyear=$w["year"];
																			?>
                                  
    <li onclick="initpage(<?php echo $curid; ?>,-1,true,this.getAttribute('edname'),this.getAttribute('eyear'));" edname="<?php echo  substr($cname,0,3);; ?>" eyear="<?php echo  $cyear; ?>"><a href="#!"><?php  echo $w["name"];	?></a></li>
    
  
        
												

																<?php



																}
																?>
    </ul>
									</div>

									</div>
									</div>

	<div class="col s8">
				<div class="row">
					
					<div class="col offset-s6 s4">
						<div class="edyear">
							
						<span class="top-edition-text" id="top-edition-text">AUG</span>
										<span class="top-edition-text">.</span>
						<span class="top-edition-year-text" id="top-edition-year">2018</span>
				
						</div>
						</div>
		</div>
		<div class="row">
			<div class="col">
									<div class="article-box" id="article-box">
										<div class="title-box" id="title-box">
										</div>
								 <div class="authordetails" id="authordetails">
													<div class="authorphoto" id="authorphoto">
													</div>
													<div class="authorname" id="authorname">Arjun Suresh
													</div>
													<div class="authorbio" id="authorbio">Something Something
													</div>
										</div>
											
										<div class="content-box" id="content-box">
										</div>
										
			
		
		</div>
			</div>
				
				
									</div>

		</div>
	</div>
	

<div class="z-depth-2 newfooter" style="background : url('/webimages/bottombar.png'); background-size:cover; ">
  <div class='container row show-on-large hide-on-med-and-down ' style='padding-top:1%;padding-bottom:1%; ' >
   
      <div class="col m6 s6">
        <img class="responsive-img" src="/webimages/About.png">
        <img class="responsive-img" src="/webimages/CSEA.png">
        <img class="responsive-img" src="/webimages/CSED.png">
      </div>
          <div class="col m3 s12">
        <img class="responsive-img" src="/webimages/copyright.png">
    </div>
      <div class="col m1 s6">
        <img class="responsive-img" src="/webimages/csea-logo.png">
    </div>
      <div class="col m1 s6">
         <img class="responsive-img" src="/webimages/CSED-logo.png">
      </div>
  </div>
  
  
   <div class='container row show-on-medium-and-down hide-on-large-only' style='padding-top:1%;padding-bottom:1%; margin:0 auto;' >
   
      <div class="col m12 s12" >
        <img class="responsive-img" src="/webimages/About.png" style='padding:2px;'>
        <img class="responsive-img" src="/webimages/CSEA.png" style='padding:2px;'>
        <img class="responsive-img" src="/webimages/CSED.png" style='padding:2px;'>
      </div>
     
     
              <div class="col m1 s3 offset-s2">
        <img class="responsive-img" src="/webimages/csea-logo.png">
    </div>
      <div class="col m1 s3 offset-s2">
         <img class="responsive-img" src="/webimages/CSED-logo.png">
      </div>
       <div class="col m3 s12" style='padding:3px;bottom:10px; margin: 1px auto;'>
        <img class="responsive-img" src="/webimages/copyright.png">
    </div>

  </div>
    </div>

		<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    options={};
    var instances = M.Dropdown.init(elems, options);
  });
			/* 
     var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;
			
			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var dropdownContent = this.nextElementSibling;
			    var current = document.getElementsByClassName("selected");
			    if(current.length>0){
			    current[0].className = current[0].className.replace(" sidenav-selected", "");}
			    this.className += " sidenav-selected"; //<!--Dude, I copied and refined the code from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_active_element  but it is not working, can you check?-->
			    if (dropdownContent.style.display === "block") {
			      dropdownContent.style.display = "none";
			   
			    } else {
			      dropdownContent.style.display = "block";
			    
			    }
			  });
			}*/

			function loadarticle(id) {
        $('.dropdown-btn-selected').removeClass().addClass("dropdown-btn");
        $('[eid='+id+']').removeClass();
        $('[eid='+id+']').addClass("dropdown-btn-selected")
				/*
  
				<div class="article" id="article">
				  
				  <!--- to render article -->
				  
				  <div id="articletitle">
				    
				  </div>
				  
				  <div id="content">
				    
				  </div>
				   
				</div>
  
  
				*/
 
				$.get("/getarticle.php?id=" + id, function(data) {
  
					var article = JSON.parse(data);

					var i;

					$('#title-box').empty();
					
					$('#content-box').empty();
					$('#title-box').html(article.title);

					$('#viewcount').html(article.viewcount+" Views");
					$('#content-box').html(article.content);
					$('#authorbio').html(article.authorshortbio);
			
				$('#authorname').html(article.authorname);
				
					$('#authorphoto').html();
						var div = $("<img>", {
							"src":article.authorphoto
									});
					
				//	$('#authorbio').append(div);
				});
				$('#article-box').show();
				$('#articles').hide();
				
			
			}
			function loadarticlelist(id,loadfirstarticle) {
			 
        
      
        
        
        $('.dropdown-btn').remove();
         $('.dropdown-btn-selected').remove();
			
				$.get("../getarticlelist.php?id=" + id, function(data) {

					var articles = JSON.parse(data);
					
					var i;

					 
					for (i = 0; i < articles.length; i++) { 
						var title = $(document.createElement('div')).attr({eid:articles[i].id,onclick:"loadarticle("+articles[i].id+");"});
						if(loadfirstarticle&&i==0){
            title.addClass("dropdown-btn-selected");
              loadarticle(articles[i].id);
            }
              else{title.addClass("dropdown-btn");
            }
            
						title.html(articles[i].title);
						$('#article-nav').append(title);
		
					}

				});




			}
      
		 function selectarticle(idd)
			{
         
				 loadarticle(idd)
				
			}
		
			
			function initpage(editionid,articleid,loadfirstarticle,edname,edyear)
			{
      
        $('#top-edition-text').html(edname);
        $('#top-edition-year').html(edyear);
				
        loadarticlelist(editionid,loadfirstarticle);
        if(loadfirstarticle==false){
				          selectarticle(articleid);
				}
			}
			$( document ).ready(function() {
     
        //load firstg current edition
        initpage(10,11,false,"<?php echo $curname; ?>","<?php echo $curyear; ?>");
});
      
		</script>
	</body>

	</html>