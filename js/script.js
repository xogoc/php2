const QTY = 5;
let loading = false;
$(function() {
    $('#gallery').on('click', '#ajax-more', (event)=>{
        event.preventDefault();
        if (!loading) {
            loading = true;
            let start = $('.thumbnail').length;
            $('#more-gif').show();
            $('#more-text').hide();

            fetch('/gallery/get/'+start+'/'+QTY)
                .then(response => response.text())
                .then(tns => {
                    $('#ajax-more').remove();
                    $('#gallery').append(tns);
                    loading = false;
                });
        }
    });
});