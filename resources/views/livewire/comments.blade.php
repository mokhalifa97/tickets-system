
<div class="px-5">
    <div class="row">
        <div class="col mt-5">
            <h1 class="text-3xl">Comments</h1>

                <form class="my-4 flex" wire:submit.prevent='addComment' >
                        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind."  wire:model.lazy='newComment'>
                    <div class="py-2">
                        <button class="p-2 bg-blue-500 w-20 rounded shadow text-white" type="submit">Add</button>
                    </div>
                </form>
                
                @foreach ($comments as $item)
                <div class="rounded border shadow p-3 my-2">
                    <div class="flex justify-between my-2">
                        <div class="flex">
                            <p class="font-bold text-lg">{{$item['name']}}</p>
                            <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$item['time']}}</p>
                        </div>
                    </div>
                    <p class="text-gray-800">{{$item['body']}}</p>
            </div>
            @endforeach
        </div>
    </div>        


