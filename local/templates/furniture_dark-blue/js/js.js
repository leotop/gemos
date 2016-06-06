$(document).ready(function(){

    $('.show_2').css('display','none');
    $('.for1').css({'background-color':'#F2F2F2','color':'black'})

    $('.for1').click(function(){
        $('.show_2').css('display','none');
        $('.show_1').css('display','block');
        $(this).css({'background-color':'#F2F2F2','color':'black'});
        $('.for2').css({'background-color':'white','color':'#979797'});
    })
    $('.for2').click(function(){
        $('.show_1').css('display','none');
        $('.show_2').css('display','block');
        $(this).css({'background-color':'#F2F2F2','color':'black'});
        $('.for1').css({'background-color':'white','color':'#979797'});
    })

    $(".wrappProduct21>div").css('display','none');
    $(".sec1").css('display','block');

    $('.infoMenu>li').click(function(){
        $('.infoMenu>li').removeClass('active');
        $(this).addClass('active');
        var numb = $(this).attr('data-id');
        $(".wrappProduct21>div").css('display','none');
        $(".sec"+numb).css('display','block');
    });
    $('.infoMenu>li:nth-child(1)').addClass('active');
    $(".selector>div").css("display","none");
    $(".section1").css('display','block');

    $(".selector li").click(function(){
        $(".selector li").removeClass('activity');
        $(this).addClass('activity');
        var numb = $(this).attr('data-id');
        $('.selector>div').css('display','none');
        $('.section'+numb).css('display','block');
    });
    $('#poisk').click(function(){
        $('#poisk').css('width','30%');
        $('#poisk input').css({'width':'82%','margin-left':'70px','opacity':'1'});
        $('#poisk input').focus();
    });

    $('#poisk').focusout(function(){
        $('#poisk').css('width','70px');
        $('#poisk input').css({'width':'0','opacity':'0'});
    });
    $(".form, .formBack").css('display','none');
    $(".imgPhone, .imgPhoneCont").click(function(){
        $(".form, .formBack").css('display','block');
    });
    /*$(".form, .formBack").css('display','none');
    $(".ajax-response").css('display','none');
    */
    $(".shemeBut").click(function(){
        $(".sheme, #shemeBack").css('display','block');
    });
    $(".shemeClose").click(function(){
        $(".sheme, #shemeBack").css('display','none');
    });
    $("#shemeBack").click(function(){
        $(".sheme, #shemeBack").css('display','none');
    })
    $(".buttons").click(function(){
        $(".form, .formBack").css('display','block');
    });
    $(".email, .emailUnder").click(function(){
        $(".form, .formBack").css('display','block');
    });

    $(".form .cleaBut").click(function(){
        $(".form input[type=text], .form textarea").val("");
    })

    $(".formClose").click(function(){
        $(".form, .formBack").css('display','none');
    })
    $("#success-button").click(function(){
        $(".ajax-response").css('display','none');
        $(".formBack").css('display','none');
    })


    if($(window).width() <= '1225'){
        $("#a_cap a span:nth-child(2)").css('width','252px');
        $("#a_cap a span").css("top","-10px");
        //$(".slide h1").html("<br>«Гемос®ПФ-8»");
        $(".mainSlide .light").css("top","190px");
        $("#a_cap aside").css("margin-right","0px");
        $(".phone").css("margin-right","0px");
        $(".newStr").html("<br>");

    }

    if($(window).width() <= '1160'){
        var paddLeft = Math.round(($(window).width() - 978)/2);
        $(".mainSlide h1").css('padding-left',paddLeft+'px');
        $(".mainSlide p").css('padding-left',paddLeft+'px');
        //$("#head").css({'margin-left':paddLeft+'px', 'padding-left':'0'});


    }
    $(".mainSlide a").hide();


    if($(window).width() > '1225'){
        $('.allCopy br:nth-child(1)').remove();

    }
    $(".buttonClear").click(function(){
        $("input[type=text], textarea").val("");
    })
    //выделение обязательных полей
    $(".form form input").each(function(indx, element){
        if($(element).hasClass("mandatory-field"))
        {
            $(element).css("border-color","#E87777");
        }
    });
    $('textarea').css("border-color","#E87777");

    //выделение невалидных полей
    $('textarea').blur(function(){
        if($(this).val() == ''){
            $(this).css("border-color","#E87777");
            //$(this+"::-webkit-input-placeholder").css("color",'#E87777');
            $(this+"::-moz-placeholder").css("color",'#E87777');
        } else {
            $(this).css("border-color","#000");
            $(this).css("color","#000");
        }
    });
    $('.mandatory-field').blur(function(){
        if(!$(this).inputmask("isComplete")){
            $(this).css("border-color","#E87777");
            $(this+"::-webkit-input-placeholder").css("color",'#E87777');
            $(this+"::-moz-placeholder").css("color",'#E87777');
        } else {
            $(this).css("border-color","#000");
            $(this).css("color","#000");
        }
    });
    //задание маски ввода
    $("#input-name").inputmask({mask: "a{2,20} a{0,20} a{0,20}", greedy: false, skipOptionalPartCharacter: " ", clearMaskOnLostFocus: true, placeholder: " "});
    $("#input-phone").inputmask({mask: "+7(999)999-9999", greedy: false, skipOptionalPartCharacter: " ", clearMaskOnLostFocus: true});
    $("#input-email").inputmask("email");
    $("#input-city").inputmask({mask: "a{2,50} a{0,50} a{0,50}", greedy: false, skipOptionalPartCharacter: " ", clearMaskOnLostFocus: true, placeholder: " "});
    $("#input-company").inputmask({mask: "*{2,50} *{0,50} *{0,50}", greedy: false, skipOptionalPartCharacter: " ", clearMaskOnLostFocus: true, placeholder: " "});
    // $("#input-question").html()

    //обращение к скрипту обработчику форм
    $("#submit-input-button").click(function(){
        valid = true;
        $(".form form input").each(function(indx, element){
            if($(element).hasClass("mandatory-field")
                &&(!$(element).val()||!$(element).inputmask("isComplete")))
            {
                $(element).attr('placeholder','Введите значение обязательного поля');
                $(element).css('color',"#e60a1b");
                valid = false;
            }
        });
        if(!$("#input-question").val())
        {
            $("#input-question").attr('placeholder','Введите значение обязательного поля');
            $("#input-question").css('color',"#e60a1b");
            valid = false;
        }
        if(valid){
            $.ajax({
                url: '/ajax/feedback_form.php',
                type:'POST',
                data:{
                    name:$("#input-name").inputmask('unmaskedvalue'),
                    phone:$("#input-phone").inputmask('unmaskedvalue'),
                    email:$("#input-email").inputmask('unmaskedvalue'),
                    city:$("#input-city").inputmask('unmaskedvalue'),
                    company:$("#input-company").inputmask('unmaskedvalue'),
                    question:$("#input-question").val()
                },
                success: function(data)
                {
                    if(Boolean(data))
                    {
                        $(".form").css('display','none');
                        $("input[type=text], textarea").val("");
                        $(".ajax-response").css('display','block');

                        $(".form form input").each(function(indx, element){
                            if($(element).hasClass("mandatory-field"))
                            {
                                $(element).css("border-color","#E87777");
                            }
                        });
                        $('textarea').css("border-color","#E87777");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert(textStatus.toString())
                }
            });
        }
    })

    $(window).resize(function(){
        SliderArrowPadding();
      /*  if($(window).width() <= '1225'){
            $("#a_cap a span:nth-child(2)").css('width','252px');
            $("#a_cap a span").css("top","-10px");
            //$(".slide h1").html("<br>«Гемос®ПФ-8»");
            //$(".mainSlide .light").css("top","190px");
            $("#a_cap aside").css("margin-right","0px");
            $(".phone").css("margin-right","0px");
            $(".newStr").html("<br>");

        }
        */
        /*
        if($(window).width() <= '1160'){
            var paddLeft = Math.round(($(window).width() - 978)/2);
            $(".mainSlide h1").css('padding-left',paddLeft+'px');
            $(".mainSlide p").css('padding-left',paddLeft+'px');
            $("#head").css({'margin-left':paddLeft+'px', 'padding-left':'0'});
        }
        */
    })

})




function SliderArrowPadding(){
    /*
    var paddLeft = Math.round(($(window).width() - 978)/2);
    if($(window).width() <= '1160'){
        $(".slider-arrow--left").css('left',paddLeft+'px');
        $(".slider-arrow--right").css('left',paddLeft*1+60+'px');
    } else{
                    $(".slider-arrow--left").css('left','82px');
        $(".slider-arrow--right").css('left','141px')
    }
    */
}


