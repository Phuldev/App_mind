function marg1(){
    var slider=document.querySelector('#slider');
    slider.getElementsByClassName.marginLeft='-100%';
        setTimeout(marg1,8000);
}
    function marg2(){
        var slider=document.querySelector('#slider');
        slider.getElementsByClassName.marginLeft='-200%';
        setTimeout(marg2,8000);
    }
   

        function marg0(){
            var slider=document.querySelector('#slider');
            slider.marginLeft='-300';
            setTimeout(marg0,8000);
        }

mybutton = document.getElementById("myBtn");
window.onscroll = function(){scrollFunction()};
function scrollFunction(){
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ){
        mybutton.style.display='block';}
        else{
            mybutton.style.display='none';
        }
        {
            function topFunction(){
                document.body.scrollTop =0;
                document.documentElement.scrollTop =0;
            }
        }
}
