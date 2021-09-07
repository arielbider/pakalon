var user;

window.addEventListener('load', (event) => {
	var name;

	// Request name from user
	if (document.cookie) {
		name = getCookie("name");
		if (name && name != "") {
			document.getElementById("name").innerHTML = "שלום " + name;
		} else {
			setName();
		}
	} else {
		setName();
	}

	user = new User(name);
	// getUniqueIdFromServer();

	initTdColoring();
	initSettingsModal();
	initHowToUse();
});

function initTdColoring() {
	// Add to tds the function of coloring
	tds = document.getElementsByClassName('container')[0].getElementsByTagName('td');
	number = 1;

	for (td of tds) {

		// Set number to each point
		td.dataset.number = number;
		number += 1;

		// Listen to click on each td, to mark it and send it to server
		td.addEventListener('click', function(e) {
			tdToMark = e.srcElement.closest("td");

			if (tdToMark.innerHTML != "") {
				if (tdToMark.className == "shipur") {
					tdToMark.className = "shimur";
					if (user.getIsConnected) {
						sendToServer(2);
					}
				} else if (tdToMark.className == "shimur") {
					tdToMark.className = "";
					if (user.getIsConnected) {
						sendToServer(2);
					}
				} else {
					tdToMark.className = "shipur";
					if (user.getIsConnected) {
						sendToServer(1);
					}
				}
			}
		});
	}
}

function initHowToUse() {
	document.getElementById('how-to-use-expend').addEventListener('click', function() {
		var explanation = document.getElementById('explanation');
		if (explanation.style.display == 'none' || explanation.style.display == '') {
			explanation.style.display = 'block';
		} else {
			explanation.style.display = 'none';
		}
	});
}

function getCookie(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

function connectToServer() {

}

function createServer() {

}

function initSettingsModal() {
	// Get the modal
	var modal = document.getElementById("settingsModal");
	// Get the button that opens the modal
	var btn = document.getElementById("gear");
	// Get the <span> element that closes the modal
	var span = document.getElementById("settings-modal-close");
	// When the user clicks the button, open the modal
	btn.onclick = function() {
		modal.style.display = "block";
		btn.src = "img/gear-icon.png";
	}
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

	initSettingsPanel();
}


// Function to init Settings Panel's initFunctions
function initSettingsPanel() {
	initClassConnectionId();
	initClassCreation();
	initClassConnection();
}

// On every digit of ClassId input, jump to next number
function initClassConnectionId() {
	var idDigits = document.querySelectorAll(".classId");
	for (var i = 0; i < idDigits.length; i++) {
		let idDigit = idDigits[i];
		idDigit.dataset.digit = idDigits.length - i;
		if (i > 0) {
			idDigit.addEventListener('input', function(e) {
				digitNumber = e.target.dataset.digit;
				document.querySelector("[data-digit='" + (parseInt(digitNumber) + 1) + "']").focus();
			});
		}
		idDigit.addEventListener('focus', function(e) {
			e.target.value = "";
		});
	}
}

// Create Class Id creation proccess
function initClassCreation() {
	document.getElementById("createButton").addEventListener('click', function(e) {
		let request = new XMLHttpRequest();
		request.onload = function() {
			console.log(request.response);
			user.setClassId = request.response;
			user.setIsConnected = true;
			user.setIsAdmin = true;
			document.getElementById("roomConnection").style.display = "none";
			document.getElementById("createButton").style.display = "none";
			document.getElementById("loading").remove();
			var createdId = document.getElementById("createdId");
			createdId.innerHTML = request.response;
			createdId.style.display = "block";
			document.getElementById("points-view").style.display = "table";
		};
		var url = "server/create_room.php?name=" + user.getName;
		request.open('GET', url);
		request.responseType = 'text';
		var img = document.createElement('img');
		img.src = "img/loading.gif";
		img.id = "loading";
		document.getElementById("roomCreation").appendChild(img);
		request.send();
	});
}

// Add to last digit listener, get full class Id, check if it exists, if it does
// then, set relevent variables in User object

function initClassConnection() {
	document.querySelector("[data-digit='7']").addEventListener('input', function(e) {
		e.target.blur();
		let digits = document.querySelectorAll("[data-digit]");
		var finalClassId = '';
		for (digit of digits) {
			if (digit.value) {
				finalClassId += digit.value;
			} else {
				return '';
			}
		}
		finalClassId = finalClassId.split('').reverse().join('');
		let request = new XMLHttpRequest();
		request.onload = function() {
			document.getElementById("loading").remove();
			if (request.response == "1") {
				user.setClassId = finalClassId;
				user.setIsConnected = true;
				user.setIsAdmin = false;
				existingP = document.getElementById("isConnectedP");
				if (existingP) {
					existingP.innerHTML = "מחובר לחדר " + finalClassId;
				} else {
					var p = document.createElement("p");
					p.id = "isConnectedP"
					p.innerHTML = "מחובר לחדר " + finalClassId;
					document.getElementById("roomConnection").appendChild(p);
				}
			}
		};

		var url = "server/check_room_exists.php?classId=" + finalClassId;
		request.open('GET', url);
		request.responseType = 'text';
		var img = document.createElement('img');
		img.src = "img/loading.gif";
		img.id = "loading";
		document.getElementById("roomConnection").appendChild(img);
		request.send();
	});
}

function setName() {

	// Get the modal
	var modal = document.getElementById("nameModal");

	// Get the <span> element that closes the modal
	var span = document.getElementById("name-modal-close");

	// Open the modal
	modal.style.display = "block";

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		let name = setCookieName();
		modal.style.display = "none";
		user.setUserName = name;
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			let name = setCookieName();
			modal.style.display = "none";
			user.setUserName = name;
		}
	}

	document.getElementById("name-input")
		.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode === 13) {
				let name = setCookieName();
				modal.style.display = "none";
				user.setUserName = name;
			}
		});
}

