
document.addEventListener('alpine:init', () => {
    Alpine.data('carousel', () => {
        return {
            activeSlide: 0,
            slideCount: 0,
            items: [],
            dots: null,
            timer: null,
            autoplay: true,
            autoplaySpeed: 5000,

            init() {
                this.items = this.$el.querySelectorAll('.carousel-item');
                this.slideCount = this.items.length;

                if (this.items) {

                    this.dots = this.$el.querySelector('.dot-selectors');

                    this.items.forEach(function(item, index) {
                        item.dataset.index = index;
                        item.dataset.active = index === this.activeSlide;

                        if (this.dots) {
                            let dot = document.createElement('button');

                            dot.setAttribute('type', 'button');
                            dot.setAttribute('data-active', index === this.activeSlide);

                            dot.addEventListener('click', function() {
                                this.activeSlide = index;
                                dot.setAttribute('data-active', index === this.activeSlide);
                            }.bind(this));

                            dot.classList.add('dot-selector');
                            this.dots.appendChild(dot);
                        }

                    }.bind(this))
                }

                this.timer = setInterval(this.next.bind(this), 5000);

                this.$watch('activeSlide', () => {
                    this.items.forEach(function(item, index) {
                        item.dataset.active = index === this.activeSlide;
                    }.bind(this));

                    if (this.dots) {
                        let dots = this.dots.querySelectorAll('.dot-selector');

                        dots.forEach(function(dot, index) {
                            dot.dataset.active = index === this.activeSlide;
                        }.bind(this));
                    }
                });
            },

            next() {
                clearInterval(this.timer);

                this.activeSlide = this.activeSlide === this.slideCount -1 ? 0 : this.activeSlide + 1;

                this.timer = setInterval(this.next.bind(this), 5000);
            },

            prev() {
                this.activeSlide = this.activeSlide ===  0 ? this.slideCount -1 : this.activeSlide - 1
            }
        }
    })
})