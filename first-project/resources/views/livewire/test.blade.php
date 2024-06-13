<div>
    <input wire:model="text" class="text-control border">

    <button id="btn" class="btn btn-primary mt-3 border rounded text-gray-500 btn-green">Random Text</button>

    @script
        <script>
            // console.log($wire);

            // read values
            console.log($wire.text);
            console.log($wire.job);
            console.log($wire.title);

            //update properties
            document.getElementById('btn').addEventListener('click' , function(){
                // $wire.text = "hello All";
                // $wire.set('text' , 'second One' , false);
                // $wire.rendonText();

                $wire.testApi('alex').then(function(res){
                    console.log(res);
                });
            })
        </script>
    @endscript
</div>


