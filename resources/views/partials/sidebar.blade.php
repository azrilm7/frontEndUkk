<div class="sidebar">
    <h5 class="text-white mb-4 text-center fw-bold my-2">ToDoList</h5>
  
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
      <i class="bi bi-house-door-fill me-2"></i> Home
    </a>
  
    <a href="{{ route('cleared') }}" class="{{ request()->routeIs('cleared') ? 'active' : '' }}">
      <i class="bi bi-clipboard-check-fill me-2"></i> Cleared Tasks
    </a>
  </div>
  