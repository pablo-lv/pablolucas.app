@if(Session::has('success'))
    <script>
        swal("{{ session('success') }}", "Responderé tan pronto sea posible")
    </script>
@endif