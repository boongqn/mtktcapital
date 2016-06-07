function setFlash(display) {

	let flash       = document.querySelector('.prefix_flash');
	flash.innerHTML = '<h5 class="icon-check"> Success</h5>';
	flash.className = 'prefix_flash alert alert-success';

	setTimeout(()=>{
		flash.style.display    = display;
	}, 1000);

	return flash;
}


export function elementFlash() {
	let InterVal = window.setInterval(() => {
		if(document.readyState != 'complete') {
			return false;
		}
		clearInterval(InterVal);

		let parent = document.querySelector('.prefix_admin');
		let div    = document.createElement('div');

		div.className = 'prefix_flash alert alert-success';
		parent.appendChild(div);

	}, 1000);
}


export function showFlash() {

	setFlash('block');

	setTimeout( () => {
		setFlash('none');
	}, 1600);

}

