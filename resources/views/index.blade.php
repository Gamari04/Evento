<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    
    <title>Document</title>
</head>
<body>
    <style>
        .cstm-height-card .card-img-top {
  height: 100px;
  object-fit: cover;
}
    </style>
    <div class="container">
		
		<div class="row mb-5">
			<div class="col-md-4">
				<div class="card">
					<img src="https://source.unsplash.com/random/1920x1080" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{ asset('images/wp.jpg') }}" class="card-img-top" alt="..." >
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://source.unsplash.com/random/1920x1080" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
		<!-- row -->
		<h3>Same height for image (Suitable for dynamic different size images) ―</h3>
		<div class="row mb-5 cstm-height-card">
			<div class="col-md-4">
				<div class="card">
					<img src="https://source.unsplash.com/random/1200x900" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://source.unsplash.com/random/1500x800" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://source.unsplash.com/random/1400x700" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-6">
				<div class="card mb-3">
					<div class="row no-gutters align-items-center">
						<div class="col-md-4">
							<img src="https://source.unsplash.com/random/600x800" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card mb-3">
					<div class="row no-gutters align-items-center">
						<div class="col-md-4">
							<img src="https://source.unsplash.com/random/600x800" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- row -->
	</div>
</body>
</html>