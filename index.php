<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My projects</title>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		
		 <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }
			
			#menu{
				float: right;
			}
			.content{
				clear :right;
				text-align:center;
			}
			
			#menu .title{
				display: inline-block;
				vertical-align: top;
				padding: 20px 0 0 20px;
			}
			#menu a{
				text-decoration: none;
				color: #636b6f;
			}
			#menu .lien a{
				display: block;
			}
			#menu .lien a:hover, .links > a:hover{
				color: orange;
				text-decoration: underline;
				font-weight: bold;
				font-style: italic;
			}
			#menu .lien{
				position: relative;
				top: 10px;
			}
			#menu span{
				cursor: pointer;
				color: #636b6f;
				font-size: 20px;
				font-weight: 600;
				text-transform: uppercase;
			}
			
			.links > a{
				color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
			}
			.m-b-md{
				
				color: #636b6f;
                padding: 0 25px;
                font-size: 45px;
                font-weight: 600;
			}
            
			
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
			<div id="menu">
				<div class="title">
					<span><a href="">Home</a></span>
				</div>

				<div class="title">
					<span>Source codes</span>
					<div class="lien">
						<a href="https://github.com/JackDarkWeb/jackPortfolio">My portfolio</a>
						<a href="https://github.com/JackDarkWeb/url-shortener">Shortener</a>
						<a href="">RoyalNews</a>
						<a href="">Babor</a>
						<a href="">Facture Flash Service</a>
						<a href="">Waba</a>
					</div>
				</div>
            </div>
            

            <div class="content">
                <div class="m-b-md">
                    My projects
                </div>

                <div class="links">
                    <a href="http://myprojets.site/portfolio">My portfolio</a>
                    <a href="http://myprojets.site/shortener">Shortener</a>
                    <a href="http://myprojets.site/royalnews">RoyalNews</a>
                    <a href="http://myprojets.site/babor">Babor</a>
                    <a href="http://myprojets.site/factureflashservice">Facture Flash Service</a>
                    <a href="http://myprojets.site/waba">Waba</a>
                </div>
            </div>
			
        </div>
		
		<script>
		     $(function(){
				 
				$('#menu .lien').hide();
				$('#menu .title:last-child span').click(function(){
					
					$('#menu .lien').toggle('slow');
				});
			 });
		</script>
    </body>
</html>
