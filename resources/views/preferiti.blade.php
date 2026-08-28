<!DOCTYPE html>
<html>
	<head>
        <script>
            const BASE_URL = "{{ url('/') }}/"
        </script>

		<meta charset="utf-8">
		<title>PicturesDB - favorites</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="./css/preferiti.css">
		<script src="{{ url('js/preferiti.js') }}" defer="true"></script>
	</head>

	<body>
		<header class="favorites-header">
			<span class="favorites-logo">PicturesDB</span>

			<h1>
				<strong>Your favorites</strong>
			</h1>
		</header>

		<section id="likes-info">
			<a href="{{url('home')}}" class="button">Back</a>
		</section>

		<section id = "error-view">	
		</section>
		
		<section id = "library-view">
		</section>

		<footer>
			<p>
				Image search powered by the Openverse API.
				This application is not endorsed or certified by Openverse.
			</p>

        	<p>Built by Mattia Raciti</p>
    	</footer>
	</body>
</html>