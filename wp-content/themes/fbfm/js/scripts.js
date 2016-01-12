jQuery(function($) {
    // Resposnsive
    var isMobile = function() {
        return $('.responsive-helper').is(':visible');
    };

    var controlMenuAdjust = function() {
        var controlsMenu = $('.controls-menu');
        var logo = $('#logo');
        var mainMenu = $('#main-menu');
        
        controlsMenu.find('.menu-item').removeAttr('style');
        if (!isMobile()) {
            var btn1Helper = (logo.outerWidth() + logo.offset().left) - controlsMenu.offset().left;
            controlsMenu.find('.menu-item.first').width(btn1Helper);

            var btn2Helper = mainMenu.find('a.last').offset().left - controlsMenu.find('.menu-item.helper').offset().left;
            controlsMenu.find('.menu-item.helper').width(btn2Helper);

            var btn3Helper = $(window).width() - controlsMenu.find('.menu-item.last').offset().left;
            controlsMenu.find('.menu-item.last').width(btn3Helper);
        }
    };

    var headerBgAdjust = function() {
        var headerBg = $('.header-bg');
        var header = $('.header');
        if (isMobile()) {
            headerBg.css('top', $('.navbar').outerHeight() + $('.controls-menu-wrapper').outerHeight());
        } else {
            headerBg.css('top', 0);
        }

        if (header.height() > headerBg.height()) {
            headerBg.css('min-height', header.height() + 40);
        } else {
            header.css('min-height', headerBg.height() + headerBg.offset().top);
        }
    };

    var headerSideTextBlocks = function() {
        $('.header-side-text').css('visibility', 'hidden');
        var topHeight = 0;
        var bodyHeight = 0;
        var bottomHeight = 0;

        // Match Heights
        $('.header-side-text:visible').each(function() {
            var self = $(this);
            var top = self.find('.side-text-title');
            var body = self.find('.side-text-body');
            var bottom = self.find('.side-text-bottom');

            if (top.height() > topHeight) {
                topHeight = top.height();
            }
            if (body.height() > bodyHeight) {
                bodyHeight = body.height();
            }
            if (bottom.height() > bottomHeight) {
                bottomHeight = bottom.height();
            }
        });

        $('.header-side-text .side-text-title').height(topHeight);
        $('.header-side-text .side-text-body').height(bodyHeight);
        $('.header-side-text .side-text-bottom').height(bottomHeight);

        // Fix slants
        $('.header-side-text:visible').each(function() {
            var self = $(this);
            var top = self.find('.side-text-title');
            var body = self.find('.side-text-body');
            var bottom = self.find('.side-text-bottom');

            // Calculate delat for each block. 1.732rad = 60deg to calculate tan > A = height/tan(60);
            var delta1 = top.offset().left - body.offset().left - (body.height() / 1.732);
            var delta2 = top.offset().left - bottom.offset().left - (body.height() / 1.732) - (bottom.height() / 1.732);

            if (self.hasClass('side-text-left')) {
                body.css('left', delta1);
                bottom.css('left', delta2);
                self.css('left', -1 * (top.height() / 1.732));
                self.css('width', self.width() + (self.height() / 1.732));
            } else {
                body.css('right', delta1);
                bottom.css('right', delta2);
                self.css('right', -1 * (top.height() / 1.732));
                self.css('width', self.width() + (self.height() / 1.732) - (top.height() / 1.732));
            }
        });

        // Inner text position
        setTimeout(function() {
            var leftBtnPos = $('.header-control.header-control-left span').offset().left;
            $('.header-side-text.side-text-left .side-text-inner').each(function() {
                $(this).css('left', leftBtnPos - $(this).offset().left + 20); // 20 = padiding header-control-left span
            });

            var leftIndent = 15;
            $('.header-side-text.side-text-right .side-text-body p').each(function(index, el) {
                $(this).css('left', index * leftIndent);
            });

            leftIndent = 15;
            $('.header-side-text.side-text-right .side-text-bottom p').each(function(index, el) {
                $(this).css('left', (index + 1) * leftIndent);
            });

            $('.header-side-text').css({
                visibility: 'visible',
                opacity: 0,
                display: 'none'
            });
        }, 1000);
    };

    var setHeaderSideTriggers = function() {
        var pos = {
            left: $('.header-side-text.side-text-left').css('left'),
            right: $('.header-side-text.side-text-right').css('right')
        };

        var side = 'left';
        var obj = {};
        $('.show-header-box').hover(function() {
            var headerBox = $('.header-side-text.side-text-left');
            side = 'left';
            if ($(this).hasClass('show-right')) {
                headerBox = $('.header-side-text.side-text-right');
                side = 'right';
            }
            headerBox.css(side, '-100%');
            headerBox.css('display', 'block');

            obj[side] = pos[side];
            obj.opacity = 1;
            headerBox.animate(obj, 1000);
        }, function() {
            var headerBox = $('.header-side-text.side-text-left');
            side = 'left';
            if ($(this).hasClass('show-right')) {
                headerBox = $('.header-side-text.side-text-right');
                side = 'right';
            }

            obj[side] = '-100%';
            obj.opacity = 0;
            headerBox.animate(obj, 1000, function() {
                headerBox.css('display', 'none');
                headerBox.css(side, pos[side]);
            });
        });
    };

    var setAvatars = function() {
        var scaleDownFirst = 1;
        $('.fans .avatars-stack-wrapper').transition({
            perspective: '1000px',
            rotateY: '-30deg',
            scale: scaleDownFirst,
        });

        $('.players .avatars-stack-wrapper').transition({
            perspective: '1000px',
            rotateY: '30deg',
            scale: scaleDownFirst,
        });

        $('.players .avatars-stack-wrapper.first, .fans .avatars-stack-wrapper.first').transition({
            scale: scaleDownFirst * 0.8,
        });

        $('.mask').load(function() {
            $('.avatars-stack').animate({
                opacity: 1
            }, 400);
        });
    };

    var animteOnLoad = function() {
        $('.header-control-left').animate({
            left: '-2%'
        }, 600);
        $('.header-control-right').animate({
            right: '-2%'
        }, 600);
    };

    var runUnslider = function() {
        $('.news-slider').unslider({
            arrows: false,
            autoplay: true,
            speed:2500
        });
    };

    var runICheck = function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey',
            increaseArea: '20%' // optional
        });
    };

    var setLoginFormValidation = function() {
        $('form.login-form').validate({
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            errorPlacement: function(error, element) {
                return true;
            },
            highlight: function(element) {
                $(element).closest('.form-group').find('.help-block').show();
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').find('.help-block').hide();
            }
        });
    };

    var setLoginModal = function() {
        $('.modal-dialog').css('margin-top', $('.navbar-default').height() + $('.controls-menu-wrapper').height() + 30);

        $('.modal').on('show.bs.modal', function() {
            $('.modal').not($(this)).modal('hide');
            $('.header-inner, .header-control-wrapper').fadeOut();
        });

        $('.modal').on('hidden.bs.modal', function() {
            if (!$('.modal').is(':visible')) {
                $('.header-inner, .header-control-wrapper').fadeIn();
            }
        });
    };

    var runPlayersTable = function() {
        var pTable = $('#players-table');
        $('.add-player').on('click', function() {
            var html =
                '<tr class="last">' +
                '<td>' + $('#player-name').val() + '</td>' +
                '<td>' + $('#club').val() + '</td>' +
                '<td>' + $('#position').val() + '</td>' +
                '<td class="last col-xs-1 text-center">' +
                '<a class="remove-line invert" href="javascript:void(0)">' +
                '<i class="fa fa-times"></i>' +
                '</a>' +
                '</td>' +
                '</tr>';
            pTable.find('tr').removeClass('last');
            pTable.find('tbody').append(html);
        });

        $(document).on('click', '.remove-line', function() {
            $(this).closest('tr').remove();
        });
    };

    controlMenuAdjust();
    headerSideTextBlocks();
    setHeaderSideTriggers();
    animteOnLoad();
    runUnslider();
    runICheck();
    setLoginFormValidation();
    setLoginModal();
    runPlayersTable();

    $(window).resize(function() {
        controlMenuAdjust();
        headerBgAdjust();
    });

    $(window).load(function() {
        headerBgAdjust();
        setAvatars();
    });
});