function setCookieName() {
	name = document.getElementById("name-input").innerText;
	if (name) {
		document.getElementById("name").innerHTML = "שלום " + name;

		const d = new Date();
		d.setTime(d.getTime() + (60 * 60 * 1000));
		let expires = "expires=" + d.toUTCString();
		document.cookie = "name=" + name + ";" + expires + ";";
	} else {
		document.getElementById("name").remove();
	}
	return name;
}

function sendToServer(type) {
	// 1 for making shipur, 2 for shimur
	const xhttp = new XMLHttpRequest();
	// xhttp.onload = function() {}
	var url = "server/send_points.php?";
	url += "name=" + user.getName + "&";
	url += "class=" + user.getClassId + "&";
	url += "unique_id=" + user.getUniqueId + "&";

	let shipurArray = [];
	let shimurArray = [];
	all_shipur = document.querySelectorAll('.shipur');
	for (shipur of all_shipur) {
		console.log(shipurArray);
		shipurArray.push(shipur.dataset.number);
	}
	all_shimur = document.querySelectorAll('.shimur');
	for (shimur of all_shimur) {
		console.log(shimurArray);
		shimurArray.push(shimur.dataset.number);
	}

	console.log(JSON.stringify(shipurArray));
	console.log(JSON.stringify(shimurArray));
	url = url + "shipur=" + JSON.stringify(shipurArray) + "&shimur=" + JSON.stringify(shimurArray);
	console.log(url);

	xhttp.open("POST", url);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();
}

class User {
	constructor(name) {
		this.name = name;
	}

	// Get functions
	get getUniqueId() {
		return this.uniqueId;
	}

	get getName() {
		return this.name;
	}

	get getPoints() {
		return this.points;
	}

	get getClassId() {
		return this.classId;
	}

	get getIsConnected() {
		return this.isConnected;
	}

	get getIsAdmin() {
		return this.isAdmin;
	}

	// Set functions
	set setClassId(classId) {
		this.classId = classId;
	}

	set setIsConnected(isConnected) {
		if (this.isConnected) {
			this.isConnected = isConnected;
		} else {
			this._getUniqueIdFromServer();
			this.isConnected = isConnected;
		}
	}

	set setPoints(point) {
		this.points = []
		// // TODO: read all marked points
	}

	set setUserName(name) {
		this.name = name;
	}

	set setUniqueId(uniqueId) {
		console.log('test: ' + uniqueId);
		this.uniqueId = uniqueId;
	}

	set setIsAdmin(isAdmin) {
		this.isAdmin = isAdmin;
		if (isAdmin) {
			this._adminStartInterval();
		} else {
			this._adminStopInterval();
		}
	}

	_adminStartInterval() {
		this.adminGet = setInterval(function() {
			console.log("Trying to get info from server...");

			let request = new XMLHttpRequest();
			request.onload = function() {
				var responses = JSON.parse(request.response);
				for (var row of responses) {
					console.log(row.unique_id);
					var currentTdExists = document.querySelector('[data-unique_id="' + row.unique_id + '"]');
					console.log(currentTdExists);
					if (currentTdExists) {
						let tds = currentTdExists.getElementsByTagName('td');
						tds[1].innerText = pointsToText(row.shipur);
						tds[2].innerText = pointsToText(row.shimur);
					} else {
						var tr = document.createElement('tr');
						tr.dataset.unique_id = row.unique_id;

						var tdName = document.createElement('td');
						var tdPointsShipur = document.createElement('td');
						var tdPointsShimur = document.createElement('td');

						tdName.innerHTML = row.name;
						tdPointsShipur.innerHTML = pointsToText(row.shipur);
						tdPointsShimur.innerHTML = pointsToText(row.shimur);
						tr.appendChild(tdName);
						tr.appendChild(tdPointsShipur);
						tr.appendChild(tdPointsShimur);
						document.getElementById('points-view').appendChild(tr);
					}

					// TODO: build every td based on input of data, first entry to the table
					// TODO: check what every point in number means in text, need to search by dataset-number, and get innerHTML
					// TODO: check if there are trs, if yes, then we should check if user id exists as a row
				}
			};
			request.open('GET', "server/get_points.php?class=" + user.getClassId);
			request.responseType = 'text';
			request.send();
		}, 10000);
	}

	_adminStopInterval() {
		if (this.adminGetFromServer) {
			clearInterval(this.adminGetFromServer);
		}
	}

	_getUniqueIdFromServer() {
		let request = new XMLHttpRequest();
		request.onload = function() {
			console.log(request.response);
			User.prototype.setUniqueId = request.response;
		};
		request.open('GET', "server/get_unique_id.php");
		request.responseType = 'text';
		request.send();
	}
}

function pointsToText(points) {
	console.log(points);
	points = JSON.parse(points);
	console.log(points);
	let textOfPoints = [];

	for (point of points) {
		console.log('point: ' + point);
		let text = pointNumToText(point);
		textOfPoints.push(text);
	}

	finalText = textOfPoints.join(', ');
	return finalText;
}

function pointNumToText(pointNum) {
	let element = document.querySelector('[data-number="' + pointNum + '"]');
	return element.innerText;
}
