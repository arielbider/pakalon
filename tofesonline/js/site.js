window.addEventListener('load', (event) => {
	document.getElementById("workyear").value = new Date().getFullYear();

  textInputs = document.querySelectorAll('input\:not([type="checkbox"])');

	for (input of textInputs) {
		input.addEventListener('input', function(e) {
			submit_button = document.querySelector("body > div > form > div.btn-block > button");
		});
	}


	document.getElementById("submit").addEventListener('click', (event) => {
		var url = "tofes/index.php?";

		textInputs = document.querySelectorAll('input\:not([type="checkbox"])');

		for (input of textInputs) {
			if(input.value && input.id){
				url = url + "&" + input.id + "=" + input.value;
			}
		}

		hrigutInputs = document.querySelectorAll('input\[type="checkbox"]');

		var array_of_hrigut = "&reasons=[";

		for (hrigut of hrigutInputs) {
			if(hrigut.checked){
				let hrigut_name = hrigut.parentElement.getElementsByTagName("span")[0].innerHTML;
				hrigut_name = hrigut_name.replaceAll('"','');
				array_of_hrigut+= '"'+hrigut_name+'",';
			}
			console.log(hrigut.parentElement.getElementsByTagName("span")[0].innerHTML);
		}

		array_of_hrigut = array_of_hrigut.slice(0, -1);
		array_of_hrigut+="]";

		url = url + "&" + array_of_hrigut

		console.log(url);

		window.location.href = url;
	});
});
