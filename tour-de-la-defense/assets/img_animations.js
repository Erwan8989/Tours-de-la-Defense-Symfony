let tl = anime.timeline({
	easing: 'easeOutExpo',
	duration: 850,
})
tl.add({
	targets: 'article div',
	backgroundColor: '#faaf38',
	width: '100%',
	delay: anime.stagger(100)
})
tl.add({
	targets: 'article div',
	opacity: .7,
	marginRight: '.5rem',
	delay: anime.stagger(100)
})
tl.add({
	targets: 'h2',
	opacity: 1,
	translateY: '-200%',
	duration: 4000,
},'-=1600')

window.addEventListener('scroll',() => {
	let value = Math.trunc(window.scrollY - window.scrollY * 0.35);
	let root = document.querySelector(':root');
	let card = document.getElementById('card');
	let typeWriterId = document.getElementById('typeWriterId');
	let rootStyle = getComputedStyle(root);
	let heightWindow = window.innerHeight + 64;
	let currentScroll = window.scrollY + 64;

	if (currentScroll <= heightWindow) {

		let top1 = rootStyle.getPropertyValue('--top1');
		let top2 = rootStyle.getPropertyValue('--top2');
		let top3 = rootStyle.getPropertyValue('--top3');

		let total_value1 = value + "px";
		let total_value2 = value * 1.2 + "px";
		let total_value3 = value * 1.3 + "px";
		let total_value4 = value * 1.4 + "px";

		root.style.setProperty('--top1', total_value1);
		root.style.setProperty('--top2', total_value2);
		root.style.setProperty('--top3', total_value3);
		root.style.setProperty('--top4', total_value4);

		let test = ((currentScroll * 100) / heightWindow) / 100
		card.style.setProperty('opacity', test);
	} else {
		card.style.setProperty('opacity', 1);
	}

	if (currentScroll - 64 === 0) {
		typeWriterId.classList.remove("hide");
		typeWriterId.classList.add("display");
	} else {
		typeWriterId.classList.add("hide");
		typeWriterId.classList.remove("display");
	}
})

setTimeout(function () {
	let qualities = [
		'Élegantes',
		'Majestueuses',
		'Modernes',
		'Imposantes',
		'Vertigineuses',
		'Élancés',
		'Gigantesques',
		'Éblouissantes',
		'Spectaculaires',
		'Innovantes',
		'Iconiques',
		'Futuristes'
	];

	function shuffleArray(array) {
		for (let i = array.length - 1; i > 0; i--) {
			const j = Math.floor(Math.random() * (i + 1));
			[array[i], array[j]] = [array[j], array[i]];
		}
	}

	shuffleArray(qualities);

	let writing = new Typewriter('.typeWriterClass', {
		loop: true,
		delay: 100,
	})
	for (let i = 0; i < qualities.length; i++) {
		writing
			.pauseFor(1000)
			.typeString(qualities[i])
			.pauseFor(1500)
			.deleteAll(50)
			.pauseFor(500)
			.start();
	}
}, 2750);