window.addEventListener('DOMContentLoaded', function() {
    console.log("ここだよ");
});

window.addEventListener('DOMContentLoaded',function() {
    const button = document.getElementById('goBack');

    const goBackAction =()=>{
        console.log('top戻るよ');
        window.scrollTo(0,50);
    };

    button.addEventListener('click', goBackAction,false);
});

