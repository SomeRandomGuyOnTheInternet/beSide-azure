<!-- resources/views/components/taskcard.blade.php -->
<div class="card" style="width: 18rem;">
    <img src="{{ $image }}" class="card-img-top" alt="{{ $title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
        <p class="card-text"><small class="text-muted">Deadline: {{ $deadline }}</small></p>
    </div>
</div>
