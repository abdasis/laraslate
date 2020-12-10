<div>
    <div class="container">
        <form wire:submit.prevent='translate'>
            <div class="row justify-content-center">
                <div class="col align-middle mt-5">
                    <div class="card card-stacked">
                        <div class="card-body">
                            <h3 class="card-title">Bahasa Indonesia</h3>
                            <textarea class="form-control" wire:model="indonesia" id="" rows="9"></textarea>
                            @error('indonesia')
                                <small class="text-danger">Harus memasukan text bahasa indonesia dulu</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col align-middle mt-5">
                    <div class="card card-stacked">
                        <div class="card-body">
                            <h3 class="card-title">Bahasa Inggris</h3>
                            <textarea class="form-control" wire:model="en" id="" rows="9"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-3 btn-square btn-block w-100 btn-lg">Translate</button>

        </form>
    </div>
</div>
