jQuery(document).ready((function(e){
	jQuery(document).on('click', '.dt_portfolio .elementor-widget-container img', function (e) {
		function closeModal() {
			jQuery('#bg-modal-image--img').css({
				transform: 'scale(0)'
			});
			setTimeout(() => {
				jQuery('#bg-modal-image').remove()
			},300)
		}
		const modal = document.createElement('div');
		const close = document.createElement('div');
		jQuery(close).html('x')
		close.id = 'bg-modal-image--close'
		jQuery(close).css({
			position: 'absolute',
			top: '50px',
			right: '50px',
			fontSize: '30px',
			color: 'white',
			cursor: 'pointer'
		})
		modal.id = 'bg-modal-image'
		jQuery(modal).css({
			position: 'fixed',
			top: '0',
			left: '0',
			zIndex: '99999',
			background: '#00000080',
			width: '100%',
			height: '100vh',
			alignItems: 'center',
			placeItems: 'center',
			alignContent: 'center',
			placeContent: 'center',
			display: 'grid',
			'box-sizing': 'border-box',
    		padding: '15px'
		});
		const img = document.createElement('img');
		img.src = e.target.src;
		img.id = 'bg-modal-image--img'
		jQuery(img).css({
			height: '100%',
			'max-height': '500px',

			width: '100%',
			'max-width': '800px',
			margin: '10px',
			transition: '0.5s',
			transform: 'scale(0)',
			userSelect: 'none'
		})

		jQuery(modal).append(img)
		jQuery(modal).append(close)
		jQuery(close).on('click',  function() {
			closeModal()
		})
		jQuery(modal).on('click', function() {
			closeModal()
		})
		jQuery(window).on('keypress', function(e) {
			console.log(e);
			if(e.keyCode == 27) {
				closeModal()
			}
		})
		jQuery(img).on('click', function(e) {
			e.stopPropagation()
		})
		jQuery('body').append(modal)
		setTimeout(() => {
			jQuery('#bg-modal-image--img').css({
				transform: 'scale(1)'
			})
		}, 0);
	});
}));