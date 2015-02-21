$(function () {
    startSlide();
    responsiveFont();
    responsiveShadow("#checkOutForm", ".form-container");
    responsiveShadow("#signUpForm", ".form-container");
    formChange();
});

$(window).resize(function () {
    if (this.resizeTO) clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function () {
        $(this).trigger('resizeEnd');
    }, 100);
});

$(window).bind('resizeEnd', function () {
    responsiveFont();
    responsiveShadow("#checkOutForm", ".form-container");
    responsiveShadow("#signUpForm", ".form-container");
});


var slider = {
    slideShoe: function (time, width) {

        $("#shoeSliderImg1").animate({width: width + 1 + 'px'}, time);

        $("#shoeSliderImg2").animate({left: width + 'px'}, time);

        $(".shoeEffect2").animate({marginLeft: width * -1 + 'px'}, time);
    },
    imageChange: function (id, img) {
        $(id).css("background", 'url(' + img + ') no-repeat');
    },

    slideShow: function (id, id2, img, img2, img3) {
        setTimeout(function () {
            slider.slideShoe(2000, 599)
        }, 500);
        setTimeout(function () {
            slider.imageChange(id, img);
        }, 2600);
        setTimeout(function () {
            slider.slideShoe(1000, 0)
        }, 3700);
        setTimeout(function () {
            slider.imageChange(id2, img3);
        }, 5000);
        setTimeout(function () {
            slider.slideShoe(2000, 600)
        }, 6000);
        setTimeout(function () {
            slider.imageChange(id, img3);
        }, 8100);
        setTimeout(function () {
            slider.slideShoe(1000, 0)
        }, 9200);
        setTimeout(function () {
            slider.imageChange(id2, img2);
        }, 10500);
        setTimeout(function () {
            slider.slideShoe(2000, 600)
        }, 11500);
        setTimeout(function () {
            slider.imageChange(id, img2);
        }, 13600);
        setTimeout(function () {
            slider.slideShoe(1000, 0)
        }, 14700);
        setTimeout(function () {
            slider.imageChange(id2, img);
        }, 16000);

    }
}

function startSlide() {
    slider.slideShow("#shoeImg2", "#shoeImg1", "img/sold-1.png", "img/sold-2.png", "img/sold-3.png");
    setTimeout(function () {
        slider.slideShow("#shoeImg2", "#shoeImg1", "img/sold-1.png", "img/sold-2.png", "img/sold-3.png");
    }, 17000);

}


function responsiveFont() {

    var divWidth = $("#aboutTextWrapper").width();
    var fontSize = (divWidth - 454) / 46 + 14;
    var lineHeight = (divWidth - 454) / 46 + 210;
    var imgWidth = (divWidth - 454) / 46 - 90;
    $("#aboutImg").animate({width: imgWidth * -1 + '%'});
    $("#aboutText").animate({lineHeight: lineHeight + '%'});
    $("#aboutText").animate({fontSize: fontSize + 'px'});


}




$(function () {

    $("#typeStyle").typed({
        strings: ["Select the <strong>Shoe Request</strong> tab", "and let us know what shoes you are trying to find", "after request is made our team will get looking ", "Once found you will get an email notification" , "and you will see the <em>Still Looking</em> button turn <strong>blue</strong> and you can go ahead and make your purchase!"],
        typeSpeed: 30,
        backDelay: 600,
        loop: true,
        contentType: 'html', // or text
        // defaults to false for infinite loop
        loopCount: false,
        callback: function () {
            foo();
        },
        resetCallback: function () {
            newTyped();
        }
    });

    $(".reset").click(function () {
        $("#typeStyle").typed('reset');
    });

});

function newTyped() { /* A new typed object */
}

function foo() {
    console.log("Callback");
}


function responsiveShadow(innerDiv, outterDiv) {

    var formWidth = $(innerDiv).width();
    console.log("formwidth ="+ formWidth);
    var outerFormWidth = $(outterDiv).width();
    console.log("outterfrom ="+ outerFormWidth);
    var shadowWidth = (formWidth + 160);
    console.log("shadowwidth ="+ shadowWidth);
    var shadowMargin = (outerFormWidth - shadowWidth) / 2 + 4;
    console.log("shadowMargin ="+ shadowMargin);
    $(".dope-shadow").animate({width: shadowWidth + 'px'});
    $(".dope-shadow").animate({marginLeft: shadowMargin + 'px'});

}



function formChange() {


    $("#formChange").click(function(){
        if($("#formChange").is(':checked'))
        {
            $(".sign-up-form").attr("action", "/auth/register");
            $('.email-register').fadeIn();
            $("#signUpBtn").text("REGISTER");
        }
        else
        {
            $(".sign-up-form").attr("action", "/auth/login");
            $('.email-register').fadeOut();
            $("#signUpBtn").text("SIGN-IN");
        }
    });



}








