import Splide from '@splidejs/splide';
import '@splidejs/splide/css/sea-green';
document.addEventListener('DOMContentLoaded', function () {
    let splide = new Splide( '.splide', {
        type   : 'loop',
        gap: '1rem',
        rewind : true,
        perMove: 1,
        perPage: 1,
        mediaQuery: 'min',
        breakpoints : {
            640:{
                perPage: 2,
            },
            1025:{
                perPage: 3,
            },
        },
    } );

    splide.mount();
});
