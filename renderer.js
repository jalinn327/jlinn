<script>let deferredPrompt;
window.addEventListener('beforeinstallprompt', (event0) => {
	event0.preventDefault();
	deferredPrompt = event0;
	btnAdd.style.display = 'block';
	btnAdd.addEventListener('click', (event0) => {
		
	});
});</script>