function frontSlider() {

    var app = this;


    var slides = $('#front-slider .slides li');
    var navBtn = $('#front-slider .navigation li');
    var nextBtn = $('#front-slider .next');
    var prevBtn = $('#front-slider .prev');

    var activeSlide;


    var playSlider = setInterval(function () {
            app.nextSlide();
        }
        , 4000);

    this.init = function () {
        this.initSlider();
    }

    this.initSlider = function () {

        countSlides = slides.length;
        slides.eq(0).addClass('active');
        navBtn.eq(0).addClass('active');

        nextBtn.click(function (e) {
            e.preventDefault();
            clearInterval(playSlider);
            app.nextSlide();
        });

        prevBtn.click(function (e) {
            e.preventDefault();
            clearInterval(playSlider);
            app.prevSlide();
        });

        playSlider;

    }

    this.nextSlide = function () {
        activeIndex = $('#front-slider .slides li.active').index();

        if (activeIndex + 1 == countSlides) {
            slides.eq(activeIndex).fadeOut(800).removeClass('active');
            navBtn.removeClass('active');
            slides.eq(0).fadeIn(800).addClass('active');
            navBtn.eq(0).addClass('active');
        } else {
            slides.eq(activeIndex).fadeOut(800).removeClass('active');
            navBtn.removeClass('active');
            slides.eq(activeIndex + 1).fadeIn(800).addClass('active');
            navBtn.eq(activeIndex + 1).addClass('active');
        }
    }

    this.prevSlide = function () {
        activeIndex = $('#front-slider .slides li.active').index();
        if (activeIndex == 0) {
            slides.eq(0).fadeOut(800).removeClass('active');
            navBtn.removeClass('active');
            slides.eq(countSlides - 1).fadeIn(800).addClass('active');
            navBtn.eq(countSlides - 1).addClass('active');
        } else {
            slides.eq(activeIndex).fadeOut(800).removeClass('active');
            navBtn.removeClass('active');
            slides.eq(activeIndex - 1).fadeIn(800).addClass('active');
            navBtn.eq(activeIndex - 1).addClass('active');
        }
    }


}