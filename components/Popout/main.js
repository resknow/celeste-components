
class DismissableElement extends HTMLElement {
	connectedCallback() {
		// If no ID is set, generate a random one
		this.id = this.getAttribute('id') || crypto.randomUUID();
		this.setAttribute('id', this.id);

		// Check localStorage to see if we dismissed this element before
		this.hasBeenDismissed = this.getDismissalState();

		// If previously dismissed, hide the element
		if (this.hasBeenDismissed) {
			this.style.display = 'none';
		}

		// Setup the close button
		this.setupCloseButton();
	}

	getDismissalState() {
		console.log(window.sessionStorage.getItem(`dismissed-${this.id}`));
		return window.sessionStorage.getItem(`dismissed-${this.id}`);
	}

	dismiss() {
		this.hasBeenDismissed = true;
		window.sessionStorage.setItem(`dismissed-${this.id}`, true);
		this.setAttribute('dismissed', '');

		setTimeout(() => {
			this.style.display = 'none';
		}, 1000);
	}

	setupCloseButton() {
		this.closeButton = this.querySelector('[data-close]');

		if (!this.closeButton) {
			console.warn('dismissable-element: No close button found.');
			return;
		}

		this.closeButton.addEventListener('click', this.dismiss.bind(this));
	}
}

customElements.get('celeste-dismissable-element') || customElements.define('celeste-dismissable-element', DismissableElement);
