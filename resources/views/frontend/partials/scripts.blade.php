<script src="{{asset("js/jquery-3.4.1.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function addToCart(product_id){
        var url = "{{url('/')}}";
        $.post( url+"/api/carts/store",
            {
                product_id: product_id
            })
            .done(function( data ) {
                data = JSON.parse(data);
                if(data.status == 'success'){
                    // toast
                    alertify.set('notifier','position', 'top-center');
                    alertify.success('Successfully Applied!! Total Applied Jobs: '+data.totalItems+ ' To Checkout,<a href="#">Go to Applied Job</a>');
                    $("#totalItems").html(data.totalItems);
                }
            });
    }
    </script>