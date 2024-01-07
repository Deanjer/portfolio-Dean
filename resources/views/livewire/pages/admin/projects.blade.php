<div>
    <!-- resources/views/livewire/pages/admin/projects.blade.php -->

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
                <form wire:submit.prevent="saveProject">
                    <div class="form-group">
                        <x-label for="title" :value="__('Title')" />
                        <x-input id="title" type="text" name="title" :value="old('title')" wire:model.defer='title' />
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="short">Inleiding</label>
                        <textarea class="form-control" id="short" name="short" :value="old('short')" wire:model.defer='short' rows="3"></textarea>
                        @error('short') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control" id="text" name="text" :value="old('text')" wire:model.defer='text' rows="3"></textarea>
                        @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">File input</label>
                        <x-input id="image" type="file" name="image" :value="old('image')" wire:model.defer='image' />
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">

                        <button wire:click="saveProject" class="btn btn-primary">Save Project</button>
                        <!-- <button type="submit" class="btn btn-primary">Save Project</button>  -->
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $().tooltip();
    </script>