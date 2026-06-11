@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h2>Editar Tarea</h2>
        <a href="{{ route('tareas.index') }}" class="btn btn-secondary">← Volver</a>
    </div>

    <div style="background: white; padding: 32px; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.1);">
        <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 6px; font-weight: bold;">Título *</label>
                <input
                    type="text"
                    name="titulo"
                    value="{{ old('titulo', $tarea->titulo) }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;"
                    placeholder="Ej: Comprar víveres"
                >
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 6px; font-weight: bold;">Descripción</label>
                <textarea
                    name="descripcion"
                    rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;"
                    placeholder="Descripción opcional..."
                >{{ old('descripcion', $tarea->descripcion) }}</textarea>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 6px; font-weight: bold;">Prioridad *</label>
                <select name="prioridad" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
                    <option value="baja" {{ old('prioridad', $tarea->prioridad) === 'baja' ? 'selected' : '' }}>Baja</option>
                    <option value="media" {{ old('prioridad', $tarea->prioridad) === 'media' ? 'selected' : '' }}>Media</option>
                    <option value="alta" {{ old('prioridad', $tarea->prioridad) === 'alta' ? 'selected' : '' }}>Alta</option>
                </select>
            </div>

            <div style="margin-bottom: 28px;">
                <label style="display: block; margin-bottom: 6px; font-weight: bold;">Fecha límite</label>
                <input
                    type="date"
                    name="fecha_limite"
                    value="{{ old('fecha_limite', $tarea->fecha_limite ? $tarea->fecha_limite->format('Y-m-d') : '') }}"
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;"
                >
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px; font-size: 16px;">
                Guardar Cambios
            </button>
        </form>
    </div>
@endsection