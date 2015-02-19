<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <h1>Tweets</h1>

		<div id="tweets">
				<h2>Loading tweets, please wait</h2>
		</div>
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>


		<script src="helper.js"></script>
		
		
		{literal} 
		<script id="tweet-template" type="text/x-handlebars-template">
		<div>
			<div>
				<img src="{{profile_image_url}}">
				<strong>{{user_name}}</strong>
				<span>(<a href="https://twitter.com/{{user_mention}}" target="_blank">@{{user_mention}})</a></span>
			</div>
			<div>
			<p>{{text}}</p>
			</div>
		</div>
		<br>
		</script>  
		{/literal} 
			
		
    </body>
</html>

