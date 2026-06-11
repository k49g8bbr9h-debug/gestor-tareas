@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h2>Mis Tareas</h2>
        <a href="{{ route('tareas.create') }}" class="btn btn-primary">+ Nueva Tarea</a>
    </div>

    @if($tareas->isEmpty())
        <p style="text-align: center; color: #888; margin-top: 40px;">No tienes tareas aún. ¡Crea una!</p>
    @else
        <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.1);">
            <thead style="background: #2d6a4f; color: white;">
                <tr>
                    <th style="padding: 12px 16px; text-align: left;">Título</th>
                    <th style="padding: 12px 16px; text-align: left;">Prioridad</th>
                    <th style="padding: 12px 16px; text-align: left;">Fecha límite</th>
                    <th style="padding: 12px 16px; text-align: left;">Estado</th>
                    <th style="padding: 12px 16px; text-align: left;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tareas as $tarea)
                    <tr style="border-bottom: 1px solid #eee; {{ $tarea->completada ? 'opacity: 0.5;' : '' }}">
                        <td style="padding: 12px 16px;">
                            @if($tarea->completada)
                                <span style="text-decoration: line-through;">{{ $tarea->titulo }}</span>
                            @else
                                {{ $tarea->titulo }}
                            @endif
                        </td>
                        <td style="padding: 12px 16px;">
                            @if($tarea->prioridad === 'alta')
                                <span style="background: #c0392b; color: white; padding: 3px 10px; border-radius: 12px; font-size: 12px;">Alta</span>
                            @elseif($tarea->prioridad === 'media')
                                <span style="background: #f0a500; color: white; padding: 3px 10px; border-radius: 12px; font-size: 12px;">Media</span>
                            @else
                                <span style="background: #2d6a4f; color: white; padding: 3px 10px; border-radius: 12px; font-size: 12px;">Baja</span>
                            @endif
                        </td>
                        <td style="padding: 12px 16px;">
                            {{ $tarea->fecha_limite ? $tarea->fecha_limite->format('d/m/Y') : '—' }}
                        </td>
                        <td style="padding: 12px 16px;">
                            {{ $tarea->completada ? '✓ Completada' : 'Pendiente' }}
                        </td>
                        <td style="padding: 12px 16px; display: flex; gap: 8px; flex-wrap: wrap;">
                            {{-- Botón toggle --}}
                            <form action="{{ route('tareas.toggle', $tarea->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-secondary" style="font-size: 12px;">
                                    {{ $tarea->completada ? 'Reabrir' : 'Completar' }}
                                </button>
                            </form>

                            {{-- Botón editar --}}
                            <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-warning" style="font-size: 12px;">Editar</a>

                            {{-- Botón eliminar --}}
                            <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST" style="display:inline;"
                                  onsubmit="return confirm('¿Seguro que quieres eliminar esta tarea?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="font-size: 12px;">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection