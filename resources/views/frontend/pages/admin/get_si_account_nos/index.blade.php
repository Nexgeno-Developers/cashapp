@extends(Session::has('user_id') ? 'frontend.layouts.app' : 'frontend.layouts.app')

@section('page.title', 'Motiwala')

@section('page.description', 'Motiwala')

@section('page.type', 'website')

@section('page.content')

<!-- -------------------- Terms  start ---------------- -->

<section class="inner_page_banner">
     <img src="/assets/frontend/images/innwe_imagebanner.png" class="d-block w-100" alt="...">
</section>


<!-- -------------------- privacy content  start ---------------- -->  

<main class="main">
	<section class="pt-5 inner_sectionpadd">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="title_heading text-center black_color pb-0 heading_font">Standing Instruction Creation</h4>
                </div>

				<div class="col-md-12">
				    <div class="md-title text-center">
						<h4>
							Coming soon ....
						</h4>
					</div>
                </div>

		  </div>
		</div>
	</section>
</main>

    <!-- -------------------- privacy content  end   ---------------- -->

    @endsection
