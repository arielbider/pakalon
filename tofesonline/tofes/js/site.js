var signature;
var params;

window.addEventListener('load', (event) => {

	// Parse vars from URL
	const urlSearchParams = new URLSearchParams(window.location.search);
	params = Object.fromEntries(urlSearchParams.entries());

	// Enter personal id to its place
	if (params["personal_id"]) {
		for (let i = 0; i < 7; i++) {
			document.querySelector("body > div > div.tofes > div.id-table > table > tbody > tr.first-row > td:nth-child(" + (8 - i) + ")").innerHTML = params["personal_id"][i];
		}
	}

	// Enter rank to its place
	if (params["rank"]) {
		document.querySelector("body > div > div.tofes > div.id-table > table > tbody > tr.first-row > td:nth-child(9)").innerHTML = params["rank"]
	}

	// Enter last name to its place
	if (params["last_name"]) {
		document.querySelector("body > div > div.tofes > div.id-table > table > tbody > tr.first-row > td:nth-child(10)").innerHTML = params["last_name"]
	}

	// Enter first name to its place
	if (params["first_name"]) {
		document.querySelector("body > div > div.tofes > div.id-table > table > tbody > tr.first-row > td:nth-child(11)").innerHTML = params["first_name"]
	}

	// Enter work year to the first paragraph
	if (params["workyear"]) {
		document.querySelector("body > div > div.tofes > p.vitur-p > span").innerHTML = "<u>" + params["workyear"] + "</u>"
	}

	// Enter miluim start date to its place
	if (params["miluim_start"]) {
		let date = params["miluim_start"];
		date = date.split("-");
		document.querySelector("body > div > div.tofes > div.vitur-dates > table:nth-child(3) > tbody > tr > td:nth-child(3)").innerHTML = date[0];
		document.querySelector("body > div > div.tofes > div.vitur-dates > table:nth-child(3) > tbody > tr > td:nth-child(2)").innerHTML = date[1];
		document.querySelector("body > div > div.tofes > div.vitur-dates > table:nth-child(3) > tbody > tr > td:nth-child(1)").innerHTML = date[2];
	}

	// Enter miluim end date to its place
	if (params["miluim_end"]) {
		let date = params["miluim_end"];
		date = date.split("-");
		document.querySelector("body > div > div.tofes > div.vitur-dates > table:nth-child(5) > tbody > tr > td:nth-child(3)").innerHTML = date[0];
		document.querySelector("body > div > div.tofes > div.vitur-dates > table:nth-child(5) > tbody > tr > td:nth-child(2)").innerHTML = date[1];
		document.querySelector("body > div > div.tofes > div.vitur-dates > table:nth-child(5) > tbody > tr > td:nth-child(1)").innerHTML = date[2];
	}

	// Enter date of sign to its place
	if (params["date_of_sign"]) {
		let date = params["date_of_sign"];
		date = date.split("-");
		date = date[2] + "/" + date[1] + "/" + date[0];
		document.querySelector("body > div > div.tofes > div.signature > div:nth-child(1) > p:nth-child(2)").innerHTML = "<u>" + date + "</u>";
	}

	// Get the signature of the soldier, in order to paste it on various places
	getSignature();
});

function getSignature() {
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// Show to Model
	modal.style.display = "block";

	// Make Signature Pad
	var canvas = document.querySelector("canvas");
	var signaturePad = new SignaturePad(canvas, {
    minWidth: 5,
    maxWidth: 10,
});

	canvas.width = canvas.parentElement.clientWidth;
	canvas.height = 0.5 * screen.height;

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		signature = signaturePad.toDataURL();
		pasteSignature();
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			signature = signaturePad.toDataURL();
			pasteSignature();
			modal.style.display = "none";
		}
	}
}

function pasteSignature() {
	if (params["reasons"]) {
		let reasons = JSON.parse(params["reasons"]);
		console.log(reasons);
		for (let i = 2; i < 14; i++) {
			let curr_harig = document.querySelector("body > div.container > div.tofes > div.hrigot-table > table > tbody > tr:nth-child(" + i + ") > td:nth-child(1) > b").innerHTML;
			console.log(curr_harig);
			console.log(reasons.includes(curr_harig));
			if (reasons.includes(curr_harig)) {
				harig_signature = document.querySelector("body > div.container > div.tofes > div.hrigot-table > table > tbody > tr:nth-child(" + i + ") > td:nth-child(3)");
				harig_signature.innerHTML = '<img src="' + signature + '" style="width: 100%;">';
			}
		}
		document.querySelector("body > div.container > div.tofes > div.signature > div.soldier-all-signature > p:nth-child(2)").innerHTML = '<img src="' + signature + '" style="width: 100px;">';
	}
}
