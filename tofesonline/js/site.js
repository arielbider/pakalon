window.addEventListener('load', (event) => {
	document.getElementById("workyear").value = new Date().getFullYear();

  textInputs = document.querySelectorAll('input\:not([type="checkbox"])');

	for (input of textInputs) {
		input.addEventListener('input', function(e) {
			submit_button = document.querySelector("body > div > form > div.btn-block > button");
      console.log(this.id);
		});
	}
});
