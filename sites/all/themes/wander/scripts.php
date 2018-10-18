<!--<script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>-->
<!--<script src="https://prinzhorn.github.io/skrollr/dist/skrollr.min.js"></script>-->

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    // Menu functions

    (function() {

        var Menu = (function() {
            var burger = document.querySelector('.burger');
            var menu = document.querySelector('.menu');
            var menuList = document.querySelector('.menu__list');
            var brand = document.querySelector('.menu__brand');
            var menuItems = document.querySelectorAll('.menu__item');

            var active = false;

            var toggleMenu = function() {
                if (!active) {
                    menu.classList.add('menu--active');
                    menuList.classList.add('menu__list--active');
                    brand.classList.add('menu__brand--active');
                    burger.classList.add('burger--close');
                    for (var i = 0, ii = menuItems.length; i < ii; i++) {
                        menuItems[i].classList.add('menu__item--active');
                    }

                    active = true;
                } else {
                    menu.classList.remove('menu--active');
                    menuList.classList.remove('menu__list--active');
                    brand.classList.remove('menu__brand--active');
                    burger.classList.remove('burger--close');
                    for (var i = 0, ii = menuItems.length; i < ii; i++) {
                        menuItems[i].classList.remove('menu__item--active');
                    }

                    active = false;
                }
            };

            var bindActions = function() {
                burger.addEventListener('click', toggleMenu, false);
            };

            var init = function() {
                bindActions();
            };

            return {
                init: init
            };

        }());

        // Menu initialise

        Menu.init();

    }());

    //Skrollr


    var setSkrollr = function($el, data) {
        for (var i = 0, l = data.length; i < l; i++) {
            var d = data[i],
                px = d[0];
            css = d[1];
            $el.attr('data-' + px, css);
        }
    }

    jQuery(function($) {
        setSkrollr($('#box1'), [[0, 'width:100%'], [1500, 'width:0%']]);
        setSkrollr($('#box2'), [[0, 'transform:translateX(-100%)'], [750, 'transform:translateX(100%)'], [1500, 'transform:translateX(-100%)']]);

        skrollr.init({
            smoothScrolling: false
        });
    });
</script>

<!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script>
    $('.autoplay').slick({
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        infinite: true
    });

</script>
<script src="dist/js/script.js"></script>

</body>
</html>