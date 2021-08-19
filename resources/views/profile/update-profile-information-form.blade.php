<div>

    <form wire:submit.prevent="updateProfileInformation">

        <ul>
            <li>
                <div class="icon">
                    <i class="iw-18 ih-18" data-feather="user"></i>
                </div>
                <div class="details">
                    <input type="text" class="form-control" wire:model.defer="state.name">
                </div>
            </li>

            <li>
                <div class="icon">
                    <i class="iw-18 ih-18" data-feather="mail"></i>
                </div>
                <div class="details">
                    <input type="text" class="form-control" wire:model.defer="state.email">
                </div>
            </li>

            <li class="d-flex justify-content-end">
                <button type="submit" class="btn btn-solid">Save</button>
            </li>
        </ul>

    </form>

</div>
