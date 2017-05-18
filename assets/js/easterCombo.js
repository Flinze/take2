(function() {
	'use strict';

	var sequence, copy;
	var active = true;

	$(document).ready(function() {
		easterStart();
	});

	function easterStart() {
		$('[data-action=start]').on('click', easterCombo);
	}
	function easterCombo() {
		sequence = [8,17,3];
		copy = [];
		copy = sequence.slice(0);
		$('[data-action=start]').addClass('active');
		easterActive();
	}

function easterWin() {
	var elem = document.createElement('img');

	elem.src = "img/seagull-egg.jpg";
	elem.setAttribute('height', '100%');
	elem.setAttribute('width', '100%');
	elem.setAttribute('alt', 'Seagull-egg');

	document.getElementById('recipe-title').appendChild(elem);
}

	function easterActive(){
		$('#scrollbar-container')
			.on('click', '[data-tile]', registerClick)

			.on('mousedown', '[data-tile]', function(){
				$(this).addClass('active');
			})

	}

	function easterDeactive() {
		$('#scrollbar-container')
			.off('click', '[data-tile]')
			.off('mousedown', '[data-tile]');

		$('[data-action=start]').removeClass('active');

		$('[data-tile]').removeClass('active');

	}

	function registerClick(e) {
		var desiredResponse = copy.shift();
		var actualResponse = $(e.target).data('tile');
		active = (desiredResponse === actualResponse);
		checkLose();
	}

	function checkLose() {
		// copy array will be empty when user has successfully completed sequence
		if (copy.length === 0 && active) {
			easterWin();

		} else if (!active) { // user lost
			easterDeactive();
		}
	}

})();
