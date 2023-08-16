<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Top Up Saldo') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('top-up.process') }}">
                        @csrf

                        <div class="form-group">
                            <label for="amount">{{ __('Jumlah Top Up (IDR)') }}</label>
                            <input id="amount" type="number" class="form-control" name="amount" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Proses Top Up') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
