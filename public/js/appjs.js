var App = function() {
    /* Initialization UI Code */
    function check_cost_filter(cost_filter1, cost_filter2, cost_filter3) {
        var myArray = new Array(2)
        if(cost_filter1.checked){
            myArray[0] = 0;
            myArray[1] = 99;
            return myArray;
        }
        else if(cost_filter2.checked){
            myArray[0] = 100;
            myArray[1] = 299;
            return myArray;
        }
        else if(cost_filter3.checked){
            myArray[0] = 300;
            myArray[1] = 10000000;
            return myArray;
        }
        else{
            myArray[0] = 0;
            myArray[1] = 10000000;
            return myArray;
        }
    }

    function check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby) {
        var myArray = new Array(6)
        if(category_beauty.checked){
            myArray[0] = 'beauty';
        }
        if(category_drink.checked) {
            myArray[1] = 'drink';
        }
        if(category_game.checked) {
            myArray[2] = 'game';
        }
        if(category_electronic.checked) {
            myArray[3] = 'electronic';
        }
        if(category_home.checked) {
            myArray[4] = 'home';
        }
        if(category_hobby.checked) {
            myArray[5] = 'hobby';
        }

        return myArray;
    }

    function searchFilter() {
        var cost_filter1 = document.getElementById('inline_radio1');
        var cost_filter2 = document.getElementById('inline_radio2');
        var cost_filter3 = document.getElementById('inline_radio3');
        var filter_rating = document.getElementById('filter_rating');
        var name = document.getElementById('product_name').textContent;
        var category_beauty = document.getElementById('category_beauty');
        var category_drink = document.getElementById('category_drink');
        var category_game = document.getElementById('category_game');
        var category_electronic = document.getElementById('category_electronic');
        var category_home = document.getElementById('category_home');
        var category_hobby = document.getElementById('category_hobby');

        cost_filter1.addEventListener('click', function() {
            array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
            min = array_cost[0];
            max = array_cost[1];
            array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
            console.log(max);
            if(filter_rating.selected){
                star = filter_rating.value;
            }
            else {
                star = 0;
            }
            $.ajax({
                type: "GET",
                url: "{{route('search_name')}}",
                data: {
                    min: min,
                    max: max,
                    star: star,
                    beauty: array_category[0],
                    drink: array_category[1],
                    game: array_category[2],
                    electronic: array_category[3],
                    home: array_category[4],
                    hobby: array_category[5],
                    keyword: name
                },
                 success :function (result) {
                    if(result.success) {
                        var content = document.getElementById('search_content');
                        content.innerHTML = result.search_result;
                    }

                }
                });
        });
        cost_filter2.addEventListener('click', function() {
            array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
            min = array_cost[0];
            max = array_cost[1];
            array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
            console.log(max);
            if(filter_rating.selected){
                star = filter_rating.value;
            }
            else {
                star = 0;
            }
            $.ajax({
                type: "GET",
                url: "{{route('search_name')}}",
                data: {
                    min: min,
                    max: max,
                    star: star,
                    beauty: array_category[0],
                    drink: array_category[1],
                    game: array_category[2],
                    electronic: array_category[3],
                    home: array_category[4],
                    hobby: array_category[5],
                    keyword: name
                },
                 success :function (result) {
                    if(result.success) {
                        var content = document.getElementById('search_content');
                        content.innerHTML = result.search_result;
                    }

                }
            });
        });
        cost_filter3.addEventListener('click', function() {
            array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
            min = array_cost[0];
            max = array_cost[1];
            array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
            console.log(max);
            if(filter_rating.selected){
                star = filter_rating.value;
            }
            else {
                star = 0;
            }
            $.ajax({
                type: "GET",
                url: "{{route('search_name')}}",
                data: {
                    min: min,
                    max: max,
                    star: star,
                    beauty: array_category[0],
                    drink: array_category[1],
                    game: array_category[2],
                    electronic: array_category[3],
                    home: array_category[4],
                    hobby: array_category[5],
                    keyword: name
                },
                 success :function (result) {
                    if(result.success) {
                        var content = document.getElementById('search_content');
                        content.innerHTML = result.search_result;
                    }

                }
            });
        });

        filter_rating.addEventListener('change', function() {
            var star = filter_rating.value;
            array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
            min = array_cost[0];
            max = array_cost[1];
            array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
            console.log(max);
             $.ajax({
                type: "GET",
                url: "{{route('search_name')}}",
                data: {
                    min: min,
                    max: max,
                    star: star,
                    beauty: array_category[0],
                    drink: array_category[1],
                    game: array_category[2],
                    electronic: array_category[3],
                    home: array_category[4],
                    hobby: array_category[5],
                    keyword: name
                },
                 success :function (result) {
                    if(result.success) {
                        console.log(result.success);
                        var content = document.getElementById('search_content');
                        content.innerHTML = result.search_result;
                    }

                }
            });
        });

        category_beauty.addEventListener('change', function() {
            if(category_beauty.checked){
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }

            else {
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: "null",
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }
        });

        category_drink.addEventListener('change', function() {
            if(category_drink.checked){
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }

            else {
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: "null",
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }
        });

        category_game.addEventListener('change', function() {
            if(category_game.checked){
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }

            else {
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: "null",
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }
        });

        category_electronic.addEventListener('change', function() {
            if(category_electronic.checked){
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }

            else {
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: "null",
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }
        });

        category_home.addEventListener('change', function() {
            if(category_home.checked){
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }

            else {
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: "null",
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }
        });

        category_hobby.addEventListener('change', function() {
            if(category_hobby.checked){
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: array_category[5],
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }

            else {
                console.log('check');
                array_cost = check_cost_filter(cost_filter1, cost_filter2, cost_filter3);
                min = array_cost[0];
                max = array_cost[1];
                array_category = check_category(category_beauty, category_drink, category_game, category_electronic, category_home, category_hobby);
                console.log(max);
                if(filter_rating.selected){
                    star = filter_rating.value;
                }
                else {
                    star = 0;
                }
                $.ajax({
                    type: "GET",
                    url: "{{route('search_name')}}",
                    data: {
                        min: min,
                        max: max,
                        star: star,
                        beauty: array_category[0],
                        drink: array_category[1],
                        game: array_category[2],
                        electronic: array_category[3],
                        home: array_category[4],
                        hobby: "null",
                        keyword: name
                    },
                     success :function (result) {
                        if(result.success) {
                            var content = document.getElementById('search_content');
                            content.innerHTML = result.search_result;
                        }

                    }
                });
            }
        });
    }


    var uiInit = function() {
        // Handle UI
        handleHeader();
        handleMenu();
        scrollToTop();
        // Add the correct copyright year at the footer
        var yearCopy = $('#year-copy'), d = new Date();
        if (d.getFullYear() === 2014) { yearCopy.html('2014'); } else { yearCopy.html('2014-' + d.getFullYear().toString().substr(2,2)); }
        // Initialize tabs
        $('[data-toggle="tabs"] a, .enable-tabs a').click(function(e){ e.preventDefault(); $(this).tab('show'); });
        // Initialize Tooltips
        $('[data-toggle="tooltip"], .enable-tooltip').tooltip({container: 'body', animation: false});
        // Initialize Popovers
        $('[data-toggle="popover"], .enable-popover').popover({container: 'body', animation: true});
        // With CountTo (+ help of Jquery Appear plugin), Check out examples and documentation at https://github.com/mhuggins/jquery-countTo
        $('[data-toggle="countTo"]').each(function(){
            var $this = $(this);
            $this.appear(function() {
                $this.countTo({
                    speed: 1500,
                    refreshInterval: 20,
                    onComplete: function() {
                        if($this.data('after')) {
                            $this.html($this.html() + $this.data('after'));
                        }
                    }
                });
            });
        });
        // Toggles 'open' class on store menu
        $('.store-menu .submenu').on('click', function(){
           $(this)
               .parent('li')
               .toggleClass('open');
        });
        // var group = 
        // $("#").addClass("open");
    };
    /* Handles Header */
    var handleHeader = function(){
        var header = $('header');

        $(window).scroll(function() {
            // If the user scrolled a bit (150 pixels) alter the header class to change it
            if ($(this).scrollTop() > header.outerHeight()) {
                header.addClass('header-scroll');
            } else {
                header.removeClass('header-scroll');
            }
        });
    };
    /* Handles Main Menu */
    var handleMenu = function(){
        var sideNav = $('.site-nav');
        $('.site-menu-toggle').on('click', function(){
            sideNav.toggleClass('site-nav-visible');
        });
        sideNav.on('mouseleave', function(){
            $(this).removeClass('site-nav-visible');
        });
    };
    /* Scroll to top functionality */
    var scrollToTop = function() {
        // Get link
        var link = $('#to-top');
        var windowW = window.innerWidth
                        || document.documentElement.clientWidth
                        || document.body.clientWidth;
        $(window).scroll(function() {
            // If the user scrolled a bit (150 pixels) show the link in large resolutions
            if (($(this).scrollTop() > 150) && (windowW > 991)) {
                link.fadeIn(100);
            } else {
                link.fadeOut(100);
            }
        });
        // On click get to top
        link.click(function() {
            $('html, body').animate({scrollTop: 0}, 500);
            return false;
        });
    };
    return {
        init: function() {
            uiInit(); // Initialize UI Code
            searchFilter();
        }
    };
}();

/* Initialize app when page loads */
$(function(){ App.init(); });

