@extends('layout.login') 

@section('content')
<body>
	<!-- main -->
	<div class="main-agileits">
        <h1>Selamat Datang</h1>
        @if(!Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
        @endif
		<div class="mainw3-agileinfo form">
			<div id="login">
                <form action="{{ url('/loginPost') }}" method="post">
                    {{ csrf_field() }}
					<div class="field-wrap">
						<label> Username<span class="req">*</span> </label>
						<input name="username"type="text"required autocomplete="off"/>
					</div> 
					<div class="field-wrap">
						<label>Password<span class="req">*</span> </label>
						<input name="password"type="password"required autocomplete="off"/>
					</div> 
					<button class="button button-block">Log In</button> 
				</form> 
			</div>
         
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<!-- //copyright --> 
	<script>
	$('.form').find('input, textarea').on('keyup blur focus', function (e) { 
	  var $this = $(this),
		  label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
			  label.removeClass('active highlight');
			} else {
			  label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight'); 
				} else {
				label.removeClass('highlight');   
				}   
		} else if (e.type === 'focus') {
		  
		  if( $this.val() === '' ) {
				label.removeClass('highlight'); 
				} 
		  else if( $this.val() !== '' ) {
				label.addClass('highlight');
				}
		}
 
	}); 
	</script>
</body>
@endsection



