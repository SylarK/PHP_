$(function(){
    $('form').submit(function(){
        return false;
    })

    $('body').on('submit', 'form', function(){
        
        alert('Hello.')
        return false;
    })
})