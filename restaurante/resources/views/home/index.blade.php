
@extends('layouts.app')

@section('content')


    <div class="container">
        <h1 class="text-center mb-5 h1" data-aos="fade-up" data-aos-duration="1000">Menú del Restaurante</h1>

        <!-- Filtro por tipo de platillo -->
        <form id="filter-form" class="mb-4">
            <div class="input-group">
                <select id="dish-type" class="form-select" aria-label="Seleccionar tipo de platillo">
                    <option value="">Seleccione un tipo de platillo</option>
                    <option value="postre">Postre</option>
                    <option value="carne">Carne</option>
                    <option value="pasta">Pasta</option>
                    <option value="sushi">Sushi</option>
                    <option value="marisco">Marisco</option>
                    <option value="ensalada">Ensalada</option>
                </select>
            </div>
        </form>

        <!-- Menú de platillos -->
        <div id="menu" class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($dishes as $dish)
                <div class="col dish-item" data-type="{{ $dish->type }}">
                    <div class="card shadow-sm border-light rounded">
                        <img src="{{ $dish->image }}" alt="{{ $dish->name }}" class="card-img-top rounded-top" style="object-fit: cover; height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title text-center text-truncate" style="font-size: 1.25rem;">{{ $dish->name }}</h5>
                            <p class="card-text text-muted" style="font-size: 0.875rem;">{{ $dish->description }}</p>
                            <p class="card-text text-center mt-3">
                                <strong style="font-size: 1.125rem; color: #D9534F;">${{ number_format($dish->price, 2) }}</strong>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>

    <script>
        // Filtrar los platillos según el tipo seleccionado
        document.getElementById('dish-type').addEventListener('change', function() {
            let selectedType = this.value;
            let dishes = document.querySelectorAll('.dish-item');

            dishes.forEach(function(dish) {
                // Mostrar solo los platillos que coinciden con el tipo seleccionado
                if (selectedType === "" || dish.getAttribute('data-type') === selectedType) {
                    dish.style.display = 'block';
                } else {
                    dish.style.display = 'none';
                }
            });
        });
    </script>
@endsection
