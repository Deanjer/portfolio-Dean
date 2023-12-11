<div>
    @include('livewire.utilities.alerts')
    <x-slot name="header">
        <div class="section-header">
            <h1>Projects Management</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Projects</h4>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <x-label for="title" :value="__('Title')" />
                    <x-input id="title" type="text" name="title" :value="old('title')" wire:model='title' />
                </div>
                <div class="form-group">
                    <label for="short">Inleiding</label>
                    <textarea class="form-control" id="short" name="short" :value="old('short')" wire:model='short' rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" id="text" name="text" :value="old('text')" wire:model='text' rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">file input</label>
                    <input type="file" class="form-control-file border-0" id="image">
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    $().tooltip();
</script>