<div class="space-y-4">
    @forelse($comments as $comment)
        <x-comment :comment="$comment" />
    @empty
        <p class="text-gray-600">No comments yet. Be the first to comment!</p>
    @endforelse
</div>
