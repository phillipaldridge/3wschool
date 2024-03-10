<script>
    $(function() {
    $(".toggle").on('click', function(event){
        var idb = $(this).attr('id');
        var id = $(this).data('id');
        var controller = $(this).data('controller');
        var target = $(this).data('target');
        $.get( '<?= $this->Url->build('/') ?>'+controller+'/toggle?target='+target+'&id='+id, function(d) {       
        d = JSON.parse(d);
        if( d===0){
            $('#'+idb).removeClass('btn-yes');
            $('#'+idb).addClass('btn-no');
            $('#'+idb).html('No');
        }else{
            $('#'+idb).removeClass('btn-no');
            $('#'+idb).addClass('btn-yes');   
            $('#'+idb).html('Yes');
        }
        })
        .fail(function() {
            console.log( "error" );
        });
    });
}); 
</script>