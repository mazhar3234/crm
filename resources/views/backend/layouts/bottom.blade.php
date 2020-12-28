	<div id="message"></div>
	<!-- modal load section -->
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <!-- main js -->
    {{ Html::script('backend/js/ems_main.js') }}
    <!-- custom js -->
    {{ Html::script('backend/js/custom.min.js') }}
    <!-- toastr js -->
    {{ Html::script('backend/js/toastr.min.js') }}
	@toastr_render
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFD1YqGRU5QpB-OEUPWRR37mTF0STh97k&libraries=places&callback=initAutocomplete" async defer></script>
</body>

</html>