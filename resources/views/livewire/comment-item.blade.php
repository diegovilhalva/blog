<div>
    <div class="flex mb-4 gap-3">
        <div class="w-16 h-16 flex items-center justify-center bg-gray-200 rounded-full">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>    
        </div>
        <div>
            <div>
                <a href="#" class="font-semibold text-indigo-600">{{$comment->user->name}}</a>
                - <span class="text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
            @if ($editing)
                <livewire:comment-create :comment-model="$comment"/>
            @else
            <div class="text-gray-700">
            {{ $comment->comment }}
            </div>
            @endif
            
            <div>
                <a wire:click.prevent="startReply" href="#" class="text-sm text-indigo-600 mr-3">Responder</a>
                @if (\Illuminate\Support\Facades\Auth::id() == $comment->user_id)
                <a href="#" wire:click.prevent="startCommentEdit" class="text-sm text-blue-600 mr-3">Editar</a>
                <a href="#" wire:click.prevent="deleteComment" class="text-sm text-red-600">Deletar</a>
                @endif
               
            </div>
            @if ($replying )
            <livewire:comment-create :post="$comment->post" :parent-comment="$comment"/>
            @endif
            <div class="mt-4">
                @if ($comment->comments->count())
                    
                    @foreach ($comment->comments as  $childComment)
                        < livewire:comment-item :comment="$childComment"  wire:key="comment-{{$childComment->id}}" />
                    @endforeach
                @endif
            </div>
        </div>
        <div>
           
        </div>
       
    </div>
    
</div>
