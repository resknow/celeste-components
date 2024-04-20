
class Accordion extends HTMLElement {
    connectedCallback() {
        this.id = this.getAttribute('id') || 'accordion';
        this.initItems();
    }

    initItems() {
        this.items = this.querySelectorAll('[data-item]');

        if (!this.items.length) return;

        this.items.forEach((item, index) => {
            item.setAttribute('id', `${this.id}-${index}`);

            // Setup ARIA on the button
            let button = item.querySelector('.AccordionTrigger__button');
            button.setAttribute('aria-controls', `${this.id}-${index}`);

            item.setAttribute('data-item', index);
            item.addEventListener('click', () => this.toggleItem(index));
        });
    }

    toggleItem(index) {
        this.items.forEach((item, i) => {
            if (i === index) {
                item.classList.toggle('AccordionItem--open');
                item.setAttribute('aria-expanded', item.classList.contains('AccordionItem--open'));
            } else {
                item.classList.remove('AccordionItem--open');
                item.setAttribute('aria-expanded', false);
            }
        });

    }
}

customElements.get('celeste-accordion') || customElements.define('celeste-accordion', Accordion);