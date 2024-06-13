{{-- <div>    
        <select wire:model="companies" multiple id="testdropdown" class="w-full">
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="HTC">HTC</option>
            <option value="One Plus">One Plus</option>
            <option value="Nokia">Nokia</option>
        </select>

    @script()
    <script>
        $(document).ready(function() {
            $('#testdropdown').select2();
            
            $('#testdropdown').on('change' , function(){
                let data =  $(this).val();
                console.log(data);
                $wire.set('companies' , data)
            });

            
        });
    </script>
    @endscript
</div> --}}



<div>
    <div wire:ignore>
        <select wire:model="companies" multiple id="testdropdown" class="w-full">
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="HTC">HTC</option>
            <option value="One Plus">One Plus</option>
            <option value="Nokia">Nokia</option>
        </select>
    </div>

    <button wire:click="save">Save</button>

    @script()
        <script>
            $(document).ready(function() {
                $('#testdropdown').select2();
                $('#testdropdown').on('change', function() {
                    let data = $(this).val();
                    console.log(data);
                    // $wire.set('companies', data, false);
                    // $wire.companies = data;
                    @this.companies = data;
                });
            });
        </script>
    @endscript
</div>