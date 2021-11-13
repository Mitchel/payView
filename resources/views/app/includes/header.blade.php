<header class="mb-5">
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{ route('app.dashboard') }}" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    payView
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
<<<<<<< Updated upstream
                        <a href="{{ route('app.dashboard') }}" class="nav-link active">
=======
                        <a href="{{ route('app.dashboard') }}" class="nav-link {{ checkActive('app.dashboard') }}">
>>>>>>> Stashed changes
                            <i class="far fa-home fa-fw d-block mx-auto mb-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
<<<<<<< Updated upstream
                        <a href="{{ route('app.transactions.overview') }}" class="nav-link">
=======
                        <a href="{{ route('app.transactions.overview') }}" class="nav-link {{ checkActive('app.transactions.overview') }}">
>>>>>>> Stashed changes
                            <i class="far fa-analytics fa-fw d-block mx-auto mb-2"></i>
                            Transactions
                        </a>
                    </li>
                    <li>
<<<<<<< Updated upstream
                        <a href="{{ route('app.settings.overview') }}" class="nav-link">
=======
                        <a href="{{ route('app.settings.overview') }}" class="nav-link {{ checkActive('app.settings.overview') }}">
>>>>>>> Stashed changes
                            <i class="far fa-cog fa-fw d-block mx-auto mb-2"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
