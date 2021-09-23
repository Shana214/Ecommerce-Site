window.addEventListener('load' , () -> {
	const params = (new( URL(document.location)).searchParams;
	const name = params.get('product-name');
	
	document.getElementById('page-title').innerHTML = name;
})