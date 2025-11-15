@extends(Session::has('user_id') ? 'frontend.layouts.app2' : 'frontend.layouts.app')

@section('page.title', ' ')

@section('page.description', ' ')

@section('page.type', 'website')

@section('page.content')

    <section class="inner_page_banner">
        <img src="/assets/frontend/images/innwe_imagebanner.png" class="d-block w-100" alt="...">
    </section>

    <main class="main">


        <section class="404">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container_404 d-flex align-items-center justify-content-center flex-column pb-md-5">
                            <h1>405</h1>
                            <h4>Method Not Allowed!</h4>
                            <p>This route must be accessed via POST. You used an invalid method.</p>
                            <div class="buttonclass mt-4 ">
                                <a href="{{ url('/') }}">Go To
                                    Website <i class="las la-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
