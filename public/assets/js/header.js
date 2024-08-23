document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const header = document.querySelector('.site-header');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });

    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

    // Animation for the dashboard button
    $('.button--bubble').each(function() {
        var $circlesTopLeft = $(this).parent().find('.circle.top-left');
        var $circlesBottomRight = $(this).parent().find('.circle.bottom-right');

        var tl = new TimelineLite();
        var tl2 = new TimelineLite();

        var btTl = new TimelineLite({ paused: true });

        tl.to($circlesTopLeft, 1.2, { x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false) });
        tl.to($circlesTopLeft.eq(0), 0.1, { scale: 0.2, x: '+=6', y: '-=2' });
        tl.to($circlesTopLeft.eq(1), 0.1, { scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7' }, '-=0.1');
        tl.to($circlesTopLeft.eq(2), 0.1, { scale: 0.2, x: '-=15', y: '+=6' }, '-=0.1');
        tl.to($circlesTopLeft.eq(0), 1, { scale: 0, x: '-=5', y: '-=15', opacity: 0 });
        tl.to($circlesTopLeft.eq(1), 1, { scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0 }, '-=1');
        tl.to($circlesTopLeft.eq(2), 1, { scale: 0, x: '-=15', y: '+=5', opacity: 0 }, '-=1');

        var tlBt1 = new TimelineLite();
        var tlBt2 = new TimelineLite();
        
        tlBt1.set($circlesTopLeft, { x: 0, y: 0, rotation: -45 });
        tlBt1.add(tl);

        tl2.set($circlesBottomRight, { x: 0, y: 0 });
        tl2.to($circlesBottomRight, 1.1, { x: 30, y: 30, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false) }, 0.2);
        tl2.to($circlesBottomRight.eq(0), 0.1, { scale: 0.2, x: '-=6', y: '+=3' });
        tl2.to($circlesBottomRight.eq(1), 0.1, { scaleX: 1, scaleY: 0.8, x: '+=15', y: '+=10' }, '-=0.1');
        tl2.to($circlesBottomRight.eq(2), 0.1, { scale: 0.2, x: '+=15', y: '-=6' }, '-=0.2');
        tl2.to($circlesBottomRight.eq(0), 1, { scale: 0, x: '+=5', y: '+=15', opacity: 0 });
        tl2.to($circlesBottomRight.eq(1), 1, { scaleX: 0.4, scaleY: 0.4, x: '+=10', y: '+=10', opacity: 0 }, '-=1');
        tl2.to($circlesBottomRight.eq(2), 1, { scale: 0, x: '+=15', y: '-=5', opacity: 0 }, '-=1');

        tlBt2.set($circlesBottomRight, { x: 0, y: 0 });
        tlBt2.add(tl2);

        btTl.add(tlBt1);
        btTl.to($(this).parent().find('.button'), 0.8, { scaleX: 1.5, scaleY: 1.5, ease: Power1.easeOut }, 0.3);
        btTl.to($(this).parent().find('.button'), 0.8, { scaleX: 1, scaleY: 1, ease: Back.easeOut }, '-=0.1');
        btTl.add(tlBt2, '-=0.8');

        $(this).hover(function() {
            btTl.restart();
        });
    });
});
