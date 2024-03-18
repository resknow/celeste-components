
document.addEventListener('alpine:init', () => {
    Alpine.data('accordion', () => ({
        id: null,
        selectedItem: null,
        init() { this.id = this.$el.getAttribute('id') },
    }))
});