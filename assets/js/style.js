
$(document).ready(function(){
    $('.signUp').click(function() {    
        $('.login__right').css({
            'transform': 'translateX(0)',
            'opacity': '0',
        })

        $('.login__left').css({
            'transform': 'translateX(100%)',
            'opacity': '0',
        })
        $('.register__left').css({
            'transform': 'translateX(-100%)',
            'visibility':'visible',
            'opacity':'1',
        })
        $('.register__right').css({
            'transform': 'translateX(0)',
            'opacity': '1',
            'visibility':'visible',
        })
    
    })
    
    
    $('.signIn').click(function() {
        $('.register__right').css({
            'transform': 'translateX(-100%)',
            'opacity': '0',
        })

        $('.register__left').css({
            'transform': 'translateX(0)',
            'opacity': '0',
        })
        setTimeout(()=>{
            $('.register__left').css({
                'visibility':'hidden',
            })
            $('.register__right').css({
                'visibility':'hidden',
            })
        },500)
        $('.login__left').css({
            'transform': 'translateX(0)',
            'opacity':'1',
        })

        $('.login__right').css({
            'transform': 'translateX(100%)',
            'opacity':'1',
            'visibility':'visible',
        })
    
    })

})