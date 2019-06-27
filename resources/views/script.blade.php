<script>
    $('#btn-rates').click(function () {
        $('#btn-rating').val("rates");
        $('#clearForm').trigger("reset");
        $('#rateModal').modal('show');
    });

    $('body').on('click', '.open-modal', function (e) {
        e.preventDefault();
        var page = $(this).attr('href');  
            $('#rate-list').load(page); 
        var rating_id = $(this).val();
        $.get('ratings/' + rating_id, function (data) {
            $('#rating_id').val(data.id);
            $('#rating').val(data.rating);
            $('#desc').val(data.description);
            $('#rateModal').modal('show');
        })
    });
    $("#btn-rating").click(function (e) {
        e.preventDefault();
        var state = $('#btn-rating').val();
        var rating_id = $('#rating_id').val();
        
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            url: '/bew',
            data: {
                rating: $('#rating').val(),
                description: $('#desc').val(),
            },
            success: function(data){
                $('#ratings-list').html(data);
                $('#clearForm').trigger("reset");
                $('#rateModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
</script>