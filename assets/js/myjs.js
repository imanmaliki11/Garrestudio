
    const elems = document.querySelectorAll('.sidenav');
    M.Sidenav.init(elems);

    const elems1 = document.querySelectorAll('.slider');
    M.Slider.init(elems1, {
      indicators: false,
      duration: 700,
      interval: 3000
    });

    const elems2 = document.querySelectorAll('.parallax');
    M.Parallax.init(elems2);

    const mx = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mx);

    const scr = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scr, {
      scrollOffset: 50
    });